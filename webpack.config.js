const path = require('path');
const merge = require('webpack-merge');
const webpack = require('webpack');
const NpmInstallPlugin = require('npm-install-webpack-plugin');
const CleanPlugin = require('clean-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const cssnext = require('postcss-cssnext');
const atimport = require('postcss-import');
const svg = require('postcss-inline-svg');
const svgo = require('postcss-svgo');
const pkg = require('./package.json');
const TARGET = process.env.npm_lifecycle_event;
const PATHS = {
    app: path.join(__dirname, 'app'),
    pub: '/assets/',
    build: path.join(__dirname, '/assets/'),
    style: path.join(__dirname, 'app/styles/main.css'),
    test: path.join(__dirname, 'tests'),
    url: 'http://' + pkg.name + '.dev',
    produrl: 'http://dev.lamas.us',
    fonts: path.join(__dirname, '/assets/fonts/'),
};

process.env.BABEL_ENV = TARGET;

const common = {
    entry: {
        app: PATHS.app
    },
    resolve: {
        extensions: ['', '.js', '.jsx']
    },
    output: {
        path: PATHS.pub,
        filename: '[name].js'
    },
    module: {
        loaders: [
            {
                test: /\.jsx?$/,
                loaders: [
                    'babel?cacheDirectory'
                ],
                include: PATHS.app
            },
            {
                test: /\.css$/,
                loader: ExtractTextPlugin.extract('style', 'css!postcss'),
                include: PATHS.app
            },
            {
                test: /fonts\/.*\.(woff|woff2|eot|ttf|svg)$/,
                loader: 'file-loader?name=[name]-[hash].[ext]',
            }
        ]
    },
    postcss: function () {
        return [svgo, atimport, svg, cssnext];
    },
    plugins: [
        new ExtractTextPlugin('[name].css')
    ]
};

if(TARGET === 'start' || !TARGET) {
    module.exports = merge(common, {
        entry: {
            style: PATHS.style
        },
        output: {
            publicPath: PATHS.url + PATHS.pub,
        },
        devtool: 'eval-source-map',
        devServer: {
            contentBase: PATHS.url,
            historyApiFallback: true,
            hot: true,
            inline: true,
            progress: true,

            // display only errors to reduce the amount of output
            // stats: 'errors-only',

            // parse host and port from env so this is easy
            // to customize
            cache: false,
            host: process.env.HOST,
            port: process.env.PORT,
            headers: {"Access-Control-Allow-Origin": "*"},
            proxy: {
                "*": {
                    target: PATHS.url,
                    secure: false
                }
            },

        },
        plugins: [
            new webpack.HotModuleReplacementPlugin(),
            new NpmInstallPlugin({
                save: true // --save
            })
        ]
    });
}

if(TARGET === 'build' || TARGET === 'stats') {
    module.exports = merge(common, {
        entry: {
            // vendor: Object.keys(pkg.dependencies).filter(function(v) {
            //     return v !== 'alt-utils';
            // }),
            style: PATHS.style
        },
        output: {
            path: PATHS.build,
            // Output using entry name
            publicPath: PATHS.produrl + PATHS.pub,
            filename: '[name].js',
            chunkFilename: '[chunkhash].js'
        },
        plugins: [
            new CleanPlugin([PATHS.build]),
            // Setting DefinePlugin affects React library size!
            new webpack.DefinePlugin({
                'process.env.NODE_ENV': '"production"'
            }),
            new webpack.optimize.UglifyJsPlugin({
                compress: {
                    warnings: false
                }
            })
        ]
    });
}

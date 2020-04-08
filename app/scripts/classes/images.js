import imagesLoaded from 'imagesloaded';

export class Images {
    constructor() {
        const imgLoad = imagesLoaded( document.getElementById('js-main'));
        imgLoad.on( 'progress', function( instance, image ) {
            var result = image.isLoaded ? 'loaded' : 'broken';
        });
        imgLoad.on( 'always', function() {
            document.body.classList.remove('is-loading');
        });
    }
}


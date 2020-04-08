export class Logo {

    constructor() {
        this.logo = document.getElementById('js-logo');
        this.letters = document.querySelectorAll('.js-logo-letter');
    }

    getRandomPosition() {
        let min = 5;
        let max = 85;

        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    getRandomColor() {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++ ) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    centerLetters() {
        this.logo.classList.remove('is-positioned');
    }

    positionLetters() {
        let newColor = this.getRandomColor();
        this.logo.classList.add('is-positioned');
        this.logo.style.color = newColor;
        this.generateLinkCss(newColor);
        [].forEach.call(this.letters, (el) => { this.setLetterPosition(el)});

    }

    unpositionLetters() {
        [].forEach.call(this.letters, (el) => { this.removeLetterPosition(el)});
        this.centerLetters();
    }

    removeLetterPosition(el) {
        el.style.top = '50%';
        el.style.left = '50%';
    }

    setLetterPosition(el) {
        el.style.top = this.getRandomPosition() + '%';
        el.style.left = this.getRandomPosition() + '%';
    }

    generateLinkCss(color) {
        var css = `
                .slideshow-nav__item.is-active,
                .rand-color,
                .rand-color-on-hover:hover,
                .link--menu:hover,
                .wordmark--color { 
                    color: ${color}; 
                }
                .rand-bg,
                .slideshow-nav__item.is-active:before,
                .rand-bg-on-hover:hover,
                .swiper-pagination-progress .swiper-pagination-progressbar,
                p > a:before,
                .link--secondary:before,
                .link--inline:before,
                .link--primary:before { 
                    background: ${color}; 
                }
            `,
            head = document.head || document.getElementsByTagName('head')[0],
            style = document.createElement('style');
        style.type = 'text/css';
        if (style.styleSheet){
            style.styleSheet.cssText = css;
        } else {
            style.appendChild(document.createTextNode(css));
        }

        head.appendChild(style);
    }
}

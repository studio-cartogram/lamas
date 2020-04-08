import {Slideshow} from './scripts/classes/slideshow.js';
import {List} from './scripts/classes/list.js';
import {Logo} from './scripts/classes/logo.js';
import {Header} from './scripts/classes/header.js';
import {Instagram} from './scripts/classes/instagram.js';
import {Comments} from './scripts/classes/comments.js';
import {Images} from './scripts/classes/images.js';
import {Page} from './scripts/framework/page.js';
import {ApplicationBase} from './scripts/framework/application-base.js';
import Barba from 'barba.js';

export class App extends ApplicationBase {

    constructor() {
        super('Lamas');
        this.init();
        let logo = new Logo();
        let page = new Page();
        let main = document.getElementById('js-main');
        logo.positionLetters();
        page.removeFade();
        Barba.Dispatcher.on('initStateChange', (currentStatus) => {
            logo.unpositionLetters();
        });
        Barba.Dispatcher.on('transitionCompleted', () => {
            this.init();
            page.removeFade();
            logo.positionLetters();
        });
    }

    init() {
        let slideshows = new Slideshow();
        let list = new List();
        let header = new Header();
        let images = new Images();
        let comments = new Comments();
        let instagram = new Instagram({
            el: document.getElementById('instafeed'),
            userId: 3137972508,
            token: '3137972508.437a3ed.3369c380a5d345d0acde0fb512009790',
            clientId: '437a3edcbfd34fba9064c91a0d3af796'
        });
    }
}

export let application = new App();

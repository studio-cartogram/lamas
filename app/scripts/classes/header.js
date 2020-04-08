import Headroom from 'headroom.js';

export class Header {
    constructor() {
        const header = document.querySelector('.js-header');
        var headroom  = new Headroom(header, {
        });

        headroom.init();
    }
}

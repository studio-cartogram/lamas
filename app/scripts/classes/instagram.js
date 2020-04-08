import Instafeed from 'instafeed.js';

export class Instagram {
    constructor(options) {
        this.token = options.token;
        this.id = options.userId;
        this.clientId = options.clientId;
        this.el = options.el;
        this.init();
        if(options.el) {
            this.hash = options.el.getAttribute('data-hashtag');
        }
    }

    init() {

        var count = 0;
        var feed = new Instafeed({
            get: 'user',
            limit: 3,
            accessToken: this.token,
            clientId: this.clientId,
            userId: this.id,
            resolution: 'standard_resolution',
            template: '<a class="instagram bg instagram--{{orientation}}" href="{{link}}" target="_blank" style="background-image:url({{image}})"></a>',
            filter: (image) => {
                console.log(image);
                return (this.hash) ? image.tags.indexOf(this.hash) >= 0 && count++ <= 2 : true;
            }

        });

        if(this.el) {
            feed.run();
        }
    }
}


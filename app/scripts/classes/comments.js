require('waypoints/lib/noframework.waypoints.js');

export class Comments {
    constructor() {

        this.elements = document.querySelectorAll('.single figure');

        if(this.elements.length > 0) {
            [].forEach.call(this.elements, (el) => { this.setWaypoints(el)});
        };

    }

    setWaypoints(el) {
        var enterWaypoint = new Waypoint({
            element: el,
            handler: function(direction) {
                if(direction === 'down') {
                    this.element.classList.add('is-fixed');
                } else {
                    this.element.classList.remove('is-fixed');
                }
            },
            offset: '100%'
        });
        var leaveWaypoint = new Waypoint({
            element: el,
            handler: function(direction) {
                if(direction === 'down') {
                    this.element.classList.remove('is-fixed');
                } else {
                    this.element.classList.add('is-fixed');
                }
            },
            offset: function() {
                return -this.element.clientHeight
            }
        });

    }
}


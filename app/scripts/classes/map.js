export class GoogleMap {

    constructor(el) {
        if(!el) {
            return false;
        }
        // this.icon = require('./marker.svg'),
        this.el = el;
        this.markers = el.querySelectorAll('.marker');
        this.args = {
            zoom: 14,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            rotateControl: false,
            fullscreenControl: false,
            scrollwheel: false,
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        };
        this.addMarkersToMap(this.buildMap());
    }

    addMarkersToMap(map) {
        map.markers = [];
        this.addMarker(this.markers[0], map);
        this.centerMap(map);
    }

    addMarker(marker, map) {
        var latlng = new google.maps.LatLng( marker.getAttribute('data-lat'), marker.getAttribute('data-lng') );

        var marker = new google.maps.Marker({
            icon: this.icon,
            position: latlng,
            map: map
        });

        map.markers.push(marker);

    }

    centerMap(map) {
        var bounds = new google.maps.LatLngBounds();

        map.markers.forEach(function (marker, index, array) {
            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
            bounds.extend( latlng );
        });

        if( map.markers.length == 1 ) {
            map.setCenter( bounds.getCenter() );
        } else {
            map.fitBounds( bounds );
        }

    }

    buildMap() {
        return new google.maps.Map( this.el, this.args);
    }

}



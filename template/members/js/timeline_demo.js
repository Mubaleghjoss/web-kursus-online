var handleGoogleMapSetting = function () {
    "use strict";

    function n() {
        var n = {
            zoom            : 6,
            center          : new google.maps.LatLng(-33.397, 145.644),
            mapTypeId       : google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        };
        e = new google.maps.Map(document.getElementById("google-map"), n);
        e.setOptions({
            styles: t
        })
    }

    var e;
    var t = [ {
        featureType: "all",
        elementType: "all",
        stylers    : [ {
            invert_lightness: true
        }, {
            saturation: 10
        }, {
            lightness: 10
        }, {
            gamma: .8
        }, {
            hue: "#293036"
        } ]
    }, {
        featureType: "water",
        stylers    : [ {
            visibility: "on"
        }, {
            color: "#293036"
        } ]
    } ];
    google.maps.event.addDomListener(window, "load", n)
};
var Timeline = function () {
    "use strict";
    return {
        init: function () {
            handleGoogleMapSetting()
        }
    }
}()
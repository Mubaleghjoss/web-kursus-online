var handleGoogleMapSetting = function () {
    "use strict";

    function t() {
        var t = {
            zoom            : 6,
            center          : new google.maps.LatLng(-33.397, 145.644),
            mapTypeId       : google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        };
        e = new google.maps.Map(document.getElementById("google-map-default"), t)
    }

    var e;
    google.maps.event.addDomListener(window, "load", t);
    $(window).resize(function () {
        google.maps.event.trigger(e, "resize")
    });
    var n = [];
    var r = [ {
        stylers: [ {
            visibility: "off"
        } ]
    }, {
        featureType: "road",
        stylers    : [ {
            visibility: "on"
        }, {
            color: "#ffffff"
        } ]
    }, {
        featureType: "road.arterial",
        stylers    : [ {
            visibility: "on"
        }, {
            color: "#fee379"
        } ]
    }, {
        featureType: "road.highway",
        stylers    : [ {
            visibility: "on"
        }, {
            color: "#fee379"
        } ]
    }, {
        featureType: "landscape",
        stylers    : [ {
            visibility: "on"
        }, {
            color: "#f3f4f4"
        } ]
    }, {
        featureType: "water",
        stylers    : [ {
            visibility: "on"
        }, {
            color: "#7fc8ed"
        } ]
    }, {}, {
        featureType: "road",
        elementType: "labels",
        stylers    : [ {
            visibility: "off"
        } ]
    }, {
        featureType: "poi.park",
        elementType: "geometry.fill",
        stylers    : [ {
            visibility: "on"
        }, {
            color: "#83cead"
        } ]
    }, {
        elementType: "labels",
        stylers    : [ {
            visibility: "off"
        } ]
    }, {
        featureType: "landscape.man_made",
        elementType: "geometry",
        stylers    : [ {
            weight: .9
        }, {
            visibility: "off"
        } ]
    } ];
    var i = [ {
        featureType: "landscape.natural",
        elementType: "geometry.fill",
        stylers    : [ {
            visibility: "on"
        }, {
            color: "#e0efef"
        } ]
    }, {
        featureType: "poi",
        elementType: "geometry.fill",
        stylers    : [ {
            visibility: "on"
        }, {
            hue: "#1900ff"
        }, {
            color: "#c0e8e8"
        } ]
    }, {
        featureType: "landscape.man_made",
        elementType: "geometry.fill"
    }, {
        featureType: "road",
        elementType: "geometry",
        stylers    : [ {
            lightness: 100
        }, {
            visibility: "simplified"
        } ]
    }, {
        featureType: "road",
        elementType: "labels",
        stylers    : [ {
            visibility: "off"
        } ]
    }, {
        featureType: "water",
        stylers    : [ {
            color: "#7dcdcd"
        } ]
    }, {
        featureType: "transit.line",
        elementType: "geometry",
        stylers    : [ {
            visibility: "on"
        }, {
            lightness: 700
        } ]
    } ];
    var s = [ {
        stylers: [ {
            hue: "#2c3e50"
        }, {
            saturation: 250
        } ]
    }, {
        featureType: "road",
        elementType: "geometry",
        stylers    : [ {
            lightness: 50
        }, {
            visibility: "simplified"
        } ]
    }, {
        featureType: "road",
        elementType: "labels",
        stylers    : [ {
            visibility: "off"
        } ]
    } ];
    var o = [ {
        featureType: "landscape",
        stylers    : [ {
            hue: "#FFAD00"
        }, {
            saturation: 50.2
        }, {
            lightness: -34.8
        }, {
            gamma: 1
        } ]
    }, {
        featureType: "road.highway",
        stylers    : [ {
            hue: "#FFAD00"
        }, {
            saturation: -19.8
        }, {
            lightness: -1.8
        }, {
            gamma: 1
        } ]
    }, {
        featureType: "road.arterial",
        stylers    : [ {
            hue: "#FFAD00"
        }, {
            saturation: 72.4
        }, {
            lightness: -32.6
        }, {
            gamma: 1
        } ]
    }, {
        featureType: "road.local",
        stylers    : [ {
            hue: "#FFAD00"
        }, {
            saturation: 74.4
        }, {
            lightness: -18
        }, {
            gamma: 1
        } ]
    }, {
        featureType: "water",
        stylers    : [ {
            hue: "#00FFA6"
        }, {
            saturation: -63.2
        }, {
            lightness: 38
        }, {
            gamma: 1
        } ]
    }, {
        featureType: "poi",
        stylers    : [ {
            hue: "#FFC300"
        }, {
            saturation: 54.2
        }, {
            lightness: -14.4
        }, {
            gamma: 1
        } ]
    } ];
    var u = [ {
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
    var a = [ {
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
            hue: "#000000"
        } ]
    }, {
        featureType: "water",
        stylers    : [ {
            visibility: "on"
        }, {
            color: "#293036"
        } ]
    } ];
    $("[data-map-theme]").click(function () {
        var t = $(this).attr("data-map-theme");
        var f = $(this).closest("li");
        var l = $(this).text();
        var c = false;
        $("#map-theme-selection li").not(f).removeClass("active");
        $("#map-theme-text").text(l);
        $(f).addClass("active");
        switch (t) {
            case "flat":
                e.setOptions({
                    styles: r
                });
                break;
            case "turquoise-water":
                e.setOptions({
                    styles: i
                });
                break;
            case "icy-blue":
                e.setOptions({
                    styles: s
                });
                break;
            case "cobalt":
                e.setOptions({
                    styles: u
                });
                c = true;
                break;
            case "old-dry-mud":
                e.setOptions({
                    styles: o
                });
                break;
            case "dark-red":
                e.setOptions({
                    styles: a
                });
                c = true;
                break;
            default:
                e.setOptions({
                    styles: n
                });
                break
        }
        if (c === true) {
            $("#content").addClass("content-inverse-mode")
        } else {
            $("#content").removeClass("content-inverse-mode")
        }
    })
};
var MapGoogle = function () {
    "use strict";
    return {
        init: function () {
            handleGoogleMapSetting()
        }
    }
}()
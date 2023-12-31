function calculateDivider() {
    var e = 4;
    if ($(this).width() <= 480) {
        e = 1
    } else if ($(this).width() <= 767) {
        e = 2
    } else if ($(this).width() <= 980) {
        e = 3
    }
    return e
}

var handleIsotopesGallery = function () {
    "use strict";
    $(window).load(function () {
        var e = $("#gallery");
        var t = calculateDivider();
        var n = $(e).width() - 20;
        var r = n / t;
        $(e).isotope({
            resizable: false,
            masonry  : {
                columnWidth: r
            }
        });
        $(window).smartresize(function () {
            var t = calculateDivider();
            var n = $(e).width() - 20;
            var r = n / t;
            $(e).isotope({
                masonry: {
                    columnWidth: r
                }
            })
        });
        var i = $("#options .gallery-option-set"),
            s = i.find("a");
        s.click(function () {
            var t = $(this);
            if (t.hasClass("active")) {
                return false
            }
            var n = t.parents(".gallery-option-set");
            n.find(".active").removeClass("active");
            t.addClass("active");
            var r = {};
            var i = n.attr("data-option-key");
            var s = t.attr("data-option-value");
            s = s === "false" ? false : s;
            r[ i ] = s;
            $(e).isotope(r);
            return false
        })
    })
};
var Gallery = function () {
    "use strict";
    return {
        init: function () {
            handleIsotopesGallery()
        }
    }
}()
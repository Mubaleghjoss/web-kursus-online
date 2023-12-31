var getMonthName = function (a) {
        var b = [];
        return b[ 0 ] = "January", b[ 1 ] = "February", b[ 2 ] = "March", b[ 3 ] = "April", b[ 4 ] = "May", b[ 5 ] = "Jun", b[ 6 ] = "July", b[ 7 ] = "August", b[ 8 ] = "September", b[ 9 ] = "October", b[ 10 ] = "November", b[ 11 ] = "December", b[ a ]
    },
    getDate = function (a) {
        var b = new Date(a),
            c = b.getDate(),
            d = b.getMonth() + 1,
            e = b.getFullYear();
        return c < 10 && (c = "0" + c), d < 10 && (d = "0" + d), b = e + "-" + d + "-" + c
    },
    handleVisitorsLineChart = function () {
        var a = "#0D888B",
            b = "#00ACAC",
            c = "#3273B1",
            d = "#348FE2",
            e = "rgba(0,0,0,0.6)",
            f = "rgba(255,255,255,0.4)";
        Morris.Line({
            element          : "visitors-line-chart",
            data             : [ {
                x: "2014-02-01",
                y: 60,
                z: 30
            }, {
                x: "2014-03-01",
                y: 70,
                z: 40
            }, {
                x: "2014-04-01",
                y: 40,
                z: 10
            }, {
                x: "2014-05-01",
                y: 100,
                z: 70
            }, {
                x: "2014-06-01",
                y: 40,
                z: 10
            }, {
                x: "2014-07-01",
                y: 80,
                z: 50
            }, {
                x: "2014-08-01",
                y: 70,
                z: 40
            } ],
            xkey             : "x",
            ykeys            : [ "y", "z" ],
            xLabelFormat     : function (a) {
                return a = getMonthName(a.getMonth()), a.toString()
            },
            labels           : [ "Page Views", "Unique Visitors" ],
            lineColors       : [ a, c ],
            pointFillColors  : [ b, d ],
            lineWidth        : "2px",
            pointStrokeColors: [ e, e ],
            resize           : !0,
            gridTextFamily   : "Open Sans",
            gridTextColor    : f,
            gridTextWeight   : "normal",
            gridTextSize     : "11px",
            gridLineColor    : "rgba(0,0,0,0.5)",
            hideHover        : "auto"
        })
    },
    handleVisitorsDonutChart = function () {
        var a = "#00acac",
            b = "#348fe2";
        Morris.Donut({
            element        : "visitors-donut-chart",
            data           : [ {
                label: "New Visitors",
                value: 900
            }, {
                label: "Return Visitors",
                value: 1200
            } ],
            colors         : [ a, b ],
            labelFamily    : "Open Sans",
            labelColor     : "rgba(255,255,255,0.4)",
            labelTextSize  : "12px",
            backgroundColor: "#242a30"
        })
    },
    handleVisitorsVectorMap = function () {
        0 !== $("#visitors-map").length && $("#visitors-map").vectorMap({
            map              : "world_merc_en",
            scaleColors      : [ "#e74c3c", "#0071a4" ],
            container        : $("#visitors-map"),
            normalizeFunction: "linear",
            hoverOpacity     : .5,
            hoverColor       : !1,
            markerStyle      : {
                initial: {
                    fill  : "#4cabc7",
                    stroke: "transparent",
                    r     : 3
                }
            },
            regions          : [ {
                attribute: "fill"
            } ],
            regionStyle      : {
                initial      : {
                    fill            : "rgb(97,109,125)",
                    "fill-opacity"  : 1,
                    stroke          : "none",
                    "stroke-width"  : .4,
                    "stroke-opacity": 1
                },
                hover        : {
                    "fill-opacity": .8
                },
                selected     : {
                    fill: "yellow"
                },
                selectedHover: {}
            },
            series           : {
                regions: [ {
                    values: {
                        IN: "#00acac",
                        US: "#00acac",
                        KR: "#00acac"
                    }
                } ]
            },
            focusOn          : {
                x    : .5,
                y    : .5,
                scale: 2
            },
            backgroundColor  : "#2d353c"
        })
    },
    handleScheduleCalendar = function () {
        var a = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ],
            b = [ "S", "M", "T", "W", "T", "F", "S" ],
            c = new Date,
            d = c.getMonth() + 1,
            e = c.getFullYear(),
            f = [
                [ "2/" + d + "/" + e, "Popover Title", "#", "#00acac", "Some contents here" ],
                [ "5/" + d + "/" + e, "Tooltip with link", "javascript:;", "#2d353c" ],
                [ "18/" + d + "/" + e, "Popover with HTML Content", "#", "#2d353c", 'Some contents here <div class="text-right"><a href="http://www.google.com">view more >>></a></div>' ],
                [ "28/" + d + "/" + e, "PVR Admin V1.0 Launched", "javascript:;", "#2d353c" ]
            ],
            g = $("#schedule-calendar");
        $(g).calendar({
            months         : a,
            days           : b,
            events         : f,
            popover_options: {
                placement: "top",
                html     : !0
            }
        }), $(g).find("td.event").each(function () {
            var a = $(this).css("background-color");
            $(this).removeAttr("style"), $(this).find("a").css("background-color", a)
        }), $(g).find(".icon-arrow-left, .icon-arrow-right").parent().on("click", function () {
            $(g).find("td.event").each(function () {
                var a = $(this).css("background-color");
                $(this).removeAttr("style"), $(this).find("a").css("background-color", a)
            })
        })
    },
    handleDashboardGritterNotification = function () {
        $(window).load(function () {
            setTimeout(function () {
                $.gritter.add({
                    title     : "Welcome back, Administrator!",
                    text      : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus lacus ut lectus rutrum placerat.",
                    image     : "assets/img/user-14.jpg",
                    sticky    : !0,
                    time      : "",
                    class_name: "my-sticky-class"
                })
            }, 1e3)
        })
    },
    DashboardV2 = function () {
        "use strict";
        return {
            init: function () {
                handleVisitorsLineChart(), handleVisitorsDonutChart(), handleVisitorsVectorMap(), handleScheduleCalendar(), handleDashboardGritterNotification()
            }
        }
    }();
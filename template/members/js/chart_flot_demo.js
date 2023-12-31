var blue = "#348fe2",
    blueLight = "#5da5e8",
    blueDark = "#1993E4",
    aqua = "#49b6d6",
    aquaLight = "#6dc5de",
    aquaDark = "#3a92ab",
    green = "#00acac",
    greenLight = "#33bdbd",
    greenDark = "#008a8a",
    orange = "#f59c1a",
    orangeLight = "#f7b048",
    orangeDark = "#c47d15",
    dark = "#2d353c",
    grey = "#b6c2c9",
    purple = "#727cb6",
    purpleLight = "#8e96c5",
    purpleDark = "#5b6392",
    red = "#ff5b57",
    handleBasicChart = function() {
        "use strict";
        for (var a = [], b = 0; b < 2 * Math.PI; b += .25) a.push([b, Math.sin(b)]);
        for (var c = [], d = 0; d < 2 * Math.PI; d += .25) c.push([d, Math.cos(d)]);
        for (var e = [], f = 0; f < 2 * Math.PI; f += .1) e.push([f, Math.tan(f)]);
        0 !== $("#basic-chart").length && $.plot($("#basic-chart"), [{
            label: "data 1",
            data: a,
            color: purple,
            shadowSize: 0
        }, {
            label: "data 2",
            data: c,
            color: green,
            shadowSize: 0
        }, {
            label: "data 3",
            data: e,
            color: dark,
            shadowSize: 0
        }], {
            series: {
                lines: {
                    show: !0
                },
                points: {
                    show: !1
                }
            },
            xaxis: {
                tickColor: "#ddd"
            },
            yaxis: {
                min: -2,
                max: 2,
                tickColor: "#ddd"
            },
            grid: {
                borderColor: "#ddd",
                borderWidth: 1
            }
        })
    },
    handleStackedChart = function() {
        "use strict";

        function p(a, b, c) {
            $('<div id="tooltip" class="flot-tooltip">' + c + "</div>").css({
                top: b,
                left: a + 35
            }).appendTo("body").fadeIn(200)
        }
        for (var a = [], b = 0; b <= 5; b += 1) a.push([b, parseInt(5 * Math.random())]);
        for (var c = [], d = 0; d <= 5; d += 1) c.push([d, parseInt(5 * Math.random() + 5)]);
        for (var e = [], f = 0; f <= 5; f += 1) e.push([f, parseInt(5 * Math.random() + 5)]);
        for (var g = [], h = 0; h <= 5; h += 1) g.push([h, parseInt(5 * Math.random() + 5)]);
        for (var i = [], j = 0; j <= 5; j += 1) i.push([j, parseInt(5 * Math.random() + 5)]);
        for (var k = [], l = 0; l <= 5; l += 1) k.push([l, parseInt(5 * Math.random() + 5)]);
        var m = [
                [0, "Monday"],
                [1, "Tuesday"],
                [2, "Wednesday"],
                [3, "Thursday"],
                [4, "Friday"],
                [5, "Saturday"]
            ],
            n = {
                xaxis: {
                    tickColor: "transparent",
                    ticks: m
                },
                yaxis: {
                    tickColor: "#ddd",
                    ticksLength: 10
                },
                grid: {
                    hoverable: !0,
                    tickColor: "#ccc",
                    borderWidth: 0,
                    borderColor: "rgba(0,0,0,0.2)"
                },
                series: {
                    stack: !0,
                    lines: {
                        show: !1,
                        fill: !1,
                        steps: !1
                    },
                    bars: {
                        show: !0,
                        barWidth: .5,
                        align: "center",
                        fillColor: null
                    },
                    highlightColor: "rgba(0,0,0,0.8)"
                },
                legend: {
                    show: !0,
                    labelBoxBorderColor: "#ccc",
                    position: "ne",
                    noColumns: 1
                }
            },
            o = [{
                data: a,
                color: purpleDark,
                label: "China",
                bars: {
                    fillColor: purpleDark
                }
            }, {
                data: c,
                color: purple,
                label: "Russia",
                bars: {
                    fillColor: purple
                }
            }, {
                data: e,
                color: purpleLight,
                label: "Canada",
                bars: {
                    fillColor: purpleLight
                }
            }, {
                data: g,
                color: blueDark,
                label: "Japan",
                bars: {
                    fillColor: blueDark
                }
            }, {
                data: i,
                color: blue,
                label: "USA",
                bars: {
                    fillColor: blue
                }
            }, {
                data: k,
                color: blueLight,
                label: "Others",
                bars: {
                    fillColor: blueLight
                }
            }];
        $.plot("#stacked-chart", o, n);
        var q = null,
            r = null;
        $("#stacked-chart").bind("plothover", function(a, b, c) {
            if (c) {
                var d = c.datapoint[1] - c.datapoint[2];
                q == c.series.label && d == r || (q = c.series.label, r = d, $("#tooltip").remove(), p(c.pageX, c.pageY, d + " " + c.series.label))
            } else $("#tooltip").remove(), q = null, r = null
        })
    },
    handleTrackingChart = function() {
        "use strict";

        function d() {
            g = null;
            var a = h,
                b = e.getAxes();
            if (!(a.x < b.xaxis.min || a.x > b.xaxis.max || a.y < b.yaxis.min || a.y > b.yaxis.max)) {
                var c, d, i = e.getData();
                for (c = 0; c < i.length; ++c) {
                    var j = i[c];
                    for (d = 0; d < j.data.length && !(j.data[d][0] > a.x); ++d);
                    var k, l = j.data[d - 1],
                        m = j.data[d];
                    k = null === l ? m[1] : null === m ? l[1] : l[1], f.eq(c).text(j.label.replace(/=.*/, "= " + k.toFixed(2)))
                }
            }
        }
        for (var a = [], b = [], c = 0; c < 14; c += .1) a.push([c, Math.sin(c)]), b.push([c, Math.cos(c)]);
        if (0 !== $("#tracking-chart").length) {
            var e = $.plot($("#tracking-chart"), [{
                    data: a,
                    label: "Series1",
                    color: dark,
                    shadowSize: 0
                }, {
                    data: b,
                    label: "Series2",
                    color: red,
                    shadowSize: 0
                }], {
                    series: {
                        lines: {
                            show: !0
                        }
                    },
                    crosshair: {
                        mode: "x",
                        color: grey
                    },
                    grid: {
                        hoverable: !0,
                        autoHighlight: !1,
                        borderColor: "#ccc",
                        borderWidth: 0
                    },
                    xaxis: {
                        tickLength: 0
                    },
                    yaxis: {
                        tickColor: "#ddd"
                    },
                    legend: {
                        labelBoxBorderColor: "#ddd",
                        backgroundOpacity: .4,
                        color: "#fff",
                        show: !0
                    }
                }),
                f = $("#tracking-chart .legendLabel");
            f.each(function() {
                $(this).css("width", $(this).width())
            });
            var g = null,
                h = null;
            $("#tracking-chart").bind("plothover", function(a) {
                h = a, g || (g = setTimeout(d, 50))
            })
        }
    },
    handleBarChart = function() {
        "use strict";
        if (0 !== $("#bar-chart").length) {
            var a = [
                ["January", 10],
                ["February", 8],
                ["March", 4],
                ["April", 13],
                ["May", 17],
                ["June", 9]
            ];
            $.plot("#bar-chart", [{
                data: a,
                color: purple
            }], {
                series: {
                    bars: {
                        show: !0,
                        barWidth: .4,
                        align: "center",
                        fill: !0,
                        fillColor: purple,
                        zero: !0
                    }
                },
                xaxis: {
                    mode: "categories",
                    tickColor: "#ddd",
                    tickLength: 0
                },
                grid: {
                    borderWidth: 0
                }
            })
        }
    },
    handleInteractivePieChart = function() {
        "use strict";
        if (0 !== $("#interactive-pie-chart").length) {
            for (var a = [], b = 3, c = [purple, dark, grey], d = 0; d < b; d++) a[d] = {
                label: "Series" + (d + 1),
                data: Math.floor(100 * Math.random()) + 1,
                color: c[d]
            };
            $.plot($("#interactive-pie-chart"), a, {
                series: {
                    pie: {
                        show: !0
                    }
                },
                grid: {
                    hoverable: !0,
                    clickable: !0
                },
                legend: {
                    labelBoxBorderColor: "#ddd",
                    backgroundColor: "none"
                }
            })
        }
    },
    handleDonutChart = function() {
        "use strict";
        if (0 !== $("#donut-chart").length) {
            for (var a = [], b = 3, c = [dark, green, purple], d = ["Unique Visitor", "Bounce Rate", "Total Page Views", "Avg Time On Site", "% New Visits"], e = [20, 14, 12, 31, 23], f = 0; f < b; f++) a[f] = {
                label: d[f],
                data: e[f],
                color: c[f]
            };
            $.plot($("#donut-chart"), a, {
                series: {
                    pie: {
                        innerRadius: .5,
                        show: !0,
                        combine: {
                            color: "#999",
                            threshold: .1
                        }
                    }
                },
                grid: {
                    borderWidth: 0,
                    hoverable: !0,
                    clickable: !0
                },
                legend: {
                    show: !1
                }
            })
        }
    },
    handleInteractiveChart = function() {
        "use strict";

        function a(a, b, c) {
            $('<div id="tooltip" class="flot-tooltip">' + c + "</div>").css({
                top: b - 45,
                left: a - 55
            }).appendTo("body").fadeIn(200)
        }
        if (0 !== $("#interactive-chart").length) {
            var b = [
                    [0, 42],
                    [1, 53],
                    [2, 66],
                    [3, 60],
                    [4, 68],
                    [5, 66],
                    [6, 71],
                    [7, 75],
                    [8, 69],
                    [9, 70],
                    [10, 68],
                    [11, 72],
                    [12, 78],
                    [13, 86]
                ],
                c = [
                    [0, 12],
                    [1, 26],
                    [2, 13],
                    [3, 18],
                    [4, 35],
                    [5, 23],
                    [6, 18],
                    [7, 35],
                    [8, 24],
                    [9, 14],
                    [10, 14],
                    [11, 29],
                    [12, 30],
                    [13, 43]
                ];
            $.plot($("#interactive-chart"), [{
                data: b,
                label: "Page Views",
                color: purple,
                lines: {
                    show: !0,
                    fill: !1,
                    lineWidth: 2
                },
                points: {
                    show: !1,
                    radius: 5,
                    fillColor: "#fff"
                },
                shadowSize: 0
            }, {
                data: c,
                label: "Visitors",
                color: green,
                lines: {
                    show: !0,
                    fill: !1,
                    lineWidth: 2,
                    fillColor: ""
                },
                points: {
                    show: !1,
                    radius: 3,
                    fillColor: "#fff"
                },
                shadowSize: 0
            }], {
                xaxis: {
                    tickColor: "#ddd",
                    tickSize: 2
                },
                yaxis: {
                    tickColor: "#ddd",
                    tickSize: 20
                },
                grid: {
                    hoverable: !0,
                    clickable: !0,
                    tickColor: "#ccc",
                    borderWidth: 1,
                    borderColor: "#ddd"
                },
                legend: {
                    labelBoxBorderColor: "#ddd",
                    margin: 0,
                    noColumns: 1,
                    show: !0
                }
            });
            var d = null;
            $("#interactive-chart").bind("plothover", function(b, c, e) {
                if ($("#x").text(c.x.toFixed(2)), $("#y").text(c.y.toFixed(2)), e) {
                    if (d !== e.dataIndex) {
                        d = e.dataIndex, $("#tooltip").remove();
                        var f = e.datapoint[1].toFixed(2),
                            g = e.series.label + " " + f;
                        a(e.pageX, e.pageY, g)
                    }
                } else $("#tooltip").remove(), d = null;
                b.preventDefault()
            })
        }
    },
    handleLiveUpdatedChart = function() {
        "use strict";

        function a() {
            g.setData([b()]), g.draw(), setTimeout(a, e)
        }

        function b() {
            for (c.length > 0 && (c = c.slice(1)); c.length < d;) {
                var a = c.length > 0 ? c[c.length - 1] : 50,
                    b = a + 10 * Math.random() - 5;
                b < 0 && (b = 0), b > 100 && (b = 100), c.push(b)
            }
            for (var e = [], f = 0; f < c.length; ++f) e.push([f, c[f]]);
            return e
        }
        if (0 !== $("#live-updated-chart").length) {
            var c = [],
                d = 150,
                e = 1e3;
            $("#updateInterval").val(e).change(function() {
                var a = $(this).val();
                a && !isNaN(+a) && (e = +a, e < 1 && (e = 1), e > 2e3 && (e = 2e3), $(this).val("" + e))
            });
            var f = {
                    series: {
                        shadowSize: 0,
                        color: purple,
                        lines: {
                            show: !0,
                            fill: !0
                        }
                    },
                    yaxis: {
                        min: 0,
                        max: 100,
                        tickColor: "#ddd"
                    },
                    xaxis: {
                        show: !0,
                        tickColor: "#ddd"
                    },
                    grid: {
                        borderWidth: 1,
                        borderColor: "#ddd"
                    }
                },
                g = $.plot($("#live-updated-chart"), [b()], f);
            a()
        }
    },
    Chart = function() {
        "use strict";
        return {
            init: function() {
                handleBasicChart(), handleStackedChart(), handleTrackingChart(), handleBarChart(), handleInteractivePieChart(), handleDonutChart(), handleInteractiveChart(), handleLiveUpdatedChart()
            }
        }
    }();
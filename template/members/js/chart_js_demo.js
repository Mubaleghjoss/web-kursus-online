var white = "rgba(255,255,255,1.0)",
    fillBlack = "rgba(45, 53, 60, 0.6)",
    fillBlackLight = "rgba(45, 53, 60, 0.2)",
    strokeBlack = "rgba(45, 53, 60, 0.8)",
    highlightFillBlack = "rgba(45, 53, 60, 0.8)",
    highlightStrokeBlack = "rgba(45, 53, 60, 1)",
    fillBlue = "rgba(52, 143, 226, 0.6)",
    fillBlueLight = "rgba(52, 143, 226, 0.2)",
    strokeBlue = "rgba(52, 143, 226, 0.8)",
    highlightFillBlue = "rgba(52, 143, 226, 0.8)",
    highlightStrokeBlue = "rgba(52, 143, 226, 1)",
    fillGrey = "rgba(182, 194, 201, 0.6)",
    fillGreyLight = "rgba(182, 194, 201, 0.2)",
    strokeGrey = "rgba(182, 194, 201, 0.8)",
    highlightFillGrey = "rgba(182, 194, 201, 0.8)",
    highlightStrokeGrey = "rgba(182, 194, 201, 1)",
    fillGreen = "rgba(0, 172, 172, 0.6)",
    fillGreenLight = "rgba(0, 172, 172, 0.2)",
    strokeGreen = "rgba(0, 172, 172, 0.8)",
    highlightFillGreen = "rgba(0, 172, 172, 0.8)",
    highlightStrokeGreen = "rgba(0, 172, 172, 1)",
    fillPurple = "rgba(114, 124, 182, 0.6)",
    fillPurpleLight = "rgba(114, 124, 182, 0.2)",
    strokePurple = "rgba(114, 124, 182, 0.8)",
    highlightFillPurple = "rgba(114, 124, 182, 0.8)",
    highlightStrokePurple = "rgba(114, 124, 182, 1)",
    randomScalingFactor = function () {
        return Math.round(100 * Math.random())
    },
    lineChartData = {
        labels  : [ "January", "February", "March", "April", "May", "June", "July" ],
        datasets: [ {
            label               : "Dataset 1",
            borderColor         : strokeBlue,
            pointBackgroundColor: strokeBlue,
            pointRadius         : 2,
            borderWidth         : 2,
            backgroundColor     : fillBlueLight,
            data                : [ randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor() ]
        }, {
            label               : "Dataset 2",
            borderColor         : strokeBlack,
            pointBackgroundColor: strokeBlack,
            pointRadius         : 2,
            borderWidth         : 2,
            backgroundColor     : fillBlackLight,
            data                : [ randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor() ]
        } ]
    },
    barChartData = {
        labels  : [ "January", "February", "March", "April", "May", "June", "July" ],
        datasets: [ {
            label          : "Dataset 1",
            borderWidth    : 2,
            borderColor    : strokePurple,
            backgroundColor: fillPurpleLight,
            data           : [ randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor() ]
        }, {
            label          : "Dataset 2",
            borderWidth    : 2,
            borderColor    : strokeBlack,
            backgroundColor: fillBlackLight,
            data           : [ randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor() ]
        } ]
    },
    radarChartData = {
        labels  : [ "Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running" ],
        datasets: [ {
            label               : "Dataset 1",
            borderWidth         : 2,
            borderColor         : strokePurple,
            pointBackgroundColor: strokePurple,
            pointRadius         : 2,
            backgroundColor     : fillPurpleLight,
            data                : [ 65, 59, 90, 81, 56, 55, 40 ]
        }, {
            label               : "Dataset 2",
            borderWidth         : 2,
            borderColor         : strokeBlack,
            pointBackgroundColor: strokeBlack,
            pointRadius         : 2,
            backgroundColor     : fillBlackLight,
            data                : [ 28, 48, 40, 19, 96, 27, 100 ]
        } ]
    },
    polarAreaData = {
        labels  : [ "Purple", "Blue", "Green", "Grey", "Black" ],
        datasets: [ {
            data           : [ 300, 160, 100, 200, 120 ],
            backgroundColor: [ fillPurple, fillBlue, fillGreen, fillGrey, fillBlack ],
            borderColor    : [ strokePurple, strokeBlue, strokeGreen, strokeGrey, strokeBlack ],
            borderWidth    : 2,
            label          : "My dataset"
        } ]
    },
    pieChartData = {
        labels  : [ "Purple", "Blue", "Green", "Grey", "Black" ],
        datasets: [ {
            data           : [ 300, 50, 100, 40, 120 ],
            backgroundColor: [ fillPurple, fillBlue, fillGreen, fillGrey, fillBlack ],
            borderColor    : [ strokePurple, strokeBlue, strokeGreen, strokeGrey, strokeBlack ],
            borderWidth    : 2,
            label          : "My dataset"
        } ]
    },
    doughnutChartData = {
        labels  : [ "Purple", "Blue", "Green", "Grey", "Black" ],
        datasets: [ {
            data           : [ 300, 50, 100, 40, 120 ],
            backgroundColor: [ fillPurple, fillBlue, fillGreen, fillGrey, fillBlack ],
            borderColor    : [ strokePurple, strokeBlue, strokeGreen, strokeGrey, strokeBlack ],
            borderWidth    : 2,
            label          : "My dataset"
        } ]
    },
    handleChartJs = function () {
        var a = document.getElementById("line-chart").getContext("2d"),
            c = (new Chart(a, {
                type: "line",
                data: lineChartData
            }), document.getElementById("bar-chart").getContext("2d")),
            e = (new Chart(c, {
                type: "bar",
                data: barChartData
            }), document.getElementById("radar-chart").getContext("2d")),
            g = (new Chart(e, {
                type: "radar",
                data: radarChartData
            }), document.getElementById("polar-area-chart").getContext("2d")),
            i = (new Chart(g, {
                type: "polarArea",
                data: polarAreaData
            }), document.getElementById("pie-chart").getContext("2d"));
        window.myPie = new Chart(i, {
            type: "pie",
            data: pieChartData
        });
        var j = document.getElementById("doughnut-chart").getContext("2d");
        window.myDoughnut = new Chart(j, {
            type: "doughnut",
            data: doughnutChartData
        })
    },
    ChartJs = function () {
        "use strict";
        return {
            init: function () {
                handleChartJs()
            }
        }
    }();
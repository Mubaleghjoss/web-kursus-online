var handleCountdownTimer = function () {
    var e = new Date;
    e = new Date(e.getFullYear() + 1, 1 - 1, 1);
    $("#timer").countdown({
        until: e
    })
};
var ComingSoon = function () {
    "use strict";
    return {
        init: function () {
            handleCountdownTimer()
        }
    }
}()
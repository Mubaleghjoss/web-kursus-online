var handleSelectAll = function () {
    "use strict";
    $("[data-click=email-select-all]").click(function (e) {
        e.preventDefault();
        if ($(this).closest("tr").hasClass("active")) {
            $(".table-email tr").removeClass("active")
        } else {
            $(".table-email tr").addClass("active")
        }
    })
};
var handleSelectSingle = function () {
    "use strict";
    $("[data-click=email-select-single]").click(function (e) {
        e.preventDefault();
        var t = $(this).closest("tr");
        if ($(t).hasClass("active")) {
            $(t).removeClass("active")
        } else {
            $(t).addClass("active")
        }
    })
};
var handleEmailRemove = function () {
    "use strict";
    $("[data-click=email-remove]").click(function (e) {
        e.preventDefault();
        var t = $(this).closest("tr");
        $(t).fadeOut().remove()
    })
};
var handleEmailHighlight = function () {
    "use strict";
    $("[data-click=email-highlight]").click(function (e) {
        e.preventDefault();
        if ($(this).hasClass("text-danger")) {
            $(this).removeClass("text-danger")
        } else {
            $(this).addClass("text-danger")
        }
    })
};
var Inbox = function () {
    "use strict";
    return {
        init: function () {
            handleSelectAll();
            handleSelectSingle();
            handleEmailRemove();
            handleEmailHighlight()
        }
    }
}()
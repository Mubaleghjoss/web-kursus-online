var handleEmailActionButtonStatus = function () {
    if ($("[data-checked=email-checkbox]:checked").length !== 0) {
        $("[data-email-action]").removeClass("hide")
    } else {
        $("[data-email-action]").addClass("hide")
    }
};
var handleEmailCheckboxChecked = function () {
    $("[data-checked=email-checkbox]").live("click", function () {
        var e = $(this).closest("label");
        var t = $(this).closest("li");
        if ($(this).prop("checked")) {
            $(e).addClass("active");
            $(t).addClass("selected")
        } else {
            $(e).removeClass("active");
            $(t).removeClass("selected")
        }
        handleEmailActionButtonStatus()
    })
};
var handleEmailAction = function () {
    $("[data-email-action]").live("click", function () {
        var e = "[data-checked=email-checkbox]:checked";
        if ($(e).length !== 0) {
            $(e).closest("li").slideToggle(function () {
                $(this).remove();
                handleEmailActionButtonStatus()
            })
        }
    })
};
var InboxV2 = function () {
    "use strict";
    return {
        init: function () {
            handleEmailCheckboxChecked();
            handleEmailAction()
        }
    }
}()
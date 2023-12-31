var handleJqueryFileUpload = function () {
    $("#fileupload").fileupload({
        autoUpload        : false,
        disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
        maxFileSize       : 5e6,
        acceptFileTypes   : /(\.|\/)(gif|jpe?g|png)$/i
    });
    $("#fileupload").fileupload("option", "redirect", window.location.href.replace(/\/[^\/]*$/, "/cors/result.html?%s"));
    if ($.support.cors) {
        $.ajax({
            type: "HEAD"
        }).fail(function () {
            $('<div class="alert alert-danger"/>').text("Upload server currently unavailable - " + new Date).appendTo("#fileupload")
        })
    }
    $("#fileupload").addClass("fileupload-processing");
    $.ajax({
        url     : $("#fileupload").fileupload("option", "url"),
        dataType: "json",
        context : $("#fileupload")[ 0 ]
    }).always(function () {
        $(this).removeClass("fileupload-processing")
    }).done(function (e) {
        $(this).fileupload("option", "done").call(this, $.Event("done"), {
            result: e
        })
    })
};
var FormMultipleUpload = function () {
    "use strict";
    return {
        init: function () {
            handleJqueryFileUpload()
        }
    }
}()
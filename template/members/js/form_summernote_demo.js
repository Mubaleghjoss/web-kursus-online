var handleSummernote = function () {
        $(".summernote").summernote({
            placeholder: "Hi, this is summernote. Please, write text here! Super simple WYSIWYG editor on Bootstrap",
            height     : $(window).height() - $(".summernote").offset().top - 80
        })
    },
    FormSummernote = function () {
        "use strict";
        return {
            init: function () {
                handleSummernote()
            }
        }
    }();
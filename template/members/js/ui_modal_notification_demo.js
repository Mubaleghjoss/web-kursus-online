var handleGritterNotification = function () {
        $("#add-sticky").click(function () {
            return $.gritter.add({
                title     : "This is a sticky notice!",
                text      : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus lacus ut lectus rutrum placerat. ",
                image     : "assets/img/user-2.jpg",
                sticky    : !0,
                time      : "",
                class_name: "my-sticky-class"
            }), !1
        }), $("#add-regular").click(function () {
            return $.gritter.add({
                title : "This is a regular notice!",
                text  : "This will fade out after a certain amount of time. Sed tempus lacus ut lectus rutrum placerat. ",
                image : "assets/img/user-3.jpg",
                sticky: !1,
                time  : ""
            }), !1
        }), $("#add-max").click(function () {
            return $.gritter.add({
                title      : "This is a notice with a max of 3 on screen at one time!",
                text       : "This will fade out after a certain amount of time. Sed tempus lacus ut lectus rutrum placerat. ",
                sticky     : !1,
                image      : "assets/img/user-4.jpg",
                before_open: function () {
                    if (3 === $(".gritter-item-wrapper").length) return !1
                }
            }), !1
        }), $("#add-without-image").click(function () {
            return $.gritter.add({
                title: "This is a notice without an image!",
                text : "This will fade out after a certain amount of time."
            }), !1
        }), $("#add-gritter-light").click(function () {
            return $.gritter.add({
                title     : "This is a light notification",
                text      : 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                class_name: "gritter-light"
            }), !1
        }), $("#add-with-callbacks").click(function () {
            return $.gritter.add({
                title       : "This is a notice with callbacks!",
                text        : "The callback is...",
                before_open : function () {
                    alert("I am called before it opens")
                },
                after_open  : function (t) {
                    alert("I am called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + t)
                },
                before_close: function (t) {
                    var e = t ? 'The "X" was clicked to close me!' : "";
                    alert("I am called before it closes: I am passed the jQuery object for the Gritter element... \n" + e)
                },
                after_close : function (t) {
                    var e = t ? 'The "X" was clicked to close me!' : "";
                    alert("I am called after it closes. " + e)
                }
            }), !1
        }), $("#add-sticky-with-callbacks").click(function () {
            return $.gritter.add({
                title       : "This is a sticky notice with callbacks!",
                text        : "Sticky sticky notice.. sticky sticky notice...",
                sticky      : !0,
                before_open : function () {
                    alert("I am a sticky called before it opens")
                },
                after_open  : function (t) {
                    alert("I am a sticky called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + t)
                },
                before_close: function (t) {
                    alert("I am a sticky called before it closes: I am passed the jQuery object for the Gritter element... \n" + t)
                },
                after_close : function () {
                    alert("I am a sticky called after it closes")
                }
            }), !1
        }), $("#remove-all").click(function () {
            return $.gritter.removeAll(), !1
        }), $("#remove-all-with-callbacks").click(function () {
            return $.gritter.removeAll({
                before_close: function (t) {
                    alert("I am called before all notifications are closed.  I am passed the jQuery object containing all  of Gritter notifications.\n" + t)
                },
                after_close : function () {
                    alert("I am called after everything has been closed.")
                }
            }), !1
        })
    },
    handleSweetNotification = function () {
        $('[data-click="swal-primary"]').live("click", function () {
            swal({
                title             : "Are you sure?",
                text              : "You will not be able to recover this imaginary file!",
                type              : "info",
                showCancelButton  : !0,
                confirmButtonClass: "btn-primary",
                confirmButtonText : "Primary!"
            })
        }), $('[data-click="swal-info"]').live("click", function () {
            swal({
                title             : "Are you sure?",
                text              : "You will not be able to recover this imaginary file!",
                type              : "info",
                showCancelButton  : !0,
                confirmButtonClass: "btn-info",
                confirmButtonText : "Info!"
            })
        }), $('[data-click="swal-success"]').live("click", function () {
            swal({
                title             : "Are you sure?",
                text              : "You will not be able to recover this imaginary file!",
                type              : "success",
                showCancelButton  : !0,
                confirmButtonClass: "btn-success",
                confirmButtonText : "Success!"
            })
        }), $('[data-click="swal-warning"]').live("click", function () {
            swal({
                title             : "Are you sure?",
                text              : "You will not be able to recover this imaginary file!",
                type              : "warning",
                showCancelButton  : !0,
                confirmButtonClass: "btn-warning",
                confirmButtonText : "Warning!"
            })
        }), $('[data-click="swal-danger"]').live("click", function () {
            swal({
                title             : "Are you sure?",
                text              : "You will not be able to recover this imaginary file!",
                type              : "error",
                showCancelButton  : !0,
                confirmButtonClass: "btn-danger",
                confirmButtonText : "Danger!"
            })
        })
    },
    Notification = function () {
        "use strict";
        return {
            init: function () {
                handleGritterNotification(), handleSweetNotification()
            }
        }
    }();
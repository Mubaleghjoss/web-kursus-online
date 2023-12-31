var handleDataTableCombinationSetting = function () {
        "use strict";
        0 !== $("#data-table").length && $("#data-table").DataTable({
            dom       : "lBfrtip",
            buttons   : [ {
                extend   : "copy",
                className: "btn-sm"
            }, {
                extend   : "csv",
                className: "btn-sm"
            }, {
                extend   : "excel",
                className: "btn-sm"
            }, {
                extend   : "pdf",
                className: "btn-sm"
            }, {
                extend   : "print",
                className: "btn-sm"
            } ],
            responsive: !0,
            autoFill  : !0,
            colReorder: !0,
            keys      : !0,
            rowReorder: !0,
            select    : !0
        })
    },
    TableManageCombine = function () {
        "use strict";
        return {
            init: function () {
                handleDataTableCombinationSetting()
            }
        }
    }();
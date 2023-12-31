var handleDataTableButtons = function () {
        "use strict";
        0 !== $("#data-table").length && $("#data-table").DataTable({
            dom       : "Bfrtip",
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
            responsive: !0
        })
    },
    TableManageButtons = function () {
        "use strict";
        return {
            init: function () {
                handleDataTableButtons()
            }
        }
    }();
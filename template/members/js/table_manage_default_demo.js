var handleDataTableDefault = function () {
        "use strict";
        0 !== $("#data-table").length && $("#data-table").DataTable({
            responsive: !0
        })
    },
    TableManageDefault = function () {
        "use strict";
        return {
            init: function () {
                handleDataTableDefault()
            }
        }
    }();
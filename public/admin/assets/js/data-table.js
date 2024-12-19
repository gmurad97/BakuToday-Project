// npm package: datatables.net-bs5
// github link: https://github.com/DataTables/Dist-DataTables-Bootstrap5

"use strict";

(function () {
    $("#categoriesDataTable").DataTable({
        "layout": {
            "topEnd": {
                "search": {
                    "placeholder": "Search here"
                }
            }
        },
        "aLengthMenu": [
            [5, 10, 30, 50, -1],
            [5, 10, 30, 50, "All"]
        ],
        "iDisplayLength": 10,
        "paginationType": "simple_numbers",
        "bAutoWidth": false,
        "language": {
            "search": ""
        },
        "columnDefs": [
            {
                "targets": ['_all'],
                "className": 'text-start'
            }
        ]
    });

    $("#advertisingDataTable").DataTable({
        "layout": {
            "topEnd": {
                "search": {
                    "placeholder": "Search here"
                }
            }
        },
        "aLengthMenu": [
            [5, 10, 30, 50, -1],
            [5, 10, 30, 50, "All"]
        ],
        "iDisplayLength": 10,
        "paginationType": "simple_numbers",
        "bAutoWidth": false,
        "language": {
            "search": ""
        },
        "columnDefs": [
            {
                "targets": ['_all'],
                "className": 'text-start'
            }
        ]
    });

    $("#profilesDataTable").DataTable({
        "layout": {
            "topEnd": {
                "search": {
                    "placeholder": "Search here"
                }
            }
        },
        "aLengthMenu": [
            [5, 10, 30, 50, -1],
            [5, 10, 30, 50, "All"]
        ],
        "iDisplayLength": 10,
        "paginationType": "simple_numbers",
        "bAutoWidth": false,
        "language": {
            "search": ""
        },
        "columnDefs": [
            {
                "targets": ['_all'],
                "className": 'text-start'
            }
        ]
    });

    $("#newsDataTable").DataTable({
        "layout": {
            "topEnd": {
                "search": {
                    "placeholder": "Search here"
                }
            }
        },
        "aLengthMenu": [
            [5, 10, 30, 50, -1],
            [5, 10, 30, 50, "All"]
        ],
        "iDisplayLength": 10,
        "paginationType": "simple_numbers",
        "bAutoWidth": false,
        "language": {
            "search": ""
        },
        "columnDefs": [
            {
                "targets": ['_all'],
                "className": 'text-start'
            }
        ]
    });
})();
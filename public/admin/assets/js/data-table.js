// npm package: datatables.net-bs5
// github link: https://github.com/DataTables/Dist-DataTables-Bootstrap5

'use strict';

(function () {

  $('#categoriesDataTable').DataTable({

    layout: {
      topEnd: {
        search: {
          placeholder: 'Search here'
        }
      }
    },
    "aLengthMenu": [
      [5, 10, 30, 50, -1],
      [5, 10, 30, 50, "All"]
    ],
    "iDisplayLength": 10,
    "language": {
      search: ""
    },
    paginationType: 'simple_numbers',
    "bAutoWidth": false,
    // Настроить выравнивание для числовых и дата-колонок
    columnDefs: [
      {
        targets: ['_all'],  // Применить к нужным колонкам
        className: 'text-start' // Устанавливаем выравнивание по левому краю
      }
    ]
  });

  $('#advertisingDataTable').DataTable({

    layout: {
      topEnd: {
        search: {
          placeholder: 'Search here'
        }
      }
    },
    "aLengthMenu": [
      [5, 10, 30, 50, -1],
      [5, 10, 30, 50, "All"]
    ],
    "iDisplayLength": 10,
    "language": {
      search: ""
    },
    paginationType: 'simple_numbers',
    "bAutoWidth": false,
    // Настроить выравнивание для числовых и дата-колонок
    columnDefs: [
      {
        targets: ['_all'],  // Применить к нужным колонкам
        className: 'text-start' // Устанавливаем выравнивание по левому краю
      }
    ]
  });


  $('#profilesDataTable').DataTable({

    layout: {
      topEnd: {
        search: {
          placeholder: 'Search here'
        }
      }
    },
    "aLengthMenu": [
      [5, 10, 30, 50, -1],
      [5, 10, 30, 50, "All"]
    ],
    "iDisplayLength": 10,
    "language": {
      search: ""
    },
    paginationType: 'simple_numbers',
    "bAutoWidth": false,
    // Настроить выравнивание для числовых и дата-колонок
    columnDefs: [
      {
        targets: ['_all'],  // Применить к нужным колонкам
        className: 'text-start' // Устанавливаем выравнивание по левому краю
      }
    ]
  });


  $('#dataTableExample').DataTable({
    layout: {
      topEnd: {
        search: {
          placeholder: 'Search here'
        }
      }
    },
    "aLengthMenu": [
      [5, 10, 30, 50, -1],
      [5, 10, 30, 50, "All"]
    ],
    "iDisplayLength": 10,
    "language": {
      search: ""
    },
    paginationType: 'simple_numbers',
    "bAutoWidth": false
  });

})();
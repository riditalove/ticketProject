/* ------------------------------------------------------------------------------
 *
 *  # Buttons extension for Datatables. HTML5 examples
 *
 *  Demo JS code for datatable_extension_buttons_html5.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var DatatableButtonsHtml5 = function () {


    //
    // Setup module components
    //

    // Basic Datatable examples
    var _componentDatatableButtonsHtml5 = function () {
        if (!$().DataTable) {
            console.warn('Warning - datatables.min.js is not loaded.');
            return;
        }

        // Setting datatable defaults
        $.extend($.fn.dataTable.defaults, {
            autoWidth: false,
            dom: '<"datatable-header"fBl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            language: {
                "decimal": ",",
                "thousands": ".",
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: {'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;'}
            }
        });

        // Column selectors
        $('.datatable-button-html5-columns').DataTable({
            columnDefs: [
                {type: 'percentage', targets: 1}
            ],
            dom: 'B<"clear">lfrtip',
            buttons: [
                {
                    extend: 'copy',
                    text: '<i class="fa fa-copy"></i> Copy',
                    className: 'btn btn-light'
                },
                {
                    extend: 'print',
                    messageTop: $('#printbody').html(),
                    text: '<i class="fa fa-print"></i> Print',
                    className: 'btn btn-light',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'csvHtml5',
                    className: 'btn btn-light',
                    text: '<i class="fa fa-file"></i> CSV',
                    fieldSeparator: '\t',
                    extension: '.csv',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    className: 'btn btn-light',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    header: $('#printbody').html(),
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                    className: 'btn btn-light',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'colvis',
                    text: '<i class="fa fa-bars"></i>',
                    className: 'btn bg-blue btn-icon dropdown-toggle'
                }
            ],
            stateSave: true,
            fixedHeader: true
        });

    };

    //
    // Return objects assigned to module
    //

    return {
        init: function () {
            _componentDatatableButtonsHtml5();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function () {
    DatatableButtonsHtml5.init();
});

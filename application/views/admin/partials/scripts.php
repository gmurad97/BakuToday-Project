</div>
</div>

<?php
$vendor_scripts = [
    // jQuery first (required by many libraries)
    "jquery/jquery.min.js",

    // jQuery plugins (these depend on jQuery)
    "jquery-mousewheel/jquery.mousewheel.js",
    "jquery-sparkline/jquery.sparkline.min.js",
    "jquery-validation/jquery.validate.min.js",
    "jquery.flot/jquery.flot.js", // Flot core
    "jquery.flot/jquery.flot.categories.js", // Flot categories (after core)
    "jquery.flot/jquery.flot.pie.js", // Flot pie chart
    "jquery.flot/jquery.flot.resize.js", // Flot resize
    "jquery-steps/jquery.steps.min.js",
    "jquery-tags-input/jquery.tagsinput.min.js",
    "inputmask/jquery.inputmask.min.js",

    // Bootstrap and related plugins
    "bootstrap-maxlength/bootstrap-maxlength.min.js",

    // UI components and utilities
    "feather-icons/feather.min.js",
    "moment/moment.min.js",
    "owl.carousel/owl.carousel.min.js",
    "sweetalert2/sweetalert2.min.js",
    "select2/select2.min.js",
    "sortablejs/Sortable.min.js",
    "prismjs/prism.js",

    // Charting libraries (standalone)
    "apexcharts/apexcharts.min.js",
    "chartjs/chart.umd.js",

    // Rich text editors
    "easymde/easymde.min.js",
    "tinymce/tinymce.min.js",

    // File upload libraries
    "dropify/dist/dropify.min.js",
    "dropzone/dropzone-min.js",

    // DataTables (ensure jQuery and Bootstrap are loaded before)
    "datatables.net/dataTables.js",
    "datatables.net-bs5/dataTables.bootstrap5.js",

    // Calendar and date pickers
    "flatpickr/flatpickr.min.js",
    "pickr/pickr.min.js",
    "fullcalendar/index.global.min.js",

    // Core functionality and other plugins
    "ace-builds/src-min/ace.js",
    "ace-builds/src-min/theme-chaos.js",
    "core/core.js",
    "cropperjs/cropper.min.js",
    "clipboard/clipboard.min.js",
    "typeahead.js/typeahead.bundle.min.js",
    "ckeditor/ckeditor.js"
];




$scripts = [
    "bootstrap-maxlength.js", // Зависит от Bootstrap
"dropzone.js",
"dropify.js"
];


?>

<?php foreach ($vendor_scripts as $vendor_script): ?>
    <script src="<?= base_url('public/admin/assets/vendors/' . $vendor_script) ?>"></script>
<?php endforeach; ?>


<?php foreach ($scripts as $script): ?>
    <script src="<?= base_url('public/admin/assets/js/' . $script) ?>"></script>
<?php endforeach; ?>


<script src="<?= base_url('public/admin/assets/js/color-modes.js'); ?>"></script>
<script src="<?= base_url('public/admin/assets/js/app.js'); ?>"></script>

</body>

</html>
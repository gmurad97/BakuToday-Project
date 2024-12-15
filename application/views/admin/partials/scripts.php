</div>
</div>

<?php
$vendor_scripts = [
    "jquery/jquery.min.js",
    "bootstrap-maxlength/bootstrap-maxlength.min.js",
    "feather-icons/feather.min.js",
    "datatables.net/dataTables.js",
    "datatables.net-bs5/dataTables.bootstrap5.js",
    "ckeditor/ckeditor.js",
    "dropify/dist/dropify.min.js",
    "dropzone/dropzone-min.js",
    "core/core.js",
    "lity/lity.min.js"
];

$custom_scripts = [
    "bootstrap-maxlength.js",
    "dropzone.js",
    "dropify.js",
    "data-table.js",
    "color-modes.js",
    "app.js",

];
?>

<?php foreach ($vendor_scripts as $vendor_script): ?>
    <script src="<?= base_url('public/admin/assets/vendors/' . $vendor_script) ?>"></script>
<?php endforeach; ?>

<?php foreach ($custom_scripts as $custom_script): ?>
    <script src="<?= base_url('public/admin/assets/js/' . $custom_script) ?>"></script>
<?php endforeach; ?>

</body>

</html>
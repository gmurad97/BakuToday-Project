<footer class="footer d-flex flex-row align-items-center justify-content-between px-4 py-3 border-top small">
    <p class="text-secondary mb-1 mb-md-0">
        <?= $this->lang->line("copyright"); ?> &copy;
        <script>document.write(new Date().getFullYear())</script>
        <a href="<?= base_url('admin/dashboard'); ?>">NobleUI</a>
    </p>
    <p class="text-secondary">
        <?= $this->lang->line("developed_with"); ?>
        <i class="mb-1 text-danger mx-1 icon-sm" data-feather="heart"></i>
        <?= $this->lang->line("by"); ?> <a href="https://github.com/gmurad97" target="_blank">gmurad97</a>
    </p>
</footer>
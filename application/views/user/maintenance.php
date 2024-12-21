<?php $this->load->view("user/partials/head"); ?>
<div class="page-content">
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light text-center">
        <div>
            <h1 class="text-primary">
                <?= $this->lang->line("maintenance_title"); ?>
            </h1>
            <p class="fs-4 text-muted">
                <?= $this->lang->line("maintenance_description"); ?>
            </p>
        </div>
    </div>
</div>
<?php $this->load->view("user/partials/scripts"); ?>
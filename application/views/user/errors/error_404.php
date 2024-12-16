<?php $this->load->view("user/partials/head"); ?>
<?php $this->load->view("user/partials/navbar"); ?>
<div class="page-content">
    <div class="container mt-5">
        <div class="row">
            <h3><?= $this->lang->line("user_404_error_title"); ?></h3>
            <p><?= $this->lang->line("page_not_found"); ?></p>
        </div>
    </div>
</div>
<?php $this->load->view("user/partials/scripts"); ?>
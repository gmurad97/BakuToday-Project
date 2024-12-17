<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12">
            <?php $alert = $this->session->flashdata("crud_alert"); ?>
            <?php if ($alert): ?>
                <div class="alert <?= $alert['alert_class']; ?> alert-dismissible fade show" role="alert">
                    <i data-feather="<?= $alert['alert_icon']; ?>"></i>
                    <strong><?= $alert['alert_message']['title'] ?></strong>
                    <?= $alert['alert_message']['description'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="row flex-grow-1">
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Administrators Count</h6>
                            <h2 class="card-text"><?= $statistics["admins_count"]; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Categories Count</h6>
                            <h2 class="card-text"><?= $statistics["categories_count"]; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Advertising Count</h6>
                            <h2 class="card-text"><?= $statistics["advertising_count"]; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">News Count</h6>
                            <h2 class="card-text"><?= $statistics["news_count"]; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
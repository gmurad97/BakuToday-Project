<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?= $this->lang->line("settings"); ?></h6>
                    <?php $alert = $this->session->flashdata("crud_alert"); ?>
                    <?php if ($alert): ?>
                        <div class="alert <?= $alert['alert_class']; ?> alert-dismissible fade show" role="alert">
                            <i data-feather="<?= $alert['alert_icon']; ?>"></i>
                            <strong><?= $alert['alert_message']['title'] ?></strong>
                            <?= $alert['alert_message']['description'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('admin/settings/update'); ?>" method="POST"
                        enctype="application/x-www-form-urlencoded">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                            value="<?= $this->security->get_csrf_hash(); ?>">
                        <table class="table table-hover mb-3">
                            <thead>
                                <tr>
                                    <th>
                                        <?= $this->lang->line("setting"); ?>
                                    </th>
                                    <th>
                                        <?= $this->lang->line("status"); ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        <label for="maintenance_mode">
                                            <?= $this->lang->line("maintenance_mode"); ?>
                                        </label>
                                    </th>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input name="maintenance_mode" type="checkbox" class="form-check-input"
                                                id="maintenance_mode" <?= $settings->maintenance_mode ? "checked" : "" ?>>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="snow_mode">
                                            <?= $this->lang->line("snow_mode"); ?>
                                        </label>
                                    </th>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input name="snow_mode" type="checkbox" class="form-check-input"
                                                id="snow_mode" <?= $settings->snow_mode ? "checked" : "" ?>>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-outline-warning">
                            <?= $this->lang->line("update"); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
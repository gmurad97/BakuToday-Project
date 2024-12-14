<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?= $this->lang->line("admin_system_settings_page_title"); ?></h6>
                    <?php $alert = $this->session->flashdata("settings_alert"); ?>
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
                                        <?= $this->lang->line("admin_settings_edit_page_setting_thead"); ?>
                                    </th>
                                    <th>
                                        <?= $this->lang->line("admin_settings_edit_page_status_thead"); ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        <label for="maintenance_mode">
                                            <?= $this->lang->line("admin_settings_edit_page_maintenance_mode_label"); ?>
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
                                            <?= $this->lang->line("admin_settings_edit_page_snow_mode_label"); ?>
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
                            <?= $this->lang->line("admin_settings_edit_page_update_btn"); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
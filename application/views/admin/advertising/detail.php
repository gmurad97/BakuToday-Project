<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php $current_language = $this->session->userdata("admin_lang"); ?>
                    <h6 class="card-title">
                        <?= $this->lang->line("admin_advertising_detail_page_card_title"); ?> •
                        <?= $advertising["title_$current_language"]; ?>
                    </h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_advertising_detail_page_title_thead"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $advertising["title_$current_language"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_advertising_detail_page_location_thead"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $advertising["location"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_advertising_detail_page_image_thead"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <a href="<?= base_url('public/uploads/advertising/') . $advertising["img"]; ?>"
                                            data-lity>
                                            <img style="object-fit:cover;"
                                                src="<?= base_url('public/uploads/advertising/') . $advertising["img"]; ?>"
                                                alt="Advertising Image">
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_advertising_detail_page_status_thead"); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($advertising["status"]): ?>
                                        <span class="badge border border-success text-success">
                                            <?= $this->lang->line("admin_advertising_detail_page_status_enabled"); ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge border border-secondary text-secondary">
                                            <?= $this->lang->line("admin_advertising_detail_page_status_disabled"); ?>
                                        </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_advertising_detail_page_created_at_thead"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $advertising["created_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_advertising_detail_page_updated_at_thead"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $advertising["updated_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteAdvertisingModal"
                        class="btn btn-outline-danger">
                        <?= $this->lang->line("admin_advertising_detail_page_delete_btn"); ?>
                    </a>
                    <a href="<?= base_url('admin/advertising/' . $advertising['id'] . '/edit'); ?>"
                        class="btn btn-outline-warning">
                        <?= $this->lang->line("admin_advertising_detail_page_edit_btn"); ?>
                    </a>
                    <a href="<?= base_url('admin/advertising'); ?>" class="btn btn-primary">
                        <?= $this->lang->line("admin_advertising_detail_page_back_btn"); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteAdvertisingModal" tabindex="-1" aria-labelledby="deleteAdvertisingModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteAdvertisingModalTitle">
                    <?= $this->lang->line("admin_advertising_list_page_delete_modal_title"); ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <?= $this->lang->line("admin_advertising_list_page_delete_modal_description"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <?= $this->lang->line("admin_advertising_list_page_delete_modal_close_btn"); ?>
                </button>
                <a href="<?= base_url('admin/avdertising/' . $advertising['id'] . '/delete'); ?>"
                    id="deleteCategoryButton" class="btn btn-outline-danger">
                    <?= $this->lang->line("admin_advertising_list_page_delete_modal_delete_btn"); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
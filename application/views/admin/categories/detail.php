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
                        <?= $this->lang->line("admin_categories_detail_page_card_title"); ?> •
                        <?= $category["name_$current_language"]; ?>
                    </h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_categories_detail_page_table_name"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $category["name_$current_language"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_categories_detail_page_table_status"); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($category["status"]): ?>
                                        <span class="badge border border-success text-success">
                                            <?= $this->lang->line("admin_categories_detail_page_status_enabled"); ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge border border-secondary text-secondary">
                                            <?= $this->lang->line("admin_categories_detail_page_status_disabled"); ?>
                                        </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_categories_detail_page_table_created_at"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $category["created_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_categories_detail_page_table_updated_at"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $category["updated_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal"
                        class="btn btn-outline-danger">
                        <?= $this->lang->line("admin_categories_detail_page_delete_btn"); ?>
                    </a>
                    <a href="<?= base_url('admin/categories/' . $category['id'] . '/edit'); ?>"
                        class="btn btn-outline-warning">
                        <?= $this->lang->line("admin_categories_detail_page_edit_btn"); ?>
                    </a>
                    <a href="<?= base_url('admin/categories'); ?>" class="btn btn-primary">
                        <?= $this->lang->line("admin_categories_detail_page_back_btn"); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCategoryModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCategoryModalTitle">
                    <?= $this->lang->line("admin_categories_list_page_delete_modal_title"); ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <?= $this->lang->line("admin_categories_list_page_delete_modal_description"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <?= $this->lang->line("admin_categories_list_page_delete_modal_close_btn"); ?>
                </button>
                <a href="<?= base_url('admin/categories/' . $category['id'] . '/delete'); ?>" id="deleteCategoryButton"
                    class="btn btn-outline-danger">
                    <?= $this->lang->line("admin_categories_list_page_delete_modal_delete_btn"); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
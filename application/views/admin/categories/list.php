<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?= $this->lang->line("admin_categories_list_page_card_title"); ?></h6>
                    <?php $alert = $this->session->flashdata("category_alert"); ?>
                    <?php if ($alert): ?>
                        <div class="alert <?= $alert['alert_class']; ?> alert-dismissible fade show" role="alert">
                            <i data-feather="<?= $alert['alert_icon']; ?>"></i>
                            <strong><?= $alert['alert_message']['title'] ?></strong>
                            <?= $alert['alert_message']['description'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table id="categoriesDataTable" class="table">
                            <thead>
                                <tr>
                                    <th><?= $this->lang->line("admin_categories_list_page_table_id"); ?></th>
                                    <th><?= $this->lang->line("admin_categories_list_page_table_name"); ?></th>
                                    <th><?= $this->lang->line("admin_categories_list_page_table_status"); ?></th>
                                    <th><?= $this->lang->line("admin_categories_list_page_table_created_at"); ?></th>
                                    <th><?= $this->lang->line("admin_categories_list_page_table_updated_at"); ?></th>
                                    <th><i class="icon-lg text-secondary pb-3px" data-feather="menu"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $current_language = $this->session->userdata("admin_lang");
                                $counter = 0;
                                ?>
                                <?php foreach ($categories_collection as $category): ?>
                                    <tr>
                                        <td><?= ++$counter; ?></td>
                                        <td>
                                            <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                                <?= $category["name_$current_language"]; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <?php if ($category["status"]): ?>
                                                <span class="badge border border-success text-success">
                                                    <?= $this->lang->line("admin_categories_list_page_status_enabled"); ?>
                                                </span>
                                            <?php else: ?>
                                                <span class="badge border border-secondary text-secondary">
                                                    <?= $this->lang->line("admin_categories_list_page_status_disabled"); ?>
                                                </span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $category["created_at"]; ?></td>
                                        <td><?= $category["updated_at"]; ?></td>
                                        <td>
                                            <div class="dropdown mb-2">
                                                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-primary pb-3px" data-feather="command"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="<?= base_url('admin/categories/' . $category['id']); ?>">
                                                        <i data-feather="eye" class="icon-sm text-info me-2"></i>
                                                        <span class="text-info">
                                                            <?= $this->lang->line("admin_categories_list_page_control_view"); ?>
                                                        </span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="<?= base_url('admin/categories/' . $category['id']) . '/edit'; ?>">
                                                        <i data-feather="edit-2" class="icon-sm text-warning me-2"></i>
                                                        <span class="text-warning">
                                                            <?= $this->lang->line("admin_categories_list_page_control_edit"); ?>
                                                        </span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#deleteCategoryModal"
                                                        data-url="<?= base_url('admin/categories/' . $category['id']) . '/delete'; ?>">
                                                        <i data-feather="trash" class="icon-sm text-danger me-2"></i>
                                                        <span class="text-danger">
                                                            <?= $this->lang->line("admin_categories_list_page_control_delete"); ?>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
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
                <a href="javascript:void(0);" id="deleteCategoryButton" class="btn btn-outline-danger">
                    <?= $this->lang->line("admin_categories_list_page_delete_modal_delete_btn"); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll("[data-bs-toggle='modal']").forEach(item => {
        item.addEventListener("click", function () {
            document.getElementById("deleteCategoryButton").href = this.getAttribute("data-url");
        });
    });
</script>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
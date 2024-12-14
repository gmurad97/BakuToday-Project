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
                        <?= $this->lang->line("admin_categories_view_page_card_title"); ?> •
                        <?= $category["name_$current_language"]; ?>
                    </h6>
                    <div class="table-responsive pt-3">
                        <table class="table table-hover">
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_categories_view_page_table_name"); ?>
                                    </span>
                                </td>
                                <td><?= $category["name_$current_language"]; ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_categories_view_page_table_status"); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($category["status"]): ?>
                                        <span class="badge border border-success text-success">
                                            <?= $this->lang->line("admin_categories_view_page_status_enabled"); ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge border border-secondary text-secondary">
                                            <?= $this->lang->line("admin_categories_view_page_status_disabled"); ?>
                                        </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_categories_view_page_table_created_at"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <?= $category["created_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("admin_categories_view_page_table_updated_at"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <?= $category["updated_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <a href="<?= base_url('admin/categories'); ?>" class="btn btn-primary mt-3">
                        <?= $this->lang->line("admin_categories_view_page_back_btn"); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
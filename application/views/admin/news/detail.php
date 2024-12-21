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
                        <?= $this->lang->line("view"); ?> •
                        <?= $news["title_$current_language"]; ?>
                    </h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("title"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $news["title_$current_language"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("short_description"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary text-wrap">
                                        <?= $news["short_description_$current_language"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("long_description"); ?>
                                    </span>
                                </td>
                                <td>
                                    <style>
                                        .table td img {
                                            width: auto;
                                            height: auto;
                                            border-radius: 0;
                                        }
                                    </style>
                                    <span class="text-secondary text-wrap">
                                        <?= $news["long_description_$current_language"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("category"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <a href="<?= base_url('admin/categories/') . $news['category_id']; ?>">
                                            <?= $news["category_name_$current_language"]; ?>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("author"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <a href="<?= base_url('admin/profiles/') . $news['author_id']; ?>">
                                            <?= $news["author_first_name"]; ?>
                                            <?= $news["author_last_name"]; ?>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("type"); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($news["type"] === "daily_news"): ?>
                                        <span class="badge border border-info text-info">
                                            <?= $this->lang->line($news["type"]); ?>
                                        </span>
                                    <?php elseif ($news["type"] === "general_news"): ?>
                                        <span class="badge border border-primary text-primary">
                                            <?= $this->lang->line($news["type"]); ?>
                                        </span>
                                    <?php elseif ($news["type"] === "important_news"): ?>
                                        <span class="badge border border-danger text-danger">
                                            <?= $this->lang->line($news["type"]); ?>
                                        </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("status"); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($news["status"]): ?>
                                        <span class="badge border border-success text-success">
                                            <?= $this->lang->line("enabled"); ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge border border-secondary text-secondary">
                                            <?= $this->lang->line("disabled"); ?>
                                        </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("created_at"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $news["created_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("updated_at"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $news["updated_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteModal"
                        class="btn btn-outline-danger">
                        <?= $this->lang->line("delete"); ?>
                    </a>
                    <a href="<?= base_url('admin/news/' . $news['id'] . '/edit'); ?>" class="btn btn-outline-warning">
                        <?= $this->lang->line("edit"); ?>
                    </a>
                    <a href="<?= base_url('admin/news'); ?>" class="btn btn-primary">
                        <?= $this->lang->line("back"); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalTitle">
                    <?= $this->lang->line("modal_confirm_delete_title"); ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <?= $this->lang->line("modal_confirm_delete_description"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <?= $this->lang->line("close"); ?>
                </button>
                <a href="<?= base_url('admin/news/' . $news['id'] . '/delete'); ?>" id="deleteButton"
                    class="btn btn-outline-danger">
                    <?= $this->lang->line("delete"); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
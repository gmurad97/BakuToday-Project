<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?= $this->lang->line("all_news"); ?></h6>
                    <?php $alert = $this->session->flashdata("crud_alert"); ?>
                    <?php if ($alert): ?>
                        <div class="alert <?= $alert['alert_class']; ?> alert-dismissible fade show" role="alert">
                            <i data-feather="<?= $alert['alert_icon']; ?>"></i>
                            <strong><?= $alert['alert_message']['title'] ?></strong>
                            <?= $alert['alert_message']['description'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table id="newsDataTable" class="table">
                            <thead>
                                <tr>
                                    <th><?= $this->lang->line("id"); ?></th>
                                    <th><?= $this->lang->line("image"); ?></th>
                                    <th><?= $this->lang->line("title"); ?></th>
                                    <th><?= $this->lang->line("category"); ?></th>
                                    <th><?= $this->lang->line("author"); ?></th>
                                    <th><?= $this->lang->line("type"); ?></th>
                                    <th><?= $this->lang->line("status"); ?></th>
                                    <th><?= $this->lang->line("created_at"); ?></th>
                                    <th><?= $this->lang->line("updated_at"); ?></th>
                                    <th><i class="icon-lg text-secondary pb-3px" data-feather="menu"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $current_language = $this->session->userdata("admin_lang");
                                $counter = 0;
                                ?>
                                <?php foreach ($news_collection as $news): ?>
                                    <tr>
                                        <td><?= ++$counter; ?></td>
                                        <td>
                                            <a href="<?= base_url('public/uploads/news/') . $news["img"]; ?>" data-lity>
                                                <img style="object-fit:cover;"
                                                    src="<?= base_url('public/uploads/news/') . $news["img"]; ?>"
                                                    alt="Item Image">
                                            </a>
                                        </td>
                                        <td>
                                            <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                                <?= $news["title_$current_language"]; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                                <a href="<?= base_url('admin/categories/') . $news['category_id']; ?>">
                                                    <?= $news["category_name_$current_language"]; ?>
                                                </a>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                                <a href="<?= base_url('admin/profiles/') . $news['author_id']; ?>">
                                                    <?= $news["author_first_name"]; ?>
                                                </a>
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
                                        <td><?= $news["created_at"]; ?></td>
                                        <td><?= $news["updated_at"]; ?></td>

                                        <td>
                                            <div class="dropdown mb-2">
                                                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-primary pb-3px" data-feather="command"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="<?= base_url('admin/news/' . $news['id']); ?>">
                                                        <i data-feather="eye" class="icon-sm text-info me-2"></i>
                                                        <span class="text-info">
                                                            <?= $this->lang->line("view"); ?>
                                                        </span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="<?= base_url('admin/news/' . $news['id']) . '/edit'; ?>">
                                                        <i data-feather="edit-2" class="icon-sm text-warning me-2"></i>
                                                        <span class="text-warning">
                                                            <?= $this->lang->line("edit"); ?>
                                                        </span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal"
                                                        data-url="<?= base_url('admin/news/' . $news['id']) . '/delete'; ?>">
                                                        <i data-feather="trash" class="icon-sm text-danger me-2"></i>
                                                        <span class="text-danger">
                                                            <?= $this->lang->line("delete"); ?>
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
                <a href="javascript:void(0);" id="deleteButton" class="btn btn-outline-danger">
                    <?= $this->lang->line("delete"); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<script>
    document.querySelectorAll("[data-bs-toggle='modal']").forEach(item => {
        item.addEventListener("click", function () {
            document.getElementById("deleteButton").href = this.getAttribute("data-url");
        });
    });
</script>
<?php $this->load->view("admin/partials/scripts"); ?>
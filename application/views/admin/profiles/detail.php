<?php $this->load->view("admin/partials/_head"); ?>
<?php $this->load->view("admin/partials/_sidebar"); ?>
<?php $this->load->view("admin/partials/_navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">
                        <?= $this->lang->line("view"); ?> •
                        <?= $profile["first_name"] . ' ' . $profile["last_name"]; ?>
                    </h6>
                    <?php $notifier = $this->session->flashdata("notifier"); ?>
                    <?php if ($notifier): ?>
                        <div class="alert <?= $notifier['class']; ?> alert-dismissible fade show" role="alert">
                            <i data-feather="<?= $notifier['icon']; ?>"></i>
                            <strong><?= $notifier['messages']['title'] ?></strong>
                            <?= $notifier['messages']['description'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                        </div>
                    <?php endif; ?>
                    <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                        <?php if ($profile["img"]): ?>
                            <a id="profile" href="<?= base_url('public/uploads/profiles/' . $profile["img"]); ?>">
                                <img style="object-fit:cover;width:150px;height:150px;border-radius:50%;" src="<?= base_url('public/uploads/profiles/' . $profile["img"]); ?>">
                            </a>
                        <?php else: ?>
                            <a id="profile" href="<?= base_url('public/admin/assets/images/others/profile-placeholder.png'); ?>">
                                <img style="object-fit:cover;width:150px;height:150px;border-radius:50%;" src="<?= base_url('public/admin/assets/images/others/profile-placeholder.png'); ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("first_name"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $profile["first_name"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("last_name"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $profile["last_name"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("email"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <a href="mailto:<?= $profile['email']; ?>">
                                            <?= $profile["email"]; ?>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("username"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $profile["username"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("role"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="badge rounded-pill <?= in_array($profile["role"], ['root', 'admin']) ? 'bg-danger' : 'bg-primary'; ?>">
                                        <?= $this->lang->line($profile["role"]); ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("status"); ?>
                                    </span>
                                </td>
                                <td>
                                    <form action="<?= base_url('admin/profiles/' . $profile['id'] . '/status'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                        <div class="form-check form-switch">
                                            <input name="status" type="checkbox" class="form-check-input" onclick="this.form.submit();" <?= $profile["status"] ? "checked" : ""; ?>>
                                        </div>
                                    </form>
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
                                        <?= $profile["created_at"]; ?>
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
                                        <?= $profile["updated_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <?php if ($this->rolesmanager->has_access("admin")): ?>
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-outline-danger">
                            <?= $this->lang->line("delete"); ?>
                        </a>
                    <?php endif; ?>
                    <a href="<?= base_url('admin/profiles/' . $profile['id'] . '/edit'); ?>" class="btn btn-outline-warning">
                        <?= $this->lang->line("edit"); ?>
                    </a>
                    <?php if ($this->rolesmanager->has_access("admin")): ?>
                        <a href="<?= base_url('admin/profiles'); ?>" class="btn btn-primary">
                            <?= $this->lang->line("back"); ?>
                        </a>
                    <?php else: ?>
                        <a href="<?= base_url('admin/dashboard'); ?>" class="btn btn-primary">
                            <?= $this->lang->line("back"); ?>
                        </a>
                    <?php endif; ?>
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
                <a href="<?= base_url('admin/profiles/' . $profile['id'] . '/delete'); ?>" id="deleteButton" class="btn btn-outline-danger">
                    <?= $this->lang->line("delete"); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/_footer"); ?>
<?php $this->load->view("admin/partials/_scripts"); ?>
<script>
    Fancybox.bind("#profile", {
        groupAll: false
    });
</script>
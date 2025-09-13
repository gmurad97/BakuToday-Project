<?php $this->load->view("admin/partials/_head"); ?>
<?php $this->load->view("admin/partials/_sidebar"); ?>
<?php $this->load->view("admin/partials/_navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">
                        <?= $this->lang->line("edit_administrator"); ?> •
                        <?= $profile['first_name'] . ' ' . $profile['last_name']; ?>
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
                    <form action="<?= base_url('admin/profiles/' . $profile['id'] . '/update'); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">
                                    <span class="text-danger">*</span>
                                    <?= $this->lang->line("first_name"); ?>
                                </label>
                                <input name="first_name" type="text" class="form-control" placeholder="<?= $this->lang->line("enter_your_first_name"); ?>" id="first_name" value="<?= $profile['first_name']; ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">
                                    <span class="text-danger">*</span>
                                    <?= $this->lang->line("last_name"); ?>
                                </label>
                                <input name="last_name" type="text" class="form-control" placeholder="<?= $this->lang->line("enter_your_last_name"); ?>" id="last_name" value="<?= $profile['last_name']; ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">
                                    <span class="text-danger">*</span>
                                    <?= $this->lang->line("email"); ?>
                                </label>
                                <input name="email" type="email" class="form-control" placeholder="example@example.com" id="email" value="<?= $profile['email']; ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="username" class="form-label">
                                    <span class="text-danger">*</span>
                                    <?= $this->lang->line("username"); ?>
                                </label>
                                <input name="username" type="text" class="form-control" placeholder="<?= $this->lang->line("enter_your_username"); ?>" id="username" value="<?= $profile['username']; ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="password" class="form-label">
                                    <?= $this->lang->line("password"); ?>
                                </label>
                                <input name="password" type="password" class="form-control" placeholder="<?= $this->lang->line("unchange_current_password"); ?>" id="password">
                            </div>
                            <div class="col-md-6">
                                <label for="role" class="form-label">
                                    <?= $this->lang->line("role"); ?>
                                </label>
                                <select name="role" class="form-select" id="role" <?= $current_admin_session["role"] === "moderator" ? "disabled" : ""; ?> required>
                                    <option value="root" <?= $profile['role'] === 'root' ? 'selected' : ''; ?>>
                                        <?= $this->lang->line("root"); ?>
                                    </option>
                                    <option value="admin" <?= $profile['role'] === 'admin' ? 'selected' : ''; ?>>
                                        <?= $this->lang->line("admin"); ?>
                                    </option>
                                    <option value="moderator" <?= $profile['role'] === 'moderator' ? 'selected' : ''; ?>>
                                        <?= $this->lang->line("moderator"); ?>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="img" class="form-label">
                                    <?= $this->lang->line("image"); ?>
                                </label>
                                <input name="img" accept="image/jpeg, image/jpg, image/png, image/webp" type="file" class="form-control" id="img">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check form-switch">
                                    <input name="status" type="checkbox" class="form-check-input" id="status" <?= $profile['status'] ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="status">
                                        <?= $this->lang->line("status"); ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-warning submit">
                            <?= $this->lang->line("update"); ?>
                        </button>
                        <a href="<?= base_url('admin/profiles'); ?>" class="btn btn-primary">
                            <?= $this->lang->line("back"); ?>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/_footer"); ?>
<?php $this->load->view("admin/partials/_scripts"); ?>


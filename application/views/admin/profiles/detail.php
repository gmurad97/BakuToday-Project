<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">
                        <?= $this->lang->line("view"); ?> •
                        <?= $profile["first_name"] . ' ' . $profile["last_name"]; ?>
                    </h6>
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
                                        <?= $profile["email"]; ?>
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
                                    <span class="text-secondary">
                                        <?= $profile["role"]; ?>
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
                                    <?php if ($profile["status"]): ?>
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
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        <?= $this->lang->line("image"); ?>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <a href="<?= base_url('uploads/' . $profile["img"]); ?>" data-lity>
                                            <img style="object-fit:cover;"
                                                src="<?= base_url('uploads/' . $profile["img"]); ?>" alt="Profile Image">
                                        </a>
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
                    <a href="<?= base_url('admin/profiles/' . $profile['id'] . '/edit'); ?>"
                        class="btn btn-outline-warning">
                        <?= $this->lang->line("edit"); ?>
                    </a>
                    <a href="<?= base_url('admin/profiles'); ?>" class="btn btn-primary">
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
                <a href="<?= base_url('admin/profiles/' . $profile['id'] . '/delete'); ?>" id="deleteButton"
                    class="btn btn-outline-danger">
                    <?= $this->lang->line("delete"); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>

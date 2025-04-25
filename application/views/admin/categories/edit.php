<?php $this->load->view("admin/partials/_head"); ?>
<?php $this->load->view("admin/partials/_sidebar"); ?>
<?php $this->load->view("admin/partials/_navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php $current_language = $this->session->userdata("admin_lang"); ?>
                    <h6 class="card-title">
                        <?= $this->lang->line("edit_category"); ?> •
                        <?= $category["name_$current_language"]; ?>
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
                    <form action="<?= base_url('admin/categories/' . $category['id'] . '/update'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="az-line-tab" data-bs-toggle="tab" href="#az" role="tab" aria-controls="az" aria-selected="true">
                                    AZ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="en-line-tab" data-bs-toggle="tab" href="#en" role="tab" aria-controls="en" aria-selected="true">
                                    EN
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ru-line-tab" data-bs-toggle="tab" href="#ru" role="tab" aria-controls="ru" aria-selected="true">
                                    RU
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3" id="lineTabContent">
                            <div class="tab-pane fade show active" id="az" role="tabpanel" aria-labelledby="az-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_name_az" class="form-label">
                                                <span class="text-danger">*</span>
                                                <?= $this->lang->line("category_name"); ?>
                                            </label>
                                            <input name="category_name_az" type="text" class="form-control" placeholder="Siyasət" id="category_name_az" value="<?= $category['name_az']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_name_en" class="form-label">
                                                <span class="text-danger">*</span>
                                                <?= $this->lang->line("category_name"); ?>
                                            </label>
                                            <input name="category_name_en" type="text" class="form-control" placeholder="Politics" id="category_name_en" value="<?= $category['name_en']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_name_ru" class="form-label">
                                                <span class="text-danger">*</span>
                                                <?= $this->lang->line("category_name"); ?>
                                            </label>
                                            <input name="category_name_ru" type="text" class="form-control" placeholder="Политика" id="category_name_ru" value="<?= $category['name_ru']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <div class="form-check form-switch mb-2">
                                    <input name="category_status" type="checkbox" class="form-check-input" id="categoryStatus" <?= $category["status"] ? "checked" : ""; ?>>
                                    <label class="form-check-label" for="categoryStatus">
                                        <?= $this->lang->line("status"); ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-warning">
                            <?= $this->lang->line("update"); ?>
                        </button>
                        <a href="<?= base_url('admin/categories'); ?>" class="btn btn-primary">
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
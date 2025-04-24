<?php $this->load->view("admin/partials/_head"); ?>
<?php $this->load->view("admin/partials/_sidebar"); ?>
<?php $this->load->view("admin/partials/_navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">
                        <?= $this->lang->line("create_advertising"); ?>
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
                    <form action="<?= base_url('admin/advertising/store'); ?>" method="POST" enctype="multipart/form-data">
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
                                            <label for="title_az" class="form-label">
                                                <span class="text-danger">*</span>
                                                <?= $this->lang->line("title"); ?>
                                            </label>
                                            <input name="title_az" maxlength="255" type="text" class="form-control" placeholder="Ən yaxşı seçiminiz üçün reklam edin!" id="title_az" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="title_en" class="form-label">
                                                <span class="text-danger">*</span>
                                                <?= $this->lang->line("title"); ?>
                                            </label>
                                            <input name="title_en" maxlength="255" type="text" class="form-control" placeholder="Advertise for the best results!" id="title_en" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="title_ru" class="form-label">
                                                <span class="text-danger">*</span>
                                                <?= $this->lang->line("title"); ?>
                                            </label>
                                            <input name="title_ru" maxlength="255" type="text" class="form-control" placeholder="Рекламируйтесь для лучших результатов!" id="title_ru" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="location" class="form-label">
                                    <span class="text-danger">*</span>
                                    <?= $this->lang->line("location"); ?>
                                </label>
                                <select name="location" id="location" class="form-select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="img" class="form-label">
                                    <span class="text-danger">*</span>
                                    <?= $this->lang->line("image"); ?>
                                </label>
                                <input name="img" accept="image/jpeg, image/jpg, image/png, image/webp" type="file" class="form-control" id="img" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <div class="form-check form-switch mb-2">
                                    <input name="status" type="checkbox" class="form-check-input" id="status" checked>
                                    <label class="form-check-label" for="status">
                                        <?= $this->lang->line("status"); ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary submit">
                            <?= $this->lang->line("create"); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/_footer"); ?>
<?php $this->load->view("admin/partials/_scripts"); ?>
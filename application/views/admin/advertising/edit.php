<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">
                        <?= $this->lang->line("admin_advertising_create_page_card_title"); ?>
                    </h6>
                    <form action="<?= base_url('admin/news/store'); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                            value="<?= $this->security->get_csrf_hash(); ?>">
                        <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="az-line-tab" data-bs-toggle="tab" href="#az" role="tab"
                                    aria-controls="az" aria-selected="true">
                                    AZ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="en-line-tab" data-bs-toggle="tab" href="#en" role="tab"
                                    aria-controls="en" aria-selected="true">
                                    EN
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ru-line-tab" data-bs-toggle="tab" href="#ru" role="tab"
                                    aria-controls="ru" aria-selected="true">
                                    RU
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3" id="lineTabContent">
                            <div class="tab-pane fade show active" id="az" role="tabpanel"
                                aria-labelledby="az-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="advertising_title_az" class="form-label">
                                                <?= $this->lang->line("admin_advertising_create_page_title_label"); ?>
                                            </label>
                                            <input name="advertising_title_az" maxlength="255" type="text"
                                                class="form-control" placeholder="Ən yaxşı seçiminiz üçün reklam edin!"
                                                id="advertising_title_az" value="<?= $advertising['title_az']; ?>"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="advertising_title_en" class="form-label">
                                                <?= $this->lang->line("admin_advertising_create_page_title_label"); ?>
                                            </label>
                                            <input name="advertising_title_en" maxlength="255" type="text"
                                                class="form-control" placeholder="Advertise for the best results!"
                                                id="advertising_title_en" value="<?= $advertising['title_en']; ?>"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="advertising_title_ru" class="form-label">
                                                <?= $this->lang->line("admin_advertising_create_page_title_label"); ?>
                                            </label>
                                            <input name="advertising_title_ru" maxlength="255" type="text"
                                                class="form-control"
                                                placeholder="Рекламируйтесь для лучших результатов!"
                                                id="advertising_title_ru" value="<?= $advertising['title_ru']; ?>"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="advertising_location" class="form-label">
                                    <?= $this->lang->line("admin_advertising_create_page_location_label"); ?>
                                </label>
                                <select name="advertising_location" id="advertising_location" class="form-select">
                                    <option value="1" <?= $advertising['location'] === "1" ? "selected" : ""; ?>>
                                        1
                                    </option>
                                    <option value="2" <?= $advertising['location'] === "2" ? "selected" : ""; ?>>
                                        2
                                    </option>
                                    <option value="3" <?= $advertising['location'] === "3" ? "selected" : ""; ?>>
                                        3
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="advertising_img" class="form-label">
                                    <?= $this->lang->line("admin_advertising_create_page_image_label"); ?>
                                </label>
                                <input name="advertising_img" type="file" class="form-control" id="advertising_img"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <div class="form-check form-switch mb-2">
                                    <input name="advertising_status" type="checkbox" class="form-check-input"
                                        id="advertising_status" <?= $advertising['status'] ? "checked" : ""; ?>>
                                    <label class="form-check-label" for="advertising_status">
                                        <?= $this->lang->line("admin_advertising_create_page_status_label"); ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary submit">
                            <?= $this->lang->line("admin_advertising_create_page_create_btn"); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
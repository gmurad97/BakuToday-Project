<?php $this->load->view("admin/partials/_head"); ?>
<?php $this->load->view("admin/partials/_sidebar"); ?>
<?php $this->load->view("admin/partials/_navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?= $this->lang->line("create_news"); ?></h6>
                    <?php $notifier = $this->session->flashdata("notifier"); ?>
                    <?php if ($notifier): ?>
                        <div class="alert <?= $notifier['class']; ?> alert-dismissible fade show" role="alert">
                            <i data-feather="<?= $notifier['icon']; ?>"></i>
                            <strong><?= $notifier['messages']['title'] ?></strong>
                            <?= $notifier['messages']['description'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('admin/news/store'); ?>" method="POST" enctype="multipart/form-data">
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
                                    <div class="mb-3">
                                        <label for="title_az" class="form-label">
                                            <span class="text-danger">*</span>
                                            <?= $this->lang->line("title"); ?>
                                        </label>
                                        <input type="text" name="title_az" id="title_az" class="form-control" placeholder="Azərbaycanın yeni texnoloji nailiyyəti" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="short_description_az" class="form-label">
                                            <span class="text-danger">*</span>
                                            <?= $this->lang->line("short_description"); ?>
                                        </label>
                                        <textarea name="short_description_az" id="short_description_az" class="form-control" rows="3" placeholder="Bu yenilik ölkənin innovasiya potensialını artıracaq." required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="long_description_az" class="form-label">
                                            <span class="text-danger">*</span>
                                            <?= $this->lang->line("long_description"); ?>
                                        </label>
                                        <textarea name="long_description_az" id="long_description_az" class="form-control" rows="10" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="title_en" class="form-label">
                                            <span class="text-danger">*</span>
                                            <?= $this->lang->line("title"); ?>
                                        </label>
                                        <input type="text" name="title_en" id="title_en" class="form-control" placeholder="Azerbaijan's new technological achievement" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="short_description_en" class="form-label">
                                            <span class="text-danger">*</span>
                                            <?= $this->lang->line("short_description"); ?>
                                        </label>
                                        <textarea name="short_description_en" id="short_description_en" class="form-control" rows="3" placeholder="This innovation will boost the country's innovation potential." required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="long_description_en" class="form-label">
                                            <span class="text-danger">*</span>
                                            <?= $this->lang->line("long_description"); ?>
                                        </label>
                                        <textarea name="long_description_en" id="long_description_en" class="form-control" rows="10" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="title_ru" class="form-label">
                                            <span class="text-danger">*</span>
                                            <?= $this->lang->line("title"); ?>
                                        </label>
                                        <input type="text" name="title_ru" id="title_ru" class="form-control" placeholder="Новая технологическая победа Азербайджана" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="short_description_ru" class="form-label">
                                            <span class="text-danger">*</span>
                                            <?= $this->lang->line("short_description"); ?>
                                        </label>
                                        <textarea name="short_description_ru" id="short_description_ru" class="form-control" rows="3" placeholder="Эта новинка усилит инновационный потенциал страны." required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="long_description_ru" class="form-label">
                                            <span class="text-danger">*</span>
                                            <?= $this->lang->line("long_description"); ?>
                                        </label>
                                        <textarea name="long_description_ru" id="long_description_ru" class="form-control" rows="10" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="img" class="form-label">
                                        <span class="text-danger">*</span>
                                        <?= $this->lang->line("image"); ?>
                                    </label>
                                    <input name="img" id="img" type="file" class="form-control" accept="image/jpeg, image/jpg, image/png, image/webp" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="multi_img" class="form-label">
                                        <span class="text-danger">*</span>
                                        <?= $this->lang->line("multiple_images"); ?>
                                    </label>
                                    <input name="multi_img[]" id="multi_img" type="file" class="form-control" multiple required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="video_link" class="form-label">
                                        <?= $this->lang->line("video_link"); ?>
                                    </label>
                                    <input type="text" name="video_link" id="video_link" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">
                                        <span class="text-danger">*</span>
                                        <?= $this->lang->line("category"); ?>
                                    </label>
                                    <select name="category_id" id="category_id" class="form-select">
                                        <?php $cure = $this->session->userdata("admin_lang"); ?>
                                        <?php foreach ($categories_collection as $category): ?>
                                            <option value="<?= $category["id"]; ?>"><?= $category["name_$cure"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="type" class="form-label">
                                        <span class="text-danger">*</span>
                                        <?= $this->lang->line("type"); ?>
                                    </label>
                                    <select name="type" id="type" class="form-select">
                                        <option value="daily_news">
                                            <?= $this->lang->line("daily_news"); ?>
                                        </option>
                                        <option value="important_news">
                                            <?= $this->lang->line("important_news"); ?>
                                        </option>
                                        <option value="general_news">
                                            <?= $this->lang->line("general_news"); ?>
                                        </option>
                                        <option value="naxcivan">
                                            <?= $this->lang->line("naxcivan"); ?>
                                        </option>
                                        <option value="zengezur_corridor">
                                            <?= $this->lang->line("zengezur_corridor"); ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check form-switch">
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
<script src="<?= base_url('public/admin/assets/vendors/ckeditor@4.22.1/ckeditor.js'); ?>"></script>
<script>
    CKEDITOR.replace("long_description_az", {
        on: {
            instanceReady: function (e) {
                let editorElement = e.editor.container.$;
                editorElement.style.marginTop = "0.5rem";
                editorElement.style.marginBottom = "0.5rem";
                editorElement.style.boxShadow = "none";
            }
        }
    });
    CKEDITOR.replace("long_description_en", {
        on: {
            instanceReady: function (e) {
                let editorElement = e.editor.container.$;
                editorElement.style.marginTop = "0.5rem";
                editorElement.style.marginBottom = "0.5rem";
                editorElement.style.boxShadow = "none";
            }
        }
    });
    CKEDITOR.replace("long_description_ru", {
        on: {
            instanceReady: function (e) {
                let editorElement = e.editor.container.$;
                editorElement.style.marginTop = "0.5rem";
                editorElement.style.marginBottom = "0.5rem";
                editorElement.style.boxShadow = "none";
            }
        }
    });
</script>

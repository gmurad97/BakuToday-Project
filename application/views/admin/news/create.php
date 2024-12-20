<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create News</h6>
                    <form action="<?= base_url('admin/news/store'); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                            value="<?= $this->security->get_csrf_hash(); ?>">
                        
                        <!-- Tabs for language selection -->
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

                        <!-- Tab content -->
                        <div class="tab-content mt-3" id="lineTabContent">
                            <!-- AZ language tab -->
                            <div class="tab-pane fade show active" id="az" role="tabpanel"
                                aria-labelledby="az-line-tab">
                                <div class="row">
                                    <!-- Title input -->
                                    <div class="mb-3">
                                        <label for="title_az" class="form-label">Title</label>
                                        <input type="text" name="title_az" id="title_az" class="form-control" placeholder="Enter title in AZ">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Short description input -->
                                    <div class="mb-3">
                                        <label for="short_description_az" class="form-label">Short desc</label>
                                        <textarea name="short_description_az" id="short_description_az" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Full description input -->
                                    <div class="mb-3">
                                        <label for="long_description_az" class="form-label">Full desc</label>
                                        <textarea name="long_description_az" id="long_description_az" class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- EN language tab -->
                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">
                                    <!-- Title input -->
                                    <div class="mb-3">
                                        <label for="title_en" class="form-label">Title</label>
                                        <input type="text" name="title_en" id="title_en" class="form-control" placeholder="Enter title in EN">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Short description input -->
                                    <div class="mb-3">
                                        <label for="short_description_en" class="form-label">Short desc</label>
                                        <textarea name="short_description_en" id="short_description_en" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Full description input -->
                                    <div class="mb-3">
                                        <label for="long_description_en" class="form-label">Full desc</label>
                                        <textarea name="long_description_en" id="long_description_en" class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- RU language tab -->
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">
                                <div class="row">
                                    <!-- Title input -->
                                    <div class="mb-3">
                                        <label for="title_ru" class="form-label">Title</label>
                                        <input type="text" name="title_ru" id="title_ru" class="form-control" placeholder="Enter title in RU">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Short description input -->
                                    <div class="mb-3">
                                        <label for="short_description_ru" class="form-label">Short desc</label>
                                        <textarea name="short_description_ru" id="short_description_ru" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Full description input -->
                                    <div class="mb-3">
                                        <label for="long_description_ru" class="form-label">Full desc</label>
                                        <textarea name="long_description_ru" id="long_description_ru" class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Image upload -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="img" class="form-label">Image</label>
                                    <input name="img" id="img" type="file" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="multi_img" class="form-label">Multiple Images</label>
                                    <input name="multi_img[]" id="multi_img" type="file" class="form-control" multiple>
                                </div>
                            </div>
                        </div>
                        <!-- <script>
                            let textFile = document.getElementById('multi_img');
                            textFile[0].innerHTML = "really?!";

                        </script> -->

                        <!-- Category and Type selection -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <?php $cure = $this->session->userdata("admin_lang"); ?>
                                        <?php foreach ($categories_collection as $category): ?>
                                            <option value="<?= $category["id"]; ?>"><?= $category["name_$cure"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="daily_news">Daily News</option>
                                        <option value="important_news">Important news</option>
                                        <option value="general_news">General news</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Status switch -->
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

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
<script>
    // CKEditor initialization for each language description
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

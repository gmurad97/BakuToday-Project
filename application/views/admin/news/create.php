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
                            <!-- AZ Tab -->
                            <div class="tab-pane fade show active" id="az" role="tabpanel" aria-labelledby="az-line-tab">
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label class="form-label">Title (AZ)</label>
                                        <input type="text" class="form-control" name="title_az" placeholder="Enter title in Azerbaijani" required>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="short-description-az" class="form-label">Short Description (AZ)</label>
                                        <textarea class="form-control" id="short-description-az" name="short_description_az" rows="3" placeholder="Enter short description" required></textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="long-description-az" class="form-label">Long Description (AZ)</label>
                                        <textarea class="form-control" id="long-description-az" name="long_description_az" rows="5" placeholder="Enter detailed description" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- EN Tab -->
                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label class="form-label">Title (EN)</label>
                                        <input type="text" class="form-control" name="title_en" placeholder="Enter title in English" required>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="short-description-en" class="form-label">Short Description (EN)</label>
                                        <textarea class="form-control" id="short-description-en" name="short_description_en" rows="3" placeholder="Enter short description" required></textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="long-description-en" class="form-label">Long Description (EN)</label>
                                        <textarea class="form-control" id="long-description-en" name="long_description_en" rows="5" placeholder="Enter detailed description" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- RU Tab -->
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label class="form-label">Title (RU)</label>
                                        <input type="text" class="form-control" name="title_ru" placeholder="Enter title in Russian" required>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="short-description-ru" class="form-label">Short Description (RU)</label>
                                        <textarea class="form-control" id="short-description-ru" name="short_description_ru" rows="3" placeholder="Enter short description" required></textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="long-description-ru" class="form-label">Long Description (RU)</label>
                                        <textarea class="form-control" id="long-description-ru" name="long_description_ru" rows="5" placeholder="Enter detailed description" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Image Upload Section -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="img" class="form-label">Main Image</label>
                                <input type="file" class="form-control" id="img" name="img" required>
                            </div>
                        </div>

                        <!-- Multiple Image Upload Section -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="multi_img" class="form-label">Multiple Images</label>
                                <input type="file" class="form-control" id="multi_img" name="multi_img[]" multiple>
                                <small class="form-text text-muted">Hold down the 'Ctrl' or 'Cmd' key to select multiple files.</small>
                            </div>
                        </div>

                        <!-- Category and Author Selection -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="category_id" class="form-label">Category</label>
                                <select class="form-select" name="category_id" id="category_id" required>
                                    <!-- Add categories dynamically -->
                                    <option value="">Select Category</option>
                                    <option value="1">Technology</option>
                                    <option value="2">Business</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="author_id" class="form-label">Author</label>
                                <select class="form-select" name="author_id" id="author_id" required>
                                    <!-- Add authors dynamically -->
                                    <option value="">Select Author</option>
                                    <option value="1">John Doe</option>
                                    <option value="2">Jane Smith</option>
                                </select>
                            </div>
                        </div>

                        <!-- Type of News -->
                        <div class="mb-3">
                            <label for="type" class="form-label">News Type</label>
                            <select class="form-select" name="type" id="type" required>
                                <option value="daily_news">Daily News</option>
                                <option value="important_news">Important News</option>
                                <option value="general_news">General News</option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" id="status" required>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>

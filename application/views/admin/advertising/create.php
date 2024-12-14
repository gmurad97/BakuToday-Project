<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create Advertising</h6>
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
                            <div class="tab-pane fade show active" id="az" role="tabpanel"
                                aria-labelledby="az-line-tab">



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_name_az" class="form-label">
                                                <?= $this->lang->line("admin_categories_create_page_category_name_label"); ?>
                                            </label>
                                            <input name="category_name_az" maxlength="255" type="text"
                                                class="form-control" placeholder="Siyasət" id="category_name_az">
                                        </div>
                                    </div>
                                </div>


                            </div>































                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_name_az" class="form-label">
                                                <?= $this->lang->line("admin_categories_create_page_category_name_label"); ?>
                                            </label>
                                            <input name="category_name_az" maxlength="255" type="text"
                                                class="form-control" placeholder="Siyasət" id="category_name_az">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_name_az" class="form-label">
                                                <?= $this->lang->line("admin_categories_create_page_category_name_label"); ?>
                                            </label>
                                            <input name="category_name_az" maxlength="255" type="text"
                                                class="form-control" placeholder="Siyasət" id="category_name_az">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">

                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control" placeholder="Enter first name">
                            </div>

                        </div><!-- Row -->
                        <div class="row">

                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="file" class="form-control" placeholder="Enter first name" multiple>
                            </div>

                        </div><!-- Row -->
















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
    CKEDITOR.replace("tinymceExample", {
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
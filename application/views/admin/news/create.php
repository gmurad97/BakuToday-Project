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
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example
                                            textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example
                                            textarea</label>
                                        <textarea class="form-control" name="tinymce" id="tinymceExample1"
                                            rows="10"></textarea>
                                    </div>
                                </div>



                            </div>































                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example
                                            textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example
                                            textarea</label>
                                        <textarea class="form-control" name="tinymce" id="tinymceExample2"
                                            rows="10"></textarea>
                                    </div>
                                </div>





                            </div>
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">





                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example
                                            textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example
                                            textarea</label>
                                        <textarea class="form-control" name="tinymce" id="tinymceExample3"
                                            rows="10"></textarea>
                                    </div>
                                </div>
                            </div>


                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="advertising_title_ru" class="form-label">Title (RU)</label>
                                    <input name="advertising_title_ru" id="advertising_title_ru" type="text"
                                        class="form-control" placeholder="Siyasət" maxlength="255">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="img" class="form-label">Image</label>
                                    <input name="img" id="img" type="file" class="form-control" accept="image/*">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="multi_img" class="form-label">Multiple Images</label>
                                    <input name="multi_img[]" id="multi_img" type="file" class="form-control" multiple>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">Select a category</option>
                                        <option value="1">Category 1</option>
                                        <option value="2">Category 2</option>
                                        <option value="3">Category 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="author_id" class="form-label">Author</label>
                                    <select name="author_id" id="author_id" class="form-control">
                                        <option value="">Select an author</option>
                                        <option value="1">Author 1</option>
                                        <option value="2">Author 2</option>
                                        <option value="3">Author 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="">Select a type</option>
                                        <option value="news">News</option>
                                        <option value="article">Article</option>
                                        <option value="blog">Blog</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                            </div>
                        </div>















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
    CKEDITOR.replace("tinymceExample1", {
        on: {
            instanceReady: function (e) {
                let editorElement = e.editor.container.$;
                editorElement.style.marginTop = "0.5rem";
                editorElement.style.marginBottom = "0.5rem";
                editorElement.style.boxShadow = "none";
            }
        }
    });
    CKEDITOR.replace("tinymceExample2", {
        on: {
            instanceReady: function (e) {
                let editorElement = e.editor.container.$;
                editorElement.style.marginTop = "0.5rem";
                editorElement.style.marginBottom = "0.5rem";
                editorElement.style.boxShadow = "none";
            }
        }
    });
    CKEDITOR.replace("tinymceExample3", {
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
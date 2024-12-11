<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create Category</h6>
                    <form action="<?= base_url('admin/categories/store'); ?>" method="POST"
                        enctype="application/x-www-form-urlencoded">
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
                                            <label class="form-label">Category name</label>
                                            <input maxlength="255" type="text" class="form-control"
                                                placeholder="Economics" id="defaultconfig">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Category name</label>
                                            <input maxlength="255" type="text" class="form-control"
                                                placeholder="Economics">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Category name</label>
                                            <input type="text" class="form-control" placeholder="Economics">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Sub category</label>
                                <select class="form-select mb-3">
                                    <option selected>None</option>
                                    <!-- <?php
                                    /* renderCategories(
                                        $categories_collection, // Массив категорий
                                        'id',                   // Поле ID
                                        'parent_id',            // Поле родительского ID
                                        'name_en'               // Поле для имени (например, на английском)
                                    ); */
                                    ?> -->
                                </select>
                            </div>
                        </div>







                        <div class="row">
                            <div class="mb-3">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="categoryStatus" checked>
                                    <label class="form-check-label" for="categoryStatus">Status</label>
                                </div>
                            </div>
                        </div>




                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
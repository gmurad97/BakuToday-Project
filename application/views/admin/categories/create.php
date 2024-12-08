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
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Category Name</label>
                                            <input type="text" class="form-control" placeholder="Economics">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <?php
                                            function renderCategories($categories, $parentId = 0, $level = 0)
                                            {
                                                foreach ($categories as $category) {
                                                    if ($category['parent_id'] == $parentId) {
                                                        // Отступ для вложенности
                                                        $indent = str_repeat('-- ', $level);
                                                        echo '<option value="' . $category['id'] . '">' . $indent . $category['name_en'] . '</option>';
                                                        // Рекурсивный вызов для вложенных категорий
                                                        renderCategories($categories, $category['id'], $level + 1);
                                                    }
                                                }
                                            }
                                            ?>
                                            <label class="form-label">Sub category</label>
                                            <select class="form-select mb-3">
                                                <option selected>Open this select menu</option>
                                                <?php renderCategories($categories_collection); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>










                                <div class="row">
                                    <div class="mb-3">
                                        <div class="form-check form-switch mb-2">
                                            <input type="checkbox" class="form-check-input" id="formSwitch1" checked>
                                            <label class="form-check-label" for="formSwitch1">Status</label>
                                        </div>
                                    </div>
                                </div>



                            </div>































                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-line-tab">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter first name">
                                        </div>
                                    </div><!-- Col -->


                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter first name">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Default</label>
                                            <select class="form-select mb-3">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->






                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter last name">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->






                            </div>
                            <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-line-tab">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter first name">
                                        </div>
                                    </div><!-- Col -->






                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter last name">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->















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
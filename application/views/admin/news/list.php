<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/partials/head"); ?>

<body>
    <div class="main-wrapper">
        <?php $this->load->view("admin/partials/sidebar"); ?>
        <div class="page-wrapper">
            <?php $this->load->view("admin/partials/navbar"); ?>
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">All News</h6>








                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Img</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                                <th>Created At</th>

                                                <th>Control</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($news_array as $news): ?>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <img src="<?= base_url("public/uploads/news/" . $news["slug"] . "/" . $news["img"]); ?>"
                                                            alt="">
                                                    </td>
                                                    <td><?= $news["title_az"]; ?></td>
                                                    <td><?= $news["category_id"]; ?></td>
                                                    <td><?= $news["type"]; ?></td>
                                                    <td><?= $news["status"]; ?></td>
                                                    <td><?= $news["created_at"]; ?></td>

                                                    <td>
                                                        <div class="dropdown mb-2">
                                                            <a type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="icon-lg text-secondary pb-3px"
                                                                    data-feather="more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="javascript:;"><i data-feather="eye"
                                                                        class="icon-sm me-2"></i> <span
                                                                        class="">View</span></a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="javascript:;"><i data-feather="edit-2"
                                                                        class="icon-sm me-2"></i> <span
                                                                        class="">Edit</span></a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="javascript:;"><i data-feather="trash"
                                                                        class="icon-sm me-2"></i> <span
                                                                        class="">Delete</span></a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="javascript:;"><i data-feather="printer"
                                                                        class="icon-sm me-2"></i> <span
                                                                        class="">Print</span></a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="javascript:;"><i data-feather="download"
                                                                        class="icon-sm me-2"></i> <span
                                                                        class="">Download</span></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>




















                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <?php $this->load->view("admin/partials/footer"); ?>
        </div>
    </div>
    <?php $this->load->view("admin/partials/scripts"); ?>
</body>

</html>
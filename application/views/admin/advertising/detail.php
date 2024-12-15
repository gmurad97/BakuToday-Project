<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php $current_language = $this->session->userdata("admin_lang"); ?>
                    <h6 class="card-title">
                        <?= $this->lang->line("admin_categories_view_page_card_title"); ?> •
                        <?= $advertising["title_$current_language"]; ?>
                    </h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        Title
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $advertising["title_$current_language"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        SUKA 2
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $advertising["location"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        KOROLEVA suka suka suka 3
                                    </span>
                                </td>
                                <td>

                                    <span class="text-secondary">
                                        <style>
                                            /* Превью изображения */
                                            a[data-lity] img {
                                                width: 48px;
                                                /* Размер превью изображения */
                                                height: 48px;
                                                object-fit: cover;
                                                border: 2px ridge #6571FF;
                                                border-radius: 50%;
                                                box-shadow: outset 0px 0px 3px 1px #6571FF;
                                                animation: pulse 2048ms infinite linear alternate;
                                                filter: grayscale(0);
                                                transition: filter 256ms linear;
                                            }

                                            a[data-lity] img:hover {
                                                filter: grayscale(1);
                                            }

                                            @keyframes pulse {
                                                from {
                                                    box-shadow: 0px 0px 0px #6571FF;
                                                }

                                                to {
                                                    box-shadow: 0px 0px 12px #6571FF;
                                                }
                                            }

                                            /* Изменяем размер изображения в модальном окне */
                                            .lity-content img {
                                                max-width: 80vw;
                                                /* Ограничиваем максимальную ширину изображения */
                                                max-height: 80vh;
                                                /* Ограничиваем максимальную высоту изображения */
                                                object-fit: contain;
                                                /* Сохраняем пропорции изображения */
                                            }
                                        </style>
                                        <a href="<?= base_url("public/uploads/advertising/") . $advertising["img"]; ?>"
                                            data-lity>
                                            <img width="150" height="150"
                                                src="<?= base_url("public/uploads/advertising/") . $advertising["img"]; ?>"
                                                alt="Нажми для увеличения">
                                        </a>

                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        SUKA
                                    </span>
                                </td>
                                <td>
                                    <?php if ($advertising["status"]): ?>
                                        <span class="badge border border-success text-success">
                                            ENABLED
                                        </span>
                                    <?php else: ?>
                                        <span class="badge border border-secondary text-secondary">
                                            DISABLED
                                        </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        SUKA CREATED
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $advertising["created_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-uppercase text-primary">
                                        SUKA EDITED
                                    </span>
                                </td>
                                <td>
                                    <span class="text-secondary">
                                        <?= $advertising["updated_at"]; ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal"
                        class="btn btn-outline-danger">
                        delete
                    </a>
                    <a href="<?= base_url('admin/categories/' . $advertising['id'] . '/edit'); ?>"
                        class="btn btn-outline-warning">
                        edited
                    </a>
                    <a href="<?= base_url('admin/categories'); ?>" class="btn btn-primary">
                        back btn
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCategoryModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCategoryModalTitle">
                    <?= $this->lang->line("admin_categories_list_page_delete_modal_title"); ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <?= $this->lang->line("admin_categories_list_page_delete_modal_description"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <?= $this->lang->line("admin_categories_list_page_delete_modal_close_btn"); ?>
                </button>
                <a href="<?= base_url('admin/categories/' . $advertising['id'] . '/delete'); ?>"
                    id="deleteCategoryButton" class="btn btn-outline-danger">
                    <?= $this->lang->line("admin_categories_list_page_delete_modal_delete_btn"); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
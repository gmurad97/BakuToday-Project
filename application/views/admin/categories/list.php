<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?= $this->lang->line("all_categories"); ?></h6>
                    <?php $alert = $this->session->flashdata("crud_alert"); ?>
                    <?php if ($alert): ?>
                        <div class="alert <?= $alert['alert_class']; ?> alert-dismissible fade show" role="alert">
                            <i data-feather="<?= $alert['alert_icon']; ?>"></i>
                            <strong><?= $alert['alert_message']['title'] ?></strong>
                            <?= $alert['alert_message']['description'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table id="categoriesDataTable" class="table">
                            <thead>
                                <tr>
                                    <th><?= $this->lang->line("id"); ?></th>
                                    <th><?= $this->lang->line("name"); ?></th>
                                    <th><?= $this->lang->line("status"); ?></th>
                                    <th><?= $this->lang->line("created_at"); ?></th>
                                    <th><?= $this->lang->line("updated_at"); ?></th>
                                    <th><i class="icon-lg text-secondary pb-3px" data-feather="menu"></i></th>
                                </tr>
                            </thead>

                        </table>

                        <!-- DataTables CSS and JS library -->
                        <script src="<?= base_url('public/admin/assets/vendors/datatables@2.1.8/datatables.min.js'); ?>"></script>
                        <script>

                            $('#categoriesDataTable').DataTable({
                                processing: true,
                                serverSide: true,
                                ajax: {
                                    url: '<?= base_url("admin/categories/zn"); ?>',
                                    type: 'POST',
                                    data: function (d) {
                                        d['<?= $this->security->get_csrf_token_name(); ?>'] = '<?= $this->security->get_csrf_hash(); ?>';
                                    }
                                },
                                pageLength: 2, // Лимит записей на странице
                                lengthMenu: [2, 5, 10, 25, 50, 100], // Опции для выбора количества записей
                                order: [[0, 'asc']]
                            });

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalTitle">
                    <?= $this->lang->line("modal_confirm_delete_title"); ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <?= $this->lang->line("modal_confirm_delete_description"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <?= $this->lang->line("close"); ?>
                </button>
                <a href="javascript:void(0);" id="deleteButton" class="btn btn-outline-danger">
                    <?= $this->lang->line("delete"); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<script>
    document.querySelectorAll("[data-bs-toggle='modal']").forEach(item => {
        item.addEventListener("click", function () {
            document.getElementById("deleteButton").href = this.getAttribute("data-url");
        });
    });
</script>

<?php $this->load->view("admin/partials/scripts"); ?>
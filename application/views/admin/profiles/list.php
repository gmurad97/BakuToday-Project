<?php $this->load->view("admin/partials/_head"); ?>
<?php $this->load->view("admin/partials/_sidebar"); ?>
<?php $this->load->view("admin/partials/_navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?= $this->lang->line("all_administrators"); ?></h6>
                    <?php $notifier = $this->session->flashdata("notifier"); ?>
                    <?php if ($notifier): ?>
                        <div class="alert <?= $notifier['class']; ?> alert-dismissible fade show" role="alert">
                            <i data-feather="<?= $notifier['icon']; ?>"></i>
                            <strong><?= $notifier['messages']['title'] ?></strong>
                            <?= $notifier['messages']['description'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table id="profilesDataTable" class="table">
                            <thead>
                                <tr>
                                    <th><?= $this->lang->line("id"); ?></th>
                                    <th><?= $this->lang->line("image"); ?></th>
                                    <th><?= $this->lang->line("first_name"); ?></th>
                                    <th><?= $this->lang->line("last_name"); ?></th>
                                    <th><?= $this->lang->line("role"); ?></th>
                                    <th><?= $this->lang->line("status"); ?></th>
                                    <th><i class="icon-lg text-secondary pb-3px" data-feather="menu"></i></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
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
<?php $this->load->view("admin/partials/_footer"); ?>
<?php $this->load->view("admin/partials/_scripts"); ?>
<?php
$language_session_key = $this->config->item("language_session_key");
$current_language = $this->session->userdata($language_session_key["admin"]);
$counter = 0;
?>
<script>
    document.querySelectorAll("[data-bs-toggle='modal']").forEach(item => {
        item.addEventListener("click", function () {
            document.getElementById("deleteButton").href = this.getAttribute("data-url");
        });
    });



    $("#profilesDataTable").DataTable({
        serverSide: true,
        processing: true,
        ajax: {
            url: "<?= base_url('admin/profiles/json') ?>",
            type: "POST",
            data: function (d) {
                d['<?= $this->security->get_csrf_token_name(); ?>'] = $('meta[name="csrf-token"]').attr('content');
            },
            dataSrc: function (json) {
                // Обновляем мета-тег с новым токеном
                $('meta[name="csrf-token"]').attr('content', json.csrf_token);
                return json.data;
            }
        },
        columns: [
            { data: "id" },
            { data: "image" },
            { data: "first_name" },
            { data: "last_name" },
            { data: "role" },
            { data: "status" },
            { data: "actions" }
        ],
        language: {
            <?php if ($current_language === "ru"): ?>
                                    url: '//cdn.datatables.net/plug-ins/2.1.8/i18n/ru.json',
            <?php elseif ($current_language === "az"): ?>
                                    url: '//cdn.datatables.net/plug-ins/2.1.8/i18n/az-AZ.json',
            <?php else: ?>
                                    url: '',
            <?php endif; ?>
        }
    });









    // $("#profilesDataTable").DataTable({
    //     paging: true,
    //     searching: true,
    //     ordering: true,
    //     language: {
    //         <?php if ($current_language === "ru"): ?>
        //                             url: '//cdn.datatables.net/plug-ins/2.1.8/i18n/ru.json',
        //         <?php elseif ($current_language === "az"): ?>
        //                             url: '//cdn.datatables.net/plug-ins/2.1.8/i18n/az-AZ.json',
        //         <?php else: ?>
        //                             url: '',
        //         <?php endif; ?>
    //     }
    // });
</script>
<script>
    Fancybox.bind("#profile", {
        groupAll: false
    });



    // document.getElementById("change").addEventListener("")
</script>
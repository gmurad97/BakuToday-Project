<?php $this->load->view("admin/partials/_head"); ?>
<?php $this->load->view("admin/partials/_sidebar"); ?>
<?php $this->load->view("admin/partials/_navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?= $this->lang->line("all_advertising"); ?></h6>
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
                        <table id="advertisingDataTable" class="table">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th><?= $this->lang->line("image"); ?></th>
                                    <th><?= $this->lang->line("title"); ?></th>
                                    <th><?= $this->lang->line("location"); ?></th>
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
?>
<script>
    document.querySelectorAll("[data-bs-toggle='modal']").forEach(item => {
        item.addEventListener("click", function () {
            document.getElementById("deleteButton").href = this.getAttribute("data-url");
        });
    });
    const ACTIONS_LANG = {
        "view": "<?= $this->lang->line("view") ?>",
        "edit": "<?= $this->lang->line("edit") ?>",
        "delete": "<?= $this->lang->line("delete") ?>"
    };
    $("#advertisingDataTable").DataTable({
        serverSide: true,
        processing: true,
        ajax: {
            url: "<?= base_url('admin/advertising/json'); ?>",
            type: "POST",
            data: function (d) {
                d["<?= $this->security->get_csrf_token_name(); ?>"] = $("meta[name='csrf-token']").attr("content");
            },
            dataSrc: function (json) {
                $('meta[name="csrf-token"]').attr('content', json.csrf_token);
                json.data.forEach(function (row, idx) {
                    row.counter = idx + 1;
                    row.img = `<a id="advertising" href="<?= base_url('public/uploads/advertising/') ?>${row.img}"><img src="<?= base_url('public/uploads/advertising/') ?>${row.img}"></a>`;
                    row.title = `<span class="d-inline-block text-truncate" style="max-width: 150px;">${row['title_' + '<?= $current_language; ?>'] ?? ''}</span>`;
                    row.location = row.location;
                    row.status = `
                        <form method="post" action="<?= base_url('admin/advertising/') ?>${row.id}/status">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="${$('meta[name=csrf-token]').attr('content')}">
                            <div class="form-check form-switch mb-0">
                                <input type="checkbox" class="form-check-input" id="switch-${row.id}" name="status" onchange="this.form.submit();" ${row.status === '1' ? 'checked' : ''}>
                                <label class="form-check-label" for="switch-${row.id}"></label>
                            </div>
                        </form>`;
                    row.actions = `
                        <div class="dropdown mb-2">
                            <a type="button" id="dropdownMenuButton_${row.id}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-primary pb-3px" data-feather="command"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_${row.id}">
                                <a class="dropdown-item d-flex align-items-center"
                                    href="<?= base_url('admin/profiles/') ?>${row.id}">
                                    <i data-feather="eye" class="icon-sm text-info me-2"></i>
                                    <span class="text-info">${ACTIONS_LANG.view}</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="<?= base_url('admin/profiles/') ?>${row.id}/edit">
                                    <i data-feather="edit-2" class="icon-sm text-warning me-2"></i>
                                    <span class="text-warning">${ACTIONS_LANG.edit}</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"
                                    data-url="<?= base_url('admin/profiles/') ?>${row.id}/delete">
                                    <i data-feather="trash" class="icon-sm text-danger me-2"></i>
                                    <span class="text-danger">${ACTIONS_LANG.delete}</span>
                                </a>
                            </div>
                        </div>`;
                });
                return json.data;
            }
        },
        columns: [
            { data: "counter" },
            { data: "img", orderable: false, searchable: false },
            { data: "title" },
            { data: "location" },
            { data: "status" },
            { data: "actions", orderable: false, searchable: false }
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
    $("#advertisingDataTable").on("draw.dt", function () {
        feather.replace();
    });
    document.querySelector("#advertisingDataTable").addEventListener("click", function (event) {
        if (event.target.closest("[data-bs-toggle='modal']")) {
            const deleteUrl = event.target.closest("[data-bs-toggle='modal']").getAttribute("data-url");
            document.getElementById("deleteButton").href = deleteUrl;
        }
    });
    Fancybox.bind("#advertising", {
        groupAll: false
    });
</script>
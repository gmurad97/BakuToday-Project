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
                                    <th>№</th>
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
$languages = $this->config->item("languages");
$language_session_key = $this->config->item("language_session_key");
$current_language = $this->session->userdata($language_session_key["admin"]);
$current_language_translate = base_url($languages[$current_language]["json"]);
?>
<script>
    const ROLES_LANG = {
        "root": "<?= $this->lang->line("root") ?>",
        "admin": "<?= $this->lang->line("admin") ?>",
        "moderator": "<?= $this->lang->line("moderator") ?>",
    };
    const ACTIONS_LANG = {
        "view": "<?= $this->lang->line("view") ?>",
        "edit": "<?= $this->lang->line("edit") ?>",
        "delete": "<?= $this->lang->line("delete") ?>"
    };
    $("#profilesDataTable").DataTable({
        serverSide: true,
        processing: true,
        autoWidth: false,
        columnDefs: [
            {
                targets: 0,
                width: "1%",
            }
        ],
        ajax: {
            url: "<?= base_url('admin/profiles/json'); ?>",
            type: "POST",
            data: function (d) {
                d["<?= $this->security->get_csrf_token_name(); ?>"] = $("meta[name='csrf-token']").attr("content");
            },
            dataSrc: function (json) {
                $('meta[name="csrf-token"]').attr('content', json.csrf_token);
                json.data.forEach(function (row, idx) {
                    const start = $("#profilesDataTable").DataTable().page.info().start;
                    row.counter = start + idx + 1;
                    row.img = row.img
                        ? `<a class="fancybox_profile" href="<?= base_url('public/uploads/profiles/') ?>${row.img}"><img src="<?= base_url('public/uploads/profiles/') ?>${row.img}" alt="Profile" height="40"></a>`
                        : `<a class="fancybox_profile" href="<?= base_url('public/admin/assets/images/others/profile-placeholder.png') ?>"><img src="<?= base_url('public/admin/assets/images/others/profile-placeholder.png') ?>" alt="Profile" height="40"></a>`;
                    row.first_name = `<a href="<?= base_url('admin/profiles/') ?>${row.id}/edit"><span class="d-inline-block text-truncate" style="max-width: 150px;">${row.first_name}</span></a>`;
                    row.last_name = `<span class="d-inline-block text-truncate" style="max-width: 150px;">${row.last_name}</span>`;
                    row.role = `<span class="badge rounded-pill ${['root', 'admin'].includes(row.role) ? 'bg-danger' : 'bg-primary'}">${ROLES_LANG[row.role] || row.role}</span>`;
                    row.status = `
                        <form method="post" action="<?= base_url('admin/profiles/') ?>${row.id}/status">
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
            { data: "first_name" },
            { data: "last_name" },
            { data: "role" },
            { data: "status" },
            { data: "actions", orderable: false, searchable: false }
        ],
        language: {
            url: '<?= $current_language_translate; ?>',
        }
    });
    $("#profilesDataTable").on("draw.dt", function () {
        feather.replace();
    });
    document.querySelector("#profilesDataTable").addEventListener("click", function (event) {
        if (event.target.closest("[data-bs-toggle='modal']")) {
            const deleteUrl = event.target.closest("[data-bs-toggle='modal']").getAttribute("data-url");
            document.getElementById("deleteButton").href = deleteUrl;
        }
    });
    Fancybox.bind(".fancybox_profile", {
        groupAll: false
    });
</script>
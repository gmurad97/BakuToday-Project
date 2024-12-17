<?php $this->load->view("admin/partials/head"); ?>

<?php $this->load->view("admin/partials/sidebar"); ?>

<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Profiles</h6>

          <div class="table-responsive">
            <table id="profilesDataTable" class="table">
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
                <?php foreach ($profiles as $profile): ?>
                <tr>
                  <td><?= $profile->id ?></td>
                  <td>
                    <img src="<?= base_url('uploads/' . $profile->image) ?>" alt="Profile Image" width="50">
                  </td>
                  <td><?= $profile->title ?></td>
                  <td><?= $profile->category ?></td>
                  <td><?= $profile->type ?></td>
                  <td><?= $profile->status ?></td>
                  <td><?= $profile->created_at ?></td>
                  <td>
                    <div class="dropdown mb-2">
                      <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-secondary pb-3px" data-feather="more-vertical"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item d-flex align-items-center" href="<?= site_url('profile/view/' . $profile->id) ?>"><i data-feather="eye" class="icon-sm me-2"></i>
                          <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="<?= site_url('profile/edit/' . $profile->id) ?>"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="<?= site_url('profile/delete/' . $profile->id) ?>"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
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
<?php $this->load->view("admin/partials/scripts"); ?>

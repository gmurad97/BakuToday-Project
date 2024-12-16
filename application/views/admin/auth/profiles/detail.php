<?php $this->load->view("admin/partials/head"); ?>

<?php $this->load->view("admin/partials/sidebar"); ?>

<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Profile Details</h6>

          <div class="profile-details">
            <div class="row">
              <div class="col-md-4">
                <h6>ID</h6>
                <p><?= $profile->id ?></p>
              </div>
              <div class="col-md-4">
                <h6>Title</h6>
                <p><?= $profile->title ?></p>
              </div>
              <div class="col-md-4">
                <h6>Category</h6>
                <p><?= $profile->category ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <h6>Type</h6>
                <p><?= $profile->type ?></p>
              </div>
              <div class="col-md-4">
                <h6>Status</h6>
                <p><?= $profile->status ?></p>
              </div>
              <div class="col-md-4">
                <h6>Created At</h6>
                <p><?= $profile->created_at ?></p>
              </div>
            </div>

            <h6>Profile Image</h6>
            <img src="<?= base_url('uploads/' . $profile->image) ?>" alt="Profile Image" class="img-fluid">

            <div class="mt-3">
              <a href="<?= site_url('profile/edit/' . $profile->id) ?>" class="btn btn-primary">Edit</a>
              <a href="<?= site_url('profile/delete/' . $profile->id) ?>" class="btn btn-danger">Delete</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>

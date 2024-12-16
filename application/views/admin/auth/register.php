<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add Administrator</h6>
                    <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success">
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>
                    <form action="<?= base_url('admin/register/store'); ?>" method="POST"
                        enctype="application/x-www-form-urlencoded">
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <label for="admin_first_name" class="form-label">First Name</label>
                                <input type="text" name="admin_first_name" id="admin_first_name" class="form-control"
                                    placeholder="Murad" required>
                            </div>


                            
                            <div class="col-md-6">
                                <label for="admin_last_name" class="form-label">Last Name</label>
                                <input type="text" name="admin_last_name" id="admin_last_name" class="form-control"
                                    placeholder="Gazymagomedov" required>
                            </div>
                        </div>









                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="admin_email" class="form-label">Email</label>
                                <input type="email" name="admin_email" id="admin_email" class="form-control"
                                    placeholder="example@domain.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="admin_username" class="form-label">Username</label>
                                <input type="text" name="admin_username" id="admin_username" class="form-control"
                                    placeholder="gmurad97" required>
                            </div>
                        </div>





                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="admin_password" class="form-label">Password</label>
                                <input type="password" name="admin_password" id="admin_password" class="form-control"
                                    placeholder="Password" required>
                            </div>
                            <div class="col-md-6">
                                <label for="admin_confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" name="admin_confirm_password" id="admin_confirm_password"
                                    class="form-control" placeholder="Password" required>
                            </div>
                        </div>




                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="role" class="form-label">Role</label>
                                <select name="role" id="role" class="form-select" required>
                                    <option value="root">Root</option>
                                    <option value="admin">Admin</option>
                                    <option value="moderator">Moderator</option>
                                </select>
                            </div>
                        </div>

                        <!-- Status Selection -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
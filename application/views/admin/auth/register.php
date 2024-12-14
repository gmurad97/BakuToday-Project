<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add Administrator</h6>





                    <form action="" method="POST" enctype="application/x-www-form-urlencoded">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="admin_first_name" class="form-label">First Name</label>
                                <input type="text" name="admin_first_name" id="admin_first_name" class="form-control"
                                    placeholder="Murad">
                            </div>
                            <div class="col-md-6">
                                <label for="admin_last_name" class="form-label">Last Name</label>
                                <input type="text" name="admin_last_name" id="admin_last_name" class="form-control"
                                    placeholder="Gazymagomedov">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="admin_email" class="form-label">Email</label>
                                <input type="email" name="admin_email" id="admin_email" class="form-control"
                                    placeholder="example@domain.com">
                            </div>
                            <div class="col-md-6">
                                <label for="admin_username" class="form-label">Username</label>
                                <input type="text" name="admin_username" id="admin_username" class="form-control"
                                    placeholder="gmurad97">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="admin_password" class="form-label">Password</label>
                                <input type="password" name="admin_password" id="admin_password" class="form-control"
                                    placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <label for="admin_confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" name="admin_confirm_password" id="admin_confirm_password"
                                    class="form-control" placeholder="Password">
                            </div>
                        </div>







                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="userEmail" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="userPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="userPassword"
                                autocomplete="current-password" placeholder="Password">
                        </div>

                        <a href="login.html" class="d-block mt-3 text-secondary">Already a user? Sign in</a>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>
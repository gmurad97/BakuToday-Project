<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

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
                <h6 class="card-title">Create News</h6>



                <form action="<?= base_url('admin/news/store'); ?>" method="POST" enctype="multipart/form-data">


                  <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" id="disabled-line-tab" data-bs-toggle="tab" href="#disabled"
                        role="tab" aria-controls="disabled" aria-selected="false">Disabled</a>
                    </li>
                  </ul>
                  <div class="tab-content mt-3" id="lineTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">...
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">...</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">...</div>
                    <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-line-tab">...
                    </div>
                  </div>









                  <div class="row">
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" placeholder="Enter first name">
                      </div>
                    </div><!-- Col -->






                    <div class="col-sm-6">
                      <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter last name">
                      </div>
                    </div><!-- Col -->
                  </div><!-- Row -->










                  <div class="row">
                    <div class="col-sm-4">
                      <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Enter city">
                      </div>
                    </div><!-- Col -->
                    <div class="col-sm-4">
                      <div class="mb-3">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control" placeholder="Enter state">
                      </div>
                    </div><!-- Col -->
                    <div class="col-sm-4">
                      <div class="mb-3">
                        <label class="form-label">Zip</label>
                        <input type="text" class="form-control" placeholder="Enter zip code">
                      </div>
                    </div><!-- Col -->
                  </div><!-- Row -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                      </div>
                    </div><!-- Col -->
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" autocomplete="off" placeholder="Password">
                      </div>
                    </div><!-- Col -->
                  </div><!-- Row -->
                </form>
                <button type="button" class="btn btn-primary submit">Submit form</button>





                <!-- <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact"
                                            role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="lineTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-line-tab">...</div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-line-tab">...</div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                        aria-labelledby="contact-line-tab">...</div>
                                </div> -->
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
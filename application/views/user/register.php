<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/partials/_head"); ?>
</head>

<body class="bg-light">
    <?php $this->load->view("user/partials/_preloader"); ?>
    <section class="sign-up sign-in">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 col-xl-6 col-xxl-7">
                    <div class="sign-in-bg"></div>
                </div>
                <div class="col-lg-6 col-xl-6 col-xxl-5">
                    <div class="sign-in-box">
                        <div class="text-center">
                            <a class="navbar-brand mb-4 d-block " href="<?= base_url(); ?>">
                                <img class="img-fluid" src="<?= base_url('public/user/assets/images/logo-dark.png'); ?>" alt="">
                            </a>
                            <div class="login-social-media">
                                <a class="btn google mb-3" href="#"><i class="fa-brands fa-google me-3"></i>Google</a>
                                <a class="btn twitter mb-3" href="#"><i class="fa-brands fa-twitter me-3"></i>Twitter</a>
                                <a class="btn Facebook mb-3" href="#"><i class="fa-brands fa-facebook-f me-3"></i>Facebook</a>
                            </div>
                        </div>
                        <form class="row align-items-center pt-1">
                            <div class="mb-3 col-sm-12">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="mb-3 col-sm-12">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                            <div class="mb-3 col-sm-12">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="mb-3 col-sm-12">
                                <input type="Password" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree to the terms of service</label>
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="sign-btn d-grid">
                                    <button type="submit" class="btn btn-primary">Signup</button>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <ul class="list-unstyled">
                                    <li class="me-1">Have you an account? <a class="text-primary" href="<?= base_url('login'); ?>">Log in</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view("user/partials/_scroll"); ?>
    <?php $this->load->view("user/partials/_scripts"); ?>
</body>

</html>

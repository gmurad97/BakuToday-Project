<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('user/partials/_head'); ?>
</head>

<body>
    <?php $this->load->view("user/partials/_preloader"); ?>
    <?php $this->load->view("user/partials/_header"); ?>
    <?php $this->load->view("user/partials/_sidebar"); ?>
    <?php $this->load->view("user/partials/_searchbar"); ?>
    <?php $this->load->view("user/partials/_breadcrumb"); ?>
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-404 text-center">
                        <img class="img-fluid" src="<?= base_url('public/user/assets/images/404.png'); ?>" alt="">
                        <h2 class="mb-4">Opps! Page Not Found :(</h2>
                        <p>Can't find what you looking for? Take a moment and do a search below or start from our <a href="index.html"> Home Page </a></p>
                        <a href="<?= base_url(''); ?>" class="btn btn-primary"><i class="fas fa-home pe-2"></i>Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view("user/partials/_footer"); ?>
    <?php $this->load->view("user/partials/_scroll"); ?>
    <?php $this->load->view('user/partials/_scripts'); ?>
</body>

</html>

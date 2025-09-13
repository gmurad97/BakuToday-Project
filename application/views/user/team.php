<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/partials/_head"); ?>
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
                <?php foreach ($admins as $admin): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="team">
                            <div class="team-img">
                                <img class="img-fluid" src="<?=
                                    !empty($admin['img'])
                                    ? base_url('public/uploads/profiles/' . $admin['img'])
                                    : base_url('public/admin/assets/images/others/profile-placeholder.png')
                                    ?>" alt="Profile">
                                <ul class="list-unstyled">
                                    <li><a href="https://github.com/gmurad97"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://github.com/gmurad97"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://github.com/gmurad97"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://github.com/gmurad97"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-info">
                                <a href="<?= base_url('author/') . $admin['id']; ?>" class="team-name"><?= $admin["first_name"] . "" . $admin["last_name"] ?></a>
                                <p><?= ucfirst($admin["role"]); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php $this->load->view("user/partials/_footer"); ?>
    <?php $this->load->view("user/partials/_scroll"); ?>
    <?php $this->load->view("user/partials/_scripts"); ?>
</body>

</html>

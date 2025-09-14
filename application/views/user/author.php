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
                <div class="col-lg-7 col-xl-8">
                    <div class="author-detail">
                        <div class="author-image">
                            <img class="img-fluid" src="<?=
                                !empty($admin['img'])
                                ? base_url('public/uploads/profiles/' . $admin['img'])
                                : base_url('public/admin/assets/images/others/profile-placeholder.png')
                                ?>" alt="Profile">
                        </div>
                        <div class="author-info">
                            <div class="author-box">
                                <h3><?= $admin["first_name"] . " " . $admin["last_name"] ?></h3>
                                <div class="author-social">
                                    <ul class="social-icons">
                                        <li>
                                            <a href="https://github.com/gmurad97" class="social-icon facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/gmurad97" class="social-icon twitter">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/gmurad97" class="social-icon linkedin">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/gmurad97" class="social-icon instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p>They have no clarity. When asked the question, responses will be superficial at best, and at worst, will be what someone else wants for them.</p>
                            <div class="comment">
                                <ul>
                                    <li class="me-2"> <a href="#">1 Comments </a></li>
                                    <li> <a href=""><?= $posts_count; ?> post</a></li>
                                </ul>
                            </div>
                            <img class="img-fluid" src="<?= base_url('public/user/assets/images/signature.png'); ?>" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="space-pb">
                                <?php foreach ($posts as $post): ?>
                                    <div class="blog-post post-style-11 mb-4">
                                        <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/uploads/news/') . $post['img']; ?>" alt=""> </div>
                                        <div class="blog-post-details"> <span class="badge badge-medium bg-orange"><?= $post['category_name_' . $lang]; ?></span>
                                            <h4 class="blog-title">
                                                <a href="<?= base_url('news/' . $post['id']); ?>"><?= $post['title_' . $lang] ?></a>
                                            </h4>
                                            <div class="blog-post-meta">
                                                <div class="blog-post-user"> <a href="#">by <img class="img-fluid" src="<?= base_url('public/user/assets/images/avatar/01.jpg'); ?>" alt="">Mark </a> </div>
                                                <div class="blog-post-time">
                                                    <a href="#"> <i class="fa-solid fa-calendar-days"></i>Jan 13 2022 </a>
                                                </div>
                                                <div class="blog-post-comment">
                                                    <a href="#"> <i class="fa-regular fa-comment"></i>(1) </a>
                                                </div>
                                                <div class="blog-post-share">
                                                    <div class="share-box">
                                                        <a href="#"> <i class="fa-solid fa-share-nodes"></i>Share </a>
                                                        <ul class="list-unstyled share-box-social">
                                                            <li>
                                                                <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> <i class="fab fa-twitter"></i> </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> <i class="fa-brands fa-linkedin-in"></i> </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> <i class="fab fa-instagram"></i> </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p><?= $post['short_description_' . $lang]; ?></p>
                                            <a class="btn-link" href="<?= base_url('news/' . $post['id']); ?>">Continue Read</a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </section>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-12">
                            <nav class="nezzy-pagination">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><span class="page-link">...</span></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-5 col-xl-4">
                    <?php $this->load->view("user/partials/_sidebar_content"); ?>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view("user/partials/_footer"); ?>
    <?php $this->load->view("user/partials/_scroll"); ?>
    <?php $this->load->view("user/partials/_scripts"); ?>
</body>

</html>

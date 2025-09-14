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
                <div class="col-lg-7 col-xl-8 blog-single">
                    <div class="blog-post-info">
                        <div class="blog-content pb-0">
                            <div class="blog-post-image mb-4">
                                <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $news['img']); ?>" alt="">
                            </div>
                            <div class="blog-post-title">
                                <h3 class="mb-0"><a href="#"><?= $news['title_' . $lang] ?></a></h3>
                            </div>
                            <div class="blog-post post-style-07 border-0 py-4 px-0">
                                <div class="blog-post-details">
                                    <div class="blog-post-meta p-0">
                                        <div class="blog-post-user">
                                            <a href="#">by<img class="img-fluid" src="<?= base_url('public/user/assets/images/avatar/02.jpg'); ?>" alt="">Arias</a>
                                        </div>
                                        <div class="blog-post-time">
                                            <a href="#"><i class="fa-solid fa-calendar-days"></i>Jan 21 2022</a>
                                        </div>
                                        <div class="blog-post-comment">
                                            <a href="#"><i class="fa-regular fa-comment"></i>(5)</a>
                                        </div>
                                        <div class="blog-post-share">
                                            <div class="share-box">
                                                <a href="#"><i class="fa-solid fa-share-nodes"></i>Share</a>
                                                <ul class="list-unstyled share-box-social">
                                                    <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                                                    <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                                                    <li> <a href="#"><i class="fa-brands fa-linkedin-in"></i></a> </li>
                                                    <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-3">
                                <?= $news['long_description_' . $lang] ?>
                            </p>
                            <div class="blog-post-share-box d-flex flex-wrap justify-content-between align-items-center mt-4">
                                <div class="blog-post post-style-07 border-0 ps-0">
                                    <div class="blog-post-details">
                                        <div class="blog-post-meta p-0">
                                            <div class="blog-post-share">
                                                <div class="share-box">
                                                    <a href="#"><i class="fa-solid fa-share-nodes"></i>Share</a>
                                                    <ul class="list-unstyled share-box-social">
                                                        <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                                                        <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                                                        <li> <a href="#"><i class="fa-brands fa-linkedin-in"></i></a> </li>
                                                        <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="badges">
                                    <a href="#" class="btn-primary btn">idea</a>
                                    <a href="#" class="btn-primary  btn">Creative</a>
                                </div>
                            </div>
                            <nav class="navigation post-navigation py-2 py-lg-3">
                                <div class="nav-links d-sm-flex justify-content-between">
                                    <div class="nav-previous">
                                        <a class="d-flex align-items-center justify-content-start justify-content-md-between" href="#">
                                            <div class="align-self-center nav-left ml-2">
                                                <span class="d-inline-block btn btn-link px-0">
                                                    <i class="fas fa-chevron-left pe-2"></i>
                                                    Previous Post
                                                </span>
                                                <span class="nav-title d-block font-weight-normal"> Taking action – practice Ready, Fire, Aim…</span>
                                            </div>
                                            <div class="blog-post-nav-media d-none d-md-block">
                                                <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/01.jpg'); ?>" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="nav-next">
                                        <a class="d-flex align-items-center justify-content-end justify-content-md-between" href="#">
                                            <div class="blog-post-nav-media ml-2 d-none d-md-block">
                                                <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/02.jpg'); ?>" alt="">
                                            </div>
                                            <div class="align-self-center text-right nav-right">
                                                <span class="d-inline-block btn btn-link px-0">
                                                    Next Post
                                                    <i class="fas fa-chevron-right ps-2"></i>
                                                </span>
                                                <span class="nav-title d-block font-weight-normal"> Delegate it! Does it need to be done at all?</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                            <div class="bg-white mb-4 mt-4">
                                <h6 class="widget-title text-uppercase fw-bolder">Leave a Reply</h6>
                                <div class="blog-sidebar-post-divider mb-4">
                                </div>
                                <form class="row">
                                    <div class="col-lg-4 mb-3">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <input type="text" class="form-control" placeholder="Web">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <a class="btn btn-primary" href="#">Post comment</a>
                                    </div>
                                </form>
                            </div>
                            <div class="bg-white mt-4">
                                <div class="section-title">
                                    <h2 class="mb-0"><i class="fa-solid fa-bolt-lightning"></i>Most Views News</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="owl-carousel arrow-styel-02 owl-loaded owl-drag" data-nav-dots="false" data-nav-arrow="true" data-items="3" data-xl-items="3" data-lg-items="2" data-md-items="2" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-autoheight="true">
                                            <!-- item-01 -->
                                            <div class="item">
                                                <div class="blog-post post-style-02">
                                                    <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/01.jpg'); ?>" alt=""> </div> <span class="badge badge-large bg-red">Photography</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="#">Photography is about simplicity</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jan 17 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- item-02 -->
                                            <div class="item">
                                                <div class="blog-post post-style-02">
                                                    <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/02.jpg'); ?>" alt=""> </div> <span class="badge badge-large bg-skyblue">Comic</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="#">You'll believe a man can fly</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 2 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- item-03 -->
                                            <div class="item">
                                                <div class="blog-post post-style-02">
                                                    <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/03.jpg'); ?>" alt=""> </div> <span class="badge badge-large bg-blue">Painting</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="#">Painting makes us feel alive</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 19 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- item-04 -->
                                            <div class="item">
                                                <div class="blog-post post-style-02">
                                                    <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/04.jpg'); ?>" alt=""> </div> <span class="badge badge-large bg-pink">Lifestyle</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="#">A lifestyle that you will love</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 20 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

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
                    <div class="sidebar mt-lg-0">
                        <div class="widget post-widget">
                            <h6 class="widget-title">Related Post</h6>
                            <div class="news-tab">
                                <ul class="nav nav-pills" id="pills-tab03" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="true">Latest</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false" tabindex="-1">Trending</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-videos-tab" data-bs-toggle="pill" data-bs-target="#pills-videos" type="button" role="tab" aria-controls="pills-videos" aria-selected="false" tabindex="-1">Popular</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent03">
                                    <div class="tab-pane fade show active" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab" tabindex="0">
                                        <div class="blog-post post-style-04">
                                            <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/latest/01.jpg'); ?>" alt=""> </div>
                                            <div class="blog-post-details"> <span class="badge text-primary">Show</span>
                                                <h6 class="blog-title"><a href="#">Reach out to the show</a></h6>
                                                <div class="blog-post-meta">
                                                    <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jan 12 2022</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-post post-style-04">
                                            <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/latest/02.jpg'); ?>" alt=""> </div>
                                            <div class="blog-post-details"> <span class="badge text-primary">Photography</span>
                                                <h6 class="blog-title"><a href="#">Photography is the art of moments frozen in time</a></h6>
                                                <div class="blog-post-meta">
                                                    <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 17 2022</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-post post-style-04">
                                            <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/latest/03.jpg'); ?>" alt=""> </div>
                                            <div class="blog-post-details"> <span class="badge text-primary">Food</span>
                                                <h6 class="blog-title"><a href="#">Don’t be rude, donate some food</a></h6>
                                                <div class="blog-post-meta">
                                                    <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 15 2022</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab" tabindex="0">
                                        <div class="blog-post post-style-04">
                                            <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/latest/04.jpg'); ?>" alt=""> </div>
                                            <div class="blog-post-details"> <span class="badge text-primary">series</span>
                                                <h6 class="blog-title"><a href="#">Time Is Greater Than Money</a></h6>
                                                <div class="blog-post-meta">
                                                    <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 2 2022</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-post post-style-04">
                                            <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/latest/05.jpg'); ?>" alt=""> </div>
                                            <div class="blog-post-details"> <span class="badge text-primary">crypto</span>
                                                <h6 class="blog-title"><a href="#">I Do Think Bitcoin Is The First That Has The Potential To Do Something Like Changing The World</a></h6>
                                                <div class="blog-post-meta">
                                                    <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 4 2022</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-post post-style-04">
                                            <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/latest/06.jpg'); ?>" alt=""> </div>
                                            <div class="blog-post-details"> <span class="badge text-primary">politician</span>
                                                <h6 class="blog-title"><a href="#">Leadership, Experience, Values Means Something</a></h6>
                                                <div class="blog-post-meta">
                                                    <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 6 2022</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab" tabindex="0">
                                        <div class="blog-post post-style-04">
                                            <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/latest/07.jpg'); ?>" alt=""> </div>
                                            <div class="blog-post-details"> <span class="badge text-primary">electric</span>
                                                <h6 class="blog-title"><a href="#">Everyday Vehicles That Aren’t</a></h6>
                                                <div class="blog-post-meta">
                                                    <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 11 2022</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-post post-style-04">
                                            <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/latest/08.jpg'); ?>" alt=""> </div>
                                            <div class="blog-post-details"> <span class="badge text-primary">crypto</span>
                                                <h6 class="blog-title"><a href="#">Blockchain is the most promising technology since the internet</a></h6>
                                                <div class="blog-post-meta">
                                                    <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 8 2022</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-post post-style-04">
                                            <div class="blog-image"> <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/latest/09.jpg'); ?>" alt=""> </div>
                                            <div class="blog-post-details"> <span class="badge text-primary">security</span>
                                                <h6 class="blog-title"><a href="#">Professional Security wasn’t Available… So we fixed it</a></h6>
                                                <div class="blog-post-meta">
                                                    <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jun 6 2022</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget sidebar-category">
                            <h6 class="widget-title">Categories</h6>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="category">
                                            <div class="category-image">
                                                <img class="img-fluid" src="<?= base_url('public/user/assets/images/category/06.jpg'); ?>" alt="">
                                            </div>
                                            <div class="category-name">
                                                <h6>Sport<span>(3)</span></h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="category">
                                            <div class="category-image">
                                                <img class="img-fluid" src="<?= base_url('public/user/assets/images/category/07.jpg'); ?>" alt="">
                                            </div>
                                            <div class="category-name">
                                                <h6>Travel<span>(5)</span></h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="category">
                                            <div class="category-image">
                                                <img class="img-fluid" src="<?= base_url('public/user/assets/images/category/08.jpg'); ?>" alt="">
                                            </div>
                                            <div class="category-name">
                                                <h6>Lifestyle<span>(8)</span></h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="category">
                                            <div class="category-image">
                                                <img class="img-fluid" src="<?= base_url('public/user/assets/images/category/20.jpg'); ?>" alt="">
                                            </div>
                                            <div class="category-name">
                                                <h6>Games<span>(9)</span></h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="category">
                                            <div class="category-image">
                                                <img class="img-fluid" src="<?= base_url('public/user/assets/images/category/19.jpg'); ?>" alt="">
                                            </div>
                                            <div class="category-name">
                                                <h6>Video<span>(8)</span></h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h6 class="widget-title">Newsletter</h6>
                            <div class="newsletter">
                                <i class="fa-solid fa-envelope-open-text"></i>
                                <p>Subscribe For Michael Bean News And Receive Daily Updates</p>
                                <div class="newsletter-box">
                                    <input type="email" class="form-control" placeholder="E-Mail Address">
                                    <button type="submit" class="btn btn-primary">Subscribe Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-tag mb-0">
                            <h6 class="widget-title">Tags</h6>
                            <ul class="list-unstyled">
                                <li><a href="#"> Games</a></li>
                                <li><a href="#"> Lifestyle</a></li>
                                <li><a href="#"> Technology</a></li>
                                <li><a href="#"> Travel</a></li>
                                <li><a href="#"> Sport</a></li>
                                <li><a href="#"> Movie</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view("user/partials/_footer"); ?>
    <?php $this->load->view("user/partials/_scroll"); ?>
    <?php $this->load->view("user/partials/_scripts"); ?>
</body>

</html>

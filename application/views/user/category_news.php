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
                    <div class="row">
                        <?php foreach ($news_list as $news): ?>
                            <div class="col-md-6 mb-3">
                                <div class="blog-post post-style-03">
                                    <div class="blog-image">
                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $news['img']); ?>" alt="">
                                    </div>
                                    <span class="badge badge-large bg-primary"><?= $category['name_' . $lang] ?></span>
                                    <div class="blog-post-details">
                                        <h6 class="blog-title"><a href="<?= base_url('news/' . $news['id']) ?>"><?= $news['title_' . $lang] ?></a></h6>
                                        <div class="blog-post-meta">
                                            <div class="blog-post-author">
                                                <span><a href="#"><img src="<?= base_url('public/user/assets/images/avatar/01.jpg'); ?>" alt="">Barry</a></span>
                                            </div>
                                            <div class="blog-post-time">
                                                <a href="#"><i class="fa-solid fa-calendar-days"></i><?= $news['created_at'] ?></a>
                                            </div>
                                        </div>
                                        <p><?= $news['short_description_' . $lang] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row mt-4">
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
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="sidebar mt-lg-0">
                        <div class="widget search-widget">
                            <input type="search" value="" placeholder="Search">
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>

                        <div class="widget">
                            <h6 class="widget-title">Follow Us On Social</h6>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-12 col-xl-6 mb-3 mb-3">
                                    <div class="follow-style-02">
                                        <div class="facebook-fans social-box">
                                            <div class="social">
                                                <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
                                                <span>3.5k</span>
                                            </div>
                                            <div class="fans follower-btn">
                                                <a href="#">Fans</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-12 col-xl-6 mb-3 mb-3">
                                    <div class="follow-style-02">
                                        <div class="twitter-follower social-box">
                                            <div class="social">
                                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                <span>2.5k</span>
                                            </div>
                                            <div class="follower follower-btn">
                                                <a href="#">Follower</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-12 col-xl-6 mb-3">
                                    <div class="follow-style-02">
                                        <div class="you-tube social-box">
                                            <div class="social">
                                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                <span>5.5k</span>
                                            </div>
                                            <div class="subscriber follower-btn">
                                                <a href="#">Subscriber</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-12 col-xl-6 mb-3">
                                    <div class="follow-style-02">
                                        <div class="instagram-Follower social-box">
                                            <div class="social">
                                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                                <span>4.5k</span>
                                            </div>
                                            <div class="instagrams follower-btn">
                                                <a href="#">Follower</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget newsletter-widget">
                            <h6 class="widget-title">Top News</h6>
                            <div class="blog-post post-style-02">
                                <div class="blog-image">
                                    <img class="img-fluid" src="<?= base_url('public/user/assets/images/blog/technology/01.jpg'); ?>" alt="">
                                </div>
                                <span class="badge badge-large bg-orange">Touchless</span>
                                <div class="blog-post-details">
                                    <h6 class="blog-title"><a href="#">A wide range of accessories</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time">
                                            <a href="#"><i class="fa-solid fa-calendar-days"></i>Jan 23 2022</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post post-style-13">
                                <div class="blog-post-details">
                                    <span class="badge text-primary">programming</span>
                                    <h6 class="blog-title"><a href="#">We are a pioneer in computer technology</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time">
                                            <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 12 2022</a>
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

                            <div class="blog-post post-style-13">
                                <div class="blog-post-details">
                                    <span class="badge text-pink">Computing</span>
                                    <h6 class="blog-title"><a href="#">Delivering IT solutions that enable you to work smarter</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time">
                                            <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 20 2022</a>
                                        </div>
                                        <div class="blog-post-comment">
                                            <a href="#"><i class="fa-regular fa-comment"></i>(4)</a>
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

                        </div>
                        <div class="widget add-widget">
                            <div class="add-banner">
                                <a href="https://themeforest.net/item/car-dealer-automotive-responsive-wordpress-theme/20213334?s_rank=21"><img class="img-fluid" src="<?= base_url('public/user/assets/images/bg/add-02.jpg'); ?>" alt=""></a>
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

<div class="sidebar">
    <!-- Виджет социальных сетей (оставляем статичным) -->
    <div class="widget sidebar-category">
        <h6 class="widget-title">Social Media</h6>
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-6">
                <div class="follow-style-01">
                    <div class="facebook-fans social-box">
                        <div class="social">
                            <a class="fans-icon" href="#"><i class="fa-brands fa-facebook-square"></i></a>
                            <span>1.5k</span>
                        </div>
                        <div class="fans follower-btn">
                            <a href="#">Fans</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-6 mb-xl-3 mb-0">
                <div class="follow-style-01">
                    <div class="twitter-follower social-box">
                        <div class="social">
                            <a class="twitter-icon" href="#"><i class="fa-brands fa-twitter"></i></a>
                            <span>1.5k</span>
                        </div>
                        <div class="follower follower-btn">
                            <a href="#">Follower</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-6">
                <div class="follow-style-01">
                    <div class="you-tube social-box">
                        <div class="social">
                            <a class="tube-icon" href="#"><i class="fa-brands fa-youtube"></i></a>
                            <span>1.5k</span>
                        </div>
                        <div class="subscriber follower-btn">
                            <a href="#">Subscriber</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-6">
                <div class="follow-style-01">
                    <div class="instagram-Follower social-box">
                        <div class="social">
                            <a class="instagram-icon" href="#"><i class="fa-brands fa-instagram"></i></a>
                            <span>1.5k</span>
                        </div>
                        <div class="instagrams follower-btn">
                            <a href="#">Follower</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Виджет связанных постов с динамическими данными -->
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
                <!-- Latest News Tab -->
                <div class="tab-pane fade show active" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab" tabindex="0">
                    <?php
                    $latest_news = array_slice($latest_news_with_author_category, 0, 3);
                    foreach ($latest_news as $news):
                        ?>
                        <div class="blog-post post-style-04">
                            <div class="blog-image">
                                <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $news['img']); ?>" alt="<?= $news['title_' . $lang]; ?>">
                            </div>
                            <div class="blog-post-details">
                                <span class="badge text-primary"><?= $news['category_name_' . $lang]; ?></span>
                                <h6 class="blog-title">
                                    <a href="<?= base_url('news/' . $news['id']); ?>">
                                        <?= $news['title_' . $lang]; ?>
                                    </a>
                                </h6>
                                <div class="blog-post-meta">
                                    <div class="blog-post-time">
                                        <a href="#">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <?= date("M j Y", strtotime($news['created_at'])); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Trending News Tab -->
                <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab" tabindex="0">
                    <?php
                    $trending_news = array_slice($latest_news_with_author_category, 3, 3);
                    foreach ($trending_news as $news):
                        ?>
                        <div class="blog-post post-style-04">
                            <div class="blog-image">
                                <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $news['img']); ?>" alt="<?= $news['title_' . $lang]; ?>">
                            </div>
                            <div class="blog-post-details">
                                <span class="badge text-primary"><?= $news['category_name_' . $lang]; ?></span>
                                <h6 class="blog-title">
                                    <a href="<?= base_url('news/' . $news['id']); ?>">
                                        <?= character_limiter($news['title_' . $lang], 60); ?>
                                    </a>
                                </h6>
                                <div class="blog-post-meta">
                                    <div class="blog-post-time">
                                        <a href="#">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <?= date("M j Y", strtotime($news['created_at'])); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Popular News Tab -->
                <div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab" tabindex="0">
                    <?php
                    $popular_news = array_slice($latest_news_with_author_category, 6, 3);
                    foreach ($popular_news as $news):
                        ?>
                        <div class="blog-post post-style-04">
                            <div class="blog-image">
                                <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $news['img']); ?>" alt="<?= $news['title_' . $lang]; ?>">
                            </div>
                            <div class="blog-post-details">
                                <span class="badge text-primary"><?= $news['category_name_' . $lang]; ?></span>
                                <h6 class="blog-title">
                                    <a href="<?= base_url('news/' . $news['id']); ?>">
                                        <?= character_limiter($news['title_' . $lang], 60); ?>
                                    </a>
                                </h6>
                                <div class="blog-post-meta">
                                    <div class="blog-post-time">
                                        <a href="#">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <?= date("M j Y", strtotime($news['created_at'])); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Виджет категорий с динамическими данными -->
    <div class="widget sidebar-category">
        <h6 class="widget-title">Categories</h6>
        <ul>
            <?php
            $categories_to_show = array_slice($categories_all, 0, 4);
            $category_icons = ['fa-basketball', 'fa-cart-flatbed-suitcase', 'fa-vest-patches', 'fa-bullhorn'];
            $i = 0;

            foreach ($categories_to_show as $category):
                $news_count = $this->NewsModel->count(['category_id' => $category['id']]);
                ?>
                <li>
                    <a href="<?= base_url('categories/' . $category['id']); ?>">
                        <div class="category-02">

                            <div class="category-image bg-overlay-black-40">
                                <img class="img-fluid" src="<?= base_url('public/user/assets/images/category/17.jpg'); ?>" alt="">
                            </div>
                            <div class="category-name d-flex justify-content-between">
                                <span class="category-count">(<?= $news_count; ?>)</span>
                                <span class="category-content"><?= $category['name_' . $lang]; ?></span>
                                <span class="category-icon"><i class="fa-solid <?= $category_icons[$i]; ?>"></i></span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php
                $i++;
            endforeach;
            ?>
        </ul>
    </div>

    <!-- Виджет подписки на рассылку (оставляем статичным) -->
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

    <!-- Виджет тегов (можно сделать динамическим, если у вас есть теги в системе) -->
    <div class="widget widget-tag mb-0">
        <h6 class="widget-title">Tags</h6>
        <ul class="list-unstyled">
            <!-- Статические теги (можно заменить на динамические, если есть в системе) -->
            <li><a href="#"> Games</a></li>
            <li><a href="#"> Lifestyle</a></li>
            <li><a href="#"> Technology</a></li>
            <li><a href="#"> Travel</a></li>
            <li><a href="#"> Sport</a></li>
            <li><a href="#"> Movie</a></li>
        </ul>
    </div>
</div>

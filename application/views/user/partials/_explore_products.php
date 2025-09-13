<section class="space-lg-pb explore-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-8">
                <div class="news-sport-posts">
                    <div class="section-title">
                        <h2 class="title mb-0"><i class="fa-solid fa-bolt-lightning"></i>Most Popular</h2>
                    </div>
                    <div class="news-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab02" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-lifestyle-tab" data-bs-toggle="pill" data-bs-target="#pills-lifestyle" type="button" role="tab" aria-controls="pills-lifestyle" aria-selected="false" tabindex="-1">Lifestyle</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-gaming-tab" data-bs-toggle="pill" data-bs-target="#pills-gaming" type="button" role="tab" aria-controls="pills-gaming" aria-selected="true">Sport</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-politics-tab" data-bs-toggle="pill" data-bs-target="#pills-politics" type="button" role="tab" aria-controls="pills-politics" aria-selected="false" tabindex="-1">Politics</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-sport-tab" data-bs-toggle="pill" data-bs-target="#pills-sport" type="button" role="tab" aria-controls="pills-sport" aria-selected="false" tabindex="-1">Technology</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent02">
                            <!-- Lifestyle Tab -->
                            <div class="tab-pane fade" id="pills-lifestyle" role="tabpanel" aria-labelledby="pills-lifestyle-tab" tabindex="0">
                                <div class="row">
                                    <?php if (!empty($lifestyle_posts)): ?>
                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                <?php $main_post = $lifestyle_posts[0]; ?>
                                                <?php
                                                $title = $main_post['title_' . $lang] ?? $main_post['title_az'] ?? 'No title';
                                                $img = $main_post['img'] ?? 'default.jpg';
                                                $category = $this->CategoriesModel->find($main_post['category_id']);
                                                $category_name = $category ? $category['name_en'] : 'Lifestyle';
                                                $date = isset($main_post['created_at']) ? date('M j Y', strtotime($main_post['created_at'])) : 'No date';
                                                $description = $main_post['short_description_' . $lang] ?? $main_post['short_description_az'] ?? 'No description';
                                                ?>
                                                <div class="blog-post post-style-03">
                                                    <div class="blog-image">
                                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $img); ?>" alt="<?= htmlspecialchars($title); ?>">
                                                    </div>
                                                    <span class="badge badge-large bg-pink"><?= $category_name; ?></span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title">
                                                            <a href="<?= base_url('news/' . $main_post['id']); ?>"><?= htmlspecialchars($title); ?></a>
                                                        </h6>
                                                        <div class="blog-post-meta">
                                                            <div class="blog-post-author">
                                                                <span><a href="#"><img src="<?= base_url('public/user/assets/images/avatar/05.jpg'); ?>" alt="">Admin</a></span>
                                                            </div>
                                                            <div class="blog-post-time">
                                                                <a href="#"><i class="fa-solid fa-calendar-days"></i><?= $date; ?></a>
                                                            </div>
                                                        </div>
                                                        <p><?= htmlspecialchars($description); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                <?php for ($i = 1; $i < min(5, count($lifestyle_posts)); $i++): ?>
                                                        <?php $post = $lifestyle_posts[$i]; ?>
                                                        <?php
                                                        $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                                                        $img = $post['img'] ?? 'default.jpg';
                                                        $category = $this->CategoriesModel->find($post['category_id']);
                                                        $category_name = $category ? $category['name_en'] : 'Lifestyle';
                                                        $date = isset($post['created_at']) ? date('M j Y', strtotime($post['created_at'])) : 'No date';
                                                        ?>
                                                        <div class="blog-post post-style-04">
                                                            <div class="blog-image">
                                                                <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $img); ?>" alt="<?= htmlspecialchars($title); ?>">
                                                            </div>
                                                            <div class="blog-post-details">
                                                                <span class="badge text-pink"><?= $category_name; ?></span>
                                                                <h6 class="blog-title">
                                                                    <a href="<?= base_url('news/' . $post['id']); ?>"><?= htmlspecialchars($title); ?></a>
                                                                </h6>
                                                                <div class="blog-post-meta">
                                                                    <div class="blog-post-time">
                                                                        <a href="#"><i class="fa-solid fa-calendar-days"></i><?= $date; ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php endfor; ?>
                                            </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Sport Tab -->
                            <div class="tab-pane fade active show" id="pills-gaming" role="tabpanel" aria-labelledby="pills-gaming-tab" tabindex="0">
                                <div class="row">
                                    <?php if (!empty($sport_posts)): ?>
                                            <!-- Аналогичная структура как в Lifestyle -->
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Politics Tab -->
                            <div class="tab-pane fade" id="pills-politics" role="tabpanel" aria-labelledby="pills-politics-tab" tabindex="0">
                                <div class="row">
                                    <?php if (!empty($politics_posts)): ?>
                                            <!-- Аналогичная структура как в Lifestyle -->
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Technology Tab -->
                            <div class="tab-pane fade" id="pills-sport" role="tabpanel" aria-labelledby="pills-sport-tab" tabindex="0">
                                <div class="row">
                                    <?php if (!empty($technology_posts)): ?>
                                            <!-- Аналогичная структура как в Lifestyle -->
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Most Views News Section -->
                <div class="space-sm-pt">
                    <div class="section-title">
                        <h2 class="mb-0"> <i class="fa-solid fa-bolt-lightning"></i>Most Views News</h2>
                    </div>
                    <div class="owl-carousel arrow-styel-02 owl-loaded owl-drag" data-nav-dots="false" data-nav-arrow="true" data-items="2" data-xl-items="2" data-lg-items="2" data-md-items="2" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-autoheight="true" data-loop="true">
                        <?php if (!empty($most_views_news)): ?>
                                <?php foreach ($most_views_news as $news): ?>
                                        <?php
                                        $title = $news['title_' . $lang] ?? $news['title_az'] ?? 'No title';
                                        $img = $news['img'] ?? 'default.jpg';
                                        $category = $this->CategoriesModel->find($news['category_id']);
                                        $category_name = $category ? $category['name_en'] : 'General';
                                        $date = isset($news['created_at']) ? date('M j Y', strtotime($news['created_at'])) : 'No date';
                                        ?>
                                        <div class="item">
                                            <div class="blog-post post-style-01">
                                                <div class="blog-image">
                                                    <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $img); ?>" alt="<?= htmlspecialchars($title); ?>">
                                                </div>
                                                <div class="blog-post-details">
                                                    <span class="badge badge-large bg-purple"><?= $category_name; ?></span>
                                                    <h5 class="blog-title">
                                                        <a href="<?= base_url('news/' . $news['id']); ?>"><?= htmlspecialchars($title); ?></a>
                                                    </h5>
                                                    <div class="blog-post-meta">
                                                        <div class="blog-post-author">
                                                            <span><a href="#"><img src="<?= base_url('public/user/assets/images/avatar/06.jpg'); ?>" alt="">Admin</a></span>
                                                        </div>
                                                        <div class="blog-post-time">
                                                            <a href="#"><i class="fa-solid fa-calendar-days"></i><?= $date; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-5 col-xl-4">
                <div class="sidebar">
                    <!-- Social Media Widget -->
                    <div class="widget sidebar-category">
                        <h6 class="widget-title">Follow Us on Social</h6>
                        <div class="row">
                            <!-- Facebook -->
                            <div class="col-md-6 col-sm-6 col-lg-12 col-xl-6">
                                <div class="follow-style-01">
                                    <div class="facebook-fans social-box">
                                        <div class="social">
                                            <a class="fans-icon" href="#"><i class="fa-brands fa-facebook-square"></i></a>
                                            <span>2.5k</span>
                                        </div>
                                        <div class="fans follower-btn">
                                            <a href="#">Fans</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Twitter -->
                            <div class="col-md-6 col-sm-6 col-lg-12 col-xl-6 mb-xl-3 mb-0">
                                <div class="follow-style-01">
                                    <div class="twitter-follower social-box">
                                        <div class="social">
                                            <a class="twitter-icon" href="#"><i class="fa-brands fa-twitter"></i></a>
                                            <span>4.5k</span>
                                        </div>
                                        <div class="follower follower-btn">
                                            <a href="#">Follower</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- YouTube -->
                            <div class="col-md-6 col-sm-6 col-lg-12 col-xl-6">
                                <div class="follow-style-01">
                                    <div class="you-tube social-box">
                                        <div class="social">
                                            <a class="tube-icon" href="#"><i class="fa-brands fa-youtube"></i></a>
                                            <span>6.5k</span>
                                        </div>
                                        <div class="subscriber follower-btn">
                                            <a href="#">Subscriber</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Instagram -->
                            <div class="col-md-6 col-sm-6 col-lg-12 col-xl-6">
                                <div class="follow-style-01">
                                    <div class="instagram-Follower social-box">
                                        <div class="social">
                                            <a class="instagram-icon" href="#"><i class="fa-brands fa-instagram"></i></a>
                                            <span>3.5k</span>
                                        </div>
                                        <div class="instagrams follower-btn">
                                            <a href="#">Follower</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Post Widget -->
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
                                <!-- Latest Tab -->
                                <div class="tab-pane fade show active" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab" tabindex="0">
                                    <?php if (!empty($latest_related)): ?>
                                            <?php foreach ($latest_related as $post): ?>
                                                    <?php
                                                    $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                                                    $img = $post['img'] ?? 'default.jpg';
                                                    $category = $this->CategoriesModel->find($post['category_id']);
                                                    $category_name = $category ? $category['name_en'] : 'General';
                                                    $date = isset($post['created_at']) ? date('M j Y', strtotime($post['created_at'])) : 'No date';
                                                    ?>
                                                    <div class="blog-post post-style-04">
                                                        <div class="blog-image">
                                                            <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $img); ?>" alt="<?= htmlspecialchars($title); ?>">
                                                        </div>
                                                        <div class="blog-post-details">
                                                            <span class="badge text-primary"><?= $category_name; ?></span>
                                                            <h6 class="blog-title">
                                                                <a href="<?= base_url('news/' . $post['id']); ?>"><?= htmlspecialchars($title); ?></a>
                                                            </h6>
                                                            <div class="blog-post-meta">
                                                                <div class="blog-post-time">
                                                                    <a href="#"><i class="fa-solid fa-calendar-days"></i><?= $date; ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>

                                <!-- Trending Tab -->
                                <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab" tabindex="0">
                                    <?php if (!empty($trending_related)): ?>
                                            <!-- Аналогичная структура как в Latest -->
                                    <?php endif; ?>
                                </div>

                                <!-- Popular Tab -->
                                <div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab" tabindex="0">
                                    <?php if (!empty($popular_related)): ?>
                                            <!-- Аналогичная структура как в Latest -->
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advertisement Widget -->
                    <div class="widget">
                        <div class="add-banner">
                            <a href="#">
                                <img class="img-fluid w-100" src="<?= base_url('public/user/assets/images/bg/sidebar-bg.jpg'); ?>" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

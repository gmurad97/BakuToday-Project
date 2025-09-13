<section class="space-lg-ptb explore-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-8">
                <div class="mb-4">
                    <div class="section-title">
                        <h2 class="title mb-0"><i class="fa-solid fa-bolt-lightning"></i>Discover Categories</h2>
                    </div>
                    <div class="news-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab04" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-lifestyle-tab04" data-bs-toggle="pill" data-bs-target="#pills-lifestyle04" type="button" role="tab" aria-controls="pills-lifestyle04" aria-selected="false" tabindex="-1">Must Read</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-gaming-tab04" data-bs-toggle="pill" data-bs-target="#pills-gaming04" type="button" role="tab" aria-controls="pills-gaming04" aria-selected="true">Weekly Highlights</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-sport-tab04" data-bs-toggle="pill" data-bs-target="#pills-sport04" type="button" role="tab" aria-controls="pills-sport04" aria-selected="false" tabindex="-1">Popular Stories</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent04">
                            <!-- Must Read Tab -->
                            <div class="tab-pane fade" id="pills-lifestyle04" role="tabpanel" aria-labelledby="pills-lifestyle04" tabindex="0">
                                <div class="row">
                                    <?php if (!empty($must_read_posts)): ?>
                                        <div class="col-md-5 col-lg-12 col-xl-6">
                                            <?php $main_post = $must_read_posts[0]; ?>
                                            <?php
                                            $title = $main_post['title_' . $lang] ?? $main_post['title_az'] ?? 'No title';
                                            $img = $main_post['img'] ?? 'default.jpg';
                                            $category = $this->CategoriesModel->find($main_post['category_id']);
                                            $category_name = $category ? $category['name_en'] : 'General';
                                            $date = isset($main_post['created_at']) ? date('M j Y', strtotime($main_post['created_at'])) : 'No date';
                                            $description = $main_post['short_description_' . $lang] ?? $main_post['short_description_az'] ?? 'No description';
                                            ?>
                                            <div class="blog-post post-style-03">
                                                <div class="blog-image">
                                                    <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $img); ?>" alt="<?= htmlspecialchars($title); ?>">
                                                </div>
                                                <span class="badge badge-large bg-green"><?= $category_name; ?></span>
                                                <div class="blog-post-details">
                                                    <h6 class="blog-title">
                                                        <a href="<?= base_url('news/' . $main_post['id']); ?>"><?= htmlspecialchars($title); ?></a>
                                                    </h6>
                                                    <div class="blog-post-meta">
                                                        <div class="blog-post-author">
                                                            <span><a href="#"><img src="<?= base_url('public/user/assets/images/avatar/03.jpg'); ?>" alt="">Admin</a></span>
                                                        </div>
                                                        <div class="blog-post-time">
                                                            <a href="#"><i class="fa-solid fa-calendar-days"></i><?= $date; ?></a>
                                                        </div>
                                                    </div>
                                                    <p><?= htmlspecialchars($description); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-12 col-xl-6">
                                            <div class="row">
                                                <?php for ($i = 1; $i < min(5, count($must_read_posts)); $i++): ?>
                                                    <?php $post = $must_read_posts[$i]; ?>
                                                    <?php
                                                    $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                                                    $img = $post['img'] ?? 'default.jpg';
                                                    $category = $this->CategoriesModel->find($post['category_id']);
                                                    $category_name = $category ? $category['name_en'] : 'General';
                                                    $date = isset($post['created_at']) ? date('M j Y', strtotime($post['created_at'])) : 'No date';
                                                    ?>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="blog-post post-style-02 mb-3">
                                                            <div class="blog-image">
                                                                <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $img); ?>" alt="<?= htmlspecialchars($title); ?>">
                                                            </div>
                                                            <span class="badge badge-large bg-primary"><?= $category_name; ?></span>
                                                            <div class="blog-post-details">
                                                                <h6 class="blog-title">
                                                                    <a href="<?= base_url('news/' . $post['id']); ?>"><?= htmlspecialchars($title); ?></a>
                                                                </h6>
                                                                <div class="blog-post-time">
                                                                    <a href="#"><i class="fa-solid fa-calendar-days"></i><?= $date; ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Weekly Highlights Tab -->
                            <div class="tab-pane fade active show" id="pills-gaming04" role="tabpanel" aria-labelledby="pills-gaming-tab04" tabindex="0">
                                <div class="row">
                                    <?php if (!empty($weekly_highlights)): ?>
                                        <!-- Аналогичная структура как в Must Read -->
                                        <div class="col-md-5 col-lg-12 col-xl-6">
                                            <?php $main_post = $weekly_highlights[0]; ?>
                                            <!-- ... аналогичный код ... -->
                                        </div>
                                        <div class="col-md-7 col-lg-12 col-xl-6">
                                            <div class="row">
                                                <!-- ... аналогичный код ... -->
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Popular Stories Tab -->
                            <div class="tab-pane fade" id="pills-sport04" role="tabpanel" aria-labelledby="pills-sport-tab04" tabindex="0">
                                <div class="row">
                                    <?php if (!empty($popular_stories)): ?>
                                        <!-- Аналогичная структура как в Must Read -->
                                        <div class="col-md-5 col-lg-12 col-xl-6">
                                            <?php $main_post = $popular_stories[0]; ?>
                                            <!-- ... аналогичный код ... -->
                                        </div>
                                        <div class="col-md-7 col-lg-12 col-xl-6">
                                            <div class="row">
                                                <!-- ... аналогичный код ... -->
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Latest News Section -->
                <div class="news-medical-posts">
                    <div class="section-title">
                        <h2 class="mb-0"><i class="fa-solid fa-bolt-lightning"></i>Latest News</h2>
                    </div>
                    <div class="row">
                        <?php if (!empty($latest_news)): ?>
                            <div class="col-lg-12 col-xl-4 mb-4 mb-xl-0">
                                <?php $main_news = $latest_news[0]; ?>
                                <?php
                                $title = $main_news['title_' . $lang] ?? $main_news['title_az'] ?? 'No title';
                                $img = $main_news['img'] ?? 'default.jpg';
                                $category = $this->CategoriesModel->find($main_news['category_id']);
                                $category_name = $category ? $category['name_en'] : 'General';
                                ?>
                                <div class="blog-post post-style-01">
                                    <div class="blog-image">
                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $img); ?>" alt="<?= htmlspecialchars($title); ?>">
                                    </div>
                                    <div class="blog-post-details">
                                        <span class="badge badge-large bg-pink"><?= $category_name; ?></span>
                                        <h5 class="blog-title">
                                            <a href="<?= base_url('news/' . $main_news['id']); ?>"><?= htmlspecialchars($title); ?></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-8">
                                <?php for ($i = 1; $i < count($latest_news); $i++): ?>
                                    <?php $news = $latest_news[$i]; ?>
                                    <?php
                                    $title = $news['title_' . $lang] ?? $news['title_az'] ?? 'No title';
                                    $img = $news['img'] ?? 'default.jpg';
                                    $category = $this->CategoriesModel->find($news['category_id']);
                                    $category_name = $category ? $category['name_en'] : 'General';
                                    $date = isset($news['created_at']) ? date('D', strtotime($news['created_at'])) : 'Day';
                                    $day = isset($news['created_at']) ? date('d', strtotime($news['created_at'])) : '00';
                                    ?>
                                    <div class="blog-post post-style-05">
                                        <div class="blog-post-date">
                                            <a href="#"><?= $date; ?></a>
                                            <h2><?= $day; ?></h2>
                                        </div>
                                        <div class="blog-image">
                                            <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $img); ?>" alt="<?= htmlspecialchars($title); ?>">
                                            <div class="video-icon">
                                                <a href="#"><i class="fa-solid fa-video text-orange"></i></a>
                                            </div>
                                        </div>
                                        <div class="blog-post-details">
                                            <span class="badge badge-small bg-orange"><?= $category_name; ?></span>
                                            <h6 class="blog-title">
                                                <a href="<?= base_url('news/' . $news['id']); ?>"><?= htmlspecialchars($title); ?></a>
                                            </h6>
                                            <div class="blog-view">
                                                <a href="#">2 M Views</a>
                                                <a class="" href="#">1Days Ago</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-5 col-md-12 col-xl-4">
                <div class="sidebar is-sticky">
                    <!-- Top Category Posts Widget -->
                    <div class="widget sidebar-category">
                        <h6 class="widget-title">Top Category Posts</h6>
                        <ul>
                            <?php if (!empty($categories_with_count)): ?>
                                <?php foreach ($categories_with_count as $item): ?>
                                    <?php
                                    $category = $item['category'];
                                    $count = $item['count'];
                                    $name = $category['name_' . $lang] ?? $category['name_az'] ?? 'Category';
                                    $image = 'category/0' . (($category['id'] % 6) + 6) . '.jpg';
                                    ?>
                                    <li>
                                        <a href="<?= base_url('category/' . $category['id']); ?>">
                                            <div class="category-02">
                                                <div class="category-image bg-overlay-black-40">
                                                    <img class="img-fluid" src="<?= base_url('public/user/assets/images/' . $image); ?>" alt="<?= htmlspecialchars($name); ?>">
                                                </div>
                                                <div class="category-name d-flex justify-content-between">
                                                    <span class="category-count">(<?= $count; ?>)</span>
                                                    <span class="category-content"><?= htmlspecialchars($name); ?></span>
                                                    <span class="category-icon"><i class="fa-solid fa-basketball"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="widget">
                        <h6 class="widget-title">Subscribe to Our Newsletter</h6>
                        <div class="newsletter">
                            <i class="fa-solid fa-envelope-open-text"></i>
                            <p>Subscribe For Michael Bean News And Receive Daily Updates</p>
                            <div class="newsletter-box">
                                <input type="email" class="form-control" placeholder="E-Mail Address">
                                <button type="submit" class="btn btn-primary">Subscribe Now</button>
                            </div>
                        </div>
                    </div>

                    <!-- Tags Widget -->
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

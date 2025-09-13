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
                            <!-- Изображение поста -->
                            <div class="blog-post-image mb-4">
                                <img class="img-fluid" src="<?= base_url('public/uploads/news/' . ($post['img'] ?? 'default.jpg')); ?>" alt="<?= htmlspecialchars($post['title_' . $lang] ?? $post['title_az']); ?>">
                            </div>

                            <!-- Заголовок поста -->
                            <div class="blog-post-title">
                                <h3 class="mb-0">
                                    <a href="#"><?= htmlspecialchars($post['title_' . $lang] ?? $post['title_az']); ?></a>
                                </h3>
                            </div>

                            <!-- Мета-информация -->
                            <div class="blog-post post-style-07 border-0 py-4 px-0">
                                <div class="blog-post-details">
                                    <div class="blog-post-meta p-0">
                                        <div class="blog-post-user">
                                            <a href="#">
                                                by<img class="img-fluid" src="<?= base_url('public/user/assets/images/avatar/02.jpg'); ?>" alt="">Admin
                                            </a>
                                        </div>
                                        <div class="blog-post-time">
                                            <a href="#">
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <?= isset($post['created_at']) ? date('M j Y', strtotime($post['created_at'])) : 'No date'; ?>
                                            </a>
                                        </div>
                                        <div class="blog-post-comment">
                                            <a href="#"><i class="fa-regular fa-comment"></i>(5)</a>
                                        </div>
                                        <div class="blog-post-share">
                                            <div class="share-box">
                                                <a href="#"><i class="fa-solid fa-share-nodes"></i>Share</a>
                                                <ul class="list-unstyled share-box-social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Контент поста -->
                            <p class="mb-3"><?= htmlspecialchars($post['long_description_' . $lang] ?? $post['long_description_az'] ?? 'No content'); ?></p>

                            <!-- Дополнительные изображения -->
                            <div class="row">
                                <div class="col-sm-7 mb-4 mb-sm-0">
                                    <img class="img-fluid border-radius" src="<?= base_url('public/user/assets/images/blog/politician/03.jpg'); ?>" alt="">
                                </div>
                                <div class="col-sm-5">
                                    <img class="img-fluid border-radius" src="<?= base_url('public/user/assets/images/blog/politician/04.jpg'); ?>" alt="">
                                </div>
                            </div>

                            <!-- Блок с цитатой -->
                            <blockquote class="blockquote border-radius">
                                <p><?= htmlspecialchars($post['short_description_' . $lang] ?? $post['short_description_az'] ?? 'No excerpt'); ?></p>
                                <cite class="font-weight-bold">– Admin</cite>
                            </blockquote>

                            <!-- Кнопки шаринга и теги -->
                            <div class="blog-post-share-box d-flex flex-wrap justify-content-between align-items-center mt-4">
                                <div class="blog-post post-style-07 border-0 ps-0">
                                    <div class="blog-post-details">
                                        <div class="blog-post-meta p-0">
                                            <div class="blog-post-share">
                                                <div class="share-box">
                                                    <a href="#"><i class="fa-solid fa-share-nodes"></i>Share</a>
                                                    <ul class="list-unstyled share-box-social">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="badges">
                                    <?php if ($category): ?>
                                        <a href="<?= base_url('category/' . $category['id']); ?>" class="btn-primary btn">
                                            <?= $category['name_' . $lang] ?? $category['name_az']; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Навигация между постами -->
                            <nav class="navigation post-navigation py-2 py-lg-3">
                                <div class="nav-links d-sm-flex justify-content-between">
                                    <!-- Предыдущий пост -->
                                    <div class="nav-previous">
                                        <?php if ($prev_post): ?>
                                            <a class="d-flex align-items-center justify-content-start justify-content-md-between" href="<?= base_url('news/' . $prev_post['id']); ?>">
                                                <div class="align-self-center nav-left ml-2">
                                                    <span class="d-inline-block btn btn-link px-0">
                                                        <i class="fas fa-chevron-left pe-2"></i>
                                                        Previous Post
                                                    </span>
                                                    <span class="nav-title d-block font-weight-normal">
                                                        <?= htmlspecialchars($prev_post['title_' . $lang] ?? $prev_post['title_az']); ?>
                                                    </span>
                                                </div>
                                                <div class="blog-post-nav-media d-none d-md-block">
                                                    <img class="img-fluid" src="<?= base_url('public/uploads/news/' . ($prev_post['img'] ?? 'default.jpg')); ?>" alt="">
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Следующий пост -->
                                    <div class="nav-next">
                                        <?php if ($next_post): ?>
                                            <a class="d-flex align-items-center justify-content-end justify-content-md-between" href="<?= base_url('news/' . $next_post['id']); ?>">
                                                <div class="blog-post-nav-media ml-2 d-none d-md-block">
                                                    <img class="img-fluid" src="<?= base_url('public/uploads/news/' . ($next_post['img'] ?? 'default.jpg')); ?>" alt="">
                                                </div>
                                                <div class="align-self-center text-right nav-right">
                                                    <span class="d-inline-block btn btn-link px-0">
                                                        Next Post
                                                        <i class="fas fa-chevron-right ps-2"></i>
                                                    </span>
                                                    <span class="nav-title d-block font-weight-normal">
                                                        <?= htmlspecialchars($next_post['title_' . $lang] ?? $next_post['title_az']); ?>
                                                    </span>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </nav>

                            <!-- Форма комментариев -->
                            <div class="bg-white mb-4 mt-4">
                                <h6 class="widget-title text-uppercase fw-bolder">Leave a Reply</h6>
                                <div class="blog-sidebar-post-divider mb-4"></div>
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

                            <!-- Most Views News карусель -->
                            <div class="bg-white mt-4">
                                <div class="section-title">
                                    <h2 class="mb-0"><i class="fa-solid fa-bolt-lightning"></i>Most Views News</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="owl-carousel arrow-styel-02 owl-loaded owl-drag" data-nav-dots="false" data-nav-arrow="true" data-items="3" data-xl-items="3" data-lg-items="2" data-md-items="2" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-autoheight="true">
                                            <?php if (!empty($most_views_news)): ?>
                                                <?php foreach ($most_views_news as $news): ?>
                                                    <div class="item">
                                                        <div class="blog-post post-style-02">
                                                            <div class="blog-image">
                                                                <img class="img-fluid" src="<?= base_url('public/uploads/news/' . ($news['img'] ?? 'default.jpg')); ?>" alt="<?= htmlspecialchars($news['title_' . $lang] ?? $news['title_az']); ?>">
                                                            </div>
                                                            <?php
                                                            $news_category = $this->CategoriesModel->find($news['category_id']);
                                                            $news_category_name = $news_category ? $news_category['name_en'] : 'General';
                                                            ?>
                                                            <span class="badge badge-large bg-red"><?= $news_category_name; ?></span>
                                                            <div class="blog-post-details">
                                                                <h6 class="blog-title">
                                                                    <a href="<?= base_url('news/' . $news['id']); ?>">
                                                                        <?= htmlspecialchars($news['title_' . $lang] ?? $news['title_az']); ?>
                                                                    </a>
                                                                </h6>
                                                                <div class="blog-post-time">
                                                                    <a href="#">
                                                                        <i class="fa-solid fa-calendar-days"></i>
                                                                        <?= isset($news['created_at']) ? date('M j Y', strtotime($news['created_at'])) : 'No date'; ?>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Сайдбар -->
                <div class="col-lg-5 col-xl-4">
                    <div class="sidebar mt-lg-0">
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
                                            <?php foreach ($latest_related as $related): ?>
                                                <div class="blog-post post-style-04">
                                                    <div class="blog-image">
                                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . ($related['img'] ?? 'default.jpg')); ?>" alt="<?= htmlspecialchars($related['title_' . $lang] ?? $related['title_az']); ?>">
                                                    </div>
                                                    <?php
                                                    $related_category = $this->CategoriesModel->find($related['category_id']);
                                                    $related_category_name = $related_category ? $related_category['name_en'] : 'General';
                                                    ?>
                                                    <div class="blog-post-details">
                                                        <span class="badge text-primary"><?= $related_category_name; ?></span>
                                                        <h6 class="blog-title">
                                                            <a href="<?= base_url('news/' . $related['id']); ?>">
                                                                <?= htmlspecialchars($related['title_' . $lang] ?? $related['title_az']); ?>
                                                            </a>
                                                        </h6>
                                                        <div class="blog-post-meta">
                                                            <div class="blog-post-time">
                                                                <a href="#">
                                                                    <i class="fa-solid fa-calendar-days"></i>
                                                                    <?= isset($related['created_at']) ? date('M j Y', strtotime($related['created_at'])) : 'No date'; ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Trending Tab -->
                                    <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab" tabindex="0">
                                        <!-- Аналогичная структура как в Latest Tab -->
                                    </div>

                                    <!-- Popular Tab -->
                                    <div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab" tabindex="0">
                                        <!-- Аналогичная структура как в Latest Tab -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="widget sidebar-category">
                            <h6 class="widget-title">Categories</h6>
                            <ul>
                                <?php if (!empty($categories_with_count)): ?>
                                    <?php foreach ($categories_with_count as $item): ?>
                                        <?php
                                        $cat = $item['category'];
                                        $count = $item['count'];
                                        $name = $cat['name_' . $lang] ?? $cat['name_az'] ?? 'Category';
                                        $image = 'category/0' . (($cat['id'] % 15) + 6) . '.jpg';
                                        ?>
                                        <li>
                                            <a href="<?= base_url('category/' . $cat['id']); ?>">
                                                <div class="category">
                                                    <div class="category-image">
                                                        <img class="img-fluid" src="<?= base_url('public/user/assets/images/' . $image); ?>" alt="<?= htmlspecialchars($name); ?>">
                                                    </div>
                                                    <div class="category-name">
                                                        <h6><?= htmlspecialchars($name); ?><span>(<?= $count; ?>)</span></h6>
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
    <?php $this->load->view("user/partials/_footer"); ?>
    <?php $this->load->view("user/partials/_scroll"); ?>
    <?php $this->load->view("user/partials/_scripts"); ?>
</body>

</html>

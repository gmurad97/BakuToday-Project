<section class="breaking-news">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3 col-md-4">
                <span class="news-btn">Breaking News <i class="fa-solid fa-caret-right"></i></span>
            </div>
            <div class="col-xl-10 col-lg-9 col-md-8">
                <div class="owl-carousel arrow-styel-03" data-nav-dots="false" data-nav-arrow="true" data-items="4" data-xl-items="4" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xx-items="1" data-autoheight="true">
                    <?php if (!empty($breaking_news)): ?>
                        <?php foreach ($breaking_news as $news): ?>
                            <?php
                            $title = $news['title_' . $lang] ?? $news['title_az'] ?? 'Breaking News';
                            $img = $news['img'] ?? 'default.jpg';
                            ?>
                            <div class="item">
                                <div class="news-post">
                                    <div class="news-image">
                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $img); ?>" alt="<?= htmlspecialchars($title); ?>">
                                    </div>
                                    <div class="news-post-details">
                                        <h6 class="news-title">
                                            <a href="<?= base_url('news/' . $news['id']); ?>">
                                                <?= htmlspecialchars($title); ?>
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Fallback content if no breaking news -->
                        <div class="item">
                            <div class="news-post">
                                <div class="news-image">
                                    <img class="img-fluid" src="<?= base_url('public/user/assets/images/news/01.jpg'); ?>" alt="Better pictures to boost business">
                                </div>
                                <div class="news-post-details">
                                    <h6 class="news-title"><a href="#">Better pictures to boost business</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="news-post">
                                <div class="news-image">
                                    <img class="img-fluid" src="<?= base_url('public/user/assets/images/news/10.jpg'); ?>" alt="Champions Wear the Victory with Pride">
                                </div>
                                <div class="news-post-details">
                                    <h6 class="news-title"><a href="#">Champions Wear the Victory with Pride</a></h6>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="breaking-news-slide"></div>
        </div>
    </div>
</section>

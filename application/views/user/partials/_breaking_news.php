<section class="breaking-news">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3 col-md-4">
                <span class="news-btn">Breaking News <i class="fa-solid fa-caret-right"></i></span>
            </div>
            <div class="col-xl-10 col-lg-9 col-md-8">
                <div class="owl-carousel arrow-styel-03" data-nav-dots="false" data-nav-arrow="true" data-items="4" data-xl-items="4" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xx-items="1" data-autoheight="true">
                    <?php if (!empty($recent_posts)): ?>
                        <?php foreach ($recent_posts as $post): ?>
                            <div class="item">
                                <div class="news-post">
                                    <div class="news-image">
                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $post['img']); ?>" alt="<?= $post['title_' . $lang]; ?>">
                                    </div>
                                    <div class="news-post-details">
                                        <h6 class="news-title">
                                            <a href="<?= base_url('news/' . $post['id']); ?>"><?= $post['title_' . $lang]; ?></a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="breaking-news-slide"></div>
        </div>
    </div>
</section>

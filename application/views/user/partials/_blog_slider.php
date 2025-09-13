<section class="space-sm-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="mb-0"><i class="fa-solid fa-bolt-lightning"></i>Top Stories</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel arrow-styel-02 owl-loaded owl-drag" data-nav-dots="false" data-nav-arrow="true" data-items="4" data-xl-items="4" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-autoheight="true" data-autoplay="false">
                    <?php foreach ($top_stories as $story): ?>
                        <div class="item">
                            <div class="blog-post post-style-02">
                                <div class="blog-image">
                                    <img class="img-fluid" src="<?= base_url("public/uploads/news/" . $story['img'] ?: 'public/user/assets/images/blog/01.jpg'); ?>" alt="<?= $story['title_en'] ?>">
                                </div>
                                <?php
                                // Получаем название категории
                                $category = $this->CategoriesModel->find($story['category_id']);
                                $category_name = $category ? $category['name_en'] : 'Uncategorized';
                                ?>
                                <span class="badge badge-large bg-red"><?= $category_name ?></span>
                                <div class="blog-post-details">
                                    <h6 class="blog-title">
                                        <a href="#"><?= $story['title_en'] ?></a>
                                    </h6>
                                    <div class="blog-post-time">
                                        <a href="#">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <?= date('M j Y', strtotime($story['created_at'])) ?>
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
</section>

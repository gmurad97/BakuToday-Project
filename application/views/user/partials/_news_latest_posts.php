<section class="news-latest-posts">
    <div class="container">
        <div class="row">
            <?php if (!empty($recent_posts)): ?>
                <div class="col-lg-6">
                    <?php $first = array_shift($recent_posts); ?>
                    <div class="blog-post post-style-01">
                        <div class="blog-image">
                            <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $first['img']); ?>" alt="<?= $first['title_' . $lang]; ?>">
                        </div>
                        <div class="blog-post-details">
                            <span class="badge badge-large bg-primary">
                                <?= $first['category_id'] ?? 'Category'; ?>
                            </span>
                            <h3 class="blog-title">
                                <a href="<?= base_url('news/' . $first['id']); ?>"><?= $first['title_' . $lang]; ?></a>
                            </h3>
                            <div class="blog-post-meta">
                                <div class="blog-post-time">
                                    <a href="#"><i class="fa-solid fa-calendar-days"></i><?= date('M d, Y', strtotime($first['created_at'])); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row mb-lg-4 mb-0">
                        <?php if (!empty($recent_posts))
                            $second = array_shift($recent_posts); ?>
                        <?php if (!empty($second)): ?>
                            <div class="col-lg-12">
                                <div class="blog-post post-style-01">
                                    <div class="blog-image">
                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $second['img']); ?>" alt="<?= $second['title_' . $lang]; ?>">
                                    </div>
                                    <div class="blog-post-details">
                                        <span class="badge badge-large bg-yellow">
                                            <?= $second['category_id'] ?? 'Category'; ?>
                                        </span>
                                        <h4 class="blog-title">
                                            <a href="<?= base_url('news/' . $second['id']); ?>"><?= $second['title_' . $lang]; ?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <?php foreach ($recent_posts as $post): ?>
                            <div class="col-sm-6">
                                <div class="blog-post post-style-01 <?= $post === end($recent_posts) ? 'mb-0' : ''; ?>">
                                    <div class="blog-image">
                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $post['img']); ?>" alt="<?= $post['title_' . $lang]; ?>">
                                    </div>
                                    <div class="blog-post-details">
                                        <span class="badge badge-large bg-purple">
                                            <?= $post['category_id'] ?? 'Category'; ?>
                                        </span>
                                        <h4 class="blog-title">
                                            <a href="<?= base_url('news/' . $post['id']); ?>"><?= $post['title_' . $lang]; ?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

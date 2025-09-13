<footer class="footer">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-7 mb-4">
                    <div class="footer-about">
                        <a class="footer-logo" href="<?= base_url(); ?>">
                            <img class="img-fluid" src="<?= base_url('public/user/assets/images/logo-light.png'); ?>" alt="logo">
                        </a>
                        <p>For those of you who are serious about having more, doing more, giving more and being more, success is achievable with some understanding of what to do.</p>
                        <div class="footer-social">
                            <ul class="social-icons">
                                <li><a href="https://github.com/gmurad97" class="social-icon facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://github.com/gmurad97" class="social-icon twitter"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="https://github.com/gmurad97" class="social-icon linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://github.com/gmurad97" class="social-icon"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Quick Link -->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-5 mb-4">
                    <h4 class="footer-title">Quick Link</h4>
                    <ul class="footer-menu">
                        <?php if (!empty($categories)): ?>
                            <?php foreach ($categories as $category): ?>
                                <?php
                                $name = $category['name_' . $lang] ?? $category['name_az'] ?? 'Category';
                                ?>
                                <li>
                                    <a href="<?= base_url('category/' . $category['id']); ?>">
                                        <i class="fa-solid fa-chevron-right"></i><?= htmlspecialchars($name); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Recent Posts -->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                    <h4 class="footer-title">Recent Posts</h4>
                    <div class="footer-post">
                        <?php if (!empty($recent_posts)): ?>
                            <?php foreach ($recent_posts as $post): ?>
                                <?php
                                $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                                $img = $post['img'] ?? 'default.jpg';
                                $date = isset($post['created_at']) ? date('M d, Y', strtotime($post['created_at'])) : 'No date';
                                ?>
                                <div class="blog-post <?= ($post === end($recent_posts)) ? 'mb-0' : ''; ?>">
                                    <div class="blog-image">
                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $img); ?>" alt="<?= htmlspecialchars($title); ?>">
                                    </div>
                                    <div class="blog-post-details">
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
                </div>

                <!-- Instagram -->
                <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                    <h4 class="footer-title">Instagram</h4>
                    <ul class="footer-insta">
                        <?php for ($i = 6; $i <= 11; $i++): ?>
                            <li>
                                <a href="#"><img class="img-fluid" src="<?= base_url("public/user/assets/images/instagram/01.jpg"); ?>" alt="#"></a>
                                <span><i class="fa-brands fa-instagram"></i></span>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row copyright justify-content-center">
                <div class="col-md-12 text-center">
                    <p class="mb-0">Copyright © <?= date('Y'); ?> by <a href="<?= base_url(); ?>">Nezzy</a>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

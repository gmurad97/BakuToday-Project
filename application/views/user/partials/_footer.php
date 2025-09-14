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
                                <li><a href="#" class="social-icon facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" class="social-icon twitter"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#" class="social-icon linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-5 mb-4">
                    <h4 class="footer-title">Quick Link</h4>
                    <ul class="footer-menu">
                        <li><a href="<?= base_url('home'); ?>"><i class="fa-solid fa-chevron-right"></i> Home</a></li>
                        <li><a href="<?= base_url('news'); ?>"><i class="fa-solid fa-chevron-right"></i> News</a></li>
                        <li><a href="<?= base_url('categories'); ?>"><i class="fa-solid fa-chevron-right"></i> Categories</a></li>
                        <li><a href="<?= base_url('about'); ?>"><i class="fa-solid fa-chevron-right"></i> About</a></li>
                        <li><a href="<?= base_url('contacts'); ?>"><i class="fa-solid fa-chevron-right"></i> Contacts</a></li>
                        <li><a href="<?= base_url('team'); ?>"><i class="fa-solid fa-chevron-right"></i> Team</a></li>
                        <li><a href="<?= base_url('login'); ?>"><i class="fa-solid fa-chevron-right"></i> Login</a></li>
                        <li><a href="<?= base_url('register'); ?>"><i class="fa-solid fa-chevron-right"></i> Register</a></li>
                    </ul>
                </div>

                <!-- Recent Posts -->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                    <h4 class="footer-title">Recent Posts</h4>
                    <div class="footer-post">
                        <?php if (!empty($latest_news_with_author_category)): ?>
                            <?php foreach (array_slice($latest_news_with_author_category, 0, 2) as $news): ?>
                                <div class="blog-post mb-3">
                                    <div class="blog-image">
                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $news['img']); ?>" alt="<?= $news['title_' . $lang]; ?>">
                                    </div>
                                    <div class="blog-post-details">
                                        <h6 class="blog-title">
                                            <a href="<?= base_url('news/' . $news['id']); ?>">
                                                <?= $news['title_' . $lang]; ?>
                                            </a>
                                        </h6>
                                        <div class="blog-post-meta">
                                            <div class="blog-post-time">
                                                <a href="#"><i class="fa-solid fa-calendar-days"></i> <?= date("M d Y", strtotime($news['created_at'])); ?></a>
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
                                <a href="#"><img class="img-fluid" src="<?= base_url("public/user/assets/images/instagram/0{$i}.jpg"); ?>" alt="#"></a>
                                <span><i class="fa-brands fa-instagram"></i></span>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row copyright justify-content-center">
                <div class="col-md-12 text-center">
                    <p class="mb-0">Copyright ©
                        <span id="copyright">
                            <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
                        </span> by
                        <a href="<?= base_url(); ?>">Nezzy</a>. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

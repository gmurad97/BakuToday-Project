<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            <a class="navbar-brand" href="<?= base_url('home'); ?>">
                <img class="img-fluid" src="<?= base_url('public/user/assets/images/logo-dark.png'); ?>" alt="logo">
            </a>
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav navbar-nav-style-03">
            <!-- Home -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home'); ?>">
                    <?= $this->lang->line("home"); ?>
                </a>
            </li>

            <!-- News -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('news'); ?>">
                    <?= $this->lang->line("news"); ?>
                </a>
            </li>

            <!-- Categories -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarCategories" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $this->lang->line("categories"); ?> <i class="fas fa-chevron-down fa-xs"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarCategories">
                    <?php foreach ($navbar_categories as $category): ?>
                        <li>
                            <a class="dropdown-item" href="<?= base_url('categories/' . $category['id']); ?>">
                                <?= $category['name_' . $lang]; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>

            <!-- About -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('about'); ?>">
                    <?= $this->lang->line("about"); ?>
                </a>
            </li>

            <!-- Contacts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('contacts'); ?>">
                    <?= $this->lang->line("contacts"); ?>
                </a>
            </li>

            <!-- Team -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('team'); ?>">
                    <?= $this->lang->line("team"); ?>
                </a>
            </li>

            <!-- Auth -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('login'); ?>">
                    <?= $this->lang->line("login"); ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('register'); ?>">
                    <?= $this->lang->line("register"); ?>
                </a>
            </li>

            <!-- Sidebar posts -->
            <li>
                <ul class="sidebar-post">
                    <?php foreach ($latest_news_with_author_category as $news): ?>
                        <li>
                            <div class="blog-post post-style-05">
                                <div class="blog-post-date">
                                    <a href="#"><?= date("D", strtotime($news['created_at'])); ?></a>
                                    <h2><?= date("d", strtotime($news['created_at'])); ?></h2>
                                </div>
                                <div class="blog-image">
                                    <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $news['img']); ?>" alt="">
                                </div>
                                <div class="blog-post-details">
                                    <span class="badge badge-small bg-orange">
                                        <?= $news['category_name_' . $lang]; ?>
                                    </span>
                                    <h6 class="blog-title">
                                        <a href="<?= base_url('news/' . $news['id']); ?>">
                                            <?= $news['title_' . $lang]; ?>
                                        </a>
                                    </h6>
                                    <div class="blog-view">
                                        <a href="#">0 Views</a>
                                        <a href="#"><?= $news['created_at']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>

        <!-- Socials -->
        <ul class="social-icons">
            <li><a href="#" class="social-icon facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#" class="social-icon twitter"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#" class="social-icon linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="#" class="social-icon"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</div>

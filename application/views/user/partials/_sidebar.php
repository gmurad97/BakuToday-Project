<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <img class="img-fluid" src="<?= base_url('public/user/assets/images/logo-dark.png'); ?>" alt="logo">
            </a>
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav navbar-nav-style-03">
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown06" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Home<i class="fas fa-chevron-down fa-xs"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown06">
                    <li class="active"><a class="dropdown-item" href="<?= base_url(); ?>">Default</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('home'); ?>">Sport</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown09" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories<i class="fas fa-chevron-down fa-xs"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown09">
                    <?php if (!empty($all_categories)): ?>
                        <?php foreach ($all_categories as $category): ?>
                            <?php
                            $name = $category['name_' . $lang] ?? $category['name_az'] ?? 'Category';
                            ?>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('category/' . $category['id']); ?>">
                                    <?= htmlspecialchars($name); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('about'); ?>">About Us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('contacts'); ?>">Contact Us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('blog'); ?>">Blog</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('team'); ?>">Team</a>
            </li>

            <li>
                <ul class="sidebar-post">
                    <?php if (!empty($popular_posts)): ?>
                        <?php foreach ($popular_posts as $post): ?>
                            <?php
                            $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                            $img = $post['img'] ?? 'default.jpg';
                            $category = $this->CategoriesModel->find($post['category_id']);
                            $category_name = $category ? $category['name_en'] : 'General';
                            $date = isset($post['created_at']) ? date('D', strtotime($post['created_at'])) : 'Day';
                            $day = isset($post['created_at']) ? date('d', strtotime($post['created_at'])) : '00';
                            ?>
                            <li>
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
                                            <a href="<?= base_url('news/' . $post['id']); ?>"><?= htmlspecialchars($title); ?></a>
                                        </h6>
                                        <div class="blog-view">
                                            <a href="#">5 M Views</a>
                                            <a class="" href="#">3Days Ago</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>

        <ul class="social-icons">
            <li>
                <a href="#" class="social-icon facebook"> <i class="fa-brands fa-facebook-f"></i> </a>
            </li>
            <li>
                <a href="#" class="social-icon twitter"> <i class="fa-brands fa-twitter"></i> </a>
            </li>
            <li>
                <a href="#" class="social-icon linkedin"> <i class="fa-brands fa-linkedin-in"></i> </a>
            </li>
            <li>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
    </div>
</div>

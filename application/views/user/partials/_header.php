<header class="header header-sticky">
    <div class="topbar d-none d-md-block">
        <div class="container">
            <div class="topbar-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="d-lg-flex align-items-center text-center">
                            <div class="topbar-left mb-2 mb-lg-0">
                                <div class="topbar-date d-inline-flex">
                                    <span class="date">
                                        <i class="fa-solid fa-calendar-days"></i> <?= $current_date; ?>
                                    </span>
                                </div>
                                <div class="me-auto d-inline-flex">
                                    <ul class="list-unstyled top-menu">
                                        <li><a href="<?= base_url('advertise'); ?>">Advertise</a></li>
                                        <li><a href="<?= base_url('write-us'); ?>">Write Us</a></li>
                                        <li><a href="<?= base_url('about'); ?>">About</a></li>
                                        <li><a href="<?= base_url('contacts'); ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="topbar-right ms-auto justify-content-center">
                                <span class="user">
                                    <a href="<?= base_url('sign-in'); ?>">
                                        <img src="<?= base_url('public/user/assets/images/user.png'); ?>" alt="#"> Sign In
                                    </a>
                                </span>
                                <div class="dropdown right-menu d-inline-flex news-language">
                                    <a class="dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="img-fluid country-flag" src="<?= base_url('public/user/assets/images/country-flags/02.jpg'); ?>" alt="">
                                        English<i class="fas fa-chevron-down fa-xs"></i>
                                    </a>
                                    <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="<?= base_url('locale/en'); ?>">
                                            <img class="img-fluid country-flag" src="<?= base_url('public/shared/flags/gb.svg'); ?>" alt="">EN
                                        </a>
                                        <a class="dropdown-item" href="<?= base_url('locale/az'); ?>">
                                            <img class="img-fluid country-flag" src="<?= base_url('public/shared/flags/az.svg'); ?>" alt="">AZ
                                        </a>
                                        <a class="dropdown-item" href="<?= base_url('locale/ru'); ?>">
                                            <img class="img-fluid country-flag" src="<?= base_url('public/shared/flags/ru.svg'); ?>" alt="">RU
                                        </a>
                                    </div>
                                </div>
                                <div class="social d-inline-flex">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#"> <i class="fa-brands fa-facebook-f"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fab fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa-brands fa-linkedin-in"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fab fa-instagram"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container position-relative">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <img class="img-fluid" src="<?= base_url('public/user/assets/images/logo-dark.png'); ?>" alt="logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown01" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Home<i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown01">
                            <li class="active"><a class="dropdown-item" href="<?= base_url(); ?>">Default</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('home/sport'); ?>">Sport</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('home/technology'); ?>">Technology</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('home/magazine'); ?>">Magazine</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('home/politician'); ?>">Politician</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('home/newspaper'); ?>">Newspaper</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown02" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages<i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
                            <li><a class="dropdown-item" href="<?= base_url('about'); ?>">About Us</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('team'); ?>">Team</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('contacts'); ?>">Contact Us</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('404'); ?>">404</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('sign-in'); ?>">Sign in</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('sign-up'); ?>">Sign up</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown03" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Features<i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu megamenu dropdown-menu-md" aria-labelledby="navbarDropdown03">
                            <li>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span class="mb-3 nav-title mt-0"> Pages</span>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a class="dropdown-submenu" href="<?= base_url('author'); ?>">Author</a></li>
                                            <li><a class="dropdown-submenu" href="<?= base_url('blog/single/1'); ?>">Blog single 01</a></li>
                                            <li><a class="dropdown-submenu" href="<?= base_url('blog/single/2'); ?>">Blog single 02</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="mb-3 nav-title mt-0"> Pages</span>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a class="dropdown-submenu" href="<?= base_url('blog/single/3'); ?>">Blog single 03</a></li>
                                            <li><a class="dropdown-submenu" href="<?= base_url('blog/single/4'); ?>">Blog single 04</a></li>
                                            <li><a class="dropdown-submenu" href="<?= base_url('blog/single/5'); ?>">Blog single 05</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                            Categories<i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu megamenu megamenu-fullwidth">
                            <!-- Technology Category -->
                            <li class="nav-item">
                                <a class="dropdown-item" href="<?= base_url('categories'); ?>">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="<?= base_url('category/technology'); ?>">Technology</a>
                                <div class="inner-mega-menu">
                                    <div class="row">
                                        <?php if (!empty($tech_menu_posts)): ?>
                                            <?php foreach ($tech_menu_posts as $post): ?>
                                                <?php
                                                $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                                                $img = $post['img'] ?? 'default.jpg';
                                                $category = $this->CategoriesModel->find($post['category_id']);
                                                $category_name = $category ? $category['name_en'] : 'Technology';
                                                $date = isset($post['created_at']) ? date('M j Y', strtotime($post['created_at'])) : 'No date';
                                                ?>
                                                <div class="col">
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
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>

                            <!-- Sport Category -->
                            <li class="nav-item">
                                <a class="dropdown-item" href="<?= base_url('category/sport'); ?>">Sport</a>
                                <div class="inner-mega-menu">
                                    <div class="row">
                                        <?php if (!empty($sport_menu_posts)): ?>
                                            <?php foreach ($sport_menu_posts as $post): ?>
                                                <?php
                                                $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                                                $img = $post['img'] ?? 'default.jpg';
                                                $category = $this->CategoriesModel->find($post['category_id']);
                                                $category_name = $category ? $category['name_en'] : 'Technology';
                                                $date = isset($post['created_at']) ? date('M j Y', strtotime($post['created_at'])) : 'No date';
                                                ?>
                                                <div class="col">
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
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>

                            <!-- Entertainment Category -->
                            <li class="nav-item">
                                <a class="dropdown-item" href="<?= base_url('category/entertainment'); ?>">Entertainment</a>
                                <div class="inner-mega-menu">
                                    <div class="row">
                                        <?php if (!empty($entertainment_menu_posts)): ?>
                                            <?php foreach ($entertainment_menu_posts as $post): ?>
                                                <?php
                                                $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                                                $img = $post['img'] ?? 'default.jpg';
                                                $category = $this->CategoriesModel->find($post['category_id']);
                                                $category_name = $category ? $category['name_en'] : 'Technology';
                                                $date = isset($post['created_at']) ? date('M j Y', strtotime($post['created_at'])) : 'No date';
                                                ?>
                                                <div class="col">
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
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>

                            <!-- Politics Category -->
                            <li class="nav-item">
                                <a class="dropdown-item" href="<?= base_url('category/politics'); ?>">Politics</a>
                                <div class="inner-mega-menu">
                                    <div class="row">
                                        <?php if (!empty($politics_menu_posts)): ?>
                                            <?php foreach ($politics_menu_posts as $post): ?>
                                                <?php
                                                $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                                                $img = $post['img'] ?? 'default.jpg';
                                                $category = $this->CategoriesModel->find($post['category_id']);
                                                $category_name = $category ? $category['name_en'] : 'Technology';
                                                $date = isset($post['created_at']) ? date('M j Y', strtotime($post['created_at'])) : 'No date';
                                                ?>
                                                <div class="col">
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
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>

                            <!-- Magazine Category -->
                            <li class="nav-item">
                                <a class="dropdown-item" href="<?= base_url('category/magazine'); ?>">Magazine</a>
                                <div class="inner-mega-menu">
                                    <div class="row">
                                        <?php if (!empty($magazine_menu_posts)): ?>
                                            <?php foreach ($magazine_menu_posts as $post): ?>
                                                <?php
                                                $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                                                $img = $post['img'] ?? 'default.jpg';
                                                $category = $this->CategoriesModel->find($post['category_id']);
                                                $category_name = $category ? $category['name_en'] : 'Technology';
                                                $date = isset($post['created_at']) ? date('M j Y', strtotime($post['created_at'])) : 'No date';
                                                ?>
                                                <div class="col">
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
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>

                            <!-- Lifestyle Category -->
                            <li class="nav-item">
                                <a class="dropdown-item" href="<?= base_url('category/lifestyle'); ?>">Lifestyle</a>
                                <div class="inner-mega-menu">
                                    <div class="row">
                                        <?php if (!empty($lifestyle_menu_posts)): ?>
                                            <?php foreach ($lifestyle_menu_posts as $post): ?>
                                                <?php
                                                $title = $post['title_' . $lang] ?? $post['title_az'] ?? 'No title';
                                                $img = $post['img'] ?? 'default.jpg';
                                                $category = $this->CategoriesModel->find($post['category_id']);
                                                $category_name = $category ? $category['name_en'] : 'Technology';
                                                $date = isset($post['created_at']) ? date('M j Y', strtotime($post['created_at'])) : 'No date';
                                                ?>
                                                <div class="col">
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
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown05" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop<i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown05">
                            <li><a class="dropdown-item" href="<?= base_url('shop'); ?>">Shop</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('shop/product'); ?>">Shop Single</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('shop/cart'); ?>">Cart</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('shop/checkout'); ?>">Checkout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="add-listing">
                <div class="weather">
                    <img class="img-fluid weather-icon" src="<?= base_url('public/user/assets/images/weather-icon.png'); ?>" alt="">
                    <span class="weather-temprecher">25</span>
                    <span class="weather-address">
                        <span class="place">NEW YORK,</span>
                        <span class="date"><?= date('D. j M Y'); ?></span>
                    </span>
                </div>
                <div id="weathertime" class="clock"></div>
                <div class="header-search">
                    <div class="search">
                        <a href="#search"> <i class="fa-solid fa-magnifying-glass"></i> </a>
                    </div>
                </div>
                <div class="side-menu d-none d-lg-inline-block">
                    <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <i class="fa-solid fa-align-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-align-right"></i>
        </button>
    </nav>
</header>

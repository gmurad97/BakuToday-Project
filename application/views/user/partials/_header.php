<header class="header header-sticky">
    <div class="topbar d-none d-md-block">
        <div class="container">
            <div class="topbar-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="d-lg-flex align-items-center text-center">
                            <div class="topbar-left mb-2 mb-lg-0">
                                <div class="topbar-date d-inline-flex"> <span class="date"><i class="fa-solid fa-calendar-days"></i> Sunday, March, 2022</span> </div>
                                <div class="me-auto d-inline-flex">
                                    <ul class="list-unstyled top-menu">
                                        <li><a href="<?= base_url('about'); ?>">About</a></li>
                                        <li><a href="<?= base_url('contacts'); ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="topbar-right ms-auto justify-content-center"> <span class="user">
                                    <a href="<?= base_url('login') ?>"><img src="<?= base_url('public/user/assets/images/user.png'); ?>" alt="#"> Sign In</a>
                                </span>
                                <div class="dropdown right-menu d-inline-flex news-language">
                                    <a class="dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="img-fluid country-flag" src="<?= base_url('public/shared/flags/gb.svg'); ?>" alt=""> English<i class="fas fa-chevron-down fa-xs"></i> </a>
                                    <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="<?= base_url('locale/en'); ?>"><img class="img-fluid country-flag" src="<?= base_url('public/shared/flags/gb.svg'); ?>" alt="">EN</a>
                                        <a class="dropdown-item" href="<?= base_url('locale/az'); ?>"><img class="img-fluid country-flag" src="<?= base_url('public/shared/flags/az.svg'); ?>" alt="">AZ</a>
                                        <a class="dropdown-item" href="<?= base_url('locale/ru'); ?>"><img class="img-fluid country-flag" src="<?= base_url('public/shared/flags/ru.svg'); ?>" alt="">RU</a>
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
                            Home <i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown01">
                            <?php foreach ($navbar_categories_with_news as $category): ?>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="<?= base_url('categories/' . $category['id']) ?>"><?= htmlspecialchars($category['name_az']) ?></a>
                                    <?php if (!empty($category['news'])): ?>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($category['news'] as $news): ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?= base_url("news/{$news['id']}") ?>">
                                                        <?= htmlspecialchars($news['title_az']) ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown02" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages <i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
                            <li><a class="dropdown-item" href="<?= base_url('about') ?>">About Us</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('team') ?>">Team</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('team') ?>">A</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('contacts') ?>">Contact Us</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('404') ?>">404</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('login') ?>">Sign in</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('register') ?>">Sign up</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                            Categories <i class="fas fa-chevron-down fa-xs"></i>
                        </a>
                        <ul class="dropdown-menu megamenu megamenu-fullwidth">
                            <?php foreach ($navbar_categories_with_news as $category): ?>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="<?= base_url('categories/' . $category['id']) ?>">
                                        <?= $category['name_az'] /* можно менять на name_en / name_ru */ ?>
                                    </a>
                                    <div class="inner-mega-menu">
                                        <div class="row">
                                            <?php foreach ($category['news'] as $news): ?>
                                                <div class="col">
                                                    <div class="blog-post post-style-02 mb-3">
                                                        <div class="blog-image">
                                                            <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $news['img']) ?>" alt="">
                                                        </div>
                                                        <span class="badge badge-large bg-primary"><?= $category['name_az'] ?></span>
                                                        <div class="blog-post-details">
                                                            <h6 class="blog-title">
                                                                <a href="<?= base_url('news/' . $news['id']) ?>"><?= $news['title_az'] ?></a>
                                                            </h6>
                                                            <div class="blog-post-time">
                                                                <a href="#"><i class="fa-solid fa-calendar-days"></i><?= date("M d Y", strtotime($news['created_at'])) ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
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
                        <span class="date">Mon. 10 jun 2022</span>
                    </span>
                </div>
                <div id="weathertime" class="clock"></div>
                <div class="header-search">
                    <div class="search">
                        <a href="#search"> <i class="fa-solid fa-magnifying-glass"></i> </a>
                    </div>
                </div>
                <div class="side-menu d-none d-lg-inline-block">
                    <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"> <i class="fa-solid fa-align-right"></i> </a>
                </div>
            </div>
        </div>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa-solid fa-align-right"></i> </button>
    </nav>
</header>

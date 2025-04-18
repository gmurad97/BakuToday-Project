<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('user/partials/_head'); ?>
</head>

<body>

    <!--=================================
    Loader -->
    <div id="overlayer"></div>
    <span class="loader">
        <span class="loader-inner"></span>
    </span>

    <!--=================================
    Header -->
    <header class="header header-sticky">
        <div class="topbar d-none d-md-block">
            <div class="container">
                <div class="topbar-inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-lg-flex align-items-center text-center">
                                <div class="topbar-left mb-2 mb-lg-0">
                                    <div class="topbar-date d-inline-flex">
                                        <span class="date"><i class="fa-solid fa-calendar-days"></i> Sunday, March, 2022</span>
                                    </div>
                                    <div class="me-auto d-inline-flex">
                                        <ul class="list-unstyled top-menu">
                                            <li><a href="#">Advertise</a></li>
                                            <li><a href="#">Write Us</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="topbar-right ms-auto justify-content-center">
                                    <span class="user">
                                        <a href="sign-in.html"><img src="images/user.png" alt="#"> Sign In</a>
                                    </span>
                                    <div class="dropdown right-menu d-inline-flex news-language">
                                        <a class="dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="img-fluid country-flag" src="images/country-flags/02.jpg" alt=""> English<i class="fas fa-chevron-down fa-xs"></i>
                                        </a>
                                        <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="#"><img class="img-fluid country-flag" src="images/country-flags/02.jpg" alt="">English</a>
                                            <a class="dropdown-item" href="#"><img class="img-fluid country-flag" src="images/country-flags/09.jpg" alt="">Francais</a>
                                            <a class="dropdown-item" href="#"><img class="img-fluid country-flag" src="images/country-flags/11.jpg" alt="">Deutsch</a>
                                            <a class="dropdown-item" href="#"><img class="img-fluid country-flag" src="images/country-flags/12.jpg" alt="">Italiano</a>
                                        </div>
                                    </div>
                                    <div class="social d-inline-flex">
                                        <ul class="list-unstyled">
                                            <li><a href="#"> <i class="fa-brands fa-facebook-f"></i> </a></li>
                                            <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                                            <li><a href="#"> <i class="fa-brands fa-linkedin-in"></i> </a></li>
                                            <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
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
                <a class="navbar-brand" href="index.html">
                    <img class="img-fluid" src="images/logo-dark.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown01" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home<i class="fas fa-chevron-down fa-xs"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown01">
                                <li><a class="dropdown-item" href="index.html">Default</a></li>
                                <li><a class="dropdown-item" href="index-02.html">Sport</a></li>
                                <li><a class="dropdown-item" href="index-03.html">Technology</a></li>
                                <li><a class="dropdown-item" href="index-04.html">Magazine</a></li>
                                <li><a class="dropdown-item" href="index-05.html">Politician</a></li>
                                <li><a class="dropdown-item" href="index-06.html">Newspaper</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown  active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown02" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
                                <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                                <li><a class="dropdown-item" href="team.html">Team</a></li>
                                <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                                <li class="active"><a class="dropdown-item" href="404.html">404</a></li>
                                <li><a class="dropdown-item" href="sign-in.html">Sign in</a></li>
                                <li><a class="dropdown-item" href="sign-up.html">Sign up</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown03" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Features<i class="fas fa-chevron-down fa-xs"></i>
                            </a>
                            <ul class="dropdown-menu megamenu dropdown-menu-md" aria-labelledby="navbarDropdown03">
                                <li>
                                    <div class="row">
                                        <div class="col-sm-6"> <span class="mb-3 nav-title mt-0"> Pages</span>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a class="dropdown-submenu" href="author.html">Author</a></li>
                                                <li><a class="dropdown-submenu" href="blog-single-01.html">Blog single 01</a></li>
                                                <li><a class="dropdown-submenu" href="blog-single-02.html">Blog single 02</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6"> <span class="mb-3 nav-title mt-0"> Pages</span>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a class="dropdown-submenu" href="blog-single-03.html">Blog single 03</a></li>
                                                <li><a class="dropdown-submenu" href="blog-single-04.html">Blog single 04</a></li>
                                                <li><a class="dropdown-submenu" href="blog-single-05.html">Blog single 05</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Categories<i class="fas fa-chevron-down fa-xs"></i></a>
                            <ul class="dropdown-menu megamenu megamenu-fullwidth">
                                <li class="nav-item selected">
                                    <a class="dropdown-item" href="categories-style-01.html">Technology</a>
                                    <div class="inner-mega-menu">
                                        <div class="row">
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/technology/menu/01.jpg" alt=""> </div> <span class="badge badge-large bg-primary">Vehicle</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-01.html">Everyday vehicles that aren’t</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jan 5 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/technology/menu/02.jpg" alt=""> </div> <span class="badge badge-large bg-blue">Touchless</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-01.html">Building Networks for People.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 15 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/technology/menu/03.jpg" alt=""> </div> <span class="badge badge-large bg-red">Gadgets</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-01.html">Only high quality is available here</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 20 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/technology/menu/04.jpg" alt=""> </div> <span class="badge badge-large bg-yellow">Earbuds</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-01.html">Better sound through research.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 10 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/technology/menu/05.jpg" alt=""> </div> <span class="badge badge-large bg-red">eyeprint</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-01.html">Miracles in print</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 20 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="categories-style-02.html">Sport</a>
                                    <div class="inner-mega-menu">
                                        <div class="row">
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image">
                                                        <img class="img-fluid" src="images/category/sport/menu/01.jpg" alt="">
                                                    </div>
                                                    <span class="badge badge-large bg-orange">Cycling</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title">
                                                            <a href="categories-style-02.html">Champions are made in practice.</a>
                                                        </h6>
                                                        <div class="blog-post-time">
                                                            <a href="#"><i class="fa-solid fa-calendar-days"></i>Jan 7 2022</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/sport/menu/02.jpg" alt=""> </div> <span class="badge badge-large bg-primary">Pool</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-02.html">Fight till victory</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 15 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/sport/menu/03.jpg" alt=""> </div> <span class="badge badge-large bg-purple">Rugby</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-02.html">Pain is temporary, pride is forever.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 25 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/sport/menu/04.jpg" alt=""> </div> <span class="badge badge-large bg-red">Boxing</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-02.html">Defend til the End.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 2 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/sport/menu/05.jpg" alt=""> </div> <span class="badge badge-large bg-yellow">Volleyball</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-02.html">Meet me at the net.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 16 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="categories-style-03.html">Entertainment</a>
                                    <div class="inner-mega-menu">
                                        <div class="row">
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/entertainment/menu/01.jpg" alt=""> </div> <span class="badge badge-large bg-orange">Nightclubs</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-03.html">The power of positive music</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 18 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/entertainment/menu/02.jpg" alt=""> </div> <span class="badge badge-large bg-blue">Dance</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-03.html">Dance is a stress reliever</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 3 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/entertainment/menu/03.jpg" alt=""> </div> <span class="badge badge-large bg-primary">Music</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-03.html">Where words fail, music speaks.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 4 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/entertainment/menu/04.jpg" alt=""> </div> <span class="badge badge-large bg-red">Movies</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-03.html">Enjoy the show</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 14 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/entertainment/menu/05.jpg" alt=""> </div> <span class="badge badge-large bg-purple">Video Games</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-03.html">Lets you Play Better</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jun 5 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="categories-style-04.html">Politician</a>
                                    <div class="inner-mega-menu">
                                        <div class="row">
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/politician/menu/01.jpg" alt=""> </div> <span class="badge badge-large bg-primary">Lider</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-04.html">Yes, Of Course We Can, Right?</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 12 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/politician/menu/02.jpg" alt=""> </div> <span class="badge badge-large bg-red">Politician</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-04.html">Choose Don’t Lose!</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 15 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/politician/menu/03.jpg" alt=""> </div> <span class="badge badge-large bg-blue">Events</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-04.html">Your Voice. Your Choice.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 9 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/politician/menu/04.jpg" alt=""> </div> <span class="badge badge-large bg-pink">People</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-04.html">Workers Of The World, Unite!</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jun 19 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/politician/menu/05.jpg" alt=""> </div> <span class="badge badge-large bg-yellow">Candidates</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-04.html">A Time For Greatness</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jul 1 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="categories-style-05.html">Magazine</a>
                                    <div class="inner-mega-menu">
                                        <div class="row">
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/magazine/menu/01.jpg" alt=""> </div> <span class="badge badge-large bg-primary">Fashion</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-05.html">Get to know the world.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 10 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/magazine/menu/02.jpg" alt=""> </div> <span class="badge badge-large bg-red">Travel</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-05.html">Read Travel. Be the Traveler.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 8 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/magazine/menu/03.jpg" alt=""> </div> <span class="badge badge-large bg-skyblue">Photography</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-05.html">Lets you Read Life.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 15 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/magazine/menu/04.jpg" alt=""> </div> <span class="badge badge-large bg-orange">Model</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-05.html">Read your Best Life Stories.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>jun 2 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/magazine/menu/05.jpg" alt=""> </div> <span class="badge badge-large bg-purple">Style</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-05.html">Understanding Comes With Time.</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jul 6 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="categories-style-06.html">Lifestyle</a>
                                    <div class="inner-mega-menu">
                                        <div class="row">
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/life-style/menu/01.jpg" alt=""> </div> <span class="badge badge-large bg-skyblue">Lifestyle</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-06.html">The best look anytime anywhere</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jan 26 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/life-style/menu/02.jpg" alt=""> </div> <span class="badge badge-large bg-orange">Fashion</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-06.html">Fashion never sleeps so</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 14 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/life-style/menu/03.jpg" alt=""> </div> <span class="badge badge-large bg-red">Beauty</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-06.html">Life is a party, dress like it</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 13 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/life-style/menu/04.jpg" alt=""> </div> <span class="badge badge-large bg-blue">Model</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-06.html">Smiles are always in fashion!</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 20 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="blog-post post-style-02 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="images/category/life-style/menu/05.jpg" alt=""> </div> <span class="badge badge-large bg-purple">Style</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="categories-style-06.html">Fashion is a style of life</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 21 2022</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown05" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Shop<i class="fas fa-chevron-down fa-xs"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown05">
                                <li><a class="dropdown-item" href="shop.html">Shop</a></li>
                                <li><a class="dropdown-item" href="shop-single.html">Shop Single</a></li>
                                <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
                                <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="add-listing">
                    <div class="weather">
                        <img class="img-fluid weather-icon" src="images/weather-icon.png" alt="">
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
                        <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            <i class="fa-solid fa-align-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa-solid fa-align-right"></i> </button>
        </nav>
    </header>
    <!--=================================
    Header -->

    <!--=================================
    side-menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <a class="navbar-brand" href="index.html">
                    <img class="img-fluid" src="images/logo-dark.png" alt="logo">
                </a>
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav navbar-nav-style-03">
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown06" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Home<i class="fas fa-chevron-down fa-xs"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown06">
                        <li><a class="dropdown-item" href="index.html">Default</a></li>
                        <li><a class="dropdown-item" href="index-02.html">Sport</a></li>
                        <li><a class="dropdown-item" href="index-03.html">Technology</a></li>
                        <li><a class="dropdown-item" href="index-04.html">Magazine</a></li>
                        <li><a class="dropdown-item" href="index-05.html">Politician</a></li>
                        <li><a class="dropdown-item" href="index-06.html">Newspaper</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown active"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown07" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages<i class="fas fa-chevron-down fa-xs"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown07">
                        <li><a class="dropdown-item" href="#">About Us</a></li>
                        <li><a class="dropdown-item" href="#">Team</a></li>
                        <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                        <li class="active"><a class="dropdown-item" href="404.html">404</a></li>
                        <li><a class="dropdown-item" href="sign-in.html">Sign in</a></li>
                        <li><a class="dropdown-item" href="sign-up.html">Sign up</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown08" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Features<i class="fas fa-chevron-down fa-xs"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown08">
                        <li><a class="dropdown-item" href="author.html">Author</a></li>
                        <li><a class="dropdown-item" href="blog-single-01.html">Blog single 01</a></li>
                        <li><a class="dropdown-item" href="blog-single-02.html">Blog single 02</a></li>
                        <li><a class="dropdown-item" href="blog-single-03.html">Blog single 03</a></li>
                        <li><a class="dropdown-item" href="blog-single-04.html">Blog single 04</a></li>
                        <li><a class="dropdown-item" href="blog-single-05.html">Blog single 05</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown09" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories<i class="fas fa-chevron-down fa-xs"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown09">
                        <li><a class="dropdown-item" href="categories-style-01.html">Technology</a></li>
                        <li><a class="dropdown-item" href="categories-style-02.html">Sport</a></li>
                        <li><a class="dropdown-item" href="categories-style-03.html">Entertainment</a></li>
                        <li><a class="dropdown-item" href="categories-style-04.html">Politician</a></li>
                        <li><a class="dropdown-item" href="categories-style-05.html">Magazine</a></li>
                        <li><a class="dropdown-item" href="categories-style-06.html">Lifestyle</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown10" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Shop<i class="fas fa-chevron-down fa-xs"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown10">
                        <li><a class="dropdown-item" href="shop.html">Shop</a></li>
                        <li><a class="dropdown-item" href="shop-single.html">Shop Single</a></li>
                        <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
                        <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                    </ul>
                </li>
                <li>
                    <ul class="sidebar-post">
                        <li>
                            <div class="blog-post post-style-05">
                                <div class="blog-post-date"> <a href="#">Sun</a>
                                    <h2>25</h2>
                                </div>
                                <div class="blog-image"> <img class="img-fluid" src="images/blog/34.jpg" alt="">
                                    <div class="video-icon"><a href="#"><i class="fa-solid fa-video text-orange"></i></a></div>
                                </div>
                                <div class="blog-post-details"> <span class="badge badge-small bg-orange">Movie</span>
                                    <h6 class="blog-title"><a href="#">After a night they can't remember comes a day they'll never forget</a></h6>
                                    <div class="blog-view"> <a href="#">5 M Views</a> <a class="" href="#">3Days Ago</a> </div>
                                </div>
                            </div>
                            <div class="blog-post post-style-05">
                                <div class="blog-post-date"> <a href="#">Wed</a>
                                    <h2>08</h2>
                                </div>
                                <div class="blog-image"> <img class="img-fluid" src="images/blog/35.jpg" alt="">
                                    <div class="video-icon"><a href="#"><i class="fa-solid fa-video text-primary"></i></a></div>
                                </div>
                                <div class="blog-post-details"> <span class="badge badge-small bg-primary">Health</span>
                                    <h6 class="blog-title"><a href="#">Health is the condition of wisdom and the sign is cheerfulness</a></h6>
                                    <div class="blog-view"> <a href="#">7 M Views</a> <a class="" href="#">5Days Ago</a> </div>
                                </div>
                            </div>
                            <div class="blog-post post-style-05">
                                <div class="blog-post-date"> <a href="#">Fir</a>
                                    <h2>15</h2>
                                </div>
                                <div class="blog-image"> <img class="img-fluid" src="images/blog/36.jpg" alt="">
                                    <div class="video-icon"><a href="#"><i class="fa-solid fa-video text-red"></i></a></div>
                                </div>
                                <div class="blog-post-details"> <span class="badge badge-small bg-red">Travel</span>
                                    <h6 class="blog-title"><a href="#">We believe everyone should travel</a></h6>
                                    <div class="blog-view"> <a href="#">9 M Views</a> <a class="" href="#">6Days Ago</a> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="social-icons">
                <li>
                    <a href="#" class="social-icon facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-icon twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-icon linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--=================================
    side-menu -->

    <!--=================================
    Search -->
    <div id="search">
        <button type="button" class="close"><i class="fa-solid fa-xmark"></i></button>
        <form>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-8 position-relative">
                        <input type="search" value="" placeholder="Enter keyword" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--=================================
    Search -->

    <!--=================================
    Inner Header -->
    <section class="inner-header  mb-0">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active"><i class="fa-solid fa-chevron-right me-2"></i><span>404</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Inner Header -->

    <!--=================================
    content 404 -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-404 text-center">
                        <img class="img-fluid" src="images/404.png" alt="">
                        <h2 class="mb-4">Opps! Page Not Found :(</h2>
                        <p>Can't find what you looking for? Take a moment and do a search below or start from our <a href="index.html"> Home Page </a></p>
                        <a href="index.html" class="btn btn-primary"><i class="fas fa-home pe-2"></i>Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    content 404 -->

    <!--=================================
    Footer -->
    <footer class="footer">
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-7 mb-4">
                        <div class="footer-about">
                            <a class="footer-logo" href="index.html"><img class="img-fluid" src="images/logo-light.png" alt="logo"></a>
                            <p>For those of you who are serious about having more, doing more, giving more and being more, success is achievable with some understanding of what to do.</p>
                            <div class="footer-social">
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
                                        <a href="#" class="social-icon"> <i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-5 mb-4">
                        <h4 class="footer-title">Quick Link</h4>
                        <ul class="footer-menu">
                            <li><a href="categories-style-02.html"><i class="fa-solid fa-chevron-right"></i>Sport</a></li>
                            <li><a href="categories-style-05.html"><i class="fa-solid fa-chevron-right"></i>Magazine</a></li>
                            <li><a href="categories-style-06.html"><i class="fa-solid fa-chevron-right"></i>Lifestyle</a></li>
                            <li><a href="categories-style-04.html"><i class="fa-solid fa-chevron-right"></i>Politician</a></li>
                            <li><a href="categories-style-01.html"><i class="fa-solid fa-chevron-right"></i>Technology</a></li>
                            <li><a href="categories-style-03.html"><i class="fa-solid fa-chevron-right"></i>Entertainment</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                        <h4 class="footer-title">Recent Posts</h4>
                        <div class="footer-post">
                            <div class="blog-post">
                                <div class="blog-image"> <img class="img-fluid" src="images/blog/84.jpg" alt=""> </div>
                                <div class="blog-post-details">
                                    <h6 class="blog-title"><a href="#">There is much more flexibility to work from home today.</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Sep 5 2022</a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post  mb-0">
                                <div class="blog-image"> <img class="img-fluid" src="images/blog/85.jpg" alt=""> </div>
                                <div class="blog-post-details">
                                    <h6 class="blog-title"><a href="#">If You've Got The Time, We've Got The Exchange.</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Sep 5 2022</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                        <h4 class="footer-title">Instagram</h4>
                        <ul class="footer-insta">
                            <li>
                                <a href="#"><img class="img-fluid" src="images/instagram/06.jpg" alt="#"></a> <span><i class="fa-brands fa-instagram "></i></span>
                            </li>
                            <li>
                                <a href="#"><img class="img-fluid" src="images/instagram/07.jpg" alt="#"></a> <span><i class="fa-brands fa-instagram "></i></span>
                            </li>
                            <li>
                                <a href="#"><img class="img-fluid" src="images/instagram/08.jpg" alt="#"></a> <span><i class="fa-brands fa-instagram "></i></span>
                            </li>
                            <li>
                                <a href="#"><img class="img-fluid" src="images/instagram/09.jpg" alt="#"></a> <span><i class="fa-brands fa-instagram "></i></span>
                            </li>
                            <li>
                                <a href="#"><img class="img-fluid" src="images/instagram/10.jpg" alt="#"></a> <span><i class="fa-brands fa-instagram "></i></span>
                            </li>
                            <li>
                                <a href="#"><img class="img-fluid" src="images/instagram/11.jpg" alt="#"></a> <span><i class="fa-brands fa-instagram "></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row copyright justify-content-center">
                    <div class="col-md-12 text-center">
                        <p class="mb-0">Copyright © <span id="copyright">
                                <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
                            </span> by <a href="index.html"> Nezzy</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
    Footer -->

    <!--=================================
    Back To Top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--=================================
    Back To Top -->


    <?php $this->load->view('user/partials/_scripts'); ?>
</body>

</html>
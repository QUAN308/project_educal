<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Educal – Online Learning and Education HTML5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('../assets/img/favicon.png')}}">
    <!-- CSS here -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/preloader.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/backToTop.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome5Pro.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/elegantFont.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
<body>
    <!-- Add your site or application content here -->

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-content">
                    <img class="loading-logo-text" src="../assets/img/logo/logo-text-2.png" alt="">
                    <div class="loading-stroke">
                        <img class="loading-logo-icon" src="../assets/img/logo/logo-icon.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <header>
        <div style="background: #fff;" id="header-sticky" class="header__area header__transparent header__padding">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                        <div class="header__left d-flex">
                            <div class="logo">
                                <a href="/">
                                    <img src="../assets/img/logo/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                        <div class="header__right d-flex justify-content-end align-items-center">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown">
                                            <a href="/">Trang chủ</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="/courses">Khóa học</a>
                                            <ul class="submenu">
                                                @foreach($cateData as $key => $value)
                                                    <li><a href="/course/{{$value->id}}">{{$value->ten_danh_muc}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="course-grid.html">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="instructor.html">Instructor</a></li>
                                                <li><a href="instructor-details.html">Instructor Details</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="cart.html">My Cart</a></li>
                                                <li><a href="wishlist.html">My Wishlist</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="sign-in.html">Sign In</a></li>
                                                <li><a href="sign-up.html">Sign Up</a></li>
                                                <li><a href="error.html">Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__search p-relative ml-50 d-none d-md-block">
                                <form action="#">
                                    <input style="background: #f1f1f1;" type="text" placeholder="Search...">
                                    <button type="submit"><i class="fad fa-search"></i></button>
                                </form>
                                
                            </div>
                            <div class="header__btn ml-20 d-none d-sm-block">
                                <a href="sign-in.html" class="e-btn">Login</a>
                            </div>
                            <div class="sidebar__menu d-xl-none">
                                <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer__area footer-bg">
            <div class="footer__top pt-190 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="footer__widget mb-50">
                                <div class="footer__widget-head mb-22">
                                    <div class="footer__logo">
                                        <a href="index.html">
                                            <img src="../assets/img/logo/logo-2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer__widget-body">
                                    <p>Great lesson ideas and lesson plans for ESL teachers! Educators can customize lesson
                                        plans to best.</p>

                                    <div class="footer__social">
                                        <ul>
                                            <li><a href="#"><i class="social_facebook"></i></a></li>
                                            <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                                            <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 offset-lg-0 col-md-2 offset-md-1 col-sm-5 offset-sm-1">
                            <div class="footer__widget mb-50">
                                <div class="footer__widget-head mb-22">
                                    <h3 class="footer__widget-title">Company</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__link">
                                        <ul>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Courses</a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Instructor</a></li>
                                            <li><a href="#">Career</a></li>
                                            <li><a href="#">Become a Teacher</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6">
                            <div class="footer__widget mb-50">
                                <div class="footer__widget-head mb-22">
                                    <h3 class="footer__widget-title">Platform</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__link">
                                        <ul>
                                            <li><a href="#">Browse Library</a></li>
                                            <li><a href="#">Library</a></li>
                                            <li><a href="#">Partners</a></li>
                                            <li><a href="#">News & Blogs</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Tutorials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6">
                            <div class="footer__widget footer__pl-70 mb-50">
                                <div class="footer__widget-head mb-22">
                                    <h3 class="footer__widget-title">Subscribe</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__subscribe">
                                        <form action="#">
                                            <div class="footer__subscribe-input mb-15">
                                                <input type="email" placeholder="Your email address">
                                                <button type="submit">
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <p>Get the latest news and updates right at your inbox.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="footer__copyright text-center">
                                <p>© 2022 Educal, All Rights Reserved. Design By <a href="index.html">Theme Pure</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/vendor/waypoints.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.meanmenu.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/parallax.min.js"></script>
    <script src="../assets/js/backToTop.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/ajax-form.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>


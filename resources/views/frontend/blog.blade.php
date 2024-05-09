<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mazin Personal Portfolio HTML Template</title>
    <!-- fav icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/frontend/images/fav.png">

    <link rel="stylesheet" href="assets/frontend/css/plugins/fontawesome-5.css">
    <link rel="stylesheet" href="assets/frontend/css/vendor/swiper.css">
    <link rel="stylesheet" href="assets/frontend/css/vendor/animate.min.css">
    <link rel="stylesheet" href="assets/frontend/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/frontend/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/style.css">
</head>

<body class="onepage inner-page">
    <!-- header style two -->
    <header class="header-one three header--sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-6 col-md-2 col-sm-0 col-6">
                    <nav class="main-nav d-xl-block d-none">
                        <ul id="nav">
                            <li class="current"><a href="{{ route('index') }}">Home</a></li>
                            <li class=""><a href="#about">About</a></li>
                            <li class=""><a href="#service">Service</a></li>
                            <li class=""><a href="{{ route('index') }}">Portfolio</a></li>
                            <li class=""><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 col-sm-12 col-6 justify-content-end d-flex">
                    <div class="open-h2-menu-area">
                        <div class="contact-area">
                            <div class="number">
                                <a href="#">+256 3221 21456</a>
                            </div>
                            <div class="email ml--40">
                                <a href="#">inside@mazin.com</a>
                            </div>
                        </div>
                        <a id="menu-btn" href="#" class="ml--40" onclick="event.preventDefault();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <rect width="4" height="4" fill="#141414" />
                                <rect y="8" width="4" height="4" fill="#141414" />
                                <rect y="16" width="4" height="4" fill="#141414" />
                                <rect x="8" width="4" height="4" fill="#141414" />
                                <rect x="8" y="8" width="4" height="4" fill="#141414" />
                                <rect x="8" y="16" width="4" height="4" fill="#141414" />
                                <rect x="16" width="4" height="4" fill="#141414" />
                                <rect x="16" y="8" width="4" height="4" fill="#141414" />
                                <rect x="16" y="16" width="4" height="4" fill="#141414" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-area">
            <a href="{{ route('index') }}" class="thumbnail">
                <img src="assets/frontend/images/logo/mazin-03.svg" alt="logo-images">
            </a>
        </div>
    </header>
    <!-- header style two End -->

    <!-- header style two -->
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index.html"><img class="logo" src="assets/frontend/images/logo/mazin-02.svg" alt="axela_logo"></a>
            <div class="body-mobile">
                <nav class="nav-main mainmenu-nav mt--30">
                    <ul class="mainmenu" id="mobile-menu-active">
                        <li class="has-droupdown">
                            <a href="#">Home</a>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li class="has-droupdown">
                            <a href="#">Services</a>
                        </li>
                        <li class="has-droupdown">
                            <a href="#">Pages</a>
                        </li>
                        <li class="has-droupdown">
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="contactus.html">Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <div class="social-wrapper-two mt--50">
                    <ul class="social-area">
                        <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-skype"></i></a></li>
                    </ul>
                </div>

                <!-- <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a> -->
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>

    <div id="anywhere-home" class=""></div>
    <!-- header style two End -->

    <div class="rts-breadcrumb-area ptb--140">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-title">
                        <h1 class="title text-center">
                            Read Our Latest Blog Insight That Will <br>
                            Improve Your Learning Skill
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-image-breadcrumb-three">
            <img src="assets/frontend/images/banner/shape/05.png" alt="shape-image">
        </div>
    </div>

    <!-- rts blog area start -->
    <div class="rts-blog-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-small-inner text-start">
                        <h5 class="title">
                            Latest Blog Posts
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-4 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="#" class="thumbnail">
                            <img src="assets/frontend/images/blog/04.jpg" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="#">
                                <h5 class="title">
                                    How to build support with your design clients
                                </h5>
                            </a>
                            <a href="#" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
                <div class="col-lg-4 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="#" class="thumbnail">
                            <img src="assets/frontend/images/blog/05.jpg" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="#">
                                <h5 class="title">
                                    How to build support with your design clients
                                </h5>
                            </a>
                            <a href="#" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
                <div class="col-lg-4 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="#" class="thumbnail">
                            <img src="assets/frontend/images/blog/06.jpg" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="#">
                                <h5 class="title">
                                    How to build support with your design clients
                                </h5>
                            </a>
                            <a href="#" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
                <div class="col-lg-4 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="#" class="thumbnail">
                            <img src="assets/frontend/images/blog/01.jpg" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="#">
                                <h5 class="title">
                                    How to build support with your design clients
                                </h5>
                            </a>
                            <a href="#" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
                <div class="col-lg-4 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="#" class="thumbnail">
                            <img src="assets/frontend/images/blog/02.jpg" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="#">
                                <h5 class="title">
                                    How to build support with your design clients
                                </h5>
                            </a>
                            <a href="#" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
                <div class="col-lg-4 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="#" class="thumbnail">
                            <img src="assets/frontend/images/blog/03.jpg" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="#">
                                <h5 class="title">
                                    How to build support with your design clients
                                </h5>
                            </a>
                            <a href="#" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog area end -->



    <!-- rts blog area start -->
    <div class="rts-blog-area-swiper-blog-page rts-section-gap section-separator-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-small-inner text-start">
                        <h5 class="title">
                            Earlier this Month
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">

                <!-- Swiper -->
                <div class="swiper mySwiperblog-1">
                    <div class="swiper-wrapper">
                        <!-- ingle slide -->
                        <div class="swiper-slide">
                            <!-- single post area start -->
                            <div class="rts-post-area-h2">
                                <a href="#" class="thumbnail">
                                    <img src="assets/frontend/images/blog/07.jpg" alt="rts-blog-image">
                                </a>
                                <div class="content-area">
                                    <div class="icon-area">
                                        <i class="far fa-clock"></i>
                                        <span>March 10, 2023</span>
                                    </div>
                                    <a href="#">
                                        <h5 class="title">
                                            How to build support with your design clients
                                        </h5>
                                    </a>
                                    <a href="#" class="rts-btn btn-main-3">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <!-- single post area end -->
                        </div>
                        <!-- single slide -->
                        <!-- ingle slide -->
                        <div class="swiper-slide">
                            <!-- single post area start -->
                            <div class="rts-post-area-h2">
                                <a href="#" class="thumbnail">
                                    <img src="assets/frontend/images/blog/08.jpg" alt="rts-blog-image">
                                </a>
                                <div class="content-area">
                                    <div class="icon-area">
                                        <i class="far fa-clock"></i>
                                        <span>March 10, 2023</span>
                                    </div>
                                    <a href="#">
                                        <h5 class="title">
                                            How to build support with your design clients
                                        </h5>
                                    </a>
                                    <a href="#" class="rts-btn btn-main-3">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <!-- single post area end -->
                        </div>
                        <!-- single slide -->
                        <!-- ingle slide -->
                        <div class="swiper-slide">
                            <!-- single post area start -->
                            <div class="rts-post-area-h2">
                                <a href="#" class="thumbnail">
                                    <img src="assets/frontend/images/blog/09.jpg" alt="rts-blog-image">
                                </a>
                                <div class="content-area">
                                    <div class="icon-area">
                                        <i class="far fa-clock"></i>
                                        <span>March 10, 2023</span>
                                    </div>
                                    <a href="#">
                                        <h5 class="title">
                                            How to build support with your design clients
                                        </h5>
                                    </a>
                                    <a href="#" class="rts-btn btn-main-3">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <!-- single post area end -->
                        </div>
                        <!-- single slide -->
                        <!-- ingle slide -->
                        <div class="swiper-slide">
                            <!-- single post area start -->
                            <div class="rts-post-area-h2">
                                <a href="#" class="thumbnail">
                                    <img src="assets/frontend/images/blog/04.jpg" alt="rts-blog-image">
                                </a>
                                <div class="content-area">
                                    <div class="icon-area">
                                        <i class="far fa-clock"></i>
                                        <span>March 10, 2023</span>
                                    </div>
                                    <a href="#">
                                        <h5 class="title">
                                            How to build support with your design clients
                                        </h5>
                                    </a>
                                    <a href="#" class="rts-btn btn-main-3">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <!-- single post area end -->
                        </div>
                        <!-- single slide -->
                    </div>
                </div>

                <div class="swiper-button-wrapper-project-ho-3">
                    <div class="swiper-button-next testimonials-slider-next-btn"></div>
                    <div class="swiper-button-prev testimonials-slider-prev-btn"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog area end -->



    <!-- rts footer style three hear starat -->
    <div class="rts-footer-area footer-bg-3 footer-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-four-left footer-single-wized ptb--100">
                        <a class="logo" href="index-three.html">
                            <img src="assets/frontend/images/logo/logo-white-03.svg" alt="logo-area">
                        </a>
                        <p class="disc">
                            Lorem ipsum dmet consec tetur adipisc elit platea suscipit habitant tellus euism is arcu
                            curabitur magna neque
                        </p>
                        <a href="#" class="rts-btn btn-main-3">Hire Me Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mid-footer-wrapper-4">
                        <div class="social-inner">
                            <ul>
                                <li>
                                    <a href="#">Facebook</a>
                                </li>
                                <li>
                                    <a href="#">Twitter</a>
                                </li>
                                <li>
                                    <a href="#">Linkedin</a>
                                </li>
                                <li>
                                    <a href="#">Instagram</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-three-mid footer-single-wized ptb--100">
                            <h5 class="title">
                                Conatact Us
                            </h5>
                            <div class="body contact-area">
                                <!-- single address -->
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="discription">
                                        <p>Our Address</p>
                                        <span>25 Division SY, 1002, USA</span>
                                    </div>
                                </div>
                                <!-- single address end -->
                                <!-- single address -->
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="far fa-at"></i>
                                    </div>
                                    <div class="discription">
                                        <p>Our Email</p>
                                        <span>pixxi.me@gmail.com</span>
                                    </div>
                                </div>
                                <!-- single address end -->
                                <!-- single address -->
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <div class="discription">
                                        <p>Our Phone</p>
                                        <span>+25 (2692) 12-24586</span>
                                    </div>
                                </div>
                                <!-- single address end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer end area start -->
                <div class="col-lg-3 ptb--100">
                    <div class="footer-two-single-gallery-area three">
                        <h5 class="title">Instagram Posts</h5>
                        <div class="gallery-image">
                            <a href="#">
                                <img src="assets/frontend/images/footer/gallery/01.png" alt="Footer-two">
                            </a>
                            <a href="#">
                                <img src="assets/frontend/images/footer/gallery/02.png" alt="Footer-two">
                            </a>
                            <a href="#">
                                <img src="assets/frontend/images/footer/gallery/03.png" alt="Footer-two">
                            </a>
                            <a href="#">
                                <img src="assets/frontend/images/footer/gallery/04.png" alt="Footer-two">
                            </a>
                            <a href="#">
                                <img src="assets/frontend/images/footer/gallery/05.png" alt="Footer-two">
                            </a>
                            <a href="#">
                                <img src="assets/frontend/images/footer/gallery/06.png" alt="Footer-two">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- footer end area end -->
            </div>
        </div>
        <div class="footer-copyright-four">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="inner">
                            <div class="left">
                                <p class="disc">
                                    © 2022 Pixxi | All rights reserved by <a href="#">Reacthemes</a>
                                </p>
                            </div>
                            <div class="right">
                                <div class="menu">
                                    <ul>
                                        <li>
                                            <a href="#">ABOUT </a>
                                        </li>
                                        <li>
                                            <a href="#">CONTACT </a>
                                        </li>
                                        <li>
                                            <a href="#">CAREER </a>
                                        </li>
                                        <li>
                                            <a href="#">FAQS </a>
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
    <!-- rts footer style three hear end -->




    <!-- preloader -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                <span data-text-preloader="Z" class="letters-loading">
                    Z
                    </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                    </span>
                <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->

    <!-- scripts -->

    <script src="assets/frontend/js/vendor/jquery.min.js"></script>
    <script src="assets/frontend/js/vendor/jquery.nav.js"></script>

    <script src="assets/frontend/js/vendor/jquery-ui.min.js"></script>

    <script src="assets/frontend/js/vendor/waw.js"></script>
    <script src="assets/frontend/js/vendor/waypoint.js"></script>

    <script src="assets/frontend/js/plugins/splittext.js"></script>
    <script src="assets/frontend/js/plugins/gsap.min.js"></script>
    <script src="assets/frontend/js/plugins/scrolltigger.js"></script>

    <script src="assets/frontend/js/plugins/counter-up.js"></script>
    <script src="assets/frontend/js/plugins/smoothscrool.js"></script>
    <script src="assets/frontend/js/plugins/scroll-out.js"></script>
    <script src="assets/frontend/js/plugins/marquery.js"></script>
    <script src="assets/frontend/js/plugins/parallax.js"></script>

    <script src="assets/frontend/js/plugins/contact-form.js"></script>

    <!-- <script src="assets/frontend/js/vendor/scroll-smoother.js"></script> -->

    <script src="assets/frontend/js/vendor/swiper.js"></script>
    <script src="assets/frontend/js/vendor/sal.min.js"></script>

    <!-- for smoothj scroll -->
    <script src="assets/frontend/js/vendor/tweenmax.js"></script>

    <script src="assets/frontend/js/vendor/bootstrap.min.js"></script>


    <!-- main js hear -->
    <script src="assets/frontend/js/main.js"></script>
</body>

</html>
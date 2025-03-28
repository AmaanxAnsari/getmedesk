<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>GetMeDesk - HR & Recruitment Services</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="assets/css/rsmenu-main.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/preview.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G7D54H61N3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-G7D54H61N3');
    </script>
</head>

<body class="home-blue-color">

    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'><img src="assets/images/fav.png" alt="Bizup Consulting Business"></div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">


        <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->
            <header id="rs-header" class="rs-header style3">
                <!-- Topbar Area Start -->
                <div class="topbar-area style2">
                    <div class="container custom">
                        <div class="row-table">
                            <div class="col-cell">
                                <div class="header-logo">
                                    <div class="logo-area">
                                        <a href="index.html">
                                            <img class="normal-logo" src="assets/images/logo-dark2.png" alt="logo">
                                            <img class="sticky-logo" src="assets/images/logo-dark.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="header-quote">
                                    <ul class="rs-address-area">
                                        <li class="address-list">
                                            <div class="info-icon">
                                                <i class="flaticon-location"></i>
                                            </div>
                                            <div class="info-content">
                                                <div class="info-title"><a href="#">Location</a></div>
                                                <div class="info-des"> Hinjewadi, Pune, MH 411045, IND</div>
                                            </div>
                                        </li>
                                        <li class="address-list">
                                            <div class="info-icon">
                                                <i class="flaticon-email"></i>
                                            </div>
                                            <div class="info-content">
                                                <div class="info-title"><a href="#">Mail us</a></div>
                                                <div class="info-des"><a
                                                        href="mailto:info@getmedesk.com">info@getmedesk.com</a></div>
                                            </div>
                                        </li>
                                        <li class="address-list">
                                            <div class="info-icon">
                                                <i class="flaticon-call"></i>
                                            </div>
                                            <div class="info-content">
                                                <div class="info-title"><a href="#">Call us</a></div>
                                                <div class="info-des"><a href="tel:(+191)8390380888"> (+191) 8390 380
                                                        888</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container custom box-layout">
                        <div class="row-table">
                            <div class="col-cell header-logo">
                                <div class="logo-area">
                                    <a href="index.html">
                                        <img src="assets/images/logo-dark.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-cell menu-responsive">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <nav class="rs-menu hidden-md">
                                            <ul class="nav-menu">
                                                <li><a href="<?= base_url('home') ?>">Home</a></li>
                                                <li><a href="#rs-about">About</a></li>
                                                <li><a href="#rs-services">Services</a></li>
                                                <li><a href="#rs-project">Clients</a></li>
                                                <li><a href="#rs-contact">Contact</a></li>
                                                <li><a href="<?= base_url('job_list') ?>">Jobs</a></li>
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                </div>
                            </div>
                            <div class="col-cell rightbar-menu">
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li class="search-parent">
                                            <a class="hidden-xs rs-search" data-bs-toggle="modal"
                                                data-bs-target="#searchModal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                        <li class="humburger">
                                            <a id="nav-expander" class="nav-expander bar" href="#">
                                                <div class="bar">
                                                    <span class="dot1"></span>
                                                    <span class="dot2"></span>
                                                    <span class="dot3"></span>
                                                    <span class="dot4"></span>
                                                    <span class="dot5"></span>
                                                    <span class="dot6"></span>
                                                    <span class="dot7"></span>
                                                    <span class="dot8"></span>
                                                    <span class="dot9"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="toolbar-sl-share">
                                        <ul>
                                            <!--  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                                            <li><a href="https://www.linkedin.com/company/getmedesk/?viewAsMember=true"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <a id="nav-close" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indig nation in and dislike men who are so beguiled and to demo
                            realized, that they data forest see best business consulting wordpress theme 2021.</p>
                    </div>
                    <div class="media-img">
                        <img src="assets/images/off2.jpg" alt="Images">
                    </div>
                    <div class="canvas-contact">
                        <div class="address-area">
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Address</h4>
                                    <em>05 kandi BR. New York</em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email</h4>
                                    <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Phone</h4>
                                    <em>+019988772</em>
                                </div>
                            </div>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->

                <!-- Canvas Mobile Menu start -->
                <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                    <div class="close-btn">
                        <a id="nav-close2" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <ul class="nav-menu onepage-menu onpage-ul">
                        <li class="current-menu-item"><a href="#rs-header">Home</a></li>
                        <li><a href="#rs-about">About</a> </li>
                        <li><a href="#rs-services">Services</a> </li>
                        <li><a href="#rs-project">Portfolios</a> </li>
                        <li><a href="#rs-blog">Blog</a> </li>
                        <li><a href="#rs-contact">Contact</a> </li>
                    </ul> <!-- //.nav-menu -->
                    <div class="canvas-contact">
                        <div class="address-area">
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Address</h4>
                                    <em>05 kandi BR. New York</em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email</h4>
                                    <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Phone</h4>
                                    <em>+019988772</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Canvas Mobile Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

        <!-- Slider Start -->
        <div id="rs-slider" class="rs-slider slider3 rs-slider-style3">
            <div class="bend niceties">
                <div id="nivoSlider" class="slides">
                    <img src="assets/images/slider/h3-sl1.jpg" alt="" title="#slide-1" />
                    <img src="assets/images/slider/h3-sl2.jpg" alt="" title="#slide-2" />
                </div>
                <!-- Slide 1 -->
                <div id="slide-1" class="slider-direction">
                    <div class="content-part">
                        <div class="container">
                            <div class="slider-des">
                                <div class="sl-subtitle">Recruitment Consulting</div>
                                <h1 class="sl-title"> We help you to <br> Hire Right Candidate </h1>
                            </div>
                            <div class="slider-bottom">
                                <a class="readon blue-slide" href="contact.html">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div id="slide-2" class="slider-direction">
                    <div class="content-part">
                        <div class="container">
                            <div class="slider-des">
                                <div class="sl-subtitle">Quality Uncompromised</div>
                                <h1 class="sl-title"> We source the candidate <br> With Right Skills</h1>
                            </div>
                            <div class="slider-bottom">
                                <a class="readon blue-slide" href="contact.html">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider End -->

        <!-- Services Section Start -->
        <div class="rs-services style4 pt-95 pb-100 md-pt-65 md-pb-70">
            <div class="container">
                <div class="sec-title text-center mb-60 md-mb-40">
                    <span class="sub-text small">Our Qualities</span>
                    <h2 class="title title3">More than 5+ years we provide<br> recruitment services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img class="dance_hover" src="assets/images/services/style5/icons/1.png" alt="Services">
                            </div>
                            <div class="services-content">
                                <h3 class="title"><a href="services-style1.html">Affordable Rates</a></h3>
                                <p class="margin-0">Even at affordable rates we don't compromise on quality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img class="dance_hover" src="assets/images/services/style5/icons/2.png" alt="Services">
                            </div>
                            <div class="services-content">
                                <h3 class="title"><a href="services-style1.html">Deep Knowledge</a></h3>
                                <p class="margin-0">Our experts have the capability to understand your requirements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img class="dance_hover" src="assets/images/services/style5/icons/3.png" alt="Services">
                            </div>
                            <div class="services-content">
                                <h3 class="title"><a href="services-style1.html">Excellent Reporting</a></h3>
                                <p class="margin-0">We beleive in transparent reporting which is essential for business.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img class="dance_hover" src="assets/images/services/style5/icons/5.png" alt="Services">
                            </div>
                            <div class="services-content">
                                <h3 class="title"><a href="services-style1.html">Growth Oriented</a></h3>
                                <p class="margin-0">Our team is focused on mutual growth of our clients and us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style3 gray-bg5 pt-120 pb-120 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 md-mb-50">
                        <div class="about-content">
                            <div class="images-part">
                                <img src="assets/images/about/home3/about-1.jpg" alt="Images">
                            </div>
                            <div class="rs-animations">
                                <div class="spinner dot">
                                    <img class="scale" src="assets/images/about/home3/3.png" alt="Images">
                                </div>
                                <div class="spinner ball">
                                    <img class="dance2" src="assets/images/about/home3/2.png" alt="Images">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-30 md-pr-l5">
                        <div class="sec-title mb-50">
                            <span class="sub-text small">About Us</span>
                            <h2 class="title title3 pb-25">We are crafting your requirements satisfaction</h2>
                            <p class="margin-0">At GetMeDesk, we’re passionate about brands, and we’re passionate about
                                the work we do for our clients. With over a decade of experience, we are helping
                                world-recognized brands to integrate advanced technologies into the business and help
                                them navigate through the digital transformation journey.</p>
                            <p class="margin-0">From product to resources, we are committed technology professionals
                                ready to get involved and challenge your ideas to make your business stronger.</p>


                        </div>
                        <!-- <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">Responsive & Pixel Perfect Design</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo data communication.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">Elementor Page Builder Used</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo data center and analytics.</div>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Services Section Start -->
        <div id="rs-services" class="rs-services style5 bg14 pt-95 pb-100 md-pt-65 md-pb-70">
            <div class="container">
                <div class="sec-title text-center mb-50">
                    <span class="sub-text small">Valued Services</span>
                    <h2 class="title title3">Managed IT, Software, Voice & Data<br> Services for Your Organization.</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style5/1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="business-planning.html">Executive Search</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                Identifying leadership talent requires a thorough understanding of
                                                different industries and functional roles.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="business-planning.html">Executive Search</a>
                                            </h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">Identifying leadership talent requires a thorough
                                                understanding of different industries and functional roles.</p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon view-more" href="business-planning.html">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style5/2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="tax-strategy.html">Head Hunting</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                We apply real insight into client's strategic requirements and proven
                                                assessment tools to recruit right candidates.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="tax-strategy.html">Head Hunting</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">We apply real insight into client's strategic
                                                requirements and proven assessment tools to recruit right candidates.
                                            </p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon view-more" href="tax-strategy.html">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style5/3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="insurance-strategy.html">Mass Recruitment</a>
                                            </h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                Identifying the right candidates among a big chunk to satisfy the
                                                requirement needs deep understanding of the requirements.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="insurance-strategy.html">Mass
                                                    Recruitment</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">Identifying the right candidates among a big chunk to
                                                satisfy the requirement needs deep understanding of the requirements.
                                            </p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon view-more" href="insurance-strategy.html">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style5/4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="manage-investment.html">Permanent Hiring</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                Permanent staffing forms the back bone and strength of any organization.
                                                We allocate our best employees for this job.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="manage-investment.html">Permanent Hiring</a>
                                            </h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">Permanent staffing forms the back bone and strength of
                                                any organization. We allocate our best employees for this job.</p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon view-more" href="manage-investment.html">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style5/5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="start-ups.html">Contractual Hiring</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                An ideal option, that allows a contract/temporary employee to work on an
                                                assignment with our clients for a trial period.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="start-ups.html">Contractual Hiring</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">An ideal option, that allows a contract/temporary
                                                employee to work on an assignment with our clients for a trial period.
                                            </p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon view-more" href="start-ups.html">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style5/6.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="financial-advices.html">Temporary Hiring</a></h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                We provide contract / temporary professionals to work on-site under our
                                                client’ supervision on a time and material basis to augment.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-part">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="financial-advices.html">Temporary Hiring</a>
                                            </h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">We provide contract / temporary professionals to work
                                                on-site under our client’ supervision on a time and material basis to
                                                augment.</p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon view-more" href="financial-advices.html">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Project Section Start -->
        <div id="rs-project" class="rs-project style3 home3-project-style gray-bg5 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container custom">
                <div class="row y-middle">
                    <div class="col-lg-6">
                        <div class="sec-title mb-60 md-mb-35">
                            <span class="sub-text small">Partial list of our esteemed partners</span>
                            <h2 class="title title3">Proudly Serving</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner Section Start -->
            <div class="rs-patter-section style1">
                <div class="container custom">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30"
                        data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                        data-dots="false" data-nav="false" data-nav-speed="false" data-md-device="5"
                        data-md-device-nav="false" data-md-device-dots="false" data-center-mode="false"
                        data-ipad-device2="4" data-ipad-device-nav2="false" data-ipad-device-dots2="true"
                        data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false"
                        data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false">
                        <div class="logo-img">
                            <a href="https://rstheme.com">
                                <img class="hovers-logos rs-grid-img" src="assets/images/partner/main-home/1.png"
                                    title="" alt="">
                                <img class="mains-logos rs-grid-img " src="assets/images/partner/main-home/1.png"
                                    title="" alt="">
                            </a>
                        </div>
                        <div class="logo-img">
                            <a href="https://rstheme.com">
                                <img class="hovers-logos rs-grid-img" src="assets/images/partner/main-home/2.png"
                                    title="" alt="">
                                <img class="mains-logos rs-grid-img " src="assets/images/partner/main-home/2.png"
                                    title="" alt="">
                            </a>
                        </div>
                        <div class="logo-img">
                            <a href="https://rstheme.com">
                                <img class="hovers-logos rs-grid-img" src="assets/images/partner/main-home/3.png"
                                    title="" alt="">
                                <img class="mains-logos rs-grid-img " src="assets/images/partner/main-home/3.png"
                                    title="" alt="">
                            </a>
                        </div>
                        <div class="logo-img">
                            <a href="https://rstheme.com">
                                <img class="hovers-logos rs-grid-img" src="assets/images/partner/main-home/4.png"
                                    title="" alt="">
                                <img class="mains-logos rs-grid-img " src="assets/images/partner/main-home/4.png"
                                    title="" alt="">
                            </a>
                        </div>
                        <div class="logo-img">
                            <a href="https://rstheme.com">
                                <img class="hovers-logos rs-grid-img" src="assets/images/partner/main-home/5.png"
                                    title="" alt="">
                                <img class="mains-logos rs-grid-img " src="assets/images/partner/main-home/5.png"
                                    title="" alt="">
                            </a>
                        </div>
                        <div class="logo-img">
                            <a href="https://rstheme.com">
                                <img class="hovers-logos rs-grid-img" src="assets/images/partner/main-home/6.png"
                                    title="" alt="">
                                <img class="mains-logos rs-grid-img " src="assets/images/partner/main-home/6.png"
                                    title="" alt="">
                            </a>
                        </div>
                        <div class="logo-img">
                            <a href="https://rstheme.com">
                                <img class="hovers-logos rs-grid-img" src="assets/images/partner/main-home/7.png"
                                    title="" alt="">
                                <img class="mains-logos rs-grid-img " src="assets/images/partner/main-home/7.png"
                                    title="" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner Section End -->
        </div>
        <!-- Project Section End -->

        <!-- Why Choose Section Start -->
        <!-- <div class="rs-choose bg15 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container custom">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-50">
                            <div class="rs-videos choose-video home3-video-style">
                                <div class="images-video">
                                    <img src="assets/images/video/choose-video.jpg" alt="images">
                                </div>
                                <div class="animate-border blue-color-style">
                                    <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-65 md-pl-15">
                            <div class="sec-title mb-30">
                                <span class="sub-text small">Why choose us</span>
                                <h2 class="title title3 pb-25">A right choice that makes the difference to others</h2>
                                <p class="margin-0">We donec pulvinar magna id leoersi pellentesque impered upon dignissim rhoncus euismod euismod eros vitae.</p>                           
                            </div> -->
        <!-- Skillbar Section Start -->
        <!-- <div class="rs-skillbar style1 home3-skillbar-style">
                                <div class="cl-skill-bar"> -->
        <!-- Start Skill Bar -->
        <!-- <span class="skillbar-title">Business Planning</span>
                                   <div class="skillbar" data-percent="90">
                                       <p class="skillbar-bar"></p>
                                       <span class="skill-bar-percent"></span> 
                                   </div> -->
        <!-- Start Skill Bar -->
        <!-- <span class="skillbar-title">Financial Advices</span>
                                   <div class="skillbar" data-percent="85">
                                       <p class="skillbar-bar"></p>
                                       <span class="skill-bar-percent"></span> 
                                   </div> -->
        <!-- Start Skill Bar -->
        <!-- <span class="skillbar-title">Investment Strategy</span>
                                   <div class="skillbar" data-percent="75">
                                       <p class="skillbar-bar"></p>
                                       <span class="skill-bar-percent"></span> 
                                   </div>     -->
        <!-- Start Skill Bar -->
        <!-- <span class="skillbar-title">Business Security</span>
                                   <div class="skillbar margin-no" data-percent="65">
                                       <p class="skillbar-bar"></p>
                                       <span class="skill-bar-percent"></span> 
                                   </div>
                                </div>
                            </div> -->
        <!-- Skillbar Section End -->
        <!-- </div>
                    </div>
                </div>
            </div> -->
        <!-- Why Choose Section Start -->

        <!-- Testimonial Section Start -->
        <!-- <div class="rs-testimonial style4 bg16 pt-95 pb-100 md-pt-65 md-pb-70">
                <div class="container">
                    <div class="sec-title text-center mb-60 md-mb-40">
                        <span class="sub-text small white-color">Testimonials</span>
                        <h2 class="title title3 white-color">Customers Reviews</h2>                           
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                        <div class="testi-item">
                            <div class="testi-wrap">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/avatar/1.jpg" alt="Testimonial">
                                </div>
                                <div class="item-contents">
                                    <p>Customer support is excellent and documentation good – novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">David Warner</div>
                                    <span class="testi-title">Envato User</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-wrap">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/avatar/2.jpg" alt="Testimonial">
                                </div>
                                <div class="item-contents">
                                    <p> These guys are awesome! Each time I needed their help, their response was quick and very helpful. Also, the theme is very flexible. Five stars from me for everything! I truly recommend this theme!!! </p>
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Angelina Jolie</div>
                                    <span class="testi-title">Envato Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-wrap">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/avatar/3.jpg" alt="Testimonial">
                                </div>
                                <div class="item-contents">
                                    <p>The theme is fine. It is customizable and its demos are great. The education plugin also works fine. But, although I like it so much, I want to point out a few shortcomings. Theme is appropriate, I agree.</p>
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Megan Fox</div>
                                    <span class="testi-title">Senior CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-wrap">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/avatar/4.jpg" alt="Testimonial">
                                </div>
                                <div class="item-contents">
                                    <p>These guys are awesome! Each time I needed their help, their response was quick and very helpful. Also, the theme is very flexible. Five stars from me for everything! I truly recommend this theme!!!</p>
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Nicole Kidman</div>
                                    <span class="testi-title">Envato Author</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-wrap">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/avatar/1.jpg" alt="Testimonial">
                                </div>
                                <div class="item-contents">
                                    <p>Customer support is excellent and documentation good – novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">David Warner</div>
                                    <span class="testi-title">Envato User</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-wrap">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/avatar/2.jpg" alt="Testimonial">
                                </div>
                                <div class="item-contents">
                                    <p> These guys are awesome! Each time I needed their help, their response was quick and very helpful. Also, the theme is very flexible. Five stars from me for everything! I truly recommend this theme!!! </p>
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Angelina Jolie</div>
                                    <span class="testi-title">Envato Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="testi-wrap">
                                <div class="image-wrap">
                                    <img src="assets/images/testimonial/avatar/3.jpg" alt="Testimonial">
                                </div>
                                <div class="item-contents">
                                    <p>The theme is fine. It is customizable and its demos are great. The education plugin also works fine. But, although I like it so much, I want to point out a few shortcomings. Theme is appropriate, I agree.</p>
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Megan Fox</div>
                                    <span class="testi-title">Senior CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- Testimonial Section End -->

        <!-- Team Section Start -->
        <!-- <div class="rs-team style4 bg17 pt-95 pb-100 md-pt-65 md-pb-70"> 
                <div class="container">
                    <div class="sec-title text-center mb-50 md-mb-35">
                        <span class="sub-text small">Expert People</span>
                        <h2 class="title title3 pb-20">Our Team Members</h2>
                        <p class="margin-0">
                           orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                           data tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="4" data-md-device-nav="false" data-md-device-dots="true" data-lg-device="3">
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="team-single.html"><img src="assets/images/team/1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">Angelina Jolie</a></h4>
                                <span class="designation">Business Advisor</span>
                                <ul class="team-social">
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="team-single.html"><img src="assets/images/team/2.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">Morgan Freeman</a></h4>
                                <span class="designation">Senior Consultant</span>
                                <ul class="team-social">
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="team-single.html"><img src="assets/images/team/3.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">Natalie Portman</a></h4>
                                <span class="designation">Web Developer</span>
                                <ul class="team-social">
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="team-single.html"><img src="assets/images/team/4.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">Christian Bale</a></h4>
                                <span class="designation">Digital Marketer</span>
                                <ul class="team-social">
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="team-single.html"><img src="assets/images/team/5.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">Matt Damon</a></h4>
                                <span class="designation">Finance Consultant</span>
                                <ul class="team-social">
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="team-single.html"><img src="assets/images/team/6.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">Mila Kunis</a></h4>
                                <span class="designation">CEO & Founder</span>
                                <ul class="team-social">
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="team-single.html"><img src="assets/images/team/1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">Angelina Jolie</a></h4>
                                <span class="designation">Business Advisor</span>
                                <ul class="team-social">
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="team-single.html"><img src="assets/images/team/2.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">Morgan Freeman</a></h4>
                                <span class="designation">Senior Consultant</span>
                                <ul class="team-social">
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> -->
        <!-- Team Section End -->


        <!-- Contact Section Start -->
        <div id="rs-contact" class="rs-contact home3-contact-style bg18 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row margin-0">
                    <div class="col-lg-8 padding-0 md-mb-50">
                        <div class="contact-wrap">
                            <div class="sec-title mb-55 md-mb-35">
                                <span class="sub-text small">Contact Us</span>
                                <h2 class="title title3">Get In Touch</h2>
                            </div>
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post" action="mailer.php">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="name" name="name"
                                                placeholder="Name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="email" name="email"
                                                placeholder="E-Mail" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="phone" name="phone"
                                                placeholder="Phone Number" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="Subject" name="subject"
                                                placeholder="Subject" required="">
                                        </div>

                                        <div class="col-lg-12 mb-35">
                                            <textarea class="from-control" id="message" name="message"
                                                placeholder="Your message Here" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-part">
                                        <div class="form-group mb-0">
                                            <input class="readon submit blue-small" type="submit" value="Submit Now">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 padding-0">
                        <div class="icon-box-wraper">
                            <div class="sec-title mb-40">
                                <h2 class="title title3 small">Contact Info</h2>
                            </div>
                            <div class="icon-box-item mb-35">
                                <div class="icon-box">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="icon-content">
                                    <h2 class="title"><a href="#">Office</a></h2>
                                    <p class="services-txt">Hinjewadi, Pune,<br>
                                        India.</p>
                                </div>
                            </div>
                            <div class="icon-box-item mb-35">
                                <div class="icon-box">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="icon-content">
                                    <h2 class="title"><a href="#">Telephone</a></h2>
                                    <a href="tel:(+839)038-0888">(+839) 038-0888</a><br>
                                    <a href="tel:(+777)002-3825">(+777) 002-3825</a>
                                </div>
                            </div>
                            <div class="icon-box-item mb-35">
                                <div class="icon-box">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="icon-content">
                                    <h2 class="title"><a href="#">Mail Us</a></h2>
                                    <a href="mailto:info@getmedesk.com">E:info@getmedesk.com</a>
                                </div>
                            </div>
                            <div class="icon-box-item">
                                <div class="icon-box">
                                    <i class="flaticon-time-call"></i>
                                </div>
                                <div class="icon-content">
                                    <h2 class="title"><a href="#">Opening Hours</a></h2>
                                    <p class="services-txt">Mon-Fri: 10:00-18:00<br>
                                        Sat-Sun: 10:00-14:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Blog Start -->
        <!-- <div id="rs-blog" class="rs-blog style2 home3-blog-style bg19 pt-95 pb-100 md-pt-65 md-pb-70">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 mb-50 md-mb-35">
                            <div class="sec-title">
                                <span class="sub-text small">Latest News</span>
                                <h2 class="title title3">Read Latest Updates</h2>                           
                            </div>
                        </div>
                        <div class="col-lg-6 mb-50 md-mb-35">
                            <div class="btn-part text-right md-left">
                                <a class="readon consultant blue-view" href="about.html">View Updates</a>
                            </div>
                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details"><img src="assets/images/blog/1.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Customer Onboarding Strategy: A Guide to Class</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details"><img src="assets/images/blog/2.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">How to plan a fail-proof website redesign strategy</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details"><img src="assets/images/blog/3.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">How investing in dependend increasing to business</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details"><img src="assets/images/blog/4.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when working</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details"><img src="assets/images/blog/5.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Email marketing tips that will increase your sales</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details"><img src="assets/images/blog/6.jpg" alt="Blog"></a>                            
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">How to maintain customer relations disaster strikes</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details"><img src="assets/images/blog/1.jpg" alt="Blog"></a>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta mb-10">
                                   <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                                   <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">How to plan a fail-proof website redesign strategy</a></h3>
                               <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- Blog End -->

    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer style1 footer-home3-style">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
                        <div class="footer-logo mb-40">
                            <a href="index.html"><img src="assets/images/logo-dark3.png" alt=""></a>
                        </div>
                        <div class="textwidget white-color pb-40">
                            <p>GetMeDesk is one of the leading human resources and recruitment services company based
                                out of Pune. We specialize in IT recruitments.</p>
                        </div>
                        <ul class="footer-social md-mb-30">
                            <li>
                                <a href="https://www.linkedin.com/company/getmedesk/?viewAsMember=true"
                                    target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
                        <h3 class="footer-title">Our Services</h3>
                        <ul class="site-map">
                            <li><a href="business-planning.html">Permanent Hiring</a></li>
                            <li><a href="tax-strategy.html">Contractual Hiring</a></li>
                            <li><a href="financial-advices.html">Temporary Hiring</a></li>
                            <li><a href="insurance-strategy.html">Bulk Recruitement</a></li>
                            <li><a href="manage-investment.html">Execuitive Search</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
                        <h3 class="footer-title">Contact Info</h3>
                        <ul class="address-widget">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc">601, White Square, Hinjawadi<br>
                                    Pune, India</div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="tel:(+91)88390380888">(+91)883 90380 888</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a href="mailto:info@getmedesk.com">info@getmedesk.com</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-clock-1"></i>
                                <div class="desc">
                                    Office Hours: 10AM - 6PM
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <h3 class="footer-title">Newsletter</h3>
                        <p class="widget-desc white-color">Stay up to update with our latest news and products.</p>
                        <p>
                            <input type="email" name="EMAIL" placeholder="Your email address" required="">
                            <input type="submit" value="Subscribe Now">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                        <ul class="copy-right-menu">
                            <li><a href="#rs-header">Home</a></li>
                            <li><a href="#rs-about">About</a></li>
                            <li><a href="#rs-contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright text-lg-start text-center ">
                            <p>© 2022 GetMeDesk - A part of ScaleFull Technologies LLP. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="blue-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div class="modal fade search-modal" id="searchModal" tabindex="-1">
        <button type="button" class="close" data-bs-dismiss="modal">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                            <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->


    <!-- modernizr js -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- op nav js -->
    <script src="assets/js/jquery.nav.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- owl.carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Skill bar js -->
    <script src="assets/js/skill.bars.jquery.js"></script>
    <!-- imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- waypoints.min js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- counterup.min js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- magnific popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Nivo slider js -->
    <script src="assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
    <!-- pointer js -->
    <script src="assets/js/pointer.js"></script>
    <!-- contact form js -->
    <script src="assets/js/contact.form.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>

</html>
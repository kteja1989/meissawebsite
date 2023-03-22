<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Meissa Software Solutions Private Limited</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.min.css') }}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/flaticon.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.css') }}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/slick.css') }}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/off-canvas.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/magnific-popup.css') }}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ asset('/css/rsmenu-main.css') }}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/rs-spacing.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css') }}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="defult-home">

        <!--Preloader area start here-->
        <!--<div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>-->
        <!--Preloader area End here-->

		<!-- Main content Start -->
        <div class="main-content">
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area">
                        <div class="container">
                            <div class="row rs-vertical-middle">
                                <div class="col-lg-2">
                                    <div class="logo-part">
                                        <a href="index.html"><img src="{{ asset('images/Slide3.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-10 text-right">
                                    <ul class="rs-contact-info">
                                        <li class="contact-part">
                                            <i class="flaticon-location"></i>
                                            <span class="contact-info">
                                                <span>Address</span>
                                                05 kandi BR. New York
                                            </span>
                                        </li>
                                        <li class="contact-part">
                                            <i class="flaticon-email"></i>
                                            <span class="contact-info">
                                                <!--<span>E-mail</span>-->
                                                <a href="mailto:meissasoftwaresolutions@gmail.com"> Send Mail</a>
                                            </span>
                                        </li>
                                        <li class="contact-part no-border">
                                            <i class="flaticon-call"></i>
                                            <span class="contact-info">
                                                <span>Phone</span>
                                                    +91-9881124454
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Topbar Area End -->

                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="logo-area">
                                <a href="index.html">
                                    <img class="sticky-logo" src="{{ asset('images/Slide3.jpg') }}" alt="logo">
                                </a>
                            </div>
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a href="index.html" class="mobile-logo">
                                            <img src="{{ asset('images/Slide3.jpg') }}" alt="logo">
                                        </a>
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                            <li class="rs-mega-menu menu-item-has-children current-menu-item"> <a href="#">Home</a>
                                                 <!-- //.mega-menu -->
                                            </li>
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a>Application Development</a> </li>
                                                    <li><a>Web Development</a> </li>
                                                    <li><a>Analytic Solutions</a> </li>
                                                    <li><a>Product Design</a> </li>
                                                    <li><a>Data Management</a> </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul> <!-- //.nav-menu -->
                                    </nav>
                                </div> <!-- //.main-menu -->
                            </div>
                            <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                                <ul>
                                    <li class="sidebarmenu-search">
                                        <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="toolbar-sl-share">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->

            <!-- Banner Section Start -->
            <div class="rs-banner main-home pt-100 pb-100  md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 pr-140 md-mb-140 md-pr-15">
                            <div class="content-wrap">
                                <h1 class="it-title">IT Consulting Services For Your Business</h1>
                                <div class="description">
                                    <p class="desc">
                                        We provide affordable technology solutions for all.</br>
                                        Engage Meissa, Stay Peaceful.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 pl-70 md-pl-15">
                            <div class="rs-contact">
                                <div class="contact-wrap">
                                    <div class="content-part mb-25">
                                        <h2 class="title mb-15">Let us get back to you.</h2>
                                        <p class="desc">We here to help you</p>
                                    </div>
                                    <div id="appointment-messages"></div>
                                    <form id="appointment-form" method="post" action="appointment.php">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-lg-12 mb-15">
                                                    <input class="from-control" type="text" id="appointment_name" name="appointment_name" placeholder="Name" required="">
                                                </div>
                                                <div class="col-lg-12 mb-15">
                                                    <input class="from-control" type="text" id="appointment_email" name="appointment_email" placeholder="E-Mail" required="">
                                                </div>
                                                <div class="col-lg-12 mb-15">
                                                    <input class="from-control" type="text" id="appointment_phone" name="appointment_phone" placeholder="Phone Number" required="">
                                                </div>
                                                <div class="col-lg-12 mb-25">
                                                    <input class="from-control" type="text" id="appointment_website" name="appointment_website" placeholder="Your Website" required="">
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <input class="submit-btn" type="submit" value="Submit Now">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 pt-130 pb-190 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 md-mb-50">
                            <div class="rs-animation-shape">
                                <div class="pattern">
                                    <img src="{{ asset('images/about/main-home/about-part-1.png') }}" alt="">
                                </div>
                                <div class="middle">
                                    <img class="dance" src="{{ asset('images/about/main-home/about-part-2.png') }}" alt="">
                                </div>
                                <div class="bottom-shape">
                                    <img class="dance2" src="{{ asset('images/about/main-home/about-part-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 pl-40 md-pl-15 md-pt-200 sm-pt-0">
                            <div class="sec-title mb-30">
                                <div class="sub-text">About Us</div>
                                <h2 class="title pb-20">
                                    We develop complex, analytical, end-to-end enterprise solutions.
                                </h2>
                                <div class="desc pr-90 md-pr-0">
                                    Working on development of enterprise solutions for biotechnology and other industries.
                                </div>
                            </div>
                            <!-- Skillbar Section Start -->
                        <!-- Skillbar Section End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Services Section Start -->
            <div class="rs-services main-home gray-color pt-120 pb-120 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text">Services</span>
                        <h2 class="title">
                            Our IT Solutions
                        </h2>
                        <div class="heading-line"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-25">
                            <div class="services-item">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img src="{{ asset('images/services/main-home/icons/1.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="services-title"><a>Enterprise Solutions</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>
                                            Many laboratory and  biotechnology experimental systems.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-25">
                            <div class="services-item">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img src="{{ asset('images/services/main-home/icons/2.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="services-title"><a href="web-development.html">Web Application Development</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>
                                            Content management systems for specialized applications.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-25">
                            <div class="services-item">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img src="{{ asset('images/services/main-home/icons/3.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="services-title"><a href="case-studies-single.html">Analytic Solutions</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>
                                            AI and ML based solutions for custom problems.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-25">
                            <div class="services-item">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img src="{{ asset('images/services/main-home/icons/4.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="services-title"><a href="cloud-and-devops.html">Clould & DevOps</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>
                                            Starting soon.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-mb-25">
                            <div class="services-item">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img src="{{ asset('images/services/main-home/icons/5.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="services-title"><a href="product-design.html">Product & Design</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>
                                            We create software requirement specifications for complex solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-item">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img src="{{ asset('images/services/main-home/icons/6.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="services-title"><a href="data-center.html">Data Center</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>
                                            Custom Data design services.</br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- Process Section Start -->
            <div class="rs-process pt-180 pb-120 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4  md-mb-40">
                            <div class="process-wrap bg3">
                                <div class="sec-title mb-30">
                                    <div class="sub-text new">Working Process</div>
                                    <h2 class="title white-color">
                                        Our Working Process -  How We Work For Our Customers
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pl-30 md-pl-15">
                            <div class="row">
                                <div class="col-md-6 mb-40">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                1.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title"> Product Scope</h3>
                                            </div>
                                            <p class="number-txt"> Listen to the overall aim of the prodcut and understand the needs, roles of people keeping the outcome in mind.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-40">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                2.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Planning</h3>
                                            </div>
                                            <p class="number-txt"> Laying the right foundation, keeping future scalability in mind. Create elaborate Software Requirement Specification Documents.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 sm-mb-40">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                3.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Execute</h3>
                                            </div>
                                            <p class="number-txt"> Select latest platforms technologies apt for the need. Scalability is the ultimate need.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                4.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Deliver</h3>
                                            </div>
                                            <p class="number-txt"> Unit and stability testing for delivery.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Process Section End -->

            <!-- Product Section Start -->
            <div class="rs-project bg5 style1 pt-110 md-pt-80">
                <div class="container">
                    <div class="sec-title2 text-center mb-45 md-mb-30">
                        <span class="sub-text black-color">Products</span>
                        <h2 class="title black-color">
                            Our current solutions are
                        </h2>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="case-studies-single.html"><img src="{{ asset('images/project/main-home/Screenshot (41).png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa - ARM</h3>
                                <span class="category"><a href="/meissaarm">Meissa - Automated Recruitment Management</a></span>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="case-studies-style1"><img src="{{ asset('images/project/main-home/Screenshot (41).png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa - Colony</h3>
                                <span class="category"><a href="/meissabreeding">Meissa - Colony Management</a></span>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="case-studies-single.html"><img src="{{ asset('images/project/main-home/Screenshot (41).png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa - Facility</h3>
                                <span class="category"><a href="/meissafacility">Meissa Facility Management</a></span>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="case-studies-single.html"><img src="{{ asset('images/project/main-home/Screenshot (41).png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa - CLEAR</h3>
                                <span class="category"><a href="/meissaclear">Meissa - Chronological Laboratory Experimental Automated Record</a></span>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="case-studies-single.html"><img src="{{ asset('images/project/main-home/Screenshot (41).png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa <a href="#" class="badge badge-primary"></a> MARS</h3>
                                <span class="category"><a href="/meissamars">Meissa Management Automated Research Systems</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Section End -->

            <!-- Pricing section start -->
            <div class="rs-pricing pt-255 pb-145 md-pb-80 white-bg">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text">Pricing</span>
                        <h2 class="title">
                            Our Pricing Plans Meet Needs and Budget
                        </h2>
                        <div class="heading-line">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 md-mb-50">
                            <div class="pricing-table">
                                <div class="pricing-badge">
                                    Silver
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{ asset('images/pricing/main-home/icons/1.png') }}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency"><i class="fa fa-inr"></i></span>
                                        <span class="table-price-text">ASK</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                        <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <!--<div class="btn-part">
                                    <a class="readon buy-now" href="shop-single.html">Buy Now</a>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-50">
                            <div class="pricing-table primary-bg">
                                <div class="pricing-badge white-color-bg">
                                    Gold
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{ asset('images/pricing/main-home/icons/2.png') }}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency"><i class="fa fa-inr"></i></span>
                                        <span class="table-price-text">ASK</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <!--<div class="btn-part">
                                    <a class="readon buy-now" href="shop-single.html">Buy Now</a>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-table">
                                <div class="pricing-badge">
                                    Platinum
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{ asset('images/pricing/main-home/icons/3.png') }}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency"><i class="fa fa-inr"></i></span>
                                        <span class="table-price-text">ASK</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <!--<div class="btn-part">
                                    <a class="readon buy-now" href="shop-single.html">Buy Now</a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing section end -->
        </div>
        <!-- Main content End -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="{{ asset('images/Slide1-1bgno.png') }}" alt=""></a>
                            </div>
                            <div class="textwidget pb-30"><p>Get matched with your requirements and discuss for finailization</p>
                            </div>
                            <ul class="footer-social md-mb-30">
                                <li>
                                    <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                                </li>
                                <li>
                                    <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                                </li>
                                <li>
                                    <a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a>
                                </li>
                                <li>
                                    <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                            <h3 class="widget-title">IT Services</h3>
                            <ul class="site-map">
                                <li>Software Development</a></li>
                                <li>Web Development</a></li>
                                <li>Analytic Solutions</a></li>
                                <li>Product Design</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 md-mb-30">
                            <h3 class="widget-title">Contact Info</h3>
                            <ul class="address-widget">
                                <!--<li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">374 FA Tower, William S Blvd 2721, IL, USA</div>
                                </li>-->
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                        <a href="tel:+919881124454">+91-9881124454</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:meissasoftwaresolutions@gmail.com">meissasoftwaresolutions@gmail.com</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock-1"></i>
                                    <div class="desc">
                                        Opening Hours: 10:00 - 18:00
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 text-right md-mb-10 order-last">
                            <ul class="copy-right-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>&copy; 2022 All Rights Reserved. Developed By RSTheme</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <button type="button" class="close" data-bs-dismiss="modal">
                <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('/js/rsmenu-main.js') }}"></script>
        <!-- op nav js -->
        <script src="{{ asset('/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('/js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('/js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
        <!-- counter top js -->
        <script src="{{ asset('/js/waypoints.min.js') }}"></script>
        <!-- swiper js -->
        <script src="{{ asset('/js/swiper.min.js') }}"></script>
        <!-- particles js -->
        <script src="{{ asset('/js/particles.min.js') }}"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ asset('/js/plugins.js') }}"></script>
        <!-- pointer js -->
        <script src="{{ asset('/js/pointer.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('/js/contact.form.js') }}"></script>
        <!-- appointment form js -->
        <script src="{{ asset('/js/appointment.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>

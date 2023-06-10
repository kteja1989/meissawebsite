<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <title>Meissa Software Solutions Private Limited</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('headerTags')
    </head>
    <body class="defult-home">

		<!-- Main content Start -->
        <div class="main-content">
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header">
                    <!--Topbar Start-->
                    @include('topbar')
                    <!--Topbar End-->

                    <!-- Menu Start -->
                    @include('menu')
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
                                    <p class="desc">We give priority to privacy. We don't distribute your information. We don't call until we are called upon</p>
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
                                                    <input class="from-control" type="text" id="appointment_website" name="appointment_website" placeholder="Your Orgnaisation" required="">
                                                </div>
                                                <div class="col-lg-12 mb-25">
                                                    <input class="from-control" type="text" id="appointment_website" name="appointment_website" placeholder="Your Message" required="">
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
                                    <img src="{{ asset('images/meissawebsiteabout.png') }}" alt="">
                                </div>
                                <div class="middle">
                                    <img class="dance" src="{{ asset('images/meissawebsiteabout2.png') }}" alt="">
                                </div>
                                <div class="bottom-shape">
                                    <img class="dance2" src="{{ asset('images/meissawebsiteabout2.png') }}" alt="">
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
                                            Biotechnology and Laboratory experimental systems.
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
                                            Custom Content management systems for all specialized needs and integrations.
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
                                            Software requirement specifications for complex solutions.
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
                                            Custom data hosting services and managed hosting services.</br>
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
                                    <h2 class="title black-color">
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
                                            <p class="number-txt"> Listen to the overall aim of the product, understand the needs, roles of people keeping the outcome in mind.</p>
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
                                            <p class="number-txt"> Keeping future scalability in mind, laying the right foundation. Create elaborate Software Requirement Specification Document.</p>
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
                                            <p class="number-txt"> Select best suitable platforms technologies for the need. Scalability is the ultimate goal.</p>
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
                                            <p class="number-txt"> Unit and stability testing before and after delivery.</p>
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
                                <a href="case-studies-single.html"><img src="{{ asset('images/meissawebsitearm.png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa - ARM</h3>
                                <span class="category"><a href="/meissaarm">Meissa - Automated Recruitment Management</a></span>
                            </div>
                        </div>

                        <div class="project-item">
                            <div class="project-img">
                                <a href="case-studies-style1"><img src="{{ asset('images/meissawebsitebreedingdashb.png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa - Breeding</h3>
                                <span class="category"><a href="/meissabreeding">Meissa - Multi-species Breeding</a></span>
                            </div>
                        </div>

                        <div class="project-item">
                            <div class="project-img">
                                <a href="case-studies-single.html"><img src="{{ asset('images/meissawebsitefacilitydashb.png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa - Facility</h3>
                                <span class="category"><a href="/meissafacility">Meissa Facility Management</a></span>
                            </div>
                        </div>

                        <div class="project-item">
                            <div class="project-img">
                                <a href="case-studies-single.html"><img src="{{ asset('images/meissaclear1.png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa - CLEAR</h3>
                                <span class="category"><a href="/meissaclear">Meissa - Chronological Laboratory Experimental Automated Record</a></span>
                            </div>
                        </div>

                        <div class="project-item">
                            <div class="project-img">
                                <a href="case-studies-single.html"><img src="{{ asset('images/meissamarsdashboard.png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa <a href="#" class="badge badge-primary"></a> MARS</h3>
                                <span class="category"><a href="/meissamars">Meissa Management Automated Research Systems</a></span>
                            </div>
                        </div>

                        <div class="project-item">
                            <div class="project-img">
                                <a href="case-studies-single.html"><img src="{{ asset('images/meissamarsdashboard.png') }}" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title">Meissa <a href="#" class="badge badge-primary"></a> HMST</h3>
                                <span class="category"><a href="/meissahmst">Meissa Herd Management Systems Tracker</a></span>
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
                                    Self Hosting
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{ asset('images/pricing/main-home/icons/1.png') }}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency"></span>
                                        <span class="table-price-text">ASK</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Dashboard</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and online</span></li>
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
                                    Cloud Hosting
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{ asset('images/pricing/main-home/icons/2.png') }}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency"></span>
                                        <span class="table-price-text">ASK</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Dashboard</span></li>
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
                                    Hybrid
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{ asset('images/pricing/main-home/icons/3.png') }}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency"></span>
                                        <span class="table-price-text">ASK</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Dashboard</span></li>
                                        <li><i class="fa fa-check"></i><span>Small customizations</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                        <li><i class="fa fa-check"></i><span>Hosting</span></li>
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
        @include('footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        @include('pageScroll')
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        @include('searchModal')
        <!-- Search Modal End -->

        <!-- Scripts Start -->
        @include('scripts')
        <!-- Scripts End -->
    </body>
</html>

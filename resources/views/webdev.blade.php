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
                    <!-- Topbar Area Start -->
                    @include('topbar')
                    <!-- Topbar Area End -->

                    <!-- Menu Start -->
                    @include('menu')
                    <!-- Menu End -->
                </header>
            <!--Full width header End-->

            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img2">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Web Development</h1>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!--Application Development Start-->
            <div class="rs-about pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                            <div class="sec-title4">
                                <span class="sub-text">Web Development</span>
                                <h2 class="title">We Help to Implement Your Ideas into Automation</h2>
                                <div class="heading-line"></div>
                                <div class="desc desc-big">
                                    We donec pulvinar magna id leoersi  .
                                </div>
                                <div class="desc">
                                    Business.
                                </div>
                                <div class="btn-part mt-45">
                                    <a class="readon learn-more" href="contact.html">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="software-img">
                                <img src="assets/images/about/about-us/1.jpg" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Application Development End-->

            <!--About Section Start-->
            <div id="rs-about" class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 pr-45 md-pr-15 md-mb-50">
                            <div class="choose-img">
                                <img src="assets/images/choose/3.png" alt="images">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title mb-30">
                                <div class="sub-text choose">Why Choose Us</div>
                                <h2 class="title pb-20">
                                    We Are Increasing Business Success With Technology
                                </h2>
                                <div class="desc">
                                    Since the time we have started, working in IT services developing software applications for clients.
                                </div>
                            </div>
                            <!-- Skillbar Section Start -->
                            <div class="rs-skillbar style1 modify1">
                                <div class="cl-skill-bar">
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">Software Development</span>
                                    <div class="skillbar" data-percent="92">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                    </div>
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">Web Development</span>
                                    <div class="skillbar" data-percent="80">
                                            <p class="skillbar-bar"></p>
                                            <span class="skill-bar-percent"></span>
                                    </div>
                                </div>
                            </div>
                        <!-- Skillbar Section End -->
                        </div>
                    </div>
                </div>
            </div>
            <!--About Section End-->
        </div> <!--Main Content-->
        <!-- Footer Start -->
        @include('footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        @include('pageScroll')
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        @include('searchModal')
        <!-- Search Modal End -->

        <!--Scripts Start-->
        @include('scripts')
        <!--Scripts End-->
    </body>
</html>

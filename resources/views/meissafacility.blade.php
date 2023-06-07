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
        <!--Preloader area End here-->

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
                    <h1 class="page-title">Meissa Facility Management</h1>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Services Single Start -->
            <div class="rs-case-studies-single pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 md-mb-50">
                            <div class="services-img">
                                <img src="{{ asset('images/IMG20211227133559new.jpg') }}" alt="">
                            </div>

                            <h2 class="mt-34">Facility Management</h2>
                            <p>Easy to understand, intuitive graphical user interface for both the facility manager and experimenters to record and retrive every minute detail of every cage in the facility including costing.</p>
                            <div class="services-img">
                                <img src="{{ asset('images/meissafacility.png') }}" alt="">
                            </div>
                            </br>
                            <p>Its location, assigned project, corresponding costs for which project or experimentation it is being used, type of strain. The facility manager can also update the comments for the cage on daily basis which notifies the experimenter.</p>
                            <div class="services-img">
                                <img src="{{ asset('images/meissafacility2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 pl-32 md-pl-15">
                            <div class="ps-informations">
                            <h3 class="info-title">Project Info</h3>
                            <ul>
                                <li><span>Category:</span>Bio-technology</li>
                                <li><span>Technologies Used:</span>Laravel, Php, MySQL</li>
                                <li><span>Completed Date:  </span>2019</li>
                                <li><span>Purchase: </span>Subbscription, license</li>
                                <li><span>Price: </span>Contact Us</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Single End -->
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

        <!--Scripts Start-->
        @include('scripts')
        <!--Scripts End-->
    </body>
</html>

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
                    <h1 class="page-title">Meissa HMST</h1>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Services Single Start -->
            <div class="rs-case-studies-single pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 md-mb-50">
                            <div class="services-img">
                                <img src="{{ asset('images/meissaarm2.ng') }}" alt="">
                            </div>

                            <h2 class="mt-34">Herd Management Systems Tracker</h2>
                            <div class="services-img">
                                <img src="{{ asset('images/meissarm.png') }}" alt="">
                            </div>
                            <p>This module is designed helps facilities that maintains lage animals like goats, rabbits, horses etc., Right from getting them to the facility till the end of the tasks.</p>
                            <p>It records the tasks like quarantine period, immunization, serum collection, health records, reports uploading, Barcode recording of animals, Facility Inventory and many more. </p>

                            <h2 class="mt-34">Features</h2>
                            <p>Quarantine Period</p>
                            <p>Health Records</p>
                            <p>Immunization Records</p>
                            <p>Serum Collection</p>
                            <p>Reports Uploading</p>
                        </div>
                        <div class="col-lg-4 pl-32 md-pl-15">
                            <div class="ps-informations">
                            <h3 class="info-title">Product Info</h3>
                            <ul>
                                <li><span>Category:</span>IT Technology</li>
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

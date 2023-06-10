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
            </div>
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
                            <p>This module is designed to help animal facilities that maintain large animals like  rabbits, goats, horses etc., Right from acquisition to production, all tasks are recorded.</p>

                            <h2 class="mt-34">Features</h2>
                            <p>Fully Informative graphical dashboard right after login.</p>
                            <p>Purchase and acquisiation of new animals.</p>
                            <p>Live animal profiles.</p>
                            <p>Livestock Information.</p>
                            <p>Unique ID system of tracking.</p>
                            <p>Machine Readable inputs(Barcode, RFID, IoT integrations) for weight, temperature and other health.</p>
                            <p>Automatic quarantine and exit procedures.</p>
                            <p>Exhaustive Health tracking of animals (Currently 24 in number).</p>
                            <p>Graphical representation of all health data at individual animals and as collective group.</p>
                            <p>Monitoring of Sick Animals and treatment info.</p>
                            <p>Online Recording of Health and Action Taken Reports.</p>
                            <p>Online Movement of animals from production to treatment bay and back.</p>
                            <p>Exhaustive SOP based quality monitoring systems.</p>
                            <p>Immunizations.</p>
                            <p>Serum Collection.</p>
                            <p>Email notifications email .</p>
                            <p>Clean Exit procedures.</p>
                            <p>Inventory Management.</p>
                            <p>Sample Management.</p>
                            <p>Feed Management</p>
                            <p>Online documentation.</p>
                            <p>Complete Facility Monitoring like daily temperature, humidity, cleaning and others as desired.</p>
                            <p>API integration of host equipment on extra charge.</p>
                            <p>Role based assignment for task performance.</p>
                            <p>Online scheduling and conducting of IAEC meetings</p>
                            <p>Exhaustive error and exception tracking.</p>
                            <p>Comprehensive audit trails and malicious activity monitoring.</p>
                        </div>
                        <div class="col-lg-4 pl-32 md-pl-15">
                            <div class="ps-informations">
                            <h3 class="info-title">Product Info</h3>
                            <ul>
                                <li><span>Category:</span>IT Technology</li>
                                <li><span>Technologies Used:</span>Laravel, Php, MySQL</li>
                                <li><span>Completed Date:  </span>2023</li>
                                <li><span>Purchase: </span>Subscription, license</li>
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

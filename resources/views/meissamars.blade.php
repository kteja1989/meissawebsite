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
                    <h1 class="page-title">Meissa Management of Automated Research Systems </h1>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Services Single Start -->
            <div class="rs-case-studies-single pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 md-mb-50">
                            <div class="services-img">
                                <img src="{{ asset('images/meissamarsdashboard.png') }}" alt="">
                            </div>
                            <h2 class="mt-34">Management of Automated Research Systems</h2>
                            <p>A highly intuitive, easy-to-use interface that manages the entire experimental and laboratory operations of IAEC Projects, Multi-Species Breeding, Experimentation, facility and experimental infrastructure maintenance tracking under a single interface. This is an enterprise version which combines all the modules of Meissa CLEAR, Meissa Colony, Meissa Facility. </p>
                            <div class="services-img">
                                <img src="{{ asset('images/meissamarsproject.png') }}" alt="">
                            </div>
                            <p>Comprehensive recording of every aspect in projects including the tracking of number of issues.</p>
                            <div class="services-img">
                                <img src="{{ asset('images/meissamarsstrainstatus.png') }}" alt="">
                            </div>
                            <p>Set the strains from public to private and vice-versa.</p>
                            <div class="services-img">
                                <img src="{{ asset('images/meissamarssetperdiem.png') }}" alt="">
                            </div>
                            <p>Billing based on per diem.</p>
                            <div class="services-img">
                                <img src="{{ asset('images/meissaprojectscost.png') }}" alt="">
                            </div>
                            <p>Billing based on per cage in a project. This calculation is present in every project of every experimenter.</p>
                        </div>
                        <div class="col-lg-4 pl-32 md-pl-15">
                            <div class="ps-informations">
                            <h3 class="info-title">Project Info</h3>
                            <ul>
                                <li><span>Category:</span>Bio-technology</li>
                                <li><span>Technologies Used:</span>Laravel, Livewire, php, MySQL</li>
                                <li><span>Completed Date:  </span>2022</li>
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

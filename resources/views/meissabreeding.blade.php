<!DOCTYPE html>
<html lang="zxx">
    <head>
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
                    <h1 class="page-title">Meissa Multi-Species Breeding</h1>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Services Single Start -->
            <div class="rs-case-studies-single pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 md-mb-50">
                            <div class="services-img">
                                <img src="{{ asset('images/meissabreeding2.png') }}" alt="">
                            </div>

                            <h2 class="mt-34">Multi-Species Breeding</h2>
                            <p>Developed based on most appreciated protocols of JAX Laboratories, USA.</p>
                            <p>Tracking of mice, barcoding, tracking of mating, litter management, mangement of schedules, management of facility at individual cage level information and costing of cages per diem basis. Management of infrasture, inventory, System tracking SOPs.</p>
                            <div class="services-img">
                                <img src="{{ asset('images/meissabreeding3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 pl-32 md-pl-15">
                            <div class="ps-informations">
                            <h3 class="info-title">Project Info</h3>
                            <ul>
                                <li><span>Category:</span>Bio-technology</li>
                                <li><span>Technologies Used:</span>Laravel, Php, MySQL</li>
                                <li><span>Completed Date:  </span>2022</li>
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
        <!--Footer End-->

        <!--start scrollUp-->
        @include('pageScroll')
        <!--End scrollUp-->

        <!--Search Modal Start-->
        @include('searchModal')
        <!--Search Modal End-->

        <!--Scripts Start-->
        @include('scripts')
        <!--Scripts End-->
    </body>
</html>

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
                    <h1 class="page-title">Meissa - C L E A R</h1>
                    <ul>
                        <li>Chronological Laboratory Experimental Automated Record</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Services Single Start -->
            <div class="rs-case-studies-single pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 md-mb-50">
                        <h2 class="mt-34"><u>C</u>hronological <u>L</u>aboratory <u>E</u>xperimental <u>A</u>utomated <u>R</u>ecord</h2>
                        <p>
                            Let CLEAR be the first choice in keeping both integrity of scientific record and
                            and ease of doing it in one go. Use CLEAR to manage your Research Groups activity including
                            tracking of research or IAEC projects, research themes, experiments, chronological collation of data,
                            safe keeping of raw data, laboratory inventory, archival of precious samples, reagents,
                            equipments, usage, consumptions etc., at finger tips. Modern research demands not only speed but also efficiency.
                            Only the best software can cut wastage and increase efficiency. This is it, vault to next
                            level.
                        </p>

                        <ul class="listing-style">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>A fully secure, complete, end-to-end encrypted solution removes the hassle of maintaining it.</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Never to worry! Back-ups at will, also store in your personal external storage.</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Role and Permission based access to projects and data for group members.</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>Devote more for ideas than for paper work.</span>
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                <span>A strong audit trail sniffs out malicious activity of users</span>
                            </li>
                        </ul>

                        <h5>Dashboard</h5>
                        <div class="services-img">
                            <img src="{{ asset('images/meissaclear1.png') }}" alt="">
                        </div>
                        <p>Record every bit of your experiments right from beginning to end along with attachment of audio and video files, pictures.</p>
                        </br>

                        <h2 class="mt-34">Features</h2>

                        <h5>Elab Notebook</h5>
                        <p>Track every theme of research, experiments performed within it and record data, images, audio and video files etc., till the theme of investigation is closed.</p>
                        <div class="services-img">
                            <img src="{{ asset('images/meissaclear2.png') }}" alt="">
                        </div>
                        </br>

                        <h5>Inventory</h5>
                        <p>Every laboratory invariably has several thousands of precious chemicals/reagents/samples. This simple intutive inventory tracking marks every vial and records consumption on the fly and updates the master inventory. As you enter experimental information, it notes all usages in master consumption register. It is that simple.</p>
                        <!--<p>Comprehensive recording of searchable inventory, receipts and every reagent spent for the purpose, quantity and track replinishment status.</p>-->
                        <div class="services-img">
                            <img src="{{ asset('images/meissaclearinventory.png') }}" alt="">
                        </div>
                        </br>

                        <h5>Logbook</h5>
                        <p>Complete recording of logbook, for every equipment inside the laboratory.</p>
                        <div class="services-img">
                            <img src="{{ asset('images/meissaclearlogbook.png') }}" alt="">
                        </div>
                        </br>

                        <h5>Reagent Development</h5>
                        <p>Complete record of reagent preparation, track the consumption and its usage in specific experiments. Uniquely PNR coded reagents.</p>
                        <div class="services-img">
                            <img src="{{ asset('images/meissaclearreagent.png') }}" alt="">
                        </div>
                        </br>

                        <h5>Sample Storage</h5>
                        <p>Exactly like inventory management, track, acquisition, storage and usage of all precious samples. An investigator can know details of every sample stored in his laboratory, the container, shelf/canister, box and location.</p>
                        <!--<p>Complete online record of storage of samples, with exact location details.</p>-->
                        <div class="services-img">
                            <img src="{{ asset('images/meissaclearsample.png') }}" alt="">
                        </div>
                        </br>

                        <h5>Why Multi - Tenancy ?</h5>
                        <p>Please look at the picture below.</p>
                            <div class="services-img">
                                <img src="{{ asset('images/tenancydesc_new.png') }}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-4 pl-32 md-pl-15">
                            <div class="ps-informations">
                                <h3 class="info-title">Project Info</h3>
                                <ul>
                                    <li><span>Category:</span>Bio-technology</li>
                                    <li><span>Technologies Used:</span>Laravel, Livewire, php, MySQL</li>
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

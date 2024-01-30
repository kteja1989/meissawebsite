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
                    <h1 class="page-title">Meissa - H A R T </h1>
                    <ul>
                        <li>Human and Administrative Resource Tracker</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Services Single Start -->
            <div class="rs-case-studies-single pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 md-mb-50">
                            <div class="services-img">
                                <img src="{{ asset('images/Screenshotmeissahart.png') }}" alt="">
                            </div>
                            <h2 class="mt-34">Human and Administrative Resource Tracker</h2>
                            <p>A comprehensive office management software application which helps and manages all employee's tasks, projects, personal details, leaves, official tours and many more. All in a single login, manages a complete enterprise.</p>
                            <h4>The salient features are:</h4>

                            <p>1. Project Management: Track Projects, Status, Set Goals, Sub-goals of assigned people and track them efficiently</p>

                            <p>2. Leaves: Define any leave type applicable to a role and implement custom leave types as you wish.</p>

                            <p>3. Intra-office Communications: A unique, novel, innovative and custom implementable communication path which can be changed at will when needed. </p>

                            <p>4. Tasks: Porjects and office tasks can be monitored in a just few clicks.</p>

                            <p>5. Users: A user management you assign roles and permissions.</p>

                            <p>6. Roles: An extremely easy to assign a role to any user who can access restricted parts of the application</p>

                            <p>7. Permissions: Permissions are a way to restrict access to information, assign or revoke with a clicks.</p>
                        </div>

                        <div class="col-lg-4 pl-32 md-pl-15">
                            <div class="ps-informations">
                            <h3 class="info-title">Project Info</h3>
                            <ul>
                                <li><span>Category:</span></li>
                                <li><span>Technologies Used:</span>Laravel, Javascript, php, MySQL</li>
                                <li><span>Completed Date:  </span>2024</li>
                                <li><span>Purchase: </span>Subscription, license, Hybrid</li>
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

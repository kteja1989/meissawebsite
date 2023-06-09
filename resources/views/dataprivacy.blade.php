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
            </div>

            <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 md-mb-50">
                            <h3 class="mt-30">Privacy Policy</h3>
                            <p class="mt-20 mb-50">
                                <p>1. This site and its associated services are created based on applicable Data policies.</p>
                                <p>2. Meissa Software Solutions Pvt. Ltd, does not contact you either directly asking for peronal information except for the information provided in the service level agreement.</p>
                                <p>3. Meissa does not disclose users information to third parties.</p>
                                <p>4. Meissa does not collect personal, preferencial, location details from anybody. If you wish to know more about our policies, please write us </p>
                                <address>
                                    Mail: <a href="mailto:support-meissa@meissa.co.in">Meissa Software Solutions Pvt.Ltd</a>.<br>
                                    RH 24, Lake Paradise, Old Pune-Mumbai Highway, Talegaon Dabhade,</br>
                                    Pune, Maharashtra 410507. </br>
                                </address>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

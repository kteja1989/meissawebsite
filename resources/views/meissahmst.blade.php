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
                    <h1 class="page-title">Meissa - H M S T</h1>
                    <ul>
                        <li>Herd Management Systems Tracker</li>
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
                                <img src="{{ asset('images/meissaarm2.ng') }}" alt="">
                            </div>

                            <h2 class="mt-34">Herd Management Systems Tracker</h2>
                            <div class="services-img">
                                <img src="{{ asset('images/meissarm.png') }}" alt="">
                            </div>
                            <p>This module is designed to help animal facilities that maintain large animals like  rabbits, goats, horses etc., Right from acquisition to production, all tasks are recorded.</p>

                            <h2 class="mt-34">Features</h2>
                            <p>1. Fully Informative graphical dashboard right after login.</p>
                            <p>2. Purchase and acquisiation of new animals.</p>
                            <p>3. Live animal profiles.</p>
                            <p>4. Livestock Information.</p>
                            <p>5. Unique ID system of tracking.</p>
                            <p>6. Machine Readable inputs(Barcode, RFID, IoT integrations) for weight, temperature and other health.</p>
                            <p>7. Automatic quarantine and exit procedures.</p>
                            <p>8. Exhaustive Health tracking of animals (Currently 18 parameters).</p>
                            <p>9. Graphical representation of all health data at individual animal level and as collective group.</p>
                            <p>10. Evaluation of Health Metrics.</p>
                            <p>11. Monitoring of Sick Animals and treatment info.</p>
                            <p>12. Online Recording of Health and Action Taken Reports.</p>
                            <p>13. Online Movement of animals from production to treatment bay and back.</p>
                            <p>14. Exhaustive SOP based quality monitoring systems.</p>
                            <p>15. Immunizations.</p>
                            <p>16. Serum Collection.</p>
                            <p>17. Email notifications email .</p>
                            <p>18. Clean Exit procedures.</p>
                            <p>19. Inventory Management.</p>
                            <p>20. Sample Management.</p>
                            <p>21. Feed Management.</p>
                            <p>22. Online documentation.</p>
                            <p>23. Complete Facility Monitoring like daily temperature, humidity, cleaning and others as desired.</p>
                            <p>24. API integration of host equipment on extra charge.</p>
                            <p>25. Role and Permission based assignment for task performance.</p>
                            <p>26. Online scheduling and conducting of IAEC meetings</p>
                            <p>27. Artificial Intelligence & Machine Learing based routing, work-flows, suggestions, problem identification and resolution (coming up soon)</p>

                            <h2 class="mt-34">Security and Encryption</h2>
                            <p>1. End-to-end secure encrypted communications.</p>
                            <p>2. Data encryption if desired at additional charge.</p>
                            <p>3. Cross Site Scripting Protection.</p>
                            <p>4. Cross Site Request Forgery attack protection.</p>
                            <p>5. SQL injection protection.</p>
                            <p>6. Cookie protection and session hijack protection.</p>
                            <p>7. Most reliable authentication system.</p>
                            <p>8. Malicious IP blocking.</p>
                            <p>9. Most secure routing system, all routes go through stringent validations.</p>
                            <p>10. Exhaustive error and exception tracking.</p>
                            <p>11. Comprehensive audit trails and malicious activity monitoring.</p>

                            <h2 class="mt-34">Data Back-up and Restoration.</h2>
                            <p>1. Daily 4 back-ups and addtional independent storage at extra.</p>
                            <P>2. RAID - mirror server at additional charge.</P>
                            <p>3. Under 17 min for full restoration from back-ups.</p>
                        </div>

                        <div class="col-lg-4 pl-32 md-pl-15">
                            <div class="ps-informations">
                            <h3 class="info-title">Product Info</h3>
                            <ul>
                                <li><span>Category:</span>IT Technology</li>
                                <li><span>Technologies Used:</span>Laravel livewire, Php, MySQL</li>
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

<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    @include('partials.head')
    <title>Office Information</title>

    <style>
        .card {
            background-color: #1c2331bf !important;
        }

        body {
            color: #000 !important;
            line-height: 2rem !important;
        }

        .card .card-body .card-text {
            color: #cccccc !important;
        }

        hr {
            border-top: 1px solid rgba(255, 191, 0, 0.51);
        }

        p {
            font-size: 17px !important;
        }

        .mt-5{
            margin-top: 5rem!important;
        }

        body{
            color:#fff!important;
            background-color: #1c2331f5!important;
        }
    </style>


</head>

<body class="">

    <!-- Navigation -->
    <header>



        <!--Main Navigation-->
        <header>
            @include('partials.nav')
        </header>
        <!--Main Navigation-->

        <main>
                <div class="container-fluid" style="height:900px">
                    <hr class="mb-5 mt-0">
                    <div class="container">

                        <div class="section extra-margins mt-5 py-5 text-center text-lg-left">

                            <!--Grid row-->
                            <div class="row my-xl-5 py-xl-4 mt-5">

                                <!--Grid column-->
                                <div class="col-sm-12 col-md-5 col-xl-5 mb-4">

                                    <!--Image-->
                                    <div class="view overlay">
                                        <img src="img/custom4.jpg" style="min-height:383px; min-width:400px" class="img-fluid z-depth-1" alt="">
                                        <div class="mask rgba-white-slight"></div>
                                    </div>
                                    <!--/.Image-->

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-sm-12 col-md-6 col-xl-6">


                                    <!-- Title -->
                                    <h1>Office Name</h1>
                                    <hr class="amber-text">
                                    <!-- Text -->
                                    <p>Office Owner Name</p>
                                    <p>Phone Number: +963 011 1234567</p>
                                    <p>Mobile Number: +963 991 123456</p>
                                    <p>Main Branch Address: Mazzeh</p>
                                    <p>Services: Types of services provided </p>
                                    <p>E-mail: shipping@shippingcompany.com</p>
                                    <p>Website: www.shippingcompany.com</p>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--/Grid row-->

                        </div>

                    </div>

                </div>





        </main>
        <!-- Main layout -->

        <!-- Footer -->
        @include('partials.footer')

        <!-- Footer -->

        <!-- SCRIPTS -->


</body>

</html>

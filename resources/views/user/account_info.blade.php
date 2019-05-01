<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    @include('partials.head')
    <title>Account Information</title>

    <style>

        body {
            line-height: 2rem !important;
        }


        hr {
            border-top: 1px solid rgba(255, 191, 0, 0.51);
        }

        p {
            font-size: 19px !important;
        }

        .mt-9 {
            margin-top: 9rem;
        }


    </style>


</head>

<body class="custom-primary-light">

    <!-- Navigation -->
    <header>



        <!--Main Navigation-->
        <header>
            @include('partials.nav')
        </header>
        <!--Main Navigation-->

        <main>


            <div class="container-fluid" style="height:850px">
                <div class="container mt-9">
                    <h1 class="text-center  font-weight-bolder custom-secondary-text">Account Information<i
                            class="fas fa-user custom-secondary-text ml-3"></i></h1>
                    <div class="section extra-margins  py-5 text-center text-lg-left">

                        <!--Grid row-->
                        <div class="row my-xl-5 py-xl-4">

                            <!--Grid column-->
                            <div class="col-sm-12 col-md-5 col-xl-5">

                                <!--Image-->
                                <div class="view overlay">
                                    <img src="img/2.jpg" class="img-fluid z-depth-1 shadow-lg" alt="">
                                    <div class="mask rgba-white-slight"></div>
                                </div>
                                <!--/.Image-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-sm-12 col-md-6 col-xl-6">


                                <!-- Title -->
                                <h1 class="custom-tertiary-text">Company Name</h1>
                                <hr class="custom-secondary-text">
                                <!-- Text -->
                                <p>Full Name: John Doe</p>
                                <p>Username: companyname</p>
                                <p>Password: t42#bVmQ</p>
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

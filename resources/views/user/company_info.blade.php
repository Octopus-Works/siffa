<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    @include('partials.head')
    <title>Office Information</title>

    <style>


        body {
            line-height: 2rem !important;
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

    </style>


</head>

<body class="custom-primary-transparent">

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
                                        <img src="{{ $user->applicationdetail->images[0]->url}}" style="min-height:383px; min-width:400px" class="img-fluid z-depth-1" alt="">
                                        <div class="mask rgba-white-slight"></div>
                                    </div>
                                    <!--/.Image-->

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-sm-12 col-md-6 col-xl-6">


                                    <!-- Title -->
                                    <h1 class="custom-tertiary-text">{{ $user->shippingoffice->name }}</h1>
                                    <hr class="custom-secondary-text">
                                    <!-- Text -->
                                    <p>Office Owner Name: {{ $user->userdetail->fullname }} </p>
                                    <p>Phone Number: {{ $user->userdetail->phone_number}}</p>
                                    <p>Mobile Number: {{$user->userdetail->mobile_number }}</p>
                                    <p>Main Branch Address: {{ $user->shippingoffice->addresses}}</p>
                                    <p>Services: {{ $user->shippingoffice->shipping_services}} </p>
                                    <p>E-mail: {{ $user->email }}</p>
                                    <p>Website: {{ $user->userdetail->website }}</p>
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

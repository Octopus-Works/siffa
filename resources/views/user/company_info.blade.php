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

    </style>


</head>

<body class="fixed-sn custom-primary-transparent">

    <!-- Navigation -->




    <!--Main Navigation-->
    <header>
        <header>
            @include('partials.nav_dashboard')
            @include('partials.user_sidebar')
        </header>
    </header>
    <!--Main Navigation-->

    <main style="height: 1000px">
        <div class="container-fluid">
            <div class="container ">

                <div class="section extra-margins py-5 text-center text-lg-left">

                    <!--Grid row-->
                    <div class="row my-xl-5 py-xl-4 mt-5">

                        <!--Grid column-->
                        <div class="col-sm-12 col-md-5 col-xl-5 mb-4">

                            <!--Image-->
                            <div class="view overlay">
                                {{ $temp = ""}}
                                @if ( isset($user->applicationdetail->images[2]->url))
                                    {{ $temp = $user->applicationdetail->images[2]->url }}
                                @endif
                                <img src="{{$temp}}"
                                    style="min-height:383px; min-width:400px" class="img-fluid z-depth-1" alt="">
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
    @include('partials.footer_dashboard')

    <!-- Footer -->

    <!-- SCRIPTS -->
    <script>
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

    </script>


</body>

</html>

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

        .file-path-wrapper {
            display: none;
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
                        <div class="ml-auto mr-auto col-sm-12 col-md-5 col-xl-5">
                            <div class="card card-cascade narrower custom-primary mb-4">

                                <!-- Card image -->
                                <div class="view view-cascade gradient-card-header custom-tertiary">
                                    <h5 class="mb-0 font-weight-bold">Edit Photo</h5>
                                </div>
                                <!-- Card image -->

                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                                    <div class="view overlay">
                                        @if (isset($image))
                                            <img src= "{{$image->url}}" class="img-fluid z-depth-1 shadow-lg" alt="">
                                        @endif
                                        <div class="mask rgba-white-slight"></div>
                                    </div>

                                    <p class="text-muted"><small>Profile photo will be changed automatically</small> </p>
                                    <div class="row flex-center">
                                            <form class="md-form">
                                                <div class="file-field">
                                                    <div class="btn custom-secondary btn-rounded float-left">
                                                    <span>Upload Photo</span>
                                                    <input type="file">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Upload your file">
                                                    </div>
                                                </div>
                                            </form>
                                        <button class="btn btn-danger btn-rounded">Delete</button>
                                    </div>
                                </div>
                                <!-- Card content -->

                            </div>

                        </div>

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

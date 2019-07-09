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
                                            <button class="btn custom-secondary black-text btn-rounded" data-toggle="modal" data-target="#company_photo_modal">Upload New Photo</button><br>
                                            <button class="btn btn-danger btn-rounded">Delete</button>
                                        </div>
                                        @include('modal_partials.company_photo_modal')
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
                            <p>Main Branch Address: {{ $user->shippingoffice->city}}</p>
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
        $('#md-form').submit(function (e) {
            e.preventDefault();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                
                type: 'POST',
                url: '{{ route('photo_upload1')}}',
                dataType: 'json', // data type
                data: new FormData($('#app_form1')[0]),
                processData: false,
                contentType: false,
                success: function (data) {
                    toastr.success('Registered!');
                },

                error: function (xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText);
                }
            });
        });
        
    </script>
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

<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    @include('partials.head_ar')
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

        .card-img-top {
            width: 100%;
            height: 16vw;
            padding: 10px;
            object-fit: cover;
        }

        @media (max-width: 767px) {

            .card-img-top {
                width: 100% !important;
                height: 300px !important;
            }
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

    <main style="height: 900px">
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
                                                <img src= "{{$image->url}}" class="img-fluid z-depth-1 shadow-lg card-img-top" alt="">
                                            @endif
                                            <div class="mask rgba-white-slight"></div>
                                        </div>

                                        <p class="text-muted"><small>الصورة الشخصية سوف تتغير تلقائيا</small> </p>
                                        <div class="row flex-center">
                                            <button class="btn custom-secondary black-text btn-rounded" data-toggle="modal" data-target="#company_photo_modal">Upload New Photo</button>
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
                            <p><span class="custom-secondary-text mr-2">اسم صاحب المكتب:</span>{{ $user->userdetail->fullname }} </p>
                            <p><span class="custom-secondary-text mr-2">رقم الهاتف:</span> {{ $user->userdetail->phone_number}}</p>
                            <p><span class="custom-secondary-text mr-2">رقم الموبايل: </span>{{$user->userdetail->mobile_number }}</p>
                            <p><span class="custom-secondary-text mr-2">عنوان المكتب الرئيسي: </span>{{ $user->shippingoffice->city}}</p>
                            <p><span class="custom-secondary-text mr-2">عنوان البريد الإلكتروني: </span>{{ $user->email }}</p>
                            <p><span class="custom-secondary-text mr-2">الموقع الإلكتروني: </span>{{ $user->userdetail->website }}</p>
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
    @include('partials.footer_dashboard_ar')

    <!-- Footer -->

    <!-- SCRIPTS -->
    <script>
        $('#photo_upload').submit(function (e) {
            e.preventDefault();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                
                type: 'POST',
                url: '{{ route('photo_upload1')}}',
                dataType: 'json', // data type
                data: new FormData($('#photo_upload')[0]),
                processData: false,
                contentType: false,
                statusCode: {
                    401: function () {
                        window.location = '/login';
                    },
                    500: function () {
                        alert('500 status code! server error');
                    },
                    200: function (msg) {
                        window.location = '/user/company_info/' + '{{ $user->id }}';
                    },
                },
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

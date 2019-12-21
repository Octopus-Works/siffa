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

        .md-form label {
            color: #b7b9bd !important;
        }

        .md-form input {
            color: #fff !important;
        }

        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form textarea.md-textarea:focus:not([readonly])+label {
            color: #5f96ce !important;
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
    <header>



        <!--Main Navigation-->
        <header>
            @include('partials.nav_dashboard')
            @include('partials.user_sidebar')
        </header>
        <!--Main Navigation-->

        <main>

                @include('modal_partials.upload_photo_modal')

            <div class="container-fluid" style="height:100%">
                <div class="container ">
                    <h1 class="text-center  font-weight-bolder custom-secondary-text mt-3">Account Information<i
                            class="fas fa-user custom-secondary-text ml-3"></i></h1>
                    <div class="section extra-margins  py-5 text-center text-lg-left">

                        <!--Grid row-->
                        <div class="row">

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
                                                <img id="photo" src= "{{$image->url}}" class="img-fluid z-depth-1 shadow-lg card-img-top" alt="">
                                            @endif
                                            <div class="mask rgba-white-slight"></div>
                                        </div>

                                        <p class="text-muted"><small>Profile photo will be changed automatically</small> </p>
                                        <div class="row flex-center">
                                            <button class="btn custom-secondary black-text btn-rounded" data-toggle="modal" data-target="#modal_upload_photo">Upload New Photo</button>
                                        </div>
                                    </div>
                                    <!-- Card content -->

                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-sm-12 col-md-6 col-xl-6">

                                <div class="card card-cascade narrower custom-primary">

                                    <!-- Card image -->
                                    <div class="view view-cascade gradient-card-header custom-tertiary">
                                        <h5 class="mb-0 font-weight-bold">Edit Account</h5>
                                    </div>
                                    <!-- Card image -->

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center">

                                        <!-- Edit Form -->
                                        <form action="{{ route('mini_edit')}}" method="POST">
                                            @csrf
                                            <!-- First row -->

                                            <div class="row">

                                                <!-- First column -->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <input id="fullname" name="fullname" type="text"
                                                            value="{{ $user->userdetail->fullname }}"
                                                            class="validate form-control">
                                                        <label for="fullname">{{ __('Full name') }}</label>
                                                    </div>
                                                </div>
                                                <!-- Second column -->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <input id="company_name" name="company_name" type="text"
                                                            value="{{ $user->shippingoffice->name }}"
                                                            class="validate form-control">
                                                        <label for="company_name">{{ __('Company Name') }}</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- First row -->

                                            <!-- First row -->
                                            <div class="row">
                                                <!-- First column -->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <input id="father" name="father" type="text"
                                                            value="{{$user->userdetail->father_name}}"
                                                            class="validate form-control">
                                                        <label for="father">{{ __("Father's name") }}</label>

                                                    </div>
                                                </div>

                                                <!-- Second column -->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <input id="mother" name="mother" type="text"
                                                            value="{{$user->userdetail->mother_name}}"
                                                            class="validate form-control">
                                                        <label for="mother">{{ __("Mother's name") }}</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- First row -->

                                            <!-- Second row -->
                                            <div class="row">

                                                <!-- First column -->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <input id="email" name="email" type="email"
                                                            value="{{$user->email}}" class="validate form-control">
                                                        <label for="email">{{ __('E-mail') }}</label>
                                                    </div>
                                                </div>
                                                <!-- Second column -->

                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <input id="password" name="password" value="" type="password"
                                                            class="validate form-control">
                                                        <label for="password">{{__('Password')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Second row -->

                                            <!-- First column -->
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <input id="website" name="website" value="{{$user->userdetail->website}}"
                                                        type="text" class="validate form-control">
                                                    <label for="website">{{ __('Website Address')}}</label>
                                                </div>
                                            </div>
                                            <!-- Third row -->

                                            <!-- Fourth row -->
                                            <div class="row">
                                                <div class="col-md-12 text-center my-4">
                                                    <input type="submit" value="Update Account" class="btn custom-secondary black-text btn-rounded">
                                                </div>
                                            </div>
                                            <!-- Fourth row -->

                                        </form>
                                        <!-- Edit Form -->
                                    </div>

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->



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
            $('#photo_upload').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    
                    type: 'POST',
                    url: '{{ route('photo_upload')}}',
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
                            window.location = '/user';
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

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

        .md-form input[type=text]:focus:not([readonly])+label {
            color: #3d5e9e !important;
        }

    </style>


</head>

<body class="custom-primary-light">

    <!-- Navigation -->
    <header>



        <!--Main Navigation-->
        <header>
            @include('partials.nav_dashboard')
            @include('partials.sidebar')
        </header>
        <!--Main Navigation-->

        <main>


            <div class="container-fluid" style="height:100%">
                <div class="container mt-9">
                    <h1 class="text-center  font-weight-bolder custom-secondary-text">Account Information<i
                            class="fas fa-user custom-secondary-text ml-3"></i></h1>
                    <div class="section extra-margins  py-5 text-center text-lg-left">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-sm-12 col-md-5 col-xl-5">
                                <div class="card card-cascade narrower custom-primary mb-4">

                                    <!-- Card image -->
                                    <div class="view view-cascade gradient-card-header custom-tertiary">
                                        <h5 class="mb-0 font-weight-bold">Edit Photo</h5>
                                    </div>
                                    <!-- Card image -->

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade text-center">
                                        <div class="view overlay">
                                            <img src="img/7.jpg" class="img-fluid z-depth-1 shadow-lg" alt="">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>

                                        <p class="text-muted"><small>Profile photo will be changed automatically</small>
                                        </p>
                                        <div class="row flex-center">
                                            <button class="btn custom-secondary black-text btn-rounded">Upload New
                                                Photo</button><br>
                                            <button class="btn btn-danger btn-rounded">Delete</button>
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
                                        <form>
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
                                                            <input id="username" name="username" type="text" value="{{ $user->shippingoffice->name }}"
                                                            class="validate form-control">
                                                        <label for="username">{{ __('Username') }}</label>

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
                                                             value="{{ $user->userdetail->father_name }}"
                                                            class="validate form-control">
                                                        <label for="father">{{ __("Father's name") }}</label>

                                                    </div>
                                                </div>

                                                <!-- Second column -->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <input id="mother" name="mother" type="text"
                                                          value="{{ $user->userdetail->mother_name }}"
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
                                                        <input id="password" name="password" value="" type="text"
                                                            class="validate form-control">
                                                        <label for="password">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Second row -->

                                            <!-- First column -->
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <input id="website" name="website" value="{{ $user->userdetail->website }}"
                                                        type="text" class="validate form-control">
                                                    <label for="website">Website Address</label>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- Third row -->

                                    <!-- Fourth row -->
                                    <div class="row">
                                        <div class="col-md-12 text-center my-4">
                                            <input type="submit" value="Update Account"
                                                class="btn custom-secondary black-text btn-rounded">
                                        </div>
                                    </div>
                                    <!-- Fourth row -->

                                    </form>
                                    <!-- Edit Form -->

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
        @include('partials.footer')

        <!-- Footer -->

        <!-- SCRIPTS -->


</body>

</html>

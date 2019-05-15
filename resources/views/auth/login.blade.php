<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials.head')
    <style>



        html,
        body,
        header,
        .view {
            height: 100vh;

        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 815px;

            }


        }

        .md-form label{
            color:#ffffff9e!important;
        }

        .md-form .prefix~input{
            color:#fff!important;
        }
        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 650px;

            }
        }

        .custom-control-label::before {
            background-color: #ffffff00!important;
        }


        .mask.rgba-gradient7 {
            background: -webkit-linear-gradient(98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
            background: -webkit-gradient(linear, 98deg, from(rgba(22, 91, 231, 0.5)), to(rgba(255, 32, 32, 0.5)));
            background: linear-gradient(to 98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
        }

        .card {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
        }


        h6 {
            line-height: 1.7;
        }



        .card {
            margin-bottom: 3rem;

        }


        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form textarea.md-textarea:focus:not([readonly])+label {
            color: #5f96ce !important;
        }


        .md-form input[type=email]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #5f96ce!important;
        }

        .md-form .form-control {
            color: #fff;
        }

        .ckeck-pass {
            margin-bottom: 1.5rem;
        }

    </style>
</head>

<body>

    @include('partials.nav')

    <main>
        <div class="view"
            style="background-image:url('img/7.jpg'); background-repeat:no-repeat;background-size: cover; background-position: center center;">
            <div class="container p-5" style="height:900px">
                <div class="mask flex-center rgba-black-light">
                    <div class="container mb-5 mt-5 ">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5 mt-5">

                                    <!--Form with header-->
                                    <div class="card wow fadeIn  custom-primary-transparent mt-5" data-wow-delay="0.3s">
                                        <div class="card-body">

                                            <!--Header-->
                                            <div class="form-header black">
                                                <h3 class="custom-secondary-text"><i class="fas fa-user custom-secondary-text mr-2 mt-2 mb-2"></i>{{ __('Login') }}</h3>
                                            </div>

                                            <!--Body-->
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="md-form mt-5">
                                                    <i class="fas fa-envelope prefix custom-secondary-text"></i>
                                                    <input id="email" type="email"
                                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                        name="email" value="{{ old('email') }}" required autofocus>
                                                    <label for="email">{{ __('E-Mail Address')}}</label>
                                                    @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="md-form mt-5">
                                                    <i class="fas fa-lock prefix custom-secondary-text"></i>
                                                    <input id="password" type="password"
                                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                        name="password" required>
                                                    <label for="password">{{ __('Password') }}</label>
                                                    @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="  pl-4 ml-3  ckeck-pass">
                                                    <!-- Default checked disabled -->
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="remember" id="remember"
                                                            {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label " for="remember"><a href="#"
                                                                style="color:#edb54d !important;"
                                                                class="pink-text font-small ml-1">
                                                                {{ __('Remember Me') }}</a></label>
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn black custom-secondary-text">
                                                        {{ __('Login') }}
                                                    </button>
                                                    <hr>
                                                    <div class="inline-ul text-center d-flex justify-content-center">
                                                        <a class="p-2 m-2 fa-lg tw-ic custom-tertiary-text "><i
                                                                class="fab fa-twitter "></i></a>
                                                        <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in custom-tertiary-text ">
                                                            </i></a>
                                                        <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram custom-tertiary-text ">
                                                            </i></a>
                                                    </div>
                                                </div>
                                        </div>

                                    </div>
                                    <!--/Form with header-->



                                    </form>
                                </div>
                            </div>
                            <!--/Form with header-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>





    @include('partials.footer')




</body>

</html>

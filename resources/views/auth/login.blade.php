<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials.head')
    <style>
        .pink {
            background-color: #ffb6c1 !important;
        }

        .pink-text {
            color: #ffb6c1 !important;
        }

        .black-text {
            color: black !important;
        }

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #ffb6c1 !important;
            box-shadow: 0 1px 0 0 #ffb6c1 !important;
        }

        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #ffb6c1 !important;
        }

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

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 650px;

            }
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

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=email]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #edb54d !important;
            box-shadow: 0 1px 0 0 #edb54d !important;
        }

        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=email]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #edb54d !important;
        }

        .md-form .form-control {
            color: #fff;
        }

        .ckeck-pass {
            margin-bottom: 1.5rem;
        }

        .md-form .prefix~input,
        .md-form .prefix~textarea {

            color: #000;
        }

    </style>
</head>

<body>

    @include('partials.nav')

    <section class="view ">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100 " style="height: -webkit-fill-available;" src="https://mdbootstrap.com/img/Photos/Others/images/72.jpg" alt="">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="mask h-100 d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

                            <!--Form with header-->
                            <div class="card wow fadeIn" data-wow-delay="0.3s">
                                <div class="card-body">

                                    <!--Header-->
                                    <div class="form-header black">
                                        <h3><i class="fas fa-user mt-2 mb-2"></i>{{ __('Login') }}</h3>
                                    </div>

                                    <!--Body-->
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="md-form mt-5">
                                            <i class="fas fa-envelope prefix white-text"></i>
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
                                            <i class="fas fa-lock prefix white-text"></i>
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
                                                <input type="checkbox" class="custom-control-input" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label " for="remember"><a href="#"
                                                        style="color:#edb54d !important;"
                                                        class="pink-text font-small ml-1">
                                                        {{ __('Remember Me') }}</a></label>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn black">
                                                {{ __('Login') }}
                                            </button>
                                            <hr>
                                            <div class="inline-ul text-center d-flex justify-content-center">
                                                <a class="p-2 m-2 fa-lg tw-ic "><i class="fab fa-twitter "></i></a>
                                                <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in ">
                                                    </i></a>
                                                <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram "> </i></a>
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
    </section>



    @include('partials.footer')



    <script>
        $(document).ready(function () {
            var input_selector =
                'input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], textarea';
            $(input_selector).each(function (index, element) {
                if (true) {
                    $(this).siblings('label').addClass('active');
                } else {
                    $(this).siblings('label').removeClass('active');
                }
            });
        });
        new WOW().init();

    </script>

</body>

</html>

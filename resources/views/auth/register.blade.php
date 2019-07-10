@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Register</title>
    <link rel="stylesheet" href={{url("css/intlTelInput.css")}}>
    <style>


        .custom-control-label::after {
            cursor: pointer;
        }

        .mt-5 {
            margin-top: 6rem !important;
        }



        .hide {
            display: none;
        }

        form .error {
            color: red;
            text-align:left;
            margin-top:-1rem;

        }

        #mobile-error, #phone-error, .initialized{
            margin-top:0!important
        }

        .intl-tel-input .flag-container{
            top:-15px!important;
        }

        .intl-tel-input {
            position: relative;
            width:91%;
        }

        .select-dropdown, .select-wrapper span.caret{
            color:#757575;
        }

        @media only screen and (max-width: 993px) {
            .intl-tel-input {
                position: relative;
                width:76%;
            }
        }

  
    </style>
</head>


<body>

    <!--Main Navigation-->
    <header>
        @include('partials.nav')
    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main>
        <div class="view jarallax shadow-lg" style="height: 65vh;">
            <img class="jarallax-img" src={{url('img/3.jpg')}} alt="">
            <div class="mask rgba-black-slight">
            </div>
        </div>
        <div class="container">
                <div class=" col-xl-9 col-lg-9  col-md-9 col-sm-12 mx-auto m-5">
                        <div class="card mt-3 mb-3 shadow-lg text-center p-3">

                            <h1 class="text-center mb-5 font-weight-bolder mt-2">Register<i
                                    class="fas fa-clipboard custom-secondary-text ml-3"></i></h1>
                                    <div class="card-body px-lg-5 pt-0 ">
 
                                    <form id="app_form" class="text-center" action="{{route('register')}}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                            <div class="md-form">
                                                <input id="fullname" name="fullname" type="text"
                                                    class="validate form-control" required>
                                                <label for="fullname">{{ __('Full name') }}</label>
                                            </div>

                                            <div class="md-form">
                                                <input id="email" name="email" type="email"
                                                    class="validate form-control" required>
                                                <label for="email">{{ __('E-mail') }}</label>
                                            </div>

                                            <div class="md-form">
                                                <input id="nationality" name="nationality" type="text"
                                                    class="validate form-control" required>
                                                <label for="nationality">{{ __('Nationality')}}</label>
                                            </div>

                                            <div class="md-form">
                                                <select class="mdb-select" name="city" required>
                                                    <option value="" disabled selected>City</option>
                                                    <option value="Al Hasakah">Al Hasakah</option>
                                                    <option value="Al Ladhiqiyah">Al Ladhiqiyah</option>
                                                    <option value="Al Qunaytirah">Al Qunaytirah</option>
                                                    <option value="Ar Raqqah">Ar Raqqah</option>
                                                    <option value="As Suwayda'">As Suwayda'</option>
                                                    <option value="Dar'a">Dar'a</option>
                                                    <option value="Dayr az Zawr">Dayr az Zawr</option>
                                                    <option value="Dimashq">Dimashq</option>
                                                    <option value="Halab">Halab</option>
                                                    <option value="Hamah">Hamah</option>
                                                    <option value="Hims">Hims</option>
                                                    <option value="Idlib">Idlib</option>
                                                    <option value="Rif Dimashq">Rif Dimashq</option>
                                                    <option value="Tartus">Tartus</option>
                                                </select>
                                            </div>

                                            <div class="md-form">
                                                <input id="company-name" name="company_name" type="text"
                                                    class="validate form-control" required>
                                                <label for="company-name">{{ __('Shipping Company Name') }}</label>
                                            </div>

                                            <div class="md-form">
                                                <input id="regist-num" name="commercial_registry" type="text"
                                                    class="validate form-control" required>
                                                <label for="regist-num">{{ __('Commercial Registration Number') }}</label>
                                            </div>

                                            <div class="md-form text-left">
                                                <input id="mobile" type="tel" class="validate form-control" name="mobile" placeholder="Mobile: (201) 555-0123"
                                                    required>
                                                <span id="valid-msg2" class="hide">✓</span>
                                                <span id="error-msg2" class="hide"></span>
                                            </div>
        
                                            <div class="md-form text-left">
                                                <input id="phone" type="tel" class="validate form-control" placeholder="Phone: (201) 555-0123"
                                                    name="phone" required>
                                                <span id="valid-msg1" class="hide">✓</span>
                                                <span id="error-msg1" class="hide"></span>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <button class="waves-effect waves-dark btn-large btn btn-amber m-0 mt-4"
                                                    type="submit">{{ __('SUBMIT') }}</button>
                                            </div>
                                    </form>

  
                        </div>
                        </div>
                </div>

        </div>
        <div class="view jarallax">
            <img class="jarallax-img" src={{url('img/7.jpg')}} alt="">
            <div class="mask rgba-black-slight">
            </div>
        </div>
        @include('partials.footer')
    </main>
    <!--Main Layout-->






    <script type="text/javascript"
        src={{url("http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js")}}></script>
    <script type="text/javascript"
        src={{url("http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js")}}></script>
    <script src={{url("js/validate.js")}}></script>
    <script src={{url("js/intlTelInput.js")}}></script>


    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').materialSelect();
            $('.select-dropdown').click(function(){
                $('.select-dropdown').css('color','#495057');
            })
        });

    </script>

    <script>
        // object-fit polyfill run
        objectFitImages();

        /* init Jarallax */
        jarallax(document.querySelectorAll('.jarallax'));

        jarallax(document.querySelectorAll('.jarallax-keep-img'), {
            keepImg: true,
        });

    </script>

    <script>
        $(document).ready(function () {
            $(function () {
                // Initialize form validation on the registration form.
                // It has the name attribute "app_form"
                $("#app_form").validate({
                    // Specify validation rules
                    rules: {
                        // The key name on the left side is the name attribute
                        // of an input field. Validation rules are defined
                        // on the right side

                        fullname:
                        {
                            required: true,
                            lettersonly:true
                        },

                        nationality:
                        {
                            required:true,
                            lettersonly:true
                        },

                        company_name:
                        {
                            required:true,
                            lettersonly:true
                        },

                        commercial_registry: {
                            required: true,
                            digits: true,
                            minlength: 4,
                            maxlength:10
                        }
                    },




                    // Specify validation error messages
                    messages: {
                        minlength: "Please enter at least 4 characters"
                    },


                    // Make sure the form is submitted to the destination defined
                    // in the "action" attribute of the form when valid
                    submitHandler: function (form) {
                        form.submit();
                    }
                });
            });


            /**
             * Custom validator for contains at least one upper-case letter.
             */

            /**
             * Custom validator for contains at least one number.
             */
            $.validator.addMethod("atLeastOneNumber", function (value, element) {
                return this.optional(element) || /[0-9]+/.test(value);
            }, "Must have at least one number");

            $.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
            }, "Please enter letters only"); 

            /**
             * Custom validator for contains at least one symbol.
             */
            $.validator.addClassRules({
                lettersonly : { lettersonly : true }
            });
        });

    </script>

    <script>
        $(document).ready(function () {


            var input1 = document.querySelector("#phone"),
                input2 = document.querySelector("#mobile"),
                errorMsg1 = document.querySelector("#error-msg1"),
                errorMsg2 = document.querySelector("#error-msg2"),
                validMsg1 = document.querySelector("#valid-msg1"),
                validMsg2 = document.querySelector("#valid-msg2");
            var flag = false;
            // here, the index maps to the error code returned from getValidationError - see readme
            var errorMap1 = ["Invalid number", "Invalid country code", "Too short", "Too long",
                "Invalid number"
            ];

            var errorMap2 = ["Invalid number", "Invalid country code", "Too short", "Too long",
                "Invalid number"
            ];


            // initialise plugin
            var iti1 = window.intlTelInput(input1, {
                utilsScript: '{{url("js/utils.js")}}',
            });

            var iti2 = window.intlTelInput(input2, {
                utilsScript: '{{url("js/utils.js")}}',
            });

            var reset1 = function () {
                input1.classList.remove("error");

                errorMsg1.classList.add("hide");
                validMsg1.classList.add("hide");

            };

            var reset2 = function () {
                input2.classList.remove("error");

                errorMsg2.classList.add("hide");
                validMsg2.classList.add("hide");

            };

            // on blur: validate
            input1.addEventListener('blur', function () {
                reset1();
                if (input1.value.trim()) {
                    if (iti1.isValidNumber()) {
                        validMsg1.classList.remove("hide");
                    } else {
                        input1.classList.add("error");
                        var errorCode1 = iti1.getValidationError();
                        $('#phone').val(errorMap1[errorCode1]);
                        errorMsg1.classList.remove("hide");

                    }
                }
            });

            // on blur: validate
            input2.addEventListener('blur', function () {
                reset2();
                if (input2.value.trim()) {
                    if (iti2.isValidNumber()) {
                        validMsg2.classList.remove("hide");
                    } else {
                        input2.classList.add("error");
                        var errorCode2 = iti2.getValidationError();
                        $('#mobile').val(errorMap2[errorCode2]);
                        errorMsg2.classList.remove("hide");

                    }
                }
            });


            // // on keyup / change flag: reset
            // input1.addEventListener('change', reset);
            // input1.addEventListener('keyup', reset);
            // new WOW().init();


            // // on keyup / change flag: reset
            // input2.addEventListener('change', reset);
            // input2.addEventListener('keyup', reset);
            // new WOW().init();

        });

    </script>

</body>

</html>

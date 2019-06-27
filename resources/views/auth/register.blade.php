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
            text-align: left;
            margin-top: -20px
        }

        .md-form label{
            color: #212529;
            font-weight: bold;
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

                        <form id="app_form" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="md-form">
                                <input id="fullname" name="fullname" type="text" class="validate form-control" required>
                                <label for="fullname">{{ __('Full name') }}</label>
                            </div>

                            <div class="md-form">
                                <input id="email" name="email" type="email" class="validate form-control" required>
                                <label for="email">{{ __('E-mail') }}</label>
                            </div>

                            <div class="md-form">
                                <input id="nationality" name="nationality" type="text" class="validate form-control"
                                    required>
                                <label for="nationality">{{ __('Nationality')}}</label>
                            </div>

                            <div class="md-form">
                                <select class="mdb-select md-form" id="country" name="country" required></select>
                            </div>
                            <div class="md-form">
                                <select disabled class="mdb-select md-form" name="city" id="state" required></select>
                            </div>

                            <div class="md-form">
                                <input id="address" name="address" type="text" class="validate form-control">
                                <label for="address">{{ __('Address') }}</label>
                            </div>

                            <div class="md-form">
                                <input id="company-name" name="company_name" type="text" class="validate form-control"
                                    required>
                                <label for="company-name">{{ __('Shipping Company Name') }}</label>
                            </div>

                            <div class="md-form">
                                <input id="regist-num" name="commercial_registry" type="text"
                                    class="validate form-control" required>
                                <label for="regist-num">{{ __('Commercial Registration Number') }}</label>
                            </div>

                            <div class="md-form text-left">

                                <input type="text" id="mobile" type="tel" class="form-control" name="tel1" placeholder="Mobile: (201) 555-0123">
                                <span id="valid-msg2" class="hide">✓</span>
                                <span id="error-msg2" class="hide"></span>
                            </div>


                            <div class="md-form text-left">

                                <input type="text" id="phone" type="tel" class="form-control" name="tel2" placeholder="Phone: (201) 555-0123">
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






    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js">
    </script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/intlTelInput.js"></script>
    <script src="js/countries.js"></script>

    <script>
        populateCountries("country",
        "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
        var input1 = document.querySelector("#phone");
        var input2 = document.querySelector("#mobile");
        window.intlTelInput(input1, {
            utilsScript: "js/utils.js",
        });
        window.intlTelInput(input2, {
            utilsScript: "js/utils.js",
        });
    </script>

    <script>
        // Data Picker Initialization
        $('.datepicker').pickadate();
        $('#app_form').load(function (e) {
            e.preventDefault();
        });
        $('#app_form').submit(function (e) {
            e.preventDefault();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{ route('register')}} ',
                dataType: 'json', // data type
                data: new FormData(this),
                processData: false,
                contentType: false,
                statusCode: {
                    200: function () {
                        toastr.success('Registered!');
                    }

                },
                error: function (xhr, textStatus, errorThrown) {
                    var string = xhr.responseText;
                    var obj = JSON.parse(string);
                    toastr.error(obj.message);
                }
            });

        });
    </script>

    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').materialSelect();
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

                        commercial_registry: {
                            required: true,
                            digits: true,
                            minlength: 4
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

            /**
             * Custom validator for contains at least one symbol.
             */

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
                    "Invalid number"];

                    var errorMap2 = ["Invalid number", "Invalid country code", "Too short", "Too long",
                    "Invalid number"];




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


                    // on keyup / change flag: reset
                    input1.addEventListener('change', reset);
                    input1.addEventListener('keyup', reset);
                    new WOW().init();

                    
                    // on keyup / change flag: reset
                    input2.addEventListener('change', reset);
                    input2.addEventListener('keyup', reset);
                    new WOW().init();

                });
    </script>

</body>

</html>
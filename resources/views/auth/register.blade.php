<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <title>Register</title>
    <link rel="stylesheet" href={{url("css/intlTelInput.css")}}>
    <style>
        @media only screen and (min-width: 993px) {
            ul.stepper.horizontal .step-title {
                padding: 0 1.5625rem 0 3.5rem !important;
                white-space: normal !important;
            }
        }


        .mt-5 {
            margin-top: 6rem !important;
        }

        ul.stepper .step.active:before {
            background-color: #ffc107 !important;
        }

        ul.stepper.horizontal .step.active .step-title:before {
            background-color: #ffc107 !important;
        }

        ul.stepper.horizontal .step-actions {
            position: relative !important;
        }

        .hide {
            display: none;
        }

        form .error {
            color: red;

        }

        .intl-tel-input {
            width: 93% !important;
            position: relative;
            display: inline-block;
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
            <!--Grid row-->
            <div class="row mb-5 mt-5 p-3">

                <!--Grid column-->
                <div class="col-md-12">
                    <form id="app_form" action="{{ route('register')}} " enctype="multipart/form-data" method="POST">
                        <div class="card p-5 mt-3 mb-3 shadow-lg">
                            <h1 class="text-center mb-5 font-weight-bolder">Register<i
                                    class="fas fa-clipboard custom-secondary-text ml-3"></i></h1>
                            <ul class="stepper horizontal" id="horizontal-stepper" style="height:1560px;">
                                <li class="step active">
                                    <div id="step1" class="step-title waves-effect waves-dark">Step 1</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Personal Information <i
                                                class="fas fa-user m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="fullname" name="fullname" type="text"
                                                    class="validate form-control" required>
                                                <label for="fullname">{{ __('Full name') }}</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="father" name="father" type="text"
                                                    class="validate form-control" required>
                                                <label for="father">{{ __("Father's name") }}</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="mother" name="mother" type="text"
                                                    class="validate form-control" required>
                                                <label for="mother">{{ __("Mother's name") }}</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input id="email" name="email" type="email"
                                                    class="validate form-control" required>
                                                <label for="email">{{ __('E-mail') }}</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input placeholder="Date of Birth" name="date_of_birth" type="text"
                                                    id="date-picker-example" class="form-control datepicker" required>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="place-of-birth" name="place_of_birth" type="text"
                                                    class="validate form-control" required>
                                                <label for="place-of-birth">Place of Birth</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="record" name="record" type="text"
                                                    class="validate form-control" required>
                                                <label for="record">Individual Civil Registry Record</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="nationality" name="nationality" type="text"
                                                    class="validate form-control" required>
                                                <label for="nationality">Nationality</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="address" name="address" type="text"
                                                    class="validate form-control" required>
                                                <label for="address">Address</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input type="text" id="phone" type="tel" class="validate form-control"
                                                    name="phone" required>
                                                <span id="valid-msg" class="hide">✓</span>
                                                <span id="error-msg" class="hide"></span>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input type="text" id="mobile" type="tel" class="validate form-control"
                                                    name="mobile" required>
                                                <span id="valid-msg" class="hide">✓</span>
                                                <span id="error-msg" class="hide"></span>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="website" name="website" type="text"
                                                    class="validate form-control" required>
                                                <label for="website">Website</label>
                                            </div>
                                        </div>
                                        <div class="step-actions d-flex justify-content-center">
                                            <button type="submit"
                                                class="waves-effect waves-dark btn btn-large btn-amber next-step"
                                                data-feedback="someFunction21">CONTINUE</button>
                                        </div>
                                    </div>

                                </li>
                                <li class="step">
                                    <div id="step2" class="step-title waves-effect waves-dark">Step 2</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Shipping Company Information <i
                                                class="fas fa-briefcase m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="company-name" name="company_name" type="text"
                                                    class="validate form-control" required>
                                                <label for="company-name">Shipping Company Name</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <textarea id="branches-address" name="branches_address"
                                                    class="md-textarea form-control " required rows="3"></textarea>
                                                <label for="branches-address">Addresses of Branches</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="type" name="shipping_services" type="text"
                                                    class="validate form-control" required>
                                                <label for="type">Type of Shipping Service Provided</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="position" name="position_title" type="text"
                                                    class="validate form-control" required>
                                                <label for="position">Workplace Position</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="chamber" name="chamber_of_commerce" type="text"
                                                    class="validate form-control" required>
                                                <label for="chamber">Chamber of Commerce</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="regist-num" name="commercial_registry" type="text"
                                                    class="validate form-control" required>
                                                <label for="regist-num">Commercial Registration Number</label>
                                            </div>
                                        </div>
                                        <div class="step-actions d-flex justify-content-center">
                                            <button class="waves-effect waves-dark btn btn-large btn-amber next-step"
                                                data-feedback="someFunction21">CONTINUE</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step3" class="step-title waves-effect waves-dark">Step 3</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Shipping Services Information <i
                                                class="fas fa-info-circle m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <h6 class="font-weight-bold">Available Shipping Methods:</h6>
                                                <div class="custom-control custom-checkbox ml-4">
                                                    <input type="checkbox" class="custom-control-input" id="method1"
                                                        name="shipping_methods[]" value="LTL">
                                                    <label class="custom-control-label" for="method1">Less Than Track
                                                        Load(LTL)</label>
                                                </div>
                                                <div class="custom-control custom-checkbox ml-4">
                                                    <input type="checkbox" class="custom-control-input" id="method2"
                                                        name="shipping_methods[]" value="FTL">
                                                    <label class="custom-control-label" for="method2">Full Track
                                                        Load(FTL)</label>
                                                </div>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <h6 class="font-weight-bold">External Shipping Modes:</h6>
                                                <div class="custom-control custom-checkbox ml-4">

                                                    <input type="checkbox" class="custom-control-input" id="mode1"
                                                        name="shipping_modes[]" value="Wild">
                                                    <label class="custom-control-label" for="mode1">Land
                                                        Transport</label>
                                                </div>
                                                <div class="custom-control custom-checkbox ml-4">
                                                    <input type="checkbox" class="custom-control-input" id="mode2"
                                                        name="shipping_modes[]" value="Aerial">
                                                    <label class="custom-control-label" for="mode2">Air
                                                        Transport</label>
                                                </div>
                                                <div class="custom-control custom-checkbox ml-4">
                                                    <input type="checkbox" class="custom-control-input" id="mode3"
                                                        name="shipping_modes[]" value="Nautical">
                                                    <label class="custom-control-label" for="mode3">Water
                                                        Transport</label>
                                                </div>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="src-dest" name="src_dest" type="text"
                                                    class="validate form-control" required>
                                                <label for="src-dest">Sources and Destinations Served By the Shipping
                                                    Company</label>
                                            </div>
                                        </div>
                                        <div class="step-actions d-flex justify-content-center">
                                            <button class="waves-effect waves-dark btn btn-large btn-amber next-step"
                                                data-feedback="someFunction21">CONTINUE</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step4" class="step-title waves-effect waves-dark">Step 4</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Financial Information <i
                                                class="fas fa-money-check-alt m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="financial-status" name="financial_status" type="text"
                                                    class="validate form-control" required>
                                                <label for="financial-status">Financial Assignment Status</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">

                                                <div class="file-field">
                                                    <h6>Photo of the Financial Assignment:</h6>
                                                    <div class="btn btn-elegant btn-sm float-left">
                                                        <span>Choose file</span>
                                                        <input id="financial_photo" type="file" name="financial_photo"
                                                            accept="image/*"
                                                            onchange="document.getElementById('financial').src = window.URL.createObjectURL(this.files[0])">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="financial-photo" class="file-path validate"
                                                            type="text" placeholder="Upload your file">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <img id="financial" src="" alt=""
                                                    style="min-height:200px; max-height:400px; min-width:200px; max-width:400px" />
                                            </div>
                                            <div class="step-actions d-flex justify-content-center">
                                                <button
                                                    class="waves-effect waves-dark btn btn-large btn-amber next-step"
                                                    data-feedback="someFunction21">CONTINUE</button>
                                            </div>
                                        </div>
                                </li>
                                <li class="step">
                                    <div id="step5" class="step-title waves-effect waves-dark">Step 5</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Application Information <i
                                                class="fas fa-edit ml-1"></i></h5>
                                        <div class="row">

                                            <div class="md-form col-12 ml-auto">

                                                <div class="file-field">
                                                    <h6>Photo of Signature and Fingerprint:</h6>
                                                    <div class="btn btn-elegant btn-sm float-left">
                                                        <span>Choose file</span>
                                                        <input id="signature_photo" type="file" name="signature_photo"
                                                            accept="image/*"
                                                            onchange="document.getElementById('signature').src = window.URL.createObjectURL(this.files[0])">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="signature-photo" class="file-path validate"
                                                            type="text" placeholder="Upload your file">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <img id="signature" src="" alt=""
                                                    style="min-height:200px; max-height:400px; min-width:200px; max-width:400px" />
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input placeholder="Date of Application" name="date_of_application"
                                                    type="text" id="date-picker-example2"
                                                    class="form-control datepicker">
                                            </div>
                                            <div class="step-actions d-flex justify-content-center">
                                                <button
                                                    class="waves-effect waves-dark btn btn-large btn-amber next-step"
                                                    data-feedback="someFunction21">CONTINUE</button>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step6" class="step-title waves-effect waves-dark">Step 6</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Resume Information <i
                                                class="fas fa-user-edit ml-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <textarea id="resume-info" name="resume_info"
                                                    class="md-textarea form-control" rows="3"></textarea>
                                                <label for="resume-info">Resume Information (As Mentioned in the
                                                    Application
                                                    Document)</label>
                                            </div>
                                            <div class="step-actions d-flex justify-content-center">
                                                <button
                                                    class="waves-effect waves-dark btn btn-large btn-amber next-step"
                                                    data-feedback="someFunction21">CONTINUE</button>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step7" class="step-title waves-effect waves-dark">Step 7</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Hard Copy <i
                                                class="far fa-clipboard m-1"></i>
                                        </h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <div class="file-field">
                                                    <h6>Hard Copy of the Application Form:</h6>
                                                    <div class="btn btn-elegant btn-sm float-left">
                                                        <span>Choose file</span>
                                                        <input id="application_photo" type="file" name="hard_copy"
                                                            onchange="document.getElementById('application').src = window.URL.createObjectURL(this.files[0])">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="hard-copy" class="file-path validate" type="text"
                                                            placeholder="Upload your file">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <img id="application" src="" alt=""
                                                    style="min-height:200px; max-height:400px; min-width:200px; max-width:400px" />
                                            </div>
                                            <div class="step-actions d-flex justify-content-center">
                                                <button class="waves-effect waves-dark btn-large btn btn-amber m-0 mt-4"
                                                    type="submit">SUBMIT</button>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </form>
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
        $(document).ready(function () {
            $('.stepper').mdbStepper();
        })

        function someFunction21() {
            setTimeout(function () {
                $('#horizontal-stepper').nextStep();
            }, 2000);
        }

        // Data Picker Initialization
        $('.datepicker').pickadate();

        //ajax 

        // var test = JSON.stringify(jQuery('#app_form').serializeArray());
        // var dataa = JSON.parse(test);
        // var formData = new FormData();
        // $.each(dataa, function (key, el) {
        //     formData.append(el.name, el.value);
        // });

        // $.ajax({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     },
        //     type: 'POST',
        //     url: $(app_form).attr('action'),
        //     enctype: 'multipart/form-data',
        //     dataType : 'json', // data type
        //     data :new FormData(this) , // post data || get data
        //     statusCode: {
        //         401: function () {
        //             window.location = '/login';
        //         },
        //         500: function () {
        //             alert('500 status code! server error');
        //         },
        //         200: function (msg) {
        //             alert("sucess");
        //         },
        //     },

        // });


        $('#app_form').submit(function (e) {
            e.preventDefault();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: $(this).attr('action'),
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

                        chamber_of_commerce: {
                            required: true,
                            digits: true,
                            minlength: 4
                        },
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

            var input_selector = 'input[type=tel]';
            $(input_selector).each(function (index, element) {
                if (true) {
                    $(this).siblings('label').addClass('active');
                } else {
                    $(this).siblings('label').removeClass('active');
                }
            });
        });
        var input1 = document.querySelector("#phone"),
            input2 = document.querySelector("#mobile"),
            errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");
        var flag = false;
        // here, the index maps to the error code returned from getValidationError - see readme
        var errorMap = ["Invalid number", "Too short", "Too long",
            "Invalid number"
        ];

        // initialise plugin
        var iti1 = window.intlTelInput(input1, {
            utilsScript: '{{url("js/utils.js")}}',
        });

        var iti2 = window.intlTelInput(input2, {
            utilsScript: '{{url("js/utils.js")}}',
        });


        var reset = function () {
            input1.classList.remove("error");

            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");

        };

        var reset = function () {
            input2.classList.remove("error");

            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");

        };

        // on blur: validate
        input1.addEventListener('blur', function () {
            reset();
            if (input1.value.trim()) {
                if (iti1.isValidNumber()) {
                    validMsg.classList.remove("hide");
                } else {
                    input1.classList.add("error");
                    var errorCode = iti1.getValidationError();
                    $('#phone').val(errorMap[errorCode]);
                    errorMsg.classList.remove("hide");

                }
            }
        });

        input2.addEventListener('blur', function () {
            reset();
            if (input2.value.trim()) {
                if (iti2.isValidNumber()) {
                    validMsg.classList.remove("hide");
                } else {
                    input2.classList.add("error");
                    var errorCode = iti2.getValidationError();
                    $('#mobile').val(errorMap[errorCode]);
                    errorMsg.classList.remove("hide");

                }
            }
        });


        // on keyup / change flag: reset
        input1.addEventListener('change', reset);
        input1.addEventListener('keyup', reset);
        new WOW().init();

        input2.addEventListener('change', reset);
        input2.addEventListener('keyup', reset);
        new WOW().init();

    </script>




</body>

</html>

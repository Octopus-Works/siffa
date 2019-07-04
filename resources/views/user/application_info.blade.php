<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Edit Application</title>
    <link rel="stylesheet" href={{url("css/intlTelInput.css")}}>
    <style>
        .mt-5 {
            margin-top: 6rem !important;
        }

        ul.stepper .step.active:before {
            background-color: #ffc107 !important;
        }

        ul.stepper.horizontal .step.active .step-title:before {
            background-color: #ffc107 !important;
        }

        ul.stepper .step.done:before,
        ul.stepper .step.wrong:before {
            font-family: 'Font Awesome 5 free';
            font-weight: 900;
            background-color: #ff3547!important;
        }

        ul.stepper .step.done:before {
            font-size: 1rem;
            background-color: #00c851;
        }

        ul.stepper .step.wrong:before {
            font-family: 'Font Awesome 5 Free' !important;
            font-weight: 900!important;
            font-size: 1rem;
            background-color: #ff3547!important;
        }

        @media only screen and (min-width: 993px) {
            ul.stepper.horizontal .step.done .step-title:before {
                font-family: 'Font Awesome 5 Free';
                font-weight: 900;
                font-size: 1rem;
                background-color: #00c851 !important;
            }
        }

        @media only screen and (min-width: 993px) {
            ul.stepper.horizontal .step.wrong .step-title:before {
                font-family: 'Font Awesome 5 Free' !important;
                font-weight: 900!important;
                background-color: #ff3547!important;
            }
        }

        .md-form label {
            color: #b7b9bd !important;
        }

        .form-control{
            color:#fff;
        }

        ul.stepper.horizontal .step .step-title:before {
            background-color: #868788 !important;
        }

        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form textarea.md-textarea:focus:not([readonly])+label {
            color: #5f96ce !important;
        }



        .custom-control-label::before {
            background-color: #ffffff00 !important;
        } 

        .hide {
            display: none;
        }

        form .error {
            color: red;

        }

        #mobile-error,
        #phone-error,
        .initialized {
            margin-top: 0 !important
        }

        .intl-tel-input .flag-container {
            top: -15px !important;
        }

        .intl-tel-input {
            width: 93% !important;
            position: relative;
            display: inline-block;
        }

        .custom-control-label::after {
            cursor: pointer;
        }

        .btn-rounded{
            padding: .60rem 1.4rem!important;
        }

        .select-dropdown, .select-wrapper span.caret{
            color:#b7b9bd;
        }

        .form-control:focus{
            color:#fff;
        }

        .picker__box .picker__header .picker__date-display {
            background-color: #7b8290;
        }

        .picker__box .picker__header .picker__date-display .picker__weekday-display {
            background-color: #444b58;
        }


        @media only screen and (max-width: 993px) {
            .btn-rounded {
                padding: .60rem 0.8rem!important;
            }

            .btn.btn-sm{
                font-size:.57rem!important;
            }

            .intl-tel-input.allow-dropdown input, .intl-tel-input.allow-dropdown input[type=text]{
                width: 80%!important
            }
        }

        .country{
            color:#444b58!important;
        }

        .intl-tel-input .selected-flag .iti-arrow {
            border-top: 4px solid #fff;
        }

        @media only screen and (min-width: 993px) {
            .card{
                padding:3.5rem!important;
            }
        }

        ul.stepper .step:before {
            background-color: #868788 
        }
        
        .card-img-top {
        width: 50%;
        height: 50%;
        padding: 10px;
        object-fit: cover;
    }
    

    </style>
</head>


<body class="fixed-sn custom-primary-transparent">

    <!--Main Navigation-->
    <header>
        @include('partials.nav_dashboard')
        @include('partials.user_sidebar')
    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main>

        <div class="container">
            <!--Grid row-->
            <div class="row mb-5 ">

                <!--Grid column-->
                <div class="col-md-12 ">
                   
                    <div class="card p-4  mt-3 mb-3 shadow-lg custom-primary">
                        <form id="app_form1" enctype="multipart/form-data" method="POST">
                            @csrf
                            <h1 class="text-center mb-5 font-weight-bolder">Register<i class="fas fa-clipboard amber-text ml-3"></i></h1>
                            <ul class="stepper horizontal" id="horizontal-stepper" style="height:1550px;">
                                <li class="step active">

                                    <div id="step1" class="step-title waves-effect waves-dark">Basic Information</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Basic Information <i
                                                class="fas fa-user m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="fullname" name="fullname" type="text"
                                                    value="{{$user->userdetail->fullname}}"
                                                    class="validate form-control" required>
                                                <label for="fullname">{{ __('Full name') }}</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="father" name="father" type="text"
                                                    value="{{$user->userdetail->father_name}}"
                                                    class="validate form-control">
                                                <label for="father">{{ __("Father's name") }}</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="mother" name="mother" type="text"
                                                    value="{{$user->userdetail->mother_name}}"
                                                    class="validate form-control">
                                                <label for="mother">{{ __("Mother's name") }}</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input id="email" name="email" type="email" value="{{$user->email}}"
                                                    class="validate form-control" required>
                                                <label for="email">{{ __('E-mail') }}</label>
                                            </div>


                                            <div class="md-form col-12 ml-auto">
                                                <input placeholder="Date of Birth" name="date_of_birth"
                                                    value="{{$user->userdetail->date_of_birth}}" type="text"
                                                    id="date-picker-example" class="form-control datepicker">
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="place-of-birth" name="place_of_birth"
                                                    value="{{$user->userdetail->place_of_birth}}" type="text"
                                                    class="validate form-control">
                                                <label for="place-of-birth">{{ __('Place of Birth') }}</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="record" name="record" value="{{$user->userdetail->record}}"
                                                    type="text" class="validate form-control">
                                                <label for="record">{{ __('Individual Civil Registry Record') }}</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="nationality" name="nationality"
                                                    value="{{$user->userdetail->nationality}}" type="text"
                                                    class="validate form-control">
                                                <label for="nationality">Nationality</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <select class="mdb-select" name="city">
                                                    <option value="{{$user->shippingOffice->city}}" disabled selected>City</option>
                                                    <option value="1">Al Hasakah</option>
                                                    <option value="2">Al Ladhiqiyah</option>
                                                    <option value="3">Al Qunaytirah</option>
                                                    <option value="4">Ar Raqqah</option>
                                                    <option value="5">As Suwayda'</option>
                                                    <option value="6">Dar'a</option>
                                                    <option value="7">Dayr az Zawr</option>
                                                    <option value="8">Dimashq</option>
                                                    <option value="9">Halab</option>
                                                    <option value="10">Hamah</option>
                                                    <option value="11">Hims</option>
                                                    <option value="12">Idlib</option>
                                                    <option value="13">Rif Dimashq</option>
                                                    <option value="14">Tartus</option>
                                                </select>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input id="address" name="address"
                                                    value="{{$user->userdetail->address}}" type="text"
                                                    class="validate form-control">
                                                <label for="address">Address</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input type="text" id="mobile" type="tel" class="validate form-control"
                                                    name="mobile" value="{{$user->userdetail->mobile_number}}" required>
                                                <span id="valid-msg2" class="hide">✓</span>
                                                <span id="error-msg2" class="hide"></span>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input type="text" id="phone" type="tel" class="validate form-control"
                                                    name="phone" value="{{$user->userdetail->phone_number}}" required>
                                                <span id="valid-msg1" class="hide">✓</span>
                                                <span id="error-msg1" class="hide"></span>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input id="website" name="website"
                                                    value="{{$user->userdetail->website}}" type="text"
                                                    class="validate form-control">
                                                <label for="website">Website</label>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <button type="submit" class="waves-effect waves-dark btn btn-sm btn-amber"  style="font-size: 11.96px" >Save Changes</button>
                                            <button class="waves-effect waves-dark btn btn-sm btn-rounded btn-grey next-step"><i class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>

                                </li>
                                <li class="step">
                            
                                    <div id="step2" class="step-title waves-effect waves-dark">Shipping Info</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Shipping Company Information <i class="fas fa-briefcase m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="company-name" name="company_name"
                                                    value="{{$user->shippingOffice->name}}" type="text"
                                                    class="validate form-control" required>
                                                <label for="company-name">Shipping Company Name</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input id="position" name="position_title"
                                                    value="{{$user->shippingOffice->position_title}}" type="text"
                                                    class="validate form-control" required>
                                                <label for="position">Workplace Position</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input id="chamber" name="chamber_of_commerce"
                                                    value="{{$user->shippingOffice->chamber_of_commerce}}" type="text"
                                                    class="validate form-control" required>
                                                <label for="chamber">Chamber of Commerce</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input id="regist-num" name="commercial_registry"
                                                    value="{{$user->shippingOffice->commercial_registry}}" type="text"
                                                    class="validate form-control" required>
                                                <label for="regist-num">Commercial Registration Number</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <h6 class="font-weight-bold">Available Shipping Methods:</h6>
                                                @php $chk1 = "" @endphp
                                                @php
                                                
                                                $chk1 = explode(" ",$user->shippingService->shipping_modes) @endphp
                                                <ul>
                                                    <div class="custom-control custom-checkbox p-2">
                                                        <input type="checkbox" name="shipping_modes[]" value="International" class="custom-control-input" id="method1"  data-toggle="collapse" data-target="#international"
                                                        aria-expanded="false" aria-controls="international"
                                                        @if(in_array("International", $chk1)) checked @endif>
                                                        <label class="custom-control-label" for="method1">International
                                                            Shipping</label>
                                                    </div>
                                                    <ul class="collapse" id="international">
                                                        <div class="custom-control custom-checkbox p-2">
                                                            <input type="checkbox" class="custom-control-input"  name="shipping_modes[]" value="LandTransport" 
                                                                id="method11" data-toggle="collapse" data-target="#land"
                                                                aria-expanded="false" aria-controls="land"  @if(in_array("LandTransport", $chk1)) checked @endif>
                                                            <label class="custom-control-label"
                                                                for="method11">LandTransport</label>
                                                        </div>
                                                            <ul class="collapse" id="land">
                                                                <div class="custom-control custom-checkbox p-2">
                                                                    <input type="checkbox" name="shipping_modes[]" value="ETL" class="custom-control-input"
                                                                    id="method111" @if(in_array("ETL", $chk1)) checked @endif>
                                                                    <label class="custom-control-label"
                                                                        for="method111">ETL</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox p-2">
                                                                    <input type="checkbox" name="shipping_modes[]" value="LTL" class="custom-control-input"
                                                                    id="method112" @if(in_array("LTL", $chk1)) checked @endif>
                                                                    <label class="custom-control-label"
                                                                        for="method112">LTL</label>
                                                                </div>
                                                            </ul>
    
    
    
                                                        <div class="custom-control custom-checkbox p-2">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="method12" data-toggle="collapse" data-target="#water"
                                                                aria-expanded="false" aria-controls="water" name="shipping_modes[]" value="WaterTransport"
                                                                @if(in_array("WaterTransport", $chk1)) checked @endif>
                                                            <label class="custom-control-label"
                                                                for="method12">WaterTransport</label>
                                                        </div>
                                                            <ul class="collapse" id="water">
                                                                <div class="custom-control custom-checkbox p-2">
                                                                    <input type="checkbox" name="shipping_modes[]" value="ECL" class="custom-control-input"
                                                                    id="method121" @if(in_array("ECL", $chk1)) checked @endif>
                                                                    <label class="custom-control-label"
                                                                        for="method121">ECL</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox p-2">
                                                                    <input type="checkbox" name="shipping_modes[]" value="LCL" class="custom-control-input"
                                                                    id="method122" @if(in_array("LCL", $chk1)) checked @endif>
                                                                    <label class="custom-control-label"
                                                                        for="method122">LCL</label>
                                                                </div>
                                                            </ul>
    
                                                            <div class="custom-control custom-checkbox p-2">
                                                                <input type="checkbox" name="shipping_modes[]" value="AirTransport" class="custom-control-input"
                                                                id="method13" @if(in_array("AirTransport", $chk1)) checked @endif>
                                                                <label class="custom-control-label"
                                                                    for="method13">AirTransport</label>
                                                            </div>
                                                        </ul>
    
                                                        <div class="custom-control custom-checkbox p-2">
                                                            <input type="checkbox" name="shipping_modes[]" value="National" class="custom-control-input" id="method2"
                                                            @if(in_array("National", $chk1)) checked @endif>
                                                            <label class="custom-control-label" for="method2">National
                                                                Shipping</label>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        <div class="mt-4 text-center">
                                            <button
                                                class="waves-effect waves-dark btn btn-sm btn-rounded btn-grey previous-step"><i class="fas fa-arrow-left"></i></button>
                                            <button type="submit" class="waves-effect waves-dark btn btn-sm btn-amber" style="font-size: 11.96px">Save Changes</button>
                                            <button
                                                class="waves-effect waves-dark btn btn-sm btn-rounded btn-grey next-step"><i class="fas fa-arrow-right"></i></button>
                                        </div>
                                    
                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step3" class="step-title waves-effect waves-dark">Hard Copy</div>
                    
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
                                                        onchange="loadFile(event)">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="hard-copy" class="file-path validate" type="text"
                                                            placeholder="Upload your file" style="color:white">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center mb-5">
                                            {{ $temp = ''}}
                                            @if ( isset($user->applicationdetail->images[0]->url))
                                            @php $temp = $user->applicationdetail->images[0]->url @endphp
                                            @endif
                                            <img id="application" src="{{ url($temp)}}" class="text-center" alt=""/>
                                        </div>
                                        <div class="mt-2 text-center">
                                            <button
                                                class="waves-effect waves-dark btn btn-sm btn-rounded btn-grey previous-step"><i class="fas fa-arrow-left"></i></button>
                                            <button type="submit" class="waves-effect waves-dark btn btn-sm btn-amber" style="font-size: 11.96px">Save Changes</button>
                                        </div>

                                    </div>
                                </li>

                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <!--Main Layout-->

    @include('partials.footer_dashboard')

    <script type="text/javascript"
        src={{url("http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js")}}></script>
    <script type="text/javascript"
        src={{url("http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js")}}></script>
    <script src={{url("js/validate.js")}}></script>
    <script src={{url("js/intlTelInput.js")}}></script>

    <script>
        var input1 = document.querySelector("#phone");
        var input2 = document.querySelector("#mobile");

    </script>


    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').materialSelect();
            $('.select-dropdown').click(function(){
                $('.select-dropdown').addClass('white-text');
            })
        });

    </script>

    <script>

        $('#app_form1').submit(function (e) {
            e.preventDefault();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                
                type: 'POST',
                url: '{{ route('application_edit')}}',
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

        $(document).ready(function () {
            $('.stepper').mdbStepper();
        })


        // Data Picker Initialization
        $('.datepicker').pickadate();
        $('.datepicker').pickadate({
            selectYears: 200
        })

    </script>

    <script>
        $(document).ready(function () {
            $(function () {
                // Initialize form validation on the registration form.
                // It has the name attribute "app_form"
                $("#app_form1").validate({
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

    <script>
        var loadFile = function (event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('application');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
            $('#application').addClass('card-img-top');
        };

    </script>



</body>

</html>

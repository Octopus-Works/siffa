<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head_ar')
    <title>Application Review</title>
    <style>
        @media only screen and (min-width: 993px) {
            ul.stepper.horizontal .step-title {
                padding: 0 1.5625rem 0 3.5rem !important;
                white-space: normal !important;
            }
        }

        @media only screen and (max-width: 993px) {
            #horizontal-stepper{
                height:600px!important;
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

        ul.stepper .step.done:before,
        ul.stepper .step.wrong:before {
            font-family: 'Font Awesome 5 free';
            font-weight: 900;
        }

        ul.stepper .step.done:before {
            font-family: 'Font Awesome 5 Free' !important;
            font-weight: 900!important;
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
            ul.stepper.horizontal .step .step-title:before {
                background-color: #868788 
            }
        }
        

        @media only screen and (min-width: 993px) {
            ul.stepper.horizontal .step.wrong .step-title:before {
                font-family: 'Font Awesome 5 Free' !important;
                font-weight: 900!important;
                background-color: #ff3547!important;
            }
        }

        ul.stepper .step:before {
            background-color: #868788 
        }


        .md-form label {
            color: #b7b9bd !important;
            top: 0rem !important;
        }

        .md-form input,
        .md-form textarea {
            color: #fff !important;
        }

        .custom-control-label::before{
            background-color:#ffffff00!important;
        }

        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form textarea.md-textarea:focus:not([readonly])+label {
            color: #3d5e9e !important;
        }

        input {
            width: 100% !important;
        }

        #application {
            max-width: 200px;
            max-height: 200px;
            margin-left: -50px;
        }

        @media only screen and (min-width: 993px) {
            #application {
                max-width: 50%;
                max-height: 50%;
                margin-left: 0;
            }
        }
        @media only screen and (min-width: 993px) {
            .card{
                padding:3.5rem!important;
            }
        }

    </style>
</head>


<body class="fixed-sn custom-primary-transparent">

    <!--Main Navigation-->
    <header>
        @include('partials.nav_dashboard')
        @include('partials.rms_sidebar')
    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main>


        <div class="container">
            <!--Grid row-->
            <div class="row mb-5">

                <!--Grid column-->
                <div class="col-md-12">
                    <div class="card p-4 mt-3 mb-3 shadow-lg custom-primary">
                        <div id="app_form">
                            <h2 class="text-center mb-5 font-weight-bolder">Application<i
                                    class="fas fa-clipboard custom-secondary-text ml-3"></i></h2>
                            <ul class="stepper horizontal" id="horizontal-stepper" style="height:1200px;">
                                <li class="step active">
                                    <div id="step1" class="step-title waves-effect waves-dark">Basic Information</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Basic Information <i
                                                class="fas fa-user m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="fullname" name="fullname" type="text" value="{{ $user->userdetail->fullname }}" disabled>
                                                <label for="fullname">{{ __('Full Name') }}</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="father" name="father" type="text" value="{{ $user->userdetail->father_name }}" disabled>
                                                <label for="father">{{ __("Father's Name") }}</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="mother" name="mother" type="text" value="{{ $user->userdetail->mother_name }}" disabled>
                                                <label for="mother">{{ __("Mother's Name") }}</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input id="email" name="email" type="email" value="{{ $user->email }}" disabled>
                                                <label for="email">عنوان البريد الإلكتروني</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input name="date_of_birth" type="text" value="{{ $user->userdetail->date_of_birth }}" disabled>
                                                <label for="date_of_birth">{{ __("تاريخ الميلاد") }}</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input id="place-of-birth" name="place_of_birth" type="text" value="{{ $user->userdetail->place_of_birth }}" disabled>
                                                <label for="place-of-birth">مكان الولادة</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="record" name="record" type="text" value="{{ $user->userdetail->record }}" disabled>
                                                <label for="record">Individual Civil Registry Record</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="nationality" name="nationality" type="text" value="{{ $user->userdetail->nationality }}" disabled>
                                                <label for="nationality">الجنسية</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="city" name="city" type="text" value="{{$user->shippingOffice->city}}" disabled>
                                                <label for="city">City</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="address" name="address" type="text" value="{{ $user->userdetail->address }}" disabled>
                                                <label for="address">Address</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="phonenumber" name="phone_number" type="text" value="{{ $user->userdetail->phone_number }}" disabled>
                                                <label for="phonenumber">Phone Number</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="mobilenumber" name="mobile_number" type="text" value="{{ $user->userdetail->mobile_number }}" disabled>
                                                <label for="mobilenumber">Mobile Number</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="website" name="website" type="text" value="{{ $user->userdetail->website }}" disabled>
                                                <label for="website">الموقع</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button class="waves-effect waves-dark btn custom-secondary next-step">NEXT</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step2" class="step-title waves-effect waves-dark">Shipping Info</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Shipping Company Information <i class="fas fa-briefcase m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="company-name" name="company_name" type="text" value="{{$user->shippingOffice->name}}" disabled>
                                                <label for="company-name">Shipping Company Name</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="position" name="position_title" type="text" value="{{$user->shippingOffice->position_title}}" disabled>
                                                <label for="position">Workplace Position</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="chamber" name="chamber_of_commerce" type="text" value="{{$user->shippingOffice->chamber_of_commerce}}" disabled>
                                                <label for="chamber">Chamber of Commerce</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="regist-num" name="commercial_registry" type="text" value="{{$user->shippingOffice->commercial_registry}}" disabled>
                                                <label for="regist-num">Commercial Registration Number</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <h6 class="font-weight-bold">Available Shipping Methods:</h6>
                                                @php $chk1 = "" @endphp
                                                @php
                                                
                                                $chk1 = explode(" ",$user->shippingService->shipping_modes) @endphp
                                                <ul>
                                                    <div class="custom-control custom-checkbox p-2">
                                                        <input type="checkbox" name="shipping_modes[]" value="International" class="custom-control-input" id="method1" 
                                                        @if(in_array("International", $chk1)) checked @endif disabled>
                                                        <label class="custom-control-label" for="method1">International
                                                            Shipping</label>
                                                    </div>
                                                    <ul id="international">
                                                        <div class="custom-control custom-checkbox p-2">
                                                            <input type="checkbox" class="custom-control-input"  name="shipping_modes[]" value="LandTransport" 
                                                                id="method11"  @if(in_array("LandTransport", $chk1)) checked @endif disabled>
                                                                <label class="custom-control-label"
                                                                for="method11">LandTransport</label>
                                                        </div>
                                                            <ul id="land">
                                                                <div class="custom-control custom-checkbox p-2">
                                                                    <input type="checkbox" name="shipping_modes[]" value="ETL" class="custom-control-input"
                                                                    id="method111" @if(in_array("ETL", $chk1)) checked @endif disabled>
                                                                    <label class="custom-control-label"
                                                                        for="method111">ETL</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox p-2">
                                                                    <input type="checkbox" name="shipping_modes[]" value="LTL" class="custom-control-input"
                                                                    id="method112" @if(in_array("LTL", $chk1)) checked @endif disabled>
                                                                    <label class="custom-control-label"
                                                                        for="method112">LTL</label>
                                                                </div>
                                                            </ul>
    
    
                                                        <div class="custom-control custom-checkbox p-2">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="method12"  name="shipping_modes[]" value="WaterTransport"
                                                                @if(in_array("WaterTransport", $chk1)) checked @endif disabled>
                                                                <label class="custom-control-label"
                                                                for="method12">WaterTransport</label>
                                                        </div>
                                                            <ul id="water">
                                                                <div class="custom-control custom-checkbox p-2">
                                                                    <input type="checkbox" name="shipping_modes[]" value="ECL" class="custom-control-input"
                                                                    id="method121" @if(in_array("ECL", $chk1)) checked @endif disabled>
                                                                    <label class="custom-control-label"
                                                                        for="method121">ECL</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox p-2">
                                                                    <input type="checkbox" name="shipping_modes[]" value="LCL" class="custom-control-input"
                                                                    id="method122" @if(in_array("LCL", $chk1)) checked @endif disabled>
                                                                    <label class="custom-control-label"
                                                                    for="method122">LCL</label>
                                                                </div>
                                                            </ul>
    
                                                            <div class="custom-control custom-checkbox p-2">
                                                                <input type="checkbox" name="shipping_modes[]" value="AirTransport" class="custom-control-input"
                                                                id="method13" @if(in_array("AirTransport", $chk1)) checked @endif disabled>
                                                                <label class="custom-control-label"
                                                                    for="method13">AirTransport</label>
                                                            </div>
                                                        </ul>
    
                                                        <div class="custom-control custom-checkbox p-2">
                                                            <input type="checkbox" name="shipping_modes[]" value="National" class="custom-control-input" id="method2"
                                                            @if(in_array("National", $chk1)) checked @endif disabled>
                                                            <label class="custom-control-label" for="method2">National
                                                                Shipping</label>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=" d-flex justify-content-center">
                                                <button class="waves-effect waves-dark btn custom-secondary next-step">NEXT</button>
                                            </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step3" class="step-title waves-effect waves-dark">Hard Copy</div>
                    
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Hard Copy <i
                                                class="far fa-clipboard m-1"></i>
                                        </h5>
                                        <h6>Hard Copy of the Application Form:</h6>
                                        <div class="col-md-12 text-center mb-5">
                                            @if ( isset($image))
                                                <img id="application" src="{{ url($image->url)}}" class="text-center" alt=""/>
                                            @endif
                                        </div>
                                        <div class="d-flex justify-content-center col-md-12">
                                            <div>
                                                <button id='state' type="button" class="btn btn-success btn-rounded px-2">Approve Application </a></button>
                                            </div>
                                            <div>
                                                <button id ='state2' type="button" class="btn btn-danger btn-rounded  px-2">Decline Application </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!--Main Layout-->


    @include('partials.footer_dashboard')
    
    <script>
        $("#state").click(function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '/rms/application/{{$id}}/approved',
                contentType: "application/json;",
                dataType: "json",
                statusCode: {
                    200: function (msg) {
                        console.log("Success");
                        window.location = '/rms/application/' + '{{ $id }}';
                    },
                },
            });
        });
    </script>

    <script>
        $("#state2").click(function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '/rms/application/{{$id}}/rejected',
                contentType: "application/json;",
                dataType: "json",
                statusCode: {
                    200: function (msg) {
                        console.log("Success");
                        window.location = '/rms/application/' + '{{ $id }}';
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

        $(document).ready(function () {
            $('.stepper').mdbStepper();
        })


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
                    401: function () {
                        window.location = '/login';
                    },
                    500: function () {
                        alert('500 status code! server error');
                    },
                    200: function (msg) {
                        console.log('heeere');
                        window.location = '/rms/application' + '{{ $user->id }}';
                    },
                },
            });
        });

    </script>




</body>

</html>

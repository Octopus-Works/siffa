<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <title>Application Review</title>
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

        ul.stepper.horizontal .step .step-title:before {
            background-color: #868788 !important;
        }

        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form textarea.md-textarea:focus:not([readonly])+label {
            color: #3d5e9e !important;
        }

        input {
            width: 100% !important;
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
            <div class="row mb-4 p-3">

                <!--Grid column-->
                <div class="col-md-12">
                    <div id="app_form">
                        <div class="card p-5 mt-3 mb-3 shadow-lg custom-primary">
                            <h1 class="text-center mb-5 font-weight-bolder">Application<i
                                    class="fas fa-clipboard custom-secondary-text ml-3"></i></h1>
                            <ul class="stepper horizontal" id="horizontal-stepper" style="height:1300px;">
                                <li class="step active">
                                    <div id="step1" class="step-title waves-effect waves-dark">Step 1</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Personal Information <i class="fas fa-user m-1"></i></h5>
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
                                                <label for="mother">{{ __("Father's Name") }}</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input id="email" name="email" type="email" value="{{ $user->email }}" disabled>
                                                <label for="email">{{ __('E-mail') }}</label>
                                            </div>

                                            <div class="md-form col-12 ml-auto">
                                                <input name="date_of_birth" type="text" value="{{ $user->userdetail->date_of_birth }}" disabled>
                                                <label for="date_of_birth">{{ __("Date of Birth") }}</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="place-of-birth" name="place_of_birth" type="text" value="{{ $user->userdetail->place_of_birth }}" disabled>
                                                <label for="place-of-birth">Place of Birth</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="record" name="record" type="text" value="{{ $user->userdetail->record }}" disabled>
                                                <label for="record">Individual Civil Registry Record</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="nationality" name="nationality" type="text" value="{{ $user->userdetail->nationality }}" disabled>
                                                <label for="nationality">Nationality</label>
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
                                                <label for="website">Website</label>
                                            </div>
                                        </div>
                                        <div class="step-actions d-flex justify-content-center">
                                            <button type="submit"
                                                class="waves-effect waves-dark btn btn-large btn-amber next-step" data-feedback="someFunction21">NEXT</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step2" class="step-title waves-effect waves-dark">Step 2</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Shipping Company Information <i class="fas fa-briefcase m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="company-name" name="company_name" type="text" value="{{$user->shippingOffice->name}}" disabled>
                                                <label for="company-name">Shipping Company Name</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <textarea id="branches-address" name="branches_address" class="md-textarea form-control" rows="3" disabled> {{$user->shippingOffice->addresses}}</textarea>
                                                <label for="branches-address">Addresses of Branches</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="type" name="shipping_services" type="text" value="{{$user->shippingOffice->shipping_services}}" disabled>
                                                <label for="type">Type of Shipping Service Provided</label>
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
                                        </div>
                                        <div class="step-actions d-flex justify-content-center">
                                            <button class="waves-effect waves-dark btn btn-large btn-amber next-step" data-feedback="someFunction21">NEXT</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step3" class="step-title waves-effect waves-dark">Step 3</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Shipping Services Information <i class="fas fa-info-circle m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <h6 class="font-weight-bold">Available Shipping Methods:</h6>
                                                <div class="custom-control custom-checkbox ml-4">
                                                    <?php $chk = "" ?>
                                                    <?php $chk = explode(" ",$user->shippingService->shipping_methods) ?>
                                                    <input type="checkbox" class="custom-control-input" id="method1" name="shipping_methods[]" value="LTL" @if(in_array("LTL", $chk)) checked @endif disabled>
                                                    <label class="custom-control-label" for="method1">Less Than Track Load(LTL)</label>
                                                </div>
                                                <div class="custom-control custom-checkbox ml-4">
                                                    <input type="checkbox" class="custom-control-input" id="method2" name="shipping_methods[]" value="FTL" @if(in_array("FTL", $chk)) checked @endif disabled>
                                                    <label class="custom-control-label" for="method2">Full Track Load(FTL)</label>
                                                </div>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <h6 class="font-weight-bold">External Shipping Modes:</h6>
                                                <div class="custom-control custom-checkbox ml-4">
                                                    <?php $chk1 = "" ?>
                                                    <?php $chk1 = explode(" ",$user->shippingService->shipping_modes) ?>
                                                    <input type="checkbox" class="custom-control-input" id="mode1" name="shipping_modes[]" value="Wild" @if(in_array("Wild", $chk1)) checked @endif disabled>
                                                    <label class="custom-control-label" for="mode1">Land Transport</label>
                                                </div>
                                                <div class="custom-control custom-checkbox ml-4">
                                                    <input type="checkbox" class="custom-control-input" id="mode2" name="shipping_modes[]" value="Aerial" @if(in_array("Aerial", $chk1)) checked @endif disabled>
                                                    <label class="custom-control-label" for="mode2">Air Transport</label>
                                                </div>
                                                <div class="custom-control custom-checkbox ml-4">
                                                    <input type="checkbox" class="custom-control-input" id="mode3" name="shipping_modes[]" value="Nautical" @if(in_array("Nautical", $chk1)) checked @endif disabled>
                                                    <label class="custom-control-label" for="mode3">Water Transport</label>
                                                </div>
                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input id="src-dest" name="src_dest" type="text" value="{{$user->shippingService->sources_destinations}}" disabled>
                                                <label for="src-dest">Sources and Destinations Served By the Shipping Company</label>
                                            </div>
                                        </div>
                                        <div class="step-actions d-flex justify-content-center">
                                            <button class="waves-effect waves-dark btn btn-large btn-amber next-step" data-feedback="someFunction21">NEXT</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step4" class="step-title waves-effect waves-dark">Step 4</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Financial Information <i class="fas fa-money-check-alt m-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="financial-status" name="financial_status" type="text" value="{{$user->applicationDetail->financial_assignment_status}}" disabled>
                                                <label for="financial-status">Financial Assignment Status</label>
                                            </div>
                                            <div class="md-form col-12 ml-auto">

                                                <div class="file-field">
                                                    <h6>Photo of the Financial Assignment:</h6>
                                                    <div class="btn btn-elegant btn-sm float-left">
                                                        <span>Choose file</span>
                                                        <input type="file" name="financial_photo">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="financial-photo" class="file-path validate" type="text" placeholder="Upload your file">
                                                    </div>

                                                    <br>
                                                    @if (isset($user->applicationdetail->images[0]->url))
                                                        <img src="{{ url($user->applicationdetail->images[0]->url)}}" class="img-fluid z-depth-1 shadow-lg" alt="" 
                                                        style="min-height:200px; max-height:400px; min-width:200px; max-width:400px">
                                                    @endif

                                                    <div class="step-actions d-flex justify-content-center">
                                                        <button class="waves-effect waves-dark btn btn-large btn-amber next-step" data-feedback="someFunction21">NEXT</button>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step5" class="step-title waves-effect waves-dark">Step 5</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Application Information <i class="fas fa-edit ml-1"></i></h5>
                                        <div class="row">

                                            <div class="md-form col-12 ml-auto">

                                                <div class="file-field">
                                                    <h6>Photo of Signature and Fingerprint:</h6>
                                                    <div class="btn btn-elegant btn-sm float-left">
                                                        <span>Choose file</span>
                                                        <input type="file" name="signature_photo">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="signature-photo" class="file-path validate" type="text" placeholder="Upload your file">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="md-form col-12 ml-auto">
                                                <input name="date_of_application" type="text" id="date-picker-example2" value="{{$user->applicationDetail->date_of_application}}" disabled>
                                                <label for="date_of_application">Financial Assignment Status</label>
                                            </div>
                                            <div>
                                                @if (isset($user->applicationdetail->images[1]->url))
                                                    <img src="{{ url($user->applicationdetail->images[1]->url)}}" class="img-fluid z-depth-1 shadow-lg" alt=""
                                                    style="min-height:200px; max-height:400px; min-width:200px; max-width:400px" >
                                                @endif
                                            </div>
                                            <div class="step-actions d-flex justify-content-center">
                                                <button class="waves-effect waves-dark btn btn-large btn-amber next-step" data-feedback="someFunction21">NEXT</button>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step6" class="step-title waves-effect waves-dark">Step 6</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Resume Information <i class="fas fa-user-edit ml-1"></i></h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <textarea id="resume-info" name="resume_info" class="md-textarea form-control" rows="3" disabled>{{$user->applicationDetail->resume_information}}</textarea>
                                                <label for="resume-info">Resume Information (As Mentioned in the Application Document)</label>
                                            </div>
                                            <div class="step-actions d-flex justify-content-center">
                                                <button class="waves-effect waves-dark btn btn-large btn-amber next-step" data-feedback="someFunction21">NEXT</button>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="step">
                                    <div id="step7" class="step-title waves-effect waves-dark">Step 7</div>
                                    <div class="step-new-content">
                                        <h5 class="text-center font-weight-bolder">Hard Copy <i class="far fa-clipboard m-1"></i>
                                        </h5>
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <div class="file-field">
                                                    <h6>Hard Copy of the Application Form:</h6>
                                                    <div class="btn btn-elegant btn-sm float-left">
                                                        <span>Choose file</span>
                                                        <input type="file" name="hard_copy">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="hard-copy" class="file-path validate" type="text" placeholder="Upload your file">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                @if (isset($user->applicationdetail->images[2]->url))
                                                    <img src="{{ url($user->applicationdetail->images[2]->url)}}" class="img-fluid z-depth-1 shadow-lg" alt="" 
                                                    style="min-height:200px; max-height:400px; min-width:200px; max-width:400px">
                                                @endif
                                            </div>
                                            <div class="d-flex justify-content-center col-md-12">
                                                <button id='state' type="button" class="btn btn-success btn-rounded px-2">Approve Application </a></button>
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
                success: function (data) {
                    window.location = "http://www.yoururl.com";
                },
            });
        });

    </script>


    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#financial')
                        .attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>


</body>

</html>

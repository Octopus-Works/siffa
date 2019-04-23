<!DOCTYPE html>
<html lang="en">
    <head>
        @include('incs.head')
        <style>
                .mt-5 {
                    margin-top: 6rem !important;
                }
                ul.stepper.horizontal .step.active .step-title:before {
                    background-color: #ffc107!important;
                }
                ul.stepper.horizontal .step-actions {
                    position:relative!important;
                }
            </style>        
    </head>


<body>

    <!--Main Navigation-->
    <header>
        @include('incs.nav')
    </header>
    <!--Main Navigation-->


    <!-- Main layout -->
    <main>

        <div class="view jarallax shadow-lg" style="height: 65vh;">
            <img class="jarallax-img" src={{url('img/3.jpg')}} alt="">
            <div class="mask rgba-black-slight">
            </div>
        </div>

        <div class="container shadow-lg">

            <!--Grid row-->
            <div class="row mb-5 mt-5 p-3">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="card p-5 mt-3 mb-3 shadow-lg">
                        <h1 class="text-center mb-5 font-weight-bolder">Register<i
                                class="fas fa-clipboard amber-text ml-3"></i>
                        </h1>
                        <ul class="stepper horizontal" id="horizontal-stepper" style="height:1050px;">
                            <li class="step active">
                                <div id="step1" class="step-title waves-effect waves-dark">Step 1</div>
                                <div class="step-new-content">
                                    <h5 class="text-center font-weight-bolder mt-3 mb-3">Personal Information <i
                                            class="fas fa-user m-1"></i></h5>
                                    <div class="row">
                                        <div class="md-form col-12 ml-auto">
                                            <input id="name" name="name" type="text" class="validate form-control"
                                                required>
                                            <label for="name">Username</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="fullname" name="fullname" type="text"
                                                class="validate form-control" required>
                                            <label for="fullname">Full Name</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="father" name="father" type="text" class="validate form-control"
                                                required>
                                            <label for="father">Father's Name</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="mother" name="mother" type="text" class="validate form-control"
                                                required>
                                            <label for="mother">Mother's Name</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input placeholder="Date of Birth" type="text" id="date-picker-example"
                                                class="form-control datepicker">
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="place-of-birth" name="place-of-birth" type="text"
                                                class="validate form-control" required>
                                            <label for="place-of-birth">Place of Birth</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="record" name="record" type="text" class="validate form-control"
                                                required>
                                            <label for="record">Individual Civil Registry Record</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="nationality" name="nationality" type="text"
                                                class="validate form-control" required>
                                            <label for="nationality">Nationality</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="address" name="address" type="text" class="validate form-control"
                                                required>
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                    <div class="step-actions d-flex justify-content-center">
                                        <button class="waves-effect waves-dark btn btn-large btn-amber next-step"
                                            data-feedback="someFunction21">CONTINUE</button>
                                    </div>
                                </div>
                            </li>
                            <li class="step">
                                <div id="step2" class="step-title waves-effect waves-dark">Step 2</div>
                                <div class="step-new-content">
                                    <h5 class="text-center font-weight-bolder mt-3 mb-3">Shipping Company Information <i
                                            class="fas fa-briefcase m-1"></i></h5>
                                    <div class="row">
                                        <div class="md-form col-12 ml-auto">
                                            <input id="company-name" name="company-name" type="text"
                                                class="validate form-control" required>
                                            <label for="company-name">Shipping Company Name</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <textarea id="branches-address" name="branches-address"
                                                class="md-textarea form-control" rows="3"></textarea>
                                            <label for="branches-address">Addresses of Branches</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="type" name="type" type="text" class="validate form-control"
                                                required>
                                            <label for="type">Type of Shipping Service Provided</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="position" name="position" type="text"
                                                class="validate form-control" required>
                                            <label for="position">Workplace Position</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="chamber" name="position" type="text"
                                                class="validate form-control" required>
                                            <label for="chamber">Chamber of Commerce</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="regist-num" name="regist-num" type="text"
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
                                <div id="step3" class="step-title waves-effect waves-dark ">Step 3</div>
                                <div class="step-new-content">
                                    <h5 class="text-center font-weight-bolder mt-3 mb-3">Shipping Services Information
                                        <i class="fas fa-info-circle m-1"></i></h5>
                                    <div class="row">
                                        <div class="md-form col-12 ml-auto">
                                            <h6 class="font-weight-bold">Available Shipping Methods:</h6>
                                            <div class="custom-control custom-checkbox ml-4">
                                                <input type="checkbox" class="custom-control-input" id="method1"
                                                    name="method1">
                                                <label class="custom-control-label" for="method1">Less Than Track
                                                    Load(LTL)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox ml-4">
                                                <input type="checkbox" class="custom-control-input" id="method2"
                                                    name="method2">
                                                <label class="custom-control-label" for="method2">Full Track
                                                    Load(FTL)</label>
                                            </div>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <h6 class="font-weight-bold">External Shipping Modes:</h6>
                                            <div class="custom-control custom-checkbox ml-4">
                                                <input type="checkbox" class="custom-control-input" id="mode1"
                                                    name="mode1">
                                                <label class="custom-control-label" for="mode1">Land Transport</label>
                                            </div>
                                            <div class="custom-control custom-checkbox ml-4">
                                                <input type="checkbox" class="custom-control-input" id="mode2"
                                                    name="mode2">
                                                <label class="custom-control-label" for="mode2">Air Transport</label>
                                            </div>
                                            <div class="custom-control custom-checkbox ml-4">
                                                <input type="checkbox" class="custom-control-input" id="mode3"
                                                    name="mode3">
                                                <label class="custom-control-label" for="mode3">Water Transport</label>
                                            </div>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input id="src-dest" name="src-dest" type="text"
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
                                    <h5 class="text-center font-weight-bolder mt-3 mb-3">Financial Information <i
                                            class="fas fa-money-check-alt m-1"></i></h5>
                                    <div class="row">
                                        <div class="md-form col-12 ml-auto">
                                            <input id="financial-status" name="financial-status" type="text"
                                                class="validate form-control" required>
                                            <label for="financial-status">Financial Assignment Status</label>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <form class="md-form">
                                                <div class="file-field">
                                                    <h6>Photo of the Financial Assignment:</h6>
                                                    <div class="btn btn-elegant btn-sm float-left">
                                                        <span>Choose file</span>
                                                        <input type="file">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="financial-photo" name="financial-photo"
                                                            class="file-path validate" type="text"
                                                            placeholder="Upload your file">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="step-actions d-flex justify-content-center">
                                            <button class="waves-effect waves-dark btn btn-large btn-amber next-step"
                                                data-feedback="someFunction21">CONTINUE</button>
                                        </div>
                                    </div>
                            </li>
                            <li class="step">
                                <div id="step5" class="step-title waves-effect waves-dark">Step 5</div>
                                <div class="step-new-content">
                                    <h5 class="text-center font-weight-bolder mt-3 mb-3">Application Information <i
                                            class="fas fa-edit ml-1"></i></h5>
                                    <div class="row">

                                        <div class="md-form col-12 ml-auto">
                                            <form class="md-form">
                                                <div class="file-field">
                                                    <h6>Photo of Signature and Fingerprint:</h6>
                                                    <div class="btn btn-elegant btn-sm float-left">
                                                        <span>Choose file</span>
                                                        <input type="file">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="signature-photo" name="signature-photo"
                                                            class="file-path validate" type="text"
                                                            placeholder="Upload your file">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="md-form col-12 ml-auto">
                                            <input placeholder="Date of Application" type="text"
                                                id="date-picker-example2" class="form-control datepicker">
                                        </div>
                                        <div class="step-actions d-flex justify-content-center">
                                            <button class="waves-effect waves-dark btn btn-large btn-amber next-step"
                                                data-feedback="someFunction21">CONTINUE</button>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="step">
                                <div id="step6" class="step-title waves-effect waves-dark">Step 6</div>
                                <div class="step-new-content">
                                    <h5 class="text-center font-weight-bolder mt-3 mb-3">Resume Information <i
                                            class="fas fa-user-edit ml-1"></i></h5>
                                    <div class="row">
                                        <div class="md-form col-12 ml-auto">
                                            <textarea id="resume-info" name="resume-info"
                                                class="md-textarea form-control" rows="3"></textarea>
                                            <label for="resume-info">Resume Inofrmation (As Mentioned in the Application Document)</label>
                                        </div>
                                        <div class="step-actions d-flex justify-content-center">
                                            <button class="waves-effect waves-dark btn btn-large btn-amber next-step"
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
                                            <form class="md-form">
                                                <div class="file-field">
                                                    <h6>Hard Copy of the Application Form:</h6>
                                                    <div class="btn btn-elegant btn-sm float-left">
                                                        <span>Choose file</span>
                                                        <input type="file">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input id="hard-copy" name="hard-copy"
                                                            class="file-path validate" type="text"
                                                            placeholder="Upload your file">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="step-actions d-flex justify-content-center">
                                            <button class="waves-effect waves-dark btn-large btn btn-amber m-0 mt-4"
                                                type="button">SUBMIT</button>
                                        </div>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

        <div class="view jarallax">
            <img class="jarallax-img" src={{url('img/7.jpg')}} alt="">
            <div class="mask rgba-black-slight">
            </div>
        </form>
        </div>

        @include('incs.footer')
    </main>
    <!--Main Layout-->




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
        function ajax() {
                    var test = JSON.stringify(jQuery('#app_form').serializeArray());
                    var dataa = JSON.parse(test);
                    var formData = new FormData();
                    $.each(dataa, function (key, el) {
                        formData.append(el.name, el.value);
                        
                    });
                    console.log(formData);

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        url: '/',
                        dataType : 'json', // data type
                        data :dataa , // post data || get data
                        statusCode: {
                            401: function () {
                                window.location = '/login';
                            },
                            500: function () {
                                alert('500 status code! server error');
                            },
                            200: function (msg) {
                                alert("sucess");
                             //   toastr["success"](name + " added to cart", "Success");
                                //  $('#cart_table tr:last').after();
                              //  $("#cart_table").find('tbody').append('<tr id=row_' + array.id + '>' + '<th scope="row" >' + (rows_cont + 1) + '</th>' + '<td>' + name + '</td>' + '<td>' + array.price + '</td>' + '<td onclick="remove_cart(' + array.id + ', name);"><a><i  class="fas fa-eraser"></i></a></td>' + '</tr>');
                            },
                        },

                    });


        }
  


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

</body>

</html>

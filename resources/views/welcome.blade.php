<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href={{url("css/bootstrap.min.css")}} rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href={{url("css/mdb.min.css")}} rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href={{url("css/style.css")}} rel="stylesheet">
    <link href={{url("css/addons-pro/stepper.css")}} rel="stylesheet">
</head>

<style>
    .mt-5 {
        margin-top: 7rem !important;
    }
    

</style>

<body>

    <!--Main Navigation-->
    <header>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark unique-color-dark scrolling-navbar">
            <a class="navbar-brand amber-text" href="#"><strong>SIFFA</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Opinions</a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-facebook-f amber-text"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-twitter amber-text"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-instagram amber-text"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main>
        <div class="container p-4 mt-5 mb-5">
           
            <div class="card p-5">
                    <h1 class="text-center mb-5 font-weight-bolder">Register<i class="fas fa-clipboard amber-text ml-3"></i></h1>
                <ul class="stepper horizontal" id="horizontal-stepper" style="height:1000px;">
                    <li class="step active">
                        <div class="step-title waves-effect waves-dark">Step 1</div>
                        <div class="step-new-content">
                            <h5 class="text-center font-weight-bolder">Personal Information <i
                                    class="fas fa-user m-1"></i></h5>
                            <div class="row">
                                <div class="md-form col-12 ml-auto">
                                    <input id="name" name="name" type="text" class="validate form-control" required>
                                    <label for="name">Username</label>
                                </div>
                                <div class="md-form col-12 ml-auto">
                                    <input id="fullname" name="fullname" type="text" class="validate form-control"
                                        required>
                                    <label for="fullname">Full Name</label>
                                </div>
                                <div class="md-form col-12 ml-auto">
                                    <input id="father" name="father" type="text" class="validate form-control" required>
                                    <label for="father">Father's Name</label>
                                </div>
                                <div class="md-form col-12 ml-auto">
                                    <input id="mother" name="mother" type="text" class="validate form-control" required>
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
                                    <input id="record" name="record" type="text" class="validate form-control" required>
                                    <label for="record">Individual Civil Registry Record</label>
                                </div>
                                <div class="md-form col-12 ml-auto">
                                    <input id="nationality" name="nationality" type="text" class="validate form-control"
                                        required>
                                    <label for="nationality">Nationality</label>
                                </div>
                                <div class="md-form col-12 ml-auto">
                                    <input id="address" name="address" type="text" class="validate form-control"
                                        required>
                                    <label for="address">Address</label>
                                </div>
                            </div>
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn btn-sm btn-amber next-step"
                                    data-feedback="someFunction21">CONTINUE</button>
                            </div>
                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 2</div>
                        <div class="step-new-content">
                            <h5 class="text-center font-weight-bolder">Shipping Company Information <i
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
                                    <input id="type" name="type" type="text" class="validate form-control" required>
                                    <label for="type">Type of Shipping Service Provided</label>
                                </div>
                                <div class="md-form col-12 ml-auto">
                                    <input id="position" name="position" type="text" class="validate form-control"
                                        required>
                                    <label for="position">Workplace Position</label>
                                </div>
                                <div class="md-form col-12 ml-auto">
                                    <input id="chamber" name="position" type="text" class="validate form-control"
                                        required>
                                    <label for="chamber">Chamber of Commerce</label>
                                </div>
                                <div class="md-form col-12 ml-auto">
                                    <input id="regist-num" name="regist-num" type="text" class="validate form-control"
                                        required>
                                    <label for="regist-num">Commercial Registration Number</label>
                                </div>
                            </div>
                            <div>
                                <button class="waves-effect waves-dark btn btn-sm btn-amber next-step"
                                    data-feedback="someFunction21">CONTINUE</button>
                            </div>
                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 3</div>
                        <div class="step-new-content">
                            <h5 class="text-center font-weight-bolder">Shipping Services Information <i
                                    class="fas fa-info-circle m-1"></i></h5>
                            <div class="row">
                                <div class="md-form col-12 ml-auto">
                                    <h6 class="font-weight-bold">Available Shipping Methods:</h6>
                                    <div class="custom-control custom-checkbox ml-4">
                                        <input type="checkbox" class="custom-control-input" id="method1" name="method1">
                                        <label class="custom-control-label" for="method1">Less Than Track
                                            Load(LTL)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox ml-4">
                                        <input type="checkbox" class="custom-control-input" id="method2" name="method2">
                                        <label class="custom-control-label" for="method2">Full Track Load(FTL)</label>
                                    </div>
                                </div>
                                <div class="md-form col-12 ml-auto">
                                    <h6 class="font-weight-bold">External Shipping Modes:</h6>
                                    <div class="custom-control custom-checkbox ml-4">
                                        <input type="checkbox" class="custom-control-input" id="mode1" name="mode1">
                                        <label class="custom-control-label" for="mode1">Land Transport</label>
                                    </div>
                                    <div class="custom-control custom-checkbox ml-4">
                                        <input type="checkbox" class="custom-control-input" id="mode2" name="mode2">
                                        <label class="custom-control-label" for="mode2">Air Transport</label>
                                    </div>
                                    <div class="custom-control custom-checkbox ml-4">
                                        <input type="checkbox" class="custom-control-input" id="mode3" name="mode3">
                                        <label class="custom-control-label" for="mode3">Water Transport</label>
                                    </div>
                                </div>
                                <div class="md-form col-12 ml-auto">
                                    <input id="src-dest" name="src-dest" type="text" class="validate form-control"
                                        required>
                                    <label for="src-dest">Sources and Destinations Served By the Shipping
                                        Company</label>
                                </div>
                            </div>
                            <div>
                                <button class="waves-effect waves-dark btn btn-sm btn-amber next-step"
                                    data-feedback="someFunction21">CONTINUE</button>
                            </div>
                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 4</div>
                        <div class="step-new-content">
                            <h5 class="text-center font-weight-bolder">Financial Information <i
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
                                            <div class="btn btn-primary btn-sm float-left">
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
                                <div>
                                    <button class="waves-effect waves-dark btn btn-sm btn-amber next-step"
                                        data-feedback="someFunction21">CONTINUE</button>
                                </div>
                            </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 5</div>
                        <div class="step-new-content">
                            <h5 class="text-center font-weight-bolder">Application Information <i
                                    class="fas fa-edit ml-1"></i></h5>
                            <div class="row">

                                <div class="md-form col-12 ml-auto">
                                    <form class="md-form">
                                        <div class="file-field">
                                            <h6>Photo of Signature and Fingerprint:</h6>
                                            <div class="btn btn-primary btn-sm float-left">
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
                                    <input placeholder="Date of Application" type="text" id="date-picker-example2"
                                        class="form-control datepicker">
                                </div>
                                <div>
                                    <button class="waves-effect waves-dark btn btn-sm btn-amber next-step"
                                        data-feedback="someFunction21">CONTINUE</button>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 6</div>
                        <div class="step-new-content">
                            <h5 class="text-center font-weight-bolder">Resume Information <i
                                    class="fas fa-user-edit ml-1"></i></h5>
                            <div class="row">
                                <div class="md-form col-12 ml-auto">
                                    <textarea id="resume-info" name="resume-info" class="md-textarea form-control"
                                        rows="3"></textarea>
                                    <label for="resume-info">Resume Inofrmation (As Mentioned in the Application
                                        Document)</label>
                                </div>
                                <div>
                                    <button class="waves-effect waves-dark btn btn-sm btn-amber next-step"
                                        data-feedback="someFunction21">CONTINUE</button>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 7</div>
                        <div class="step-new-content">
                            <h5 class="text-center font-weight-bolder">Hard Copy <i class="far fa-clipboard m-1"></i>
                            </h5>
                            <div class="row">
                                <div class="md-form col-12 ml-auto">
                                    <form class="md-form">
                                        <div class="file-field">
                                            <h6>Hard Copy of the Application Form:</h6>
                                            <div class="btn btn-primary btn-sm float-left">
                                                <span>Choose file</span>
                                                <input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input id="hard-copy" name="hard-copy" class="file-path validate"
                                                    type="text" placeholder="Upload your file">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <button class="waves-effect waves-dark btn-sm btn btn-amber m-0 mt-4"
                                        type="button">SUBMIT</button>
                                </div>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </main>
    <!--Main Layout-->

    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1">
                        <i class="fab fa-dribbble"> </i>
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src={{url("js/jquery-3.3.1.min.js")}}></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src={{url("js/popper.min.js")}}></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src={{url("js/bootstrap.min.js")}}></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src={{url("js/mdb.min.js")}}></script>
    <script type="text/javascript" src={{url("js/addons-pro/stepper.min.js")}}></script>


    <script>
        $(document).ready(function () {
            $('.stepper').mdbStepper();
        })

        function someFunction21() {
            setTimeout(function () {
                $('#horizontal-stepper').nextStep();
            }, 2000);
        }

    </script>

    <script>
        // Data Picker Initialization
        $('.datepicker').pickadate();

    </script>

</body>

</html>

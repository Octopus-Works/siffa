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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/addons-pro/stepper.css" rel="stylesheet">
</head>

<style>
    .mt-5{
    margin-top: 10rem!important;
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
        <div class="container text-center p-4 mt-5" style="height:1100px;">
            <h1 class="text-center mb-5">Register</h1>
            <ul class="stepper horizontal" id="horizontal-stepper">
                <li class="step active">
                    <div class="step-title waves-effect waves-dark">Step 1</div>
                    <div class="step-new-content">
                        <div class="row">
                            <div class="md-form col-12 ml-auto">
                                <input id="email-horizontal" type="email" class="validate form-control" required>
                                <label for="email-horizontal">Email</label>
                            </div>
                        </div>
                        <div class="step-actions">
                            <button class="waves-effect waves-dark btn btn-sm btn-primary next-step"
                                data-feedback="someFunction21">CONTINUE</button>
                        </div>
                    </div>
                </li>
                <li class="step">
                    <div class="step-title waves-effect waves-dark">Step 2</div>
                    <div class="step-new-content">
                        <div class="row">
                            <div class="md-form col-12 ml-auto">
                                <input id="password-horizontal" type="password" class="validate form-control" required>
                                <label for="password-horizontal">Your password</label>
                            </div>
                        </div>
                        <div class="step-actions">
                            <button class="waves-effect waves-dark btn btn-sm btn-primary next-step"
                                data-feedback="someFunction21">CONTINUE</button>
                            <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
                        </div>
                    </div>
                </li>
                <li class="step">
                    <div class="step-title waves-effect waves-dark">Step 3</div>
                    <div class="step-new-content">
                        Finish!
                        <div class="step-actions">
                            <button class="waves-effect waves-dark btn-sm btn btn-primary m-0 mt-4"
                                type="button">SUBMIT</button>
                        </div>
                    </div>
                </li>
            </ul>
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
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/addons-pro/stepper.min.js"></script>


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

</body>

</html>

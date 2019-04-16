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
        <div class="container p-4 mt-5 mb-5" style="height:750px;">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6">
                    <form class="registerclass border border-light p-5 mt-5" action="{{ route('verification') }}" method="POST">
                        @csrf 
                        <p class="h4 mb-4 text-center">Register</p>

                        <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

                        <button class="btn btn-info btn-block my-4" type="submit">Register</button>

                        <div class="text-center">
                            <p>or sign in with:</p>
                            <a type="button" class="light-blue-text mx-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a type="button" class="light-blue-text mx-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a type="button" class="light-blue-text mx-2">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a type="button" class="light-blue-text mx-2">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </form>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

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



</body>

</html>
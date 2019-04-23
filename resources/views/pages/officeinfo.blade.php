<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    @include('incs.head')


    <style>
        .card {
            background-color: #1c2331bf !important;
        }

        body{
            color:#fff!important;
            line-height:2rem!important;
        }

        .card .card-body .card-text{
            color:#cccccc!important;
        }

        hr{
            border-top: 1px solid rgba(255, 191, 0, 0.51);
        }

        p{
            font-size:17px!important;
        }

    </style>


</head>

<body class="">

    <!-- Navigation -->
    <header>



        <!--Main Navigation-->
        <header>
            @include('incs.nav')
        </header>
        <!--Main Navigation-->

        <main>
            <div class="view"
                style="background-image:url('img/7.jpg'); background-repeat:no-repeat;background-size: cover; background-position: center center;">
                <div class="container text-center" style="height:900px">
                    <div class="mask flex-center rgba-black-slight">
                        <!-- Card Light -->
                        <div class="card container p-5">

                            <!-- Card image -->
                            <div class="view overlay p-5">
                                <img class="card-img-top p-5"
                                    src=""
                                    alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <h2 class="card-title amber-text">Office Name</h2>
                                <hr>
                                <!-- Text -->
                                <p class="card-text">Office Owner Name</p>
                                <p class="card-text">Phone Number: +963 011 1234567</p>
                                <p class="card-text">Mobile Number: +963 991 123456</p>
                                <p class="card-text">Main Branch Address: Mazzeh</p>
                                <p class="card-text">Services: Types of services provided </p>
                                <p class="card-text">E-mail: shipping@shippingcompany.com</p>
                                <p class="card-text">Website: www.shippingcompany.com</p>
                            </div>

                        </div>
                        <!-- Card Light -->
                    </div>
                </div>



        </main>
        <!-- Main layout -->

        <!-- Footer -->
        @include('incs.footer')

        <!-- Footer -->

        <!-- SCRIPTS -->


</body>

</html>

<!DOCTYPE html>

<html lang="en">

<head>
    @include('partials.head')

    <style>
        @media (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: unset !important;
            }

        }


        html,
        body,
        header,
        .jarallax {
            height: 100%;
        }

        @media (min-width: 560px) and (max-width: 740px) {

            html,
            body,
            header,
            .jarallax {
                height: 500px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .jarallax {
                height: 600px;
            }
        }


        .navbar {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12) !important;
        }
        }




        /*! CSS Used from: https://use.fontawesome.com/releases/v5.8.1/css/all.css */
        .far {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        .far {
            font-weight: 400;
        }

        .far {
            font-family: "Font Awesome 5 Free";
        }

        /*! CSS Used from: https://mdbootstrap.com/previews/templates/magazine/css/bootstrap.min.css */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        section {
            display: block;
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        h4,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        strong {
            font-weight: bolder;
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        a:not([href]):not([tabindex]) {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]):focus,
        a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        h4,
        h6 {
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        h4 {
            font-size: 1.5rem;
        }

        h6 {
            font-size: 1rem;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1);
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-4,
        .col-8 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .rounded-0 {
            border-radius: 0 !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .pb-0 {
            padding-bottom: 0 !important;
        }

        .pt-2 {
            padding-top: .5rem !important;
        }

        .font-weight-bold {
            font-weight: 700 !important;
        }

        @media print {

            *,
            ::after,
            ::before {
                text-shadow: none !important;
                box-shadow: none !important;
            }

            a:not(.btn) {
                text-decoration: underline;
            }

            img {
                page-break-inside: avoid;
            }

            p {
                orphans: 3;
                widows: 3;
            }
        }

        /*! CSS Used from: https://mdbootstrap.com/previews/templates/magazine/css/mdb.min.css */
        :disabled {
            pointer-events: none !important;
        }

        h4,
        h6 {
            font-weight: 300;
        }

        .waves-effect {
            -webkit-tap-highlight-color: transparent;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        .red {
            background-color: #ffc107 !important;
        }

        .badge-danger {
            background-color: #ffc107 !important;
        }

        .grey-text {
            color: #9e9e9e !important;
        }

        .rgba-white-slight,
        .rgba-white-slight:after {
            background-color: rgba(255, 255, 255, .1);
        }

        .z-depth-1 {
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12) !important;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12) !important;
        }


        .blue-text {
            color: #ffc107 !important;
        }

        a {
            cursor: pointer;
            text-decoration: none;
            color: #007bff;
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        a:hover {
            text-decoration: none;
            color: #0056b3;
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        a:disabled:hover {
            color: #007bff;
        }

        a:not([href]):not([tabindex]),
        a:not([href]):not([tabindex]):focus,
        a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .font-small {
            font-size: .9rem;
        }

        .view {
            position: relative;
            overflow: hidden;
            cursor: default;
        }

        .view .mask {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            width: 100%;
            height: 100%;
            background-attachment: fixed;
        }

        .view img {
            position: relative;
            display: block;
        }

        .overlay .mask {
            opacity: 0;
            -webkit-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .overlay .mask:hover {
            opacity: 1;
        }

        .waves-effect {
            position: relative;
            cursor: pointer;
            overflow: hidden;
            -webkit-user-select: none;
            user-select: none;
        }

        .card {
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
        }

        .card {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            border: 0;
            font-weight: 400;
        }

        .widget-content .view {
            margin-bottom: 1.5rem;
        }

        .widget-content .single-post {
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 1.5rem;
        }

        .widget-content .single-post:last-of-type {
            border-bottom: none;
        }

        .widget-content .single-post .post-data {
            margin-top: .2rem;
            margin-bottom: 3.4rem;
            font-weight: 700;
            color: #616161;
        }

        .widget-content .single-post .post-data p {
            float: left;
        }

        .widget-content .single-post h6 {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
            font-weight: 400;
            color: #424242;
        }

        .widget-content .single-post h6:hover {
            color: #616161;
        }

        body.homepage-v5 .widget-content .single-post .post-data {
            margin-bottom: 2.4rem;
            font-weight: 500;
            color: #616161;
        }

        body.homepage-v5 .title-hr {
            border-top: 2px solid rgba(0, 0, 0, .1);
        }

        /*! CSS Used fontfaces */
        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 400;
            font-display: auto;
            src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.eot);
            src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.eot#iefix) format("embedded-opentype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.woff2) format("woff2"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.woff) format("woff"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.ttf) format("truetype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.svg#fontawesome) format("svg");
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: auto;
            src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.eot);
            src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.eot#iefix) format("embedded-opentype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.woff2) format("woff2"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.woff) format("woff"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.ttf) format("truetype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.svg#fontawesome) format("svg");
        }
    </style>
</head>

<body class="homepage-v5">


    @include('partials.nav')
    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}'
        style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20%2821%29.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="mask rgba-black-light">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row smooth-scroll">
                    <div class="col-md-12 white-text text-center">
                        <div class="wow fadeInDown" data-wow-delay="0.2s">
                            <h6 class="display-4 rgba-black-light px-3 py-2">
                                <strong class="font-weight-bold">Syrian National <br> Freight Forwarding & Logistics
                                    <br> Association</strong></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Main layout --->
    <main>

        <div class="container mt-5 mb-5">

            <!-- Magazine --->
            <div class="row mt-2">

                <!-- Main news --->
                <div class="col-xl-8 col-md-12">

                    <!-- Section: Magazine posts --->
                    <section class="section extra-margins mt-2">

                        <h4 class="font-weight-bold"><strong>Ads</strong></h4>

                        <hr class="red title-hr">

                        <!-- Carousel Wrapper --->
                        <div id="carousel-example-2" class="carousel slide carousel-fade my-4 z-depth-1"
                            data-ride="carousel">

                            <!-- Indicators --->
                            <ol class="carousel-indicators">
                                @php
                                $counter = 0 ;
                                @endphp
                                @foreach ($ads as $item)


                                <li data-target="#carousel-example-2" data-slide-to="{{$counter}}"
                                    class="{{$counter == 0 ? "active" : " "  }}"></li>
                                @php
                                $counter = $counter + 1 ;
                                @endphp
                                @endforeach
                            </ol>
                            <!-- Indicators --->
                            @php
                            $counter1 = 0 ;
                            @endphp
                            <!-- Slides --->
                            <div class="carousel-inner" role="listbox">
                                @foreach ($ads as $item)


                                <div class="carousel-item {{$counter1 == 0 ? "active" : " "  }}">
                                        @php
                                        $counter1 = $counter1 + 1 ;
                                        @endphp
                                    <div class="view">




                                        <a href="{{$item->link}}">
                                            <img class="d-block w-100 rounded " style="max-height: 500px "  src="{{ Voyager::image( $item->img_src ) }}"
                                                alt="First slide">
                                        </a>
                                        <div class="mask rgba-black-light"></div>

                                    </div>



                                </div>
                                @endforeach

                            </div>
                            <!-- Slides --->

                            <!-- Controls --->
                            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">

                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                                <span class="sr-only">Previous</span>

                            </a>

                            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">

                                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                                <span class="sr-only">Next</span>

                            </a>
                            <!-- Controls --->

                        </div>
                        <!-- Carousel Wrapper --->

                        <!-- Section: Top news --->
                        <section>

                            <h4 class="font-weight-bold mt-5"><strong>TOP NEWS</strong></h4>

                            <hr class="red title-hr">

                            <!-- Grid row --->
                            <div class="row mb-4">
                                @foreach ($news as $item)
                                    
                             
                                <!-- Grid column --->
                                <div class="col-md-6 text-left mt-3">

                                    <!-- Card --->
                                    <div class="card">

                                        <!-- Card image --->
                                        <div class="view overlay">

                                        <img src="{{Voyager::image($item->img_src)}}"
                                                class="card-img-top" alt="Sample image">

                                        <a href="{{url('news/'.$item->id)}}">

                                                <div class="mask rgba-white-slight"></div>

                                            </a>

                                        </div>
                                        <!-- Card image --->

                                        <!-- Card content --->
                                        <div class="card-body">

                                            <!-- Title --->
                                        <h4 class="card-title"><strong>{{$item->title_en}}</strong></h4>

                                            <hr>

                                            <!-- Text --->
                                            <p class="card-text mb-3">{{$item->description_en}}

                                            </p>

                                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i
                                                    class="far fa-clock-o"></i>

                                             {{$item->created_at}}
                                                </p>


                                            <p class="text-right mb-0 font-small font-weight-bold"><a href="{{url('news/'.$item->id)}}">read more <i
                                                        class="fas fa-angle-right"></i></a></p>

                                        </div>
                                        <!-- Card content --->

                                    </div>
                                    <!-- Card --->

                                </div>
                                <!-- Grid column --->

                                @endforeach

                            </div>
                            <!-- Grid row --->
{{-- 
                            <!-- Grid row --->
                            <div class="row mb-4">

                                <!-- Grid column --->
                                <div class="col-md-6 text-left mt-3">

                                    <!-- Card --->
                                    <div class="card">

                                        <!-- Card image --->
                                        <div class="view overlay">

                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/3.jpg"
                                                class="card-img-top" alt="Sample image">

                                            <a>

                                                <div class="mask rgba-white-slight"></div>

                                            </a>

                                        </div>
                                        <!-- Card image --->

                                        <!-- Card content --->
                                        <div class="card-body">

                                            <!-- Title --->
                                            <h4 class="card-title"><strong>Card title</strong></h4>

                                            <hr>

                                            <!-- Text --->
                                            <p class="card-text mb-3">Some quick example text to build on the card title
                                                and make up the bulk

                                                of the

                                                card's content.

                                            </p>

                                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i
                                                    class="far fa-clock-o"></i>

                                                27/08/2017</p>

                                            <p class="font-small grey-text mb-0">Anna Smith</p>

                                            <p class="text-right mb-0 font-small font-weight-bold"><a>read more <i
                                                        class="fas fa-angle-right"></i></a></p>

                                        </div>
                                        <!-- Card content --->

                                    </div>
                                    <!-- Card --->

                                </div>
                                <!-- Grid column --->

                                <!-- Grid column --->
                                <div class="col-md-6 text-left mt-3">

                                    <!-- Card --->
                                    <div class="card">

                                        <!-- Card image --->
                                        <div class="view overlay">

                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/12.jpg"
                                                class="card-img-top" alt="Sample image">

                                            <a>

                                                <div class="mask rgba-white-slight"></div>

                                            </a>

                                        </div>
                                        <!-- Card image --->

                                        <!-- Card content --->
                                        <div class="card-body">

                                            <!-- Title --->
                                            <h4 class="card-title"><strong>Card title</strong></h4>

                                            <hr>

                                            <!-- Text --->
                                            <p class="card-text mb-3">Some quick example text to build on the card title
                                                and make up the bulk

                                                of the

                                                card's content.

                                            </p>

                                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i
                                                    class="far fa-clock-o"></i>

                                                27/08/2017</p>

                                            <p class="font-small grey-text mb-0">Anna Smith</p>

                                            <p class="text-right mb-0 font-small font-weight-bold"><a>read more <i
                                                        class="fas fa-angle-right"></i></a></p>

                                        </div>
                                        <!-- Card content --->

                                    </div>
                                    <!-- Card --->

                                </div>
                                <!-- Grid column --->

                            </div>
                            <!-- Grid row ---> --}}

                        </section>


                        <!-- Section: Magazine posts --->


                        <!-- Section: Top news --->
                        <section>

                            <h4 class="font-weight-bold mt-5"><strong>TOP Events</strong></h4>

                            <hr class="red title-hr">

                            <!-- Grid row --->
                            <div class="row mb-4">
                                @foreach ($events as $item)
                                    
                                <!-- Grid column --->
                                <div class="col-md-6 text-left mt-3">

                                    <!-- Card --->
                                    <div class="card">

                                        <!-- Card image --->
                                        <div class="view overlay">

                                           <img src="{{Voyager::image($item->img_src)}}" class="card-img-top"
                                                alt="Sample image">

                                            <a href="">

                                                <div class="mask rgba-white-slight"></div>

                                            </a> 

                                        </div>
                                        <!-- Card image --->

                                        <!-- Card content --->
                                        <div class="card-body">

                                            <!-- Title --->
                                            <h4 class="card-title"><strong>{{$item->title_en}}</strong></h4>

                                            <hr>

                                            <!-- Text --->
                                            <p class="card-text mb-3">
                                                {{$item->description_en}}

                                            </p>

                                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i
                                                    class="far fa-clock-o"></i>

                                             {{$item->created_at}}</p>



                                        </div>
                                        <!-- Card content --->

                                    </div>
                                    <!-- Card --->

                                </div>
                                <!-- Grid column --->
                                @endforeach


                            </div>
                            <!-- Grid row --->

                        </section>


                        <!-- Section: Magazine posts --->

                        <!-- Pagination dark --->
                        <nav>

                            <ul class="pagination pg-dark flex-center pt-4">

                                <!-- Arrow left --->
                                <li class="page-item">

                                    <a class="page-link" aria-label="Previous">

                                        <span aria-hidden="true">&laquo;</span>

                                        <span class="sr-only">Previous</span>

                                    </a>

                                </li>

                                <!-- Numbers --->
                                <li class="page-item active"><a class="page-link">1</a></li>

                                <li class="page-item"><a class="page-link">2</a></li>

                                <li class="page-item"><a class="page-link">3</a></li>

                                <li class="page-item"><a class="page-link">4</a></li>

                                <li class="page-item"><a class="page-link">5</a></li>

                                <!-- Arrow right --->
                                <li class="page-item">

                                    <a class="page-link" aria-label="Next">

                                        <span aria-hidden="true">&raquo;</span>

                                        <span class="sr-only">Next</span>

                                    </a>

                                </li>

                            </ul>

                        </nav>
                        <!-- Pagination dark grey --->

                </div>
                <!-- Main news --->

                <!-- Sidebar --->
                <div class="col-xl-4 col-md-12 widget-column mt-0">

                    <!-- Section: Categories --->


                    @foreach ($ads as $item)
                    <section class="section mt-5">

                            <h6 class="grey-text text-center mb-3"><strong>- Advertisment -</strong></h6>
    
                            <!-- Jumbotron --->
                            <div class="jumbotron text-center">
    
                                <!-- Title --->
                                <h1 class="card-title h2-responsive mt-2"><strong>{{$item->title_en}}</strong>
                                </h1>
                                
                                <!-- Subtitle --->
                                <p class="blue-text mb-4 mt-5 font-weight-bold">{{$item->title_en}}</p>
    
                                <!-- Text --->
                                <div class="d-flex justify-content-center">
    
                                    <p class="card-text mb-1" style="max-width: 43rem;">
                                            {{$item->description_en}}
    
                                    </p>
                    
                                </div>
    
                                <hr class="my-4">
    
                                @if(!empty($item->link) )
    
                                <a class="btn btn-rounded custom-primary " href="{{$item->link}}"> Go to the link</a>
                                @endif
                            </div>
                            <!-- Jumbotron --->
    
                        </section>
                    @endforeach
                    <!-- Section: Advertisment --->

                    <!-- Section: Advertisment --->



                    <!-- Section: Gallery --->
                    <section class="section sidebar-imgs mb-5">

                        <h4 class="font-weight-bold"><strong>GALLERY</strong></h4>

                        <hr class="red title-hr">

                        <!-- Grid row --->
                        <div class="row">

                            <div class="col-md-12">

                                <div id="mdb-lightbox-ui"></div>

                                <div class="mdb-lightbox">
                                    @foreach ($gallery as $item)
                                        
                                
                                    <figure class="col-md-4 px-1 py-1">

                                    <a href="{{Voyager::image($item->img_src)}}"
                                            data-size="1600x1067">

                                            <img src="{{Voyager::image($item->img_src)}}"
                                                class="img-fluid" alt="sample image">

                                        </a>

                                    </figure>

                                    @endforeach

                                </div>

                            </div>

                        </div>
                        <!-- Grid row --->

                    </section>
                    <!-- Section: Gallery --->



                </div>
                <!-- Sidebar --->

            </div>
            <!-- Magazine --->

        </div>

    </main>
    <!-- Main layout --->



    @include('partials.footer')

    @if(Session::has('message'))
    <script>
        $(document).ready(function () {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "md-toast-bottom-right",
                "preventDuplica tes": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 600,
                "timeOut": 7000,
                "extendedTimeOut": 600,
                "showEasing": "easeOutQuad",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr["success"]('{{ Session::get('
                message ') }}')

        });
    </script>
    @endif

</body>

</html>
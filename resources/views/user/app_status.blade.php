<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    @include('partials.head')
    <title>Application Status</title>

    <style>
  

        .md-form label {
            position: absolute;
            top: .65rem;
            left: unset;
            -webkit-transition: .2s ease-out;
            -o-transition: .2s ease-out;
            transition: .2s ease-out;
            cursor: text;
            color: #757575;
        }


        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }



        .cascading-admin-card .admin-up .data {
            float: right;
            margin-top: 2rem;
            text-align: right;
            margin-right: 2rem;
        }


        .cascading-admin-card .admin-up {
            margin-left: 4%;
            margin-right: 4%;
            margin-top: -20px;
        }

        .justify-content-start {
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        div {
            display: block;
        }

        .blockquote .bq-title,
        .card,
        .card .card-body h1,
        .card .card-body h2,
        .card .card-body h3,
        .card .card-body h4,
        .card .card-body h5,
        .card .card-body h6 {
            font-weight: 400;
        }

        .cascading-admin-card .admin-up .fab,
        .cascading-admin-card .admin-up .far,
        .cascading-admin-card .admin-up .fas {
            padding: 1.7rem;
            font-size: 2rem;
            color: #ffc107 !important text-align: left;
            margin-right: 1rem;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }

        .cascading-admin-card .admin-up .fab,
        .cascading-admin-card .admin-up .far,
        .cascading-admin-card .admin-up .fas,
        .z-depth-2 {
            -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19) !important;
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19) !important;
        }

        .info-color {
            background-color: #33b5e5 !important;
        }

        .pb-4,
        .py-4 {
            padding-bottom: 1.5rem !important;
        }

        .pt-4,
        .py-4 {
            padding-top: 1.5rem !important;
        }

        .fa,
        .fas {
            font-weight: 900;
        }

        .fa,
        .far,
        .fas {
            font-family: "Font Awesome 5 Free";
        }

        .fa,
        .fab,
        .fal,
        .far,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        i,
        cite,
        em,
        var,
        address,
        dfn {
            font-style: italic;
        }

        .blockquote .bq-title,
        .card,
        .card .card-body h1,
        .card .card-body h2,
        .card .card-body h3,
        .card .card-body h4,
        .card .card-body h5,
        .card .card-body h6 {
            font-weight: 400;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;

            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .text-center {
            text-align: center !important;
        }

    </style>
</head>

<body class="fixed-sn custom-primary-transparent">



    <!-- Navigation -->


    <!--Main Navigation-->
    <header>
        @include('partials.nav_dashboard')
        @include('partials.user_sidebar')
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>



        <div class="container-fluid  " style="height:100%">

            <!--Section: Team v.1-->
            <section class="section team-section">

                <!--Grid row-->
                <div class="row text-center">

                    <!-- Grid column -->
                    <div class="col-md-12 mb-12">


                        <!--Card-->
                        <div class="card card-cascade narrower custom-primary mb-4">

                            <!--Card header-->
                            <div
                                class="view view-cascade py-3 gradient-card-header custom-tertiary mx-4 d-flex justify-content-between align-items-center">


                                <a href="" class="white-text mx-3">Status</a>

                                <div>
                                    <button type="button" id="new" class="btn btn-outline-white btn-rounded btn-sm px-2">
                                        <span>new</span>
                                        <i class="fas custom-secondary-text fa-ban mt-0"></i>
                                    </button>
                                    <button id="delete" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                                        <span>edit</span>
                                        <i class="fas custom-secondary-text fa-unlock-alt mt-0"></i>
                                    </button>

                                </div>


                            </div>
                            <!--/Card header-->

                            <!--Card content-->
                            <!--Body-->
                            <div class="modal-body" style="height:800px">
                                <div class="card custom-primary" style="height:800px">
                                    <div class="card-body p-5 mt-5 text-center">
                                        <img class="mb-5" src="{{url('img/folder.png')}}" alt="file" height="200px" width="200px">
                                        <h3 class="h3-responsive">Application Status: <!-- Change the badges --> 
                                            <span class=' @if(auth::user()->applicationdetail->status == "In progress") badge badge-primary @endif
                                                        @if(auth::user()->applicationdetail->status == "Rejected") badge badge-danger @endif
                                                        @if(auth::user()->applicationdetail->status == "Approved under Payment") badge badge-primary @endif
                                                        @if(auth::user()->applicationdetail->status == "Paid under Registration") badge badge-primary @endif
                                                        @if(auth::user()->applicationdetail->status == "Registered") badge badge-success @endif
                                            rounded-pill ml-3'>{{ auth::user()->applicationdetail->status}}</span> 
                                        </h3>
                                    
                                    <div>
                                        <div class="m-5">
                                            <i class="fas fa-angle-double-down fa-2x custom-tertiary-text"></i>
                                        </div>
                                        <div>
                                            @if ( auth::user()->applicationdetail->status == "Approved under Payment")
                                                <button type="button" id="new" class="btn custom-secondary btn-rounded  p-3" data-toggle='modal' data-target='#payment_details'>Send Payment Details<i class="fas fa-paper-plane ml-2"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!-- Grid column -->



                </div>
                <!--Grid row-->

            </section>
            <!--Section: Team v.1-->

        </div>
    </main>
    <!--Main layout-->
    <!-- Main layout -->

    <!-- Footer -->
    @include('partials.footer_dashboard')
    @include('modal_partials.payment_details')
    <!-- Footer -->

    <!-- SCRIPTS -->

    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    @include('partials.head')
    <title>Applications</title>

    <style>
        .pagination .page-item.active .page-link {
            background-color: #3d5e9e !important;
        }


        .mt-5 {
            margin-top: 6rem !important;
        }


        .btn.btn-sm {
            padding: .7rem !important;
            font-size: .7rem !important;
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {

            bottom: -0.1em !important;

        }


        .pagination .page-item.active .page-link {
            background-color: #3d5e9e !important;
        }


        td {
            color: #fff !important;
        }

    </style>
</head>

<body class="fixed-sn custom-primary-transparent ">

    <form id="temp" class="form-inline md-form form-sm active-cyan active-cyan-2 mt-2">

        <i class="fas custom-secondary-text fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-25" type="text" placeholder="Search" aria-label="Search">

    </form>

    <!-- Navigation -->
    



        <!--Main Navigation-->
        <header>
            @include('partials.nav_dashboard')
            @include('partials.rms_sidebar')
        </header>
        <!--Main Navigation-->

        <!--Main layout-->
        <main class="">



            <div class="container-fluid  ">

                <!--Section: Team v.1-->
                <section class="section team-section">

                    <!--Grid row-->
                    <div class="row text-center">

                        <!-- Grid column -->
                        <div class="col-md-12 mb-12">


                            <!--Card-->
                            <div class="card card-cascade narrower custom-primary mb-5">

                                <!--Card header-->
                                <div
                                    class="view view-cascade py-3 gradient-card-header custom-tertiary mx-4  align-items-center">

                                    <a href="" class="white-text mx-3 ">Applications</a>



                                </div>
                                <!--/Card header-->

                                <!--Card content-->
                                <!--Body-->
                                <div class="modal-body ">
                                    <div class="card custom-primary">
                                        <div class="card-body ">
                                            <div class="table-responsive"   style="min-height:650px;">
                                                <table id="example" class="table table-striped" cellspacing="0" width="100%">
                                                </table>
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
        @include('partials.footer')
        <script type="text/javascript" src={{url("../data_table/datatables.js")}}></script>
        <script type="text/javascript" src={{url("../js/addons/datatables-select.min.js")}}></script>
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




            $(document).ready(function () {

                // office name,fullname, status, view


                var dataSet = [

                    @if(isset($user))
                        @foreach ($user as $user)[
                            "{{$user->userdetail->fullname}}","{{$user->shippingoffice->name}}",
                            "<h5><span class='badge badge-pill badge-danger'>{{$user->applicationdetail->status}}</span></h5>",
                            "<a href={{url('/rms/application')}}><button class='btn btn-sm btn-rounded amber waves-effect black-text' >View</button></a>"
                        ],
                        @endforeach
                    @endif

                ];

                var columnDefs = [{
                        title: "<h5 class='font-weight-bold custom-secondary-text'>Full name</h5>"
                    },
                    {
                        title: "<h5 class='font-weight-bold custom-secondary-text'>Office name</h5>"
                    },
                    {
                        title: "<h5 class='font-weight-bold custom-secondary-text'>Status</h5>"
                    },
                    {
                        title: "<h5 class='font-weight-bold custom-secondary-text'>View</h5>"
                    },
                ];

                var myTable;

                myTable = $('#example').DataTable({

                    "sPaginationType": "full_numbers",
                    data: dataSet,
                    columns: columnDefs,
                    dom: 'Bfrtip', // Needs button container
                    select: 'single',
                    responsive: true,
                    altEditor: true, // Enable altEditor


                });

                $("button span:contains('Copy')").parent().removeClass('dt-button ');
                $("button span:contains('Excel')").parent().removeClass('dt-button ');
                $("button span:contains('CSV')").parent().removeClass('dt-button ');
                $("button span:contains('PDF')").parent().removeClass('dt-button ');
                $("button span:contains('Print')").parent().removeClass('dt-button ');




                $("button span:contains('Copy')").parent().addClass('btn btn-rounded waves-effect ');
                $("button span:contains('Excel')").parent().addClass('btn btn-rounded  waves-effect ');
                $("button span:contains('CSV')").parent().addClass('btn  btn-rounded waves-effect ');
                $("button span:contains('PDF')").parent().addClass('btn  btn-rounded waves-effect ');
                $("button span:contains('Print')").parent().addClass('btn btn-rounded  waves-effect ');


                $("button span:contains('Copy')").parent().css('background', '#3d5e9e');
                $("button span:contains('Excel')").parent().css('background', '#3d5e9e ');
                $("button span:contains('CSV')").parent().css('background', '#3d5e9e ');
                $("button span:contains('PDF')").parent().css('background', '#3d5e9e');
                $("button span:contains('Print')").parent().css('background', '#3d5e9e');

                $("button span:contains('Copy')").addClass(' white-text');
                $("button span:contains('Excel')").addClass(' white-text');
                $("button span:contains('CSV')").addClass(' white-text');

                $("button span:contains('PDF')").addClass(' white-text');
                $("button span:contains('Print')").addClass(' white-text');

                //   $(".dt-buttons").css({display: "none"});

            });

        </script>
</body>

</html>

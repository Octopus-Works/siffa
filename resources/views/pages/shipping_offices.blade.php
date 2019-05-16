<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    @include('partials.head')
    <title>Shipping Offices</title>
    <link href={{url("../css/addons/datatables.min.css")}} rel="stylesheet">
    <!-- DataTables Select CSS -->
    <link href={{url("../css/addons/datatables-select.min.css")}} rel="stylesheet">
    <!-- DataTables Select CSS -->

    <style>
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


    </style>


</head>

<body class="">

    <!-- Navigation -->
    <header>



        <!--Main Navigation-->
        <header>
            @include('partials.nav')
        </header>
        <!--Main Navigation-->

        <main>
            <div class="view" style="background-image:url('img/7.jpg'); background-repeat:no-repeat;background-size: cover; background-position: center center;" data-jarallax='{"speed": 0.2}'>
                <div class="container p-5" style="height:900px">
                    <div class="mask flex-center rgba-black-slight">
                        <div class="container mb-5 mt-5 ">


                            <!--Card-->
                            <div class="card card-cascade narrower custom-primary-transparent mt-5 mb-5">

                                <!--Card header-->
                                <div
                                    class="view view-cascade py-3 gradient-card-header custom-primary mx-4 d-flex justify-content-between align-items-center">

                                    <a href="" class="custom-secondary-text mx-3 h3-responsive">Shipping Offices</a>


                                </div>
                                <!--/Card header-->

                                <!--Card content-->
                                <!--Body-->
                                <div class="modal-body">
                                    <table id="example" class="mdl-data-table text-center" style="width:100%">

                                    </table>


                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->

                            </section>
                            <!--Section: Table-->

                        </div>
                    </div>
                </div>



        </main>
        <!-- Main layout -->

        <!-- Footer -->
        @include('partials.footer')

        <!-- Footer -->

        <!-- SCRIPTS -->

        <script type="text/javascript" src={{url("../data_table/datatables.js")}}></script>
        <!-- DataTables.net -->
        <script type="text/javascript" src={{url("../js/addons/datatables-select.min.js")}}></script>
        <script>
            $(document).ready(function () {




                var dataSet = [
                    @if ( @isset($users))
                        @foreach($users as $user)[
                            "{{ $user->shippingoffice->name }}",
                            "{{ $user->shippingoffice->addresses }}",
                            `<a href='{{url('company_info').'/'.$user->id}}' class='btn btn-sm btn-rounded custom-secondary waves-effect black-text'>View</a>`
                        ],
                        @endforeach
                    @endif

                ];

                var columnDefs = [{
                        title: "<h5 class='font-weight-bold custom-secondary-text'>Title</h5>"
                    },
                    {
                        title: "<h5 class='font-weight-bold custom-secondary-text'>Working Location</h5>"
                    },
                    {

                    }
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
        <!-- Search form -->
        <form id="temp" class="form-inline md-form form-sm active-cyan active-cyan-2 mt-2">
            <i class="fas custom-secondary-text fa-search ml-auto" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-2 w-35" type="text" placeholder="Search" aria-label="Search">
        </form>

</body>

</html>

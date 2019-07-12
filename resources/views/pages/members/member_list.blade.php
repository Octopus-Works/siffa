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
        
        .mt-5{
            margin-top:8rem!important;
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








        .md-form input[type=date],
        .md-form input[type=datetime-local],
        .md-form input[type=email],
        .md-form input[type=number],
        .md-form input[type=password],
        .md-form input[type=search-md],
        .md-form input[type=search],
        .md-form input[type=tel],
        .md-form input[type=text],
        .md-form input[type=time],
        .md-form input[type=url],
        .md-form textarea.md-textarea {
            color: snow !important
        }


        .md-form .prefix.active,
        .md-form textarea~label.active,
        .md-form.md-outline .prefix:focus,
        .md-form.md-outline input[type=date]:focus:not([readonly])+label,
        .md-form.md-outline input[type=datetime-local]:focus:not([readonly])+label,
        .md-form.md-outline input[type=email]:focus:not([readonly])+label,
        .md-form.md-outline input[type=number]:focus:not([readonly])+label,
        .md-form.md-outline input[type=password]:focus:not([readonly])+label,
        .md-form.md-outline input[type=search-md]:focus:not([readonly])+label,
        .md-form.md-outline input[type=search]:focus:not([readonly])+label,
        .md-form.md-outline input[type=tel]:focus:not([readonly])+label,
        .md-form.md-outline input[type=text]:focus:not([readonly])+label,
        .md-form.md-outline input[type=time]:focus:not([readonly])+label,
        .md-form.md-outline input[type=url]:focus:not([readonly])+label,
        .md-form.md-outline textarea.md-textarea:focus:not([readonly])+label {
            color: #ffc107 !important;
        }


        .md-form input[type=date]:focus:not([readonly]),
        .md-form input[type=datetime-local]:focus:not([readonly]),
        .md-form input[type=email]:focus:not([readonly]),
        .md-form input[type=number]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]),
        .md-form input[type=search-md]:focus:not([readonly]),
        .md-form input[type=search]:focus:not([readonly]),
        .md-form input[type=tel]:focus:not([readonly]),
        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=time]:focus:not([readonly]),
        .md-form input[type=url]:focus:not([readonly]),
        .md-form textarea.md-textarea:focus:not([readonly]) {
            -webkit-box-shadow: 0 1px 0 0 #ffc107;
            box-shadow: 0 1px 0 0 #ffc107;
            border-bottom: 1px solid #ffc107;
            color: whitesmoke !important;
        }

        .md-form input[type=date]:focus:not([readonly])+label,
        .md-form input[type=datetime-local]:focus:not([readonly])+label,
        .md-form input[type=email]:focus:not([readonly])+label,
        .md-form input[type=number]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label,
        .md-form input[type=search-md]:focus:not([readonly])+label,
        .md-form input[type=search]:focus:not([readonly])+label,
        .md-form input[type=tel]:focus:not([readonly])+label,
        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=time]:focus:not([readonly])+label,
        .md-form input[type=url]:focus:not([readonly])+label,
        .md-form textarea.md-textarea:focus:not([readonly])+label {
            color: #ffc107 !important;
        }

        .form-control {
            color: whitesmoke !important;
        }

        .custom-control-label::before {
            background-color: #ffffff00 !important;
        }

        .md-form label {
            color: #dedede !important;
        }

        .custom-control-label::after {
            cursor: initial;
        }

    </style>


</head>

<body>

    <!-- Navigation -->
    <header>



        <!--Main Navigation-->
        <header>
            @include('partials.nav')
        </header>
        <!--Main Navigation-->

        <main>
            <div class="view"
                style="background-image:url('img/7.jpg'); background-repeat:no-repeat;background-size: cover; background-position: center center;">
                <div class="container mt-5 p-5" style="height:900px">
                    <div class="mask flex-center rgba-black-slight">
                        <div class="container mb-5 mt-5 ">


                            <!--Card-->
                            <div class="card card-cascade narrower custom-primary-transparent mt-5 mb-5">

                                <!--Card header-->
                                <div
                                    class="view view-cascade py-3 gradient-card-header custom-primary mx-4 d-flex justify-content-between align-items-center">

                                    <a href="" class="custom-secondary-text mx-3 h3-responsive">Shipping Offices</a>

                                    <div>
                                        <button type="button" id="new"
                                            class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal"
                                            data-target="#modal_filter">
                                            <span>filter</span>
                                            <i class="fas fa-sliders-h mt-0"></i>
                                        </button>


                                    </div>
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



        <style>
            .close {
                float: right;
                font-size: 1.5rem;
                font-weight: 700;
                line-height: 1;
                color: #ffc107;
                text-shadow: 0 1px 0 #ffc107;
                opacity: .5;
            }

            .md-form input[type=date],
            .md-form input[type=datetime-local],
            .md-form input[type=email],
            .md-form input[type=number],
            .md-form input[type=password],
            .md-form input[type=search-md],
            .md-form input[type=search],
            .md-form input[type=tel],
            .md-form input[type=text],
            .md-form input[type=time],
            .md-form input[type=url],
            .md-form textarea.md-textarea {
                color: snow !important
            }


            .md-form .prefix.active,
            .md-form textarea~label.active,
            .md-form.md-outline .prefix:focus,
            .md-form.md-outline input[type=date]:focus:not([readonly])+label,
            .md-form.md-outline input[type=datetime-local]:focus:not([readonly])+label,
            .md-form.md-outline input[type=email]:focus:not([readonly])+label,
            .md-form.md-outline input[type=number]:focus:not([readonly])+label,
            .md-form.md-outline input[type=password]:focus:not([readonly])+label,
            .md-form.md-outline input[type=search-md]:focus:not([readonly])+label,
            .md-form.md-outline input[type=search]:focus:not([readonly])+label,
            .md-form.md-outline input[type=tel]:focus:not([readonly])+label,
            .md-form.md-outline input[type=text]:focus:not([readonly])+label,
            .md-form.md-outline input[type=time]:focus:not([readonly])+label,
            .md-form.md-outline input[type=url]:focus:not([readonly])+label,
            .md-form.md-outline textarea.md-textarea:focus:not([readonly])+label {
                color: #ffc107 !important;
            }


            .md-form input[type=date]:focus:not([readonly]),
            .md-form input[type=datetime-local]:focus:not([readonly]),
            .md-form input[type=email]:focus:not([readonly]),
            .md-form input[type=number]:focus:not([readonly]),
            .md-form input[type=password]:focus:not([readonly]),
            .md-form input[type=search-md]:focus:not([readonly]),
            .md-form input[type=search]:focus:not([readonly]),
            .md-form input[type=tel]:focus:not([readonly]),
            .md-form input[type=text]:focus:not([readonly]),
            .md-form input[type=time]:focus:not([readonly]),
            .md-form input[type=url]:focus:not([readonly]),
            .md-form textarea.md-textarea:focus:not([readonly]) {
                -webkit-box-shadow: 0 1px 0 0 #ffc107;
                box-shadow: 0 1px 0 0 #ffc107;
                border-bottom: 1px solid #ffc107;
                color: whitesmoke !important;
            }

            .md-form input[type=date]:focus:not([readonly])+label,
            .md-form input[type=datetime-local]:focus:not([readonly])+label,
            .md-form input[type=email]:focus:not([readonly])+label,
            .md-form input[type=number]:focus:not([readonly])+label,
            .md-form input[type=password]:focus:not([readonly])+label,
            .md-form input[type=search-md]:focus:not([readonly])+label,
            .md-form input[type=search]:focus:not([readonly])+label,
            .md-form input[type=tel]:focus:not([readonly])+label,
            .md-form input[type=text]:focus:not([readonly])+label,
            .md-form input[type=time]:focus:not([readonly])+label,
            .md-form input[type=url]:focus:not([readonly])+label,
            .md-form textarea.md-textarea:focus:not([readonly])+label {
                color: #ffc107 !important;
            }

            .form-control {
                color: whitesmoke !important;
            }




            .modal-content {
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                width: 100%;
                pointer-events: auto;
                background-color: unset !important;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, .2);
                border-radius: .3rem;
                outline: 0;
            }

        </style>
        <div class="modal fade mt-5" id="modal_filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">



            <div class="modal-dialog modal-lg  custom-primary" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold custom-secondary-text">Filter</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>



                    <!--Body-->
                    <div class="modal-body container text-center ">



                        <div class="row   ">
                            <div class="md-form col-12 ml-auto ">
                                <h6 class="font-weight-bold custom-secondary-text">Available Shipping Methods:</h6>
                                <div class="custom-control custom-checkbox ml-4">
                                    <input type="checkbox" class="custom-control-input" id="method1"
                                        name="shipping_methods[]" value="LTL">
                                    <label class="custom-control-label" for="method1">Less Than Track Load(LTL)</label>
                                </div>
                                <div class="custom-control custom-checkbox ml-4">
                                    <input type="checkbox" class="custom-control-input" id="method2"
                                        name="shipping_methods[]" value="FTL">
                                    <label class="custom-control-label" for="method2">Full Track Load(FTL)</label>
                                </div>
                            </div>
                            <div class="md-form col-12 ml-auto">
                                <h6 class="font-weight-bold custom-secondary-text">External Shipping Modes:</h6>
                                <div class="custom-control custom-checkbox ml-4">

                                    <input type="checkbox" class="custom-control-input" id="mode1"
                                        name="shipping_modes[]" value="Wild">
                                    <label class="custom-control-label" for="mode1">Land Transport</label>
                                </div>
                                <div class="custom-control custom-checkbox ml-4">
                                    <input type="checkbox" class="custom-control-input" id="mode2"
                                        name="shipping_modes[]" value="Aerial">
                                    <label class="custom-control-label" for="mode2">Air Transport</label>
                                </div>
                                <div class="custom-control custom-checkbox ml-4">
                                    <input type="checkbox" class="custom-control-input" id="mode3"
                                        name="shipping_modes[]" value="Nautical">
                                    <label class="custom-control-label" for="mode3">Water Transport</label>
                                </div>
                            </div>

                        </div>


                    </div>



                    <div class="modal-footer d-flex justify-content-center">
                        <button type="" class="btn btn-rounded custom-secondary black-text" data-dismiss="modal">close
                        </button>
                        <button type="" id="replay" class="btn btn-rounded custom-secondary black-text"
                            data-dismiss="modal">filter </button>

                    </div>
                    </form>
                </div>
            </div>
        </div>












        <script type="text/javascript" src={{url("../data_table/datatables.js")}}></script>
        <!-- DataTables.net -->
        <script type="text/javascript" src={{url("../js/addons/datatables-select.min.js")}}></script>
        <script>
            $(document).ready(function () {



                var dataSet = [
                    @if(@isset($users))
                    @foreach($users as $user)[


                        `{{ $user->shippingoffice->name }}`,
                        `{{ $user->shippingoffice->city }}`,
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

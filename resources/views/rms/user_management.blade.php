<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags always come first -->
    @include('partials.head')
    <title>Account Information</title>

    <style>
        .pagination .page-item.active .page-link {
            background-color: #3d5e9e !important;
        }

        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);

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

        td {
            color: white !important;
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

        .elegant-color-dark {
            background-color: #3d5e9e !important;
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

        .fas {
            color: #ffc107 !important;
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

        .text-center {
            text-align: center !important;
        }



        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #FFA000 !important;
            text-shadow: 0 0px 0 #fff !important;
            opacity: .9 !important;
        }

    </style>
</head>

<body class="fixed-sn custom-primary-transparent ">

    <form id="temp" class="form-inline md-form form-sm active-cyan active-cyan-2 mt-2">

        <i class="fas custom-secondary-text fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-25" type="text" placeholder="Search" aria-label="Search">

    </form>

    <!-- Navigation -->
    <header>



        <!--Main Navigation-->
        <header>
            @include('partials.nav_dashboard')
            @include('partials.rms_sidebar')
        </header>
        <!--Main Navigation-->

        <!--Main layout-->
        <main class="">



            <div class="container-fluid   ">

                <!--Section: Team v.1-->
                <section class="section team-section ">

                    <!--Grid row-->
                    <div class="row text-center">

                        <!-- Grid column -->
                        <div class="col-md-12 mb-12">


                            <!--Card-->
                            <div class="card card-cascade narrower custom-primary mb-5">

                                <!--Card header-->
                                <div
                                    class="view view-cascade py-3 custom-primary gradient-card-header elegant-color-dark mx-4 d-flex justify-content-between align-items-center ">


                                    <a href="" class="white-text mx-3">Messages</a>

                                    <div>
                                        <button type="button" id="edit" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#modalConfirmBlock">
                                            <span>block</span>
                                            <i class="fas fa-ban mt-0"></i>
                                        </button>
                                        <button id="delete" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#modalConfirmUnblock">
                                            <span>unblock</span>
                                            <i class="fas fa-unlock-alt "></i>
                                        </button>
                                        <button id="editrole" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#modaleditrole">
                                            <span>change role</span>
                                            <i class="fas fa-unlock-alt mt-0"></i>
                                        </button>
                                    </div>


                                </div>
                                <!--/Card header-->

                                <!--Card content-->
                                <!--Body-->
                                <div class="modal-body">
                                    <div class="card custom-primary">
                                        <div class="card-body">
                                            <div class="table-responsive"  style="min-height:650px;">
                                                <table id="example" class="table table-striped" cellspacing="0" width="100%" >
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

        <!-- Footer -->
        @include('partials.footer_dashboard')
        @include('modal_partials.change_role_modal')
        @include('modal_partials.confirm_ban_modal')
        @include('modal_partials.confirm_unblock_modal')

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


                var dataSet = [
                    @if(isset($user))
                        @foreach ($user as $user)[
                            "{{$user->id}}",
                            "{{$user->userdetail->fullname}}",
                            "{{$user->userdetail->father_name}}",
                            "{{$user->userdetail->mother_name}}",
                            "{{$user->shippingoffice->city}}",
                            "{{$user->shippingoffice->name}}",
            
                        ],
                        @endforeach
                    @endif
                ];

                var columnDefs = [{
                        responsivePriority: 6, title: "<h5 class='font-weight-bold custom-secondary-text'>Id</h5>"
                    },
                    {
                        responsivePriority: 1, title: "<h5 class='font-weight-bold custom-secondary-text'>Full name</h5>"
                    },
                    {
                        responsivePriority: 4, title: "<h5 class='font-weight-bold custom-secondary-text'>Father name</h5>"
                    },
                    {
                        responsivePriority: 5, title: "<h5 class='font-weight-bold custom-secondary-text'>Mother name</h5>"
                    },
                    {
                        responsivePriority: 3, title: "<h5 class='font-weight-bold custom-secondary-text'>Address</h5>"
                    },
                    {
                        responsivePriority: 2, title: "<h5 class='font-weight-bold custom-secondary-text'>Office name</h5>"
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

                var table = $('#example').DataTable();

                var flag = false;
                $('#edit').prop("disabled", true);
                $('#delete').prop("disabled", true);
                $('#editrole').prop("disabled", true);

                //   $('#example tbody').on( 'click', 'tr', function () {
                //        console.log( table.row( this ).data()[0] );
                //    } );
                //row selection
                $('#example tbody').on('click', 'tr', function () {
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                    $('#edit').prop("disabled", true);
                    $('#delete').prop("disabled", true);
                    $('#editrole').prop("disabled", true);



                } else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                    $('#edit').prop("disabled", false);
                    $('#delete').prop("disabled", false);
                    $('#editrole').prop("disabled", false);

                }
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

        <script>
            $(document).ready(function () {
                var $checks1 = $('#roles').find('input[value="admin"]').click(function () {
                    $checks2.prop('disabled', $checks1.is(':checked'));
                });
                var $checks2 = $('#roles').find('input[value="user"], input[value="manager"]').click(
            function () {
                    $checks1.prop('disabled', $checks2.is(':checked'));

                });

                var $checks3 = $('#roles').find('input[value="user"]').click(function () {
                    $checks4.prop('disabled', $checks3.is(':checked'));
                });
                var $checks4 = $('#roles').find('input[value="admin"], input[value="manager"]').click(
                function () {
                    $checks3.prop('disabled', $checks4.is(':checked'));

                });

                var $checks5 = $('#roles').find('input[value="manager"]').click(function () {
                    $checks6.prop('disabled', $checks5.is(':checked'));
                });
                var $checks6 = $('#roles').find('input[value="user"], input[value="admin"]').click(function () {
                    $checks5.prop('disabled', $checks6.is(':checked'));

                });
            });

            function viewChecked() {
                $('.ami:checked').each(function () {
                    var table = $('#example').DataTable();
                    id = table.row('.selected').data()[0];
                    var json = id;
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        url: '/admin/change_role',
                        data: JSON.stringify({
                            id: json,
                            role: $(this).val(),
                        }),
                        contentType: "application/json;",
                        dataType: "json",
                        statusCode: {
                            401: function () {
                                window.location = '/login';
                            },
                            500: function () {
                                console.log('500 status code! server error');
                            },
                            200: function (msg) {

                                location.reload();
                            },
                        },

                    });
                });
            }

            //modal confirm delete
            $("#yes-button-block").click(function () {
                var table = $('#example').DataTable();
                id = table.row('.selected').data()[0];
                var json = id;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '/rms/user_management/block/'+ json,
                    data: JSON.stringify({
                        id: json,
                    }),
                    contentType: "application/json;",
                    dataType: "json",
                    statusCode: {
                        401: function () {
                            window.location = '/login';
                        },
                        500: function () {
                            console.log('500 status code! server error');
                        },
                        200: function (msg) {
                            console.log("Success");
                        },
                    },

                });



            });


            $("#yes-button-unblock").click(function () {
                var table = $('#example').DataTable();
                id = table.row('.selected').data()[0];
                var json = id;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '/rms/user_management/unblock/'+ json,
                    data: JSON.stringify({
                        id: json,
                    }),
                    contentType: "application/json;",
                    dataType: "json",
                    statusCode: {
                        401: function () {
                            window.location = '/login';
                        },
                        500: function () {
                            console.log('500 status code! server error');
                        },
                        200: function (msg) {
                            console.log("Success");
                        },
                    },

                });

            });

        </script>

</body>

</html>

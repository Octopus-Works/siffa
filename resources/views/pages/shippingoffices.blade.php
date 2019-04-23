<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    @include('incs.head')

    <link href={{url("../css/addons/datatables.min.css")}} rel="stylesheet">
    <!-- DataTables Select CSS -->
    <link href={{url("../css/addons/datatables-select.min.css")}} rel="stylesheet">
    <!-- DataTables Select CSS -->

    <style>







table.dataTable thead .sorting:after, table.dataTable thead .sorting:before, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_desc_disabled:after, table.dataTable thead .sorting_desc_disabled:before {

    bottom: -0.1em !important;

}




        .red-text {
            color: #DD2428 !important;
        }

        .red {
            background-color: #DD2428 !important;
        }

        .black {
            background-color: #231F20 !important;
        }

        .white {
            background-color: #ffffff !important;
        }

        .btn-black{
            background: #646464 !important;
        }

        .btn-primary {
            background:#55acee!important;
            color: #fff !important;
        }



    </style>


</head>

<body class="">

<!-- Navigation -->
<header>



      <!--Main Navigation-->
      <header>
            @include('incs.nav')
            <div class="view jarallax" style="height: 100vh;">
                <img class="jarallax-img" src="https://mdbootstrap.com/img/Photos/Others/img%20%2844%29.jpg" alt="">
                <div class="mask rgba-blue-slight">
                    <div class="container flex-center text-center">
                        <div class="row mt-5">
                            <div class="col-md-12 wow fadeIn mb-3">
                                <h1 class="display-3 mb-2 wow fadeInDown" data-wow-delay="0.3s">NATALIE <a
                                        class="indigo-text font-weight-bold">SMITH</a></h1>
                                <h5 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn" data-wow-delay="0.4s">Web
                                    developer & graphic designer</h5>
                                <a class="btn btn-light-blue btn-lg wow fadeIn" data-wow-delay="0.4s">portfolio</a> <a
                                    class="btn btn-indigo btn-lg wow fadeIn" data-wow-delay="0.4s">About me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Main Navigation-->

<main>

    <div class="container mb-5 mt-5 ">


        <!--Card-->
        <div class="card card-cascade narrower">

            <!--Card header-->
            <div class="view view-cascade py-3 gradient-card-header elegant-color-dark mx-4 d-flex justify-content-between align-items-center">

                <a href="" class="white-text mx-3">shipp offices</a>


            </div>
            <!--/Card header-->

            <!--Card content-->
            <!--Body-->
            <div class="modal-body">
                    <table id="example" class="mdl-data-table" style="width:100%">

                        </table>


            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

        </section>
        <!--Section: Table-->



</main>
<!-- Main layout -->

<!-- Footer -->
@include('incs.footer')

<!-- Footer -->

<!-- SCRIPTS -->

<script type="text/javascript" src={{url("../data_table/datatables.js")}}></script>
<!-- DataTables.net -->
<script type="text/javascript" src={{url("../js/addons/datatables-select.min.js")}}></script>
<script>

    $(document).ready(function () {




        var dataSet = [
            ["Tiger Nixon", "System Architect", "5421", "test","lol"],
            ["Tiger Nixon", "System Architect", "5421", "test","lol"],
            ["Tiger Nixon", "System Architect", "5421", "test","lol"],
            ["Tiger Nixon", "System Architect", "5421", "test","lol"], 
            ["Tiger Nixon", "System Architect", "5421", "test","lol"],
            ["Tiger Nixon", "System Architect", "5421", "test","lol"],     
           ];

        var columnDefs = [
        {
            title: "Title"
        }, 
        {
            title: "Brief Description"
        },
        {
            title: "Download"
        },
        {
            title: "Working Location"
        }, 
        {
            title: "Apply"
        }];

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




    $("button span:contains('Copy')").parent().addClass('btn  btn-rounded waves-effect ');
    $("button span:contains('Excel')").parent().addClass('btn  btn-rounded  waves-effect ');
    $("button span:contains('CSV')").parent().addClass('btn   btn-rounded waves-effect ');
    $("button span:contains('PDF')").parent().addClass('btn  btn-rounded waves-effect ');
    $("button span:contains('Print')").parent().addClass('btn  btn-rounded  waves-effect ');


    $("button span:contains('Copy')").parent().css('background', 'black ');
    $("button span:contains('Excel')").parent().css('background', 'black ');
    $("button span:contains('CSV')").parent().css('background', 'black ');
    $("button span:contains('PDF')").parent().css('background', 'black ');
    $("button span:contains('Print')").parent().css('background', 'black');

    $("button span:contains('Copy')").addClass(' text-white');
    $("button span:contains('Excel')").addClass(' text-white');
    $("button span:contains('CSV')").addClass(' text-white');

    $("button span:contains('PDF')").addClass(' text-white');
    $("button span:contains('Print')").addClass(' text-white');

     //   $(".dt-buttons").css({display: "none"});

    });





</script>
<!-- Search form -->
<form id="temp" class="form-inline md-form form-sm active-cyan active-cyan-2 mt-2">
        <i class="fas fa-search ml-auto" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-2 w-35" type="text" placeholder="Search" aria-label="Search">
    </form>

</body>

</html>

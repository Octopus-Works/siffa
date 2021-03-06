<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head_ar')

    <style>
        @media (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: unset !important;
            }

        }

    </style>

<link href='../packages/core/main.css' rel='stylesheet' />
<link href='../packages/daygrid/main.css' rel='stylesheet' />
<link href='../packages/timegrid/main.css' rel='stylesheet' />
<link href='../packages/list/main.css' rel='stylesheet' />
<script src='../packages/core/main.js'></script>
<script src='../packages/interaction/main.js'></script>
<script src='../packages/daygrid/main.js'></script>
<script src='../packages/timegrid/main.js'></script>
<script src='../packages/list/main.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'dayGrid', 'timeGrid', 'list', 'interaction' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultDate: '2019-04-12',
      navLinks: true, // can click day/week names to navigate views
      editable: false,
      locale: 'ar',

      eventLimit: true, // allow "more" link when too many events
      events: [
        @foreach ($event as $item)

{
  title: '{{$item->title_ar}}',
  start: '{{$item->start_date}}',
  end :'{{$item->end_date}}'
},

@endforeach
      ]
    });

    calendar.render();
  });

</script>
<style>



  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }




  .fc-unthemed th, .fc-unthemed td, .fc-unthemed thead, .fc-unthemed tbody, .fc-unthemed .fc-divider, .fc-unthemed .fc-row, .fc-unthemed .fc-content, .fc-unthemed .fc-popover, .fc-unthemed .fc-list-view, .fc-unthemed .fc-list-heading td {
    border-color: #1F2A3D33;

}


.fc-event {
    position: relative;
    display: block;
    font-size: .85em;
    line-height: 1.4;
    border-radius: 3px;
    border: 1px solid #ffc107;
    background: #1F2A3Dbb ;
}

.fc-event, .fc-event:hover {
    font-weight: bold;
    padding-top: 5px;
    padding-bottom: 5px;
    letter-spacing: 1.2px !important;
    color: #ffffff !important;
    text-decoration: none;
}
</style>

</head>




<body class="creative-lp">


    <!--Main Navigation-->
    <header>
            @include('partials.nav_ar')
            <div class="view jarallax" style="height: 25vh;" data-jarallax='{"speed": 0.2}'>
                <img class="jarallax-img" src='{{url('img/3.jpg')}}' alt="">
                <div class="mask rgba-blue-slight">
                    <div class="container flex-center text-center">
                        <div class="row mt-5">
                            <div class="col-md-12 wow fadeIn mb-3  custom-primary-transparent">
                                <h1 class="display-3 mb-2 wow fadeInDown text-white font-size-0" data-wow-delay="0.3s">
                                        CALENDAR</h1>
                                <h5 class="text-uppercase mb-3 mt-1 custom-secondary-text font-weight-bold wow fadeIn"
                                    data-wow-delay="0.4s">SYFFA</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Main Navigation-->



    <main>

        <div class="container">

            <div id="calendar" class="mt-5 mb-5"></div>
        </div>



        <!--Second container-->

    </main>









    @include('partials.footer_ar')


</body>

</html>

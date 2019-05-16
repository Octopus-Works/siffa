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

    </style>

<link href='../../../../public/../packages/core/main.css' rel='stylesheet' />
<link href='../../../../public/../packages/bootstrap/main.css' rel='stylesheet' />
<link href='../../../../public/../packages/timegrid/main.css' rel='stylesheet' />
<link href='../../../../public/../packages/daygrid/main.css' rel='stylesheet' />
<link href='../../../../public/../packages/list/main.css' rel='stylesheet' />
<script src='../../../../public/../packages/core/main.js'></script>
<script src='../../../../public/../packages/interaction/main.js'></script>
<script src='../../../../public/../packages/bootstrap/main.js'></script>
<script src='../../../../public/../packages/daygrid/main.js'></script>
<script src='../../../../public/../packages/timegrid/main.js'></script>
<script src='../../../../public/../packages/list/main.js'></script>
<script src='../../../../public/demos/js/theme-chooser.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar;

    initThemeChooser({

      init: function(themeSystem) {
        calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list' ],
          themeSystem: themeSystem,
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
          },
          defaultDate: '2019-04-12',
          weekNumbers: true,
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          eventLimit: true, // allow "more" link when too many events
          events: [
            {
              title: 'All Day Event',
              start: '2019-04-01'
            },
            {
              title: 'Long Event',
              start: '2019-04-07',
              end: '2019-04-10'
            },
            {
              groupId: 999,
              title: 'Repeating Event',
              start: '2019-04-09T16:00:00'
            },
            {
              groupId: 999,
              title: 'Repeating Event',
              start: '2019-04-16T16:00:00'
            },
            {
              title: 'Conference',
              start: '2019-04-11',
              end: '2019-04-13'
            },
            {
              title: 'Meeting',
              start: '2019-04-12T10:30:00',
              end: '2019-04-12T12:30:00'
            },
            {
              title: 'Lunch',
              start: '2019-04-12T12:00:00'
            },
            {
              title: 'Meeting',
              start: '2019-04-12T14:30:00'
            },
            {
              title: 'Happy Hour',
              start: '2019-04-12T17:30:00'
            },
            {
              title: 'Dinner',
              start: '2019-04-12T20:00:00'
            },
            {
              title: 'Birthday Party',
              start: '2019-04-13T07:00:00'
            },
            {
              title: 'Click for Google',
              url: 'http://google.com/',
              start: '2019-04-28'
            }
          ]
        });
        calendar.render();
      },

      change: function(themeSystem) {
        calendar.setOption('themeSystem', themeSystem);
      }

    });

  });

</script>
<style>

  body {
    margin: 0;
    padding: 0;
    font-size: 14px;
  }

  #top,
  #calendar.fc-unthemed {
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  }

  #top {
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    font-size: 12px;
    color: #000;
  }

  #top .selector {
    display: inline-block;
    margin-right: 10px;
  }

  #top select {
    font: inherit; /* mock what Boostrap does, don't compete  */
  }

  .left { float: left }
  .right { float: right }
  .clear { clear: both }

  #calendar {
    max-width: 900px;
    margin: 40px auto;
    padding: 0 10px;
  }

</style>

</head>


<body class="creative-lp">


    <!--Main Navigation-->
    <header>
        @include('partials.nav')
        <div class="view jarallax" style="height: 100vh;">
            <img class="jarallax-img" src="https://mdbootstrap.com/img/Photos/Others/img%20%2844%29.jpg" alt="">
            <div class="mask rgba-blue-slight">
                <div class="container flex-center text-center">
                    <div class="row mt-5">
                        <div class="col-md-12 wow fadeIn mb-3">
                            <h1 class="display-3 mb-2 wow fadeInDown" data-wow-delay="0.3s">About us</h1>
                            <h5 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn" data-wow-delay="0.4s">Siffa
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Main Navigation-->



    <main>

        <div class="container">

            <div id="calendar"></div>
        </div>



        <!--Second container-->

    </main>









    @include('partials.footer')


</body>

</html>

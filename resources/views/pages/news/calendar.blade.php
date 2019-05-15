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
    <script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/plugins/moment.min.js"></script>
    <script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/plugins/fullcalendar.min.js"></script>
    <script>
$('#calendar').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
    },
    defaultDate: '2018-11-16',
    navLinks: true,
    editable: true,
    eventLimit: true,
    events: [{
            title: 'All Day Event',
            start: '2018-11-01'
        },
        {
            title: 'Long Event',
            start: '2018-11-07',
            end: '2018-11-10'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2018-11-09T16:00:00'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2018-11-16T16:00:00'
        },
        {
            title: 'Conference',
            start: '2018-11-11',
            end: '2018-11-13'
        },
        {
            title: 'Meeting',
            start: '2018-11-12T10:30:00',
            end: '2018-11-12T12:30:00'
        },
        {
            title: 'Lunch',
            start: '2018-11-12T12:00:00'
        },
        {
            title: 'Meeting',
            start: '2018-11-12T14:30:00'
        },
        {
            title: 'Happy Hour',
            start: '2018-11-12T17:30:00'
        },
        {
            title: 'Dinner',
            start: '2018-11-12T20:00:00'
        },
        {
            title: 'Birthday Party',
            start: '2018-11-13T07:00:00'
        },
        {
            title: 'Click for Google',
            url: 'https://google.com/',
            start: '2018-11-28'
        }
    ]
});    
    
    </script>

</body>

</html>

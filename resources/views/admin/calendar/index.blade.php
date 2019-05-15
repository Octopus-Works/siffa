@extends('voyager::master')

@section('page_title', 'Calendar')

@section('css')

@endsection
@section('content')
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')

<script src='/js/rrule.js'></script>

<script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list', 'rrule' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listMonth'
      },
      defaultDate: '2019-04-12',
      editable: true,
      events: [
        {
          title: 'rrule event',
          rrule: {
            dtstart: '2019-04-09T13:00:00',
            freq: 'weekly'
          },
          duration: '02:00'
        }
      ],
      eventClick: function(arg) {
        showModal();
      }
    });

    calendar.render();
  });

</script>

@endsection
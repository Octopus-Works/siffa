@extends('voyager::master')

@section('page_title', 'Calendar')

@section('css')

<link href='/packages/core/main.css' rel='stylesheet' />
<link href='/packages/daygrid/main.css' rel='stylesheet' />
<link href='/packages/timegrid/main.css' rel='stylesheet' />
<link href='/packages/list/main.css' rel='stylesheet' />

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
                    <strong>Do Something</strong>
                </div>
                <div class="modal-footer">

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src='/js/rrule.js'></script>

<script src='/packages/core/main.js'></script>
<script src='/packages/interaction/main.js'></script>
<script src='/packages/daygrid/main.js'></script> 
<script src='/packages/timegrid/main.js'></script>
<script src='/packages/list/main.js'></script>
{{-- <script src='/packages/rrule/main.js'></script> --}}
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var eventsData = {};
    var calendar;
    ajaxData();

    /*
      
    */

    function ajaxData(){
      $.ajax({
        method : 'POST',
        url :'calendar',
        data : {
          '_token': $('meta[name="csrf-token"]').attr('content')
        },
        header : {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      }).done(response => {
        console.log();
        response = JSON.parse(response);
        eventsData = response.data;
        initializeCalendar();
      }).fail( () => {
        Swal.fire({
          title: 'Whoops..!',
          text: 'Something went wrong',
          type: 'error'
        });
      });
    }
    
    function initializeCalendar(){
      calendar= new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,listMonth'
        },
        defaultDate: '{{date('Y-m-d')}}',
        editable: true,
        events: eventsData,
        eventClick: function(arg, data) {
          showModal();
        }
      });

      calendar.render();
    }

    function showModal(){
      $('#delete_modal').modal('show');
    }
  });


</script>

@endsection
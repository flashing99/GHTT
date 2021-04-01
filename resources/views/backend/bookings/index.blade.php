@extends('backend.layouts.app')
@section('header_page_title', 'Administrateurs')


@section('include_css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Sweet Alert -->
    {{-- <link href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet"> --}}

	{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');

        //   var calendar = new FullCalendar.Calendar(calendarEl, {
        //     initialView: 'timeGridWeek'
        //     });

        var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'resourceTimelineFourDays',
        views: {
            resourceTimelineFourDays: {
            type: 'resourceTimeline',
            duration: { days: 4 }
            }
        }
        });

        //   var calendar = new FullCalendar.Calendar(calendarEl, {
        //     initialView: 'dayGridMonth'
        //   });
          calendar.render();
        });
  



      </script>

@endsection

@section('breadcrumbs', Breadcrumbs::render('bookings'))

@section('main-content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with minimal features & hover style</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">



            <div class="row">
                <div class="col-12">
                    <a href="{{ route('bookings.create') }}" class="btn btn-primary">Ajouter un nouveau booking</a>
                </div>
            </div>


            <div id='calendar'></div>



        </div>
      </div>
    </div>
</div>




@endsection

@section('include_scripts')
    
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Sweet alert -->
    {{-- <script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script> --}}





@endsection

@section('scripts')
<script type="text/javascript">
    var SITEURL = '{{URL::to('')}}';

    $(document).ready( function () {



    });
</script>
@endsection
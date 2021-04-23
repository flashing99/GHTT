@extends('backend.layouts.app')
@section('header_page_title', 'Gestion de l\'hébergement')


@section('include_css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-rowreorder/css/rowReorder.bootstrap4.min.css') }}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert/sweetalert.css') }}">

    <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css') }}">
    
	
  
@endsection

@section('breadcrumbs', Breadcrumbs::render('Housings'))

@section('main-content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Gestion de l'hébergement</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            {{-- 
            <div class="row p-b-md">
                <div class="col-lg-12 p-l-none">
                    <a href="{{ route('housings.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter un hébergement</a>
                </div>
            </div>
             --}}

            <table class="table table-bordered table-striped" id="datatable">
              <thead>
                 <tr>
                    <th>ID</th>
                    <th width="50">N°</th>
                    <th width="50">Nom</th>
                    <th>Numéro</th>
                    <th>Zone</th>
                    <th width='45'>Vip</th>
                    <th width='45'>Online</th>
                    <th width='110'>Ajouté le</th>
                    <th width='90'>Action</th>
                 </tr>
              </thead>
           </table>






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

    {{-- <script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script> --}}
    <script src="{{ asset('adminlte/plugins/datatables-rowreorder/js/dataTables.rowReorder.min.js') }}"></script>
    
    <!-- Bootstrap Switch -->
    <script src="{{ asset('adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>

    <!-- Sweet alert -->
    <script src="{{ asset('adminlte/plugins/sweetalert/sweetalert.min.js') }}"></script>





@endsection

@section('scripts')
<script type="text/javascript">
    var SITEURL = '{{URL::to('')}}';

    $(document).ready( function () {

        var listing_table   = $("#datatable");

        fill_datatable();

        function fill_datatable()
        {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            var table = listing_table.DataTable({
                // language: { 
                // url: "{{ asset('js/plugins/DataTables/French.json') }}"
                // },
                
                processing: true,
                serverSide: true,
                searching: true,
                
                oLanguage: {
                    sSearch: "Rechercher:",
                    sSearchPlaceholder: "Numero de chambre"
                },
                
                info: true,
                lengthMenu: [[10, 25, 50, 100, 200], [10, 25, 50, 100, 200]],
                dom: '<"row"<"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i> <"col-sm-12 col-md-3 text-right"B> <"col-sm-12 col-md-3 text-right"f>>r t <"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i><"col-sm-12 col-md-6"p>',//'Bfrtip',
                //dom: '<"row"<"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i> <"col-sm-12 col-md-6 text-right"B>>r t <"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i><"col-sm-12 col-md-6"p>',//'Bfrtip',
                buttons: [
                    //'excel', 'pdf', ,'print', //'copy', 'csv',
                    
                {
                    text: 'Rafraîchir',
                    action: function ( e, dt, node, config ) {
                        dt.ajax.reload();
                    }
                }
            
                ],
                ajax: {
                    //url     : SITEURL + "/Backoffice/sliders",
                    url     : "{{ route('housings.index') }}",
                    type    : 'GET',
                },
                columns: [
                        { data: 'id', name: 'id', 'visible': false },
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                        { data: 'name', name: 'name' },
                        { data: 'number', name: 'number' },
                        { data: 'area', name: 'area', searchable: false },
                        { data: 'vip', name: 'vip', searchable: false ,
                        
                            render: function(data, type, row, meta){
                                if(row.vip=='1')
                                {
                                    return '<input type="checkbox" data-id="'+row.id+'" name="vip_checkbox" data-bootstrap-switch checked>';
                                } else {
                                    return '<input type="checkbox" data-id="'+row.id+'" name="vip_checkbox" data-bootstrap-switch>';
                                }
                            },

                        },
                        { data: 'online', name: 'online', searchable: false , 
                            render: function(data, type, row, meta){
                                if(row.online=='1')
                                {
                                    return '<input type="checkbox" data-id="'+row.id+'" name="online_checkbox" data-bootstrap-switch checked>';
                                } else {
                                    return '<input type="checkbox" data-id="'+row.id+'" name="online_checkbox" data-bootstrap-switch>';
                                }
                            },

                        },
                        { data: 'created_at', name: 'created_at', searchable: false },
                        //{ data: 'state', name: 'state' },
                        { data: 'action', name: 'action', orderable: false },
                    ],
                
                order: [[7, 'desc']],

                "drawCallback": function() {

                    $("input[name='vip_checkbox']").bootstrapSwitch({
                        size : 'small',
                        onColor : 'success',
                        offColor : 'danger',
                        onText : 'Oui',
                        offText : 'Non'
                    });

                    $("input[name='online_checkbox']").bootstrapSwitch({
                        size : 'small',
                        onColor : 'success',
                        offColor : 'danger',
                        onText : 'Oui',
                        offText : 'Non'
                    });

                }                

            });
            


            // Apply the tooltips //
            //$('body').tooltip({selector: '[data-toggle="tooltip"]'});


        }

        $('body').on('switchChange.bootstrapSwitch', 'input[name="vip_checkbox"]', function(event, state) {
            if(state)
            {
                var status = 1;
            } else {
                var status = 0;
            }
            var id = $(this).attr('data-id');
            
            changeVipStatus(id, status);
        });

        function changeVipStatus(id, status){

            $.ajax({ 
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: "POST",
            url: SITEURL + "/backoffice/housings/ajax/"+id+'/vipstatus',
            data: { etat : status }, 
            dataType: "json",
            success: function (data) {
                    

                }
            }); 
        }


        $('body').on('switchChange.bootstrapSwitch', 'input[name="online_checkbox"]', function(event, state) {
            if(state)
            {
                var status = 1;
            } else {
                var status = 0;
            }
            var id = $(this).attr('data-id');
            
            changeOnileStatus(id, status);
        });

        function changeOnileStatus(id, status){

            $.ajax({ 
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: "POST",
            url: SITEURL + "/backoffice/housings/ajax/"+id+'/onlinestatus',
            data: { etat : status }, 
            dataType: "json",
            success: function (data) {
                    

                }
            }); 
        }


       /* When click edit user */
        $('body').on('click', '.edit-article', function () {
            var slider_id = $(this).data('id');
            window.location.href = SITEURL + "/backoffice/sliders/"+slider_id+"/edit";
       });


        // When click delete button
        $('body').on('click', '#delete-article', function () {
            var slider_id = $(this).data("id");

            swal({
                title: "Êtes-vous sure de vouloir supprimer?",
                text: "Attention vous allez supprimer!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#ED5565",
                confirmButtonText: "Oui, je confirme!",
                closeOnConfirm: false

                }, function () {

                $.ajax({
                    type: "DELETE",
                    url: SITEURL + "/Backoffice/sliders/"+slider_id,
                    success: function (data) {
                    listing_table.DataTable().destroy();
                    fill_datatable();

                    swal("Supprimer!", "Supprimer avec succès.", "success");
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });

            });

        });

        // When click status
        $('body').on('click', '.etat', function () {
            var elem            = $(this),
                slider_id        = elem.attr('data-id'),
                slider_status    = elem.attr('data-status');

            $.ajax({ 
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: "POST",
            url: SITEURL + "/Backoffice/sliders/ajax/"+slider_id+'/status',
            data: { etat : slider_status }, 
            dataType: "json",
            success: function (data) {
                    
                    if(data=='0'){
                        newStatus = '1';
                    } else {
                        newStatus = '0';
                    }
                    elem.attr("data-status", newStatus);

                }
            }); 

        });


    });
</script>
@endsection
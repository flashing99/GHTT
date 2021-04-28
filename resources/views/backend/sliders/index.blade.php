@extends('backend.layouts.app')
@section('header_page_title', 'Gestion des sliders')


@section('include_css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-rowreorder/css/rowReorder.bootstrap4.min.css') }}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert/sweetalert.css') }}">

	<style>
    table.dt-rowReorder-float {
    position: absolute !important;
    opacity: 0.8;
    table-layout: fixed;
    outline: 2px solid #888;
    outline-offset: -2px;
    z-index: 2001
}

tr.dt-rowReorder-moving {
    outline: 2px solid #555;
    outline-offset: -2px
}

body.dt-rowReorder-noOverflow {
    overflow-x: hidden
}

table.dataTable td.reorder {
    text-align: center;
    cursor: move
}
    </style>
  
@endsection

@section('breadcrumbs', Breadcrumbs::render('Sliders'))

@section('main-content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Gestion des sliders</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">



            <div class="row p-b-md">
                <div class="col-lg-12 p-l-none">
                    <a href="{{ route('sliders.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter un nouveau slide</a>
                </div>
            </div>
            <div id="result">
                Event result:
            </div>
            <table class="table table-bordered table-striped" id="datatable">
              <thead>
                 <tr>
                    <th>ID</th>
                    <th width="50">N°</th>
                    <th width="50">Ordre</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th width='110'>Ajouté le</th>
                    {{-- <th width='45'>Statut</th> --}}
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
                searching: false,

                retrieve: true,
                aaSorting: [],

                info: true,
                lengthMenu: [[10, 25, 50, 100, 200], [10, 25, 50, 100, 200]],
                //dom: '<"row"<"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i> <"col-sm-12 col-md-3 text-right"B> <"col-sm-12 col-md-3 text-right"f>>r t <"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i><"col-sm-12 col-md-6"p>',//'Bfrtip',
                dom: '<"row"<"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i> <"col-sm-12 col-md-6 text-right"B>>r t <"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i><"col-sm-12 col-md-6"p>',//'Bfrtip',
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
                    url     : "{{ route('sliders.index') }}",
                    type    : 'GET',
                },
      'createdRow': function(row, data, dataIndex){
        //console.log('data', data);
        $(row).attr('id', 'row-' + data.id);
      },
                columns: [
                        { data: 'id', name: 'id', 'visible': false },
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false },
                        { data: 'order', name: 'order' },
                        { data: 'picture', name: 'picture' },
                        { data: 'title', name: 'title' },
                        { data: 'created_at', name: 'created_at' },
                        //{ data: 'state', name: 'state' },
                        { data: 'action', name: 'action', orderable: false },
                    ],
                rowReorder: {
                    dataSrc: 'id'
                    //dataSrc: 'order'
                    //selector: 'tr'
                },
                order: [[2, 'ASC']]
            });
            
/*
    table.on( 'row-reorder', function ( e, diff, edit ) {

        console.log('edit : ', edit);
        console.log('diff', diff);


        var result = 'OK<br>';//'Reorder started on row: '+edit.triggerRow.data()[1]+'<br>';
 
        for ( var i=0, ien=diff.length ; i<ien ; i++ ) {
            var rowData = table.row( diff[i].node ).data();
 
            result += rowData[0]+' updated to be in position '+
                diff[i].newData+' (was '+diff[i].oldData+')<br>';
        }
 
        $('#result').html( 'Event result:<br>'+result );
    });
*/

            table.on( 'row-reorder', function ( e, diff, edit ) {
                //console.log('diff', diff);
                
                for ( var i=0, ien=diff.length ; i<ien ; i++ ) {
                    // get id row
                    let idQ = diff[i].node.id;
                    let idNewQ = idQ.replace("row-", "");
                    // get position
                    let position = diff[i].newPosition+1;
                    //call funnction to update data
                    console.log('idNewQ', idNewQ);
                    console.log('position', position);
                    updateOrder(idNewQ, position);
                }
            });

            // Apply the tooltips //
            $('body').tooltip({selector: '[data-toggle="tooltip"]'});
        }

        function updateOrder(idSlide, order){
            //$.get(SITEURL + '/backoffice/sliders/updateOrder/', { slider_id: idSlide, order: order } )
            $.get(SITEURL + '/backoffice/sliders/updateOrder/'+idSlide+'/'+order )
            .done(function( data ) {
            console.log(data);
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
                    url: SITEURL + "/backoffice/sliders/"+slider_id,
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
            url: SITEURL + "/backoffice/sliders/ajax/"+slider_id+'/status',
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
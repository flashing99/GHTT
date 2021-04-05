@extends('layouts.admin')
@section('title', 'Gestion des sliders')

@section('include_css')

    <link href="{{ asset('js/plugins/DataTables/datatables.min.css') }}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection

@section('breadcrumbs', Breadcrumbs::render('Sliders'))

@section('content')

<div class="row">

  <div class="col-lg-12">
      <div class="ibox ">
          <div class="ibox-title">
              <h5>Gestion des sliders </h5>
              <div class="ibox-tools">
                  <a class="collapse-link">
                      <i class="fa fa-chevron-up"></i>
                  </a>
              </div>
          </div>
          <div class="ibox-content">

            <div class="row p-b-md">
                <div class="col-lg-12 p-l-none">
                    <a href="{{ route('sliders.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter un nouveau slide</a>
                </div>
            </div>

            <table class="table table-bordered table-striped" id="datatable">
              <thead>
                 <tr>
                    <th>ID</th>
                    <th width="50">Ordre</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th width='100'>Ajouté le</th>
                    <th width='45'>Statut</th>
                    <th width='85'>Action</th>
                 </tr>
              </thead>
           </table>

          </div>
      </div>
  </div>

</div>

@endsection

@section('include_scripts')
    <!-- datatables -->
    <script src="{{ asset('js/plugins/DataTables/datatables.min.js') }}"></script>
    <!-- Sweet alert -->
    <script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
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

            listing_table.DataTable({
                language: { 
                url: "{{ asset('js/plugins/DataTables/French.json') }}"
                },
                processing: true,
                serverSide: true,
                searching: false,
                info: true,
                lengthMenu: [[10, 25, 50, 100, 200], [10, 25, 50, 100, 200]],
                //dom: '<"row"<"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i> <"col-sm-12 col-md-3 text-right"B> <"col-sm-12 col-md-3 text-right"f>>r t <"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i><"col-sm-12 col-md-6"p>',//'Bfrtip',
                dom: '<"row"<"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i> <"col-sm-12 col-md-6 text-right"B>>r t <"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i><"col-sm-12 col-md-6"p>',//'Bfrtip',
                buttons: [
                    'excel', 'pdf', ,'print', //'copy', 'csv',
                    
                {
                    text: 'Rafraîchir',
                    action: function ( e, dt, node, config ) {
                        dt.ajax.reload();
                    }
                }
            
                ],
                ajax: {
                    url     : SITEURL + "/admin/sliders",
                    //url     : "{{ route('sliders.index') }}",
                    type    : 'GET',
                },
                columns: [
                        { data: 'id', name: 'id', 'visible': false },
                        //{ data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false },
                        { data: 'order', name: 'order' },
                        { data: 'picture', name: 'picture' },
                        { data: 'title', name: 'title' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'state', name: 'state' },
                        { data: 'action', name: 'action', orderable: false },
                    ],
                order: [[1, 'desc']]
            });
            
            // Apply the tooltips //
            $('body').tooltip({selector: '[data-toggle="tooltip"]'});
        }

     
       /* When click edit user */
        $('body').on('click', '.edit-article', function () {
            var slider_id = $(this).data('id');
            window.location.href = SITEURL + "/admin/sliders/"+slider_id+"/edit";
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
                    url: SITEURL + "/admin/sliders/"+slider_id,
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
            url: SITEURL + "/admin/sliders/ajax/"+slider_id+'/status',
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
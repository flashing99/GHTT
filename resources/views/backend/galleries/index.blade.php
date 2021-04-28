@extends('backend.layouts.app')
@section('header_page_title', 'Gestion de la galerie')


@section('include_css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-rowreorder/css/rowReorder.bootstrap4.min.css') }}">

    <!-- Bootstrap Switch -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css') }}">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert/sweetalert.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
	
  
@endsection

@section('breadcrumbs', Breadcrumbs::render('Galleries'))

@section('main-content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Gestion de la galerie</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">



            <div class="row">
                <div class="col-lg-4">
                    <a href="{{ route('galleries.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter un nouveau media</a>
                </div>

                <div class="col-lg-8">

                    <form id="filtre">
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <select id="categorie" name="categorie" class="categorie form-control">
                                    <option></option>
                                    @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <select id="type" name="type" class="type form-control">
                                    <option></option>
                                    <option value="1">Image</option>
                                    <option value="2">Video</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-primary" id="BtnSubmitSearch"><i class="fa fa-search"></i> Rechercher</button>
                            </div>
                        </div>
                    </form>

                </div>


                
            </div>
            

            <table class="table table-bordered table-striped" id="datatable">
              <thead>
                 <tr>
                    <th>ID</th>
                    <th width="50">N°</th>
                    <th>Titre</th>
                    <th width="50">media</th>
                    <th width="120">Categorie</th>
                    <th width="50">Type</th>
                    <th width='110'>Ajouté le</th>
                    <th width='45'>Statut</th>
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
    
    <!-- Bootstrap Switch -->
    <script src="{{ asset('adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- Sweet alert -->
    <script src="{{ asset('adminlte/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>




@endsection

@section('scripts')
<script type="text/javascript">
    var SITEURL = '{{URL::to('')}}';

    $(document).ready( function () {

        var listing_table   = $("#datatable");


        $(".categorie").select2({
                theme: 'bootstrap4',
                placeholder: "Selectionner une categorie",
                allowClear: true
        });
        $(".type").select2({
                theme: 'bootstrap4',
                placeholder: "Selectionner un type de media",
                allowClear: true
        });



        fill_datatable();

        function fill_datatable(categorie = '', type = '')
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
                    //url     : SITEURL + "/Backoffice/galleries",
                    url     : "{{ route('galleries.index') }}",
                    type    : 'GET',
                    data    : {categorie:categorie, type:type}
                },
                columns: [
                        { data: 'id', name: 'id', 'visible': false },
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false },
                        { data: 'title', name: 'title' },
                        { data: 'media', name: 'media' },
                        { data: 'categorie', name: 'categorie' },
                        { data: 'type', name: 'type' },
                        { data: 'created_at', name: 'created_at' },
                        //{ data: 'state', name: 'state' },
                        { data: 'state', name: 'state', searchable: false ,
                        
                            render: function(data, type, row, meta){
                                if(row.state=='1')
                                {
                                    return '<input type="checkbox" data-id="'+row.id+'" name="state_checkbox" data-bootstrap-switch checked>';
                                } else {
                                    return '<input type="checkbox" data-id="'+row.id+'" name="state_checkbox" data-bootstrap-switch>';
                                }
                            },

                        },
                        { data: 'action', name: 'action', orderable: false },
                    ],
                order: [[5, 'desc']],
                "drawCallback": function() {

                    $("input[name='state_checkbox']").bootstrapSwitch({
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

        $('body').on('switchChange.bootstrapSwitch', 'input[name="state_checkbox"]', function(event, state) {
            if(state)
            {
                var status = 1;
            } else {
                var status = 0;
            }
            var id = $(this).attr('data-id');
            
            changeStatus(id, status);
        });

        function changeStatus(id, status){

            $.ajax({ 
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: "POST",
            url: SITEURL + "/backoffice/galleries/ajax/"+id+'/status',
            data: { etat : status }, 
            dataType: "json",
            success: function (data) {
                    

                }
            }); 
        }

        // Submit search
        $("#filtre").submit( function() {
        
            var categorie   = $('#categorie').val(),
                type        = $('#type').val();

            listing_table.DataTable().destroy();
            fill_datatable(categorie, type)

        return false
        });


     
       /* When click edit user */
        $('body').on('click', '.edit-media', function () {
            var slider_id = $(this).data('id');
            window.location.href = SITEURL + "/backoffice/galleries/"+slider_id+"/edit";
       });


        // When click delete button
        $('body').on('click', '#delete-media', function () {
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
                    url: SITEURL + "/backoffice/galleries/"+slider_id,
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
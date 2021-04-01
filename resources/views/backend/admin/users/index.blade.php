@extends('backend.layouts.app')
@section('header_page_title', 'Administrateurs')


@section('include_css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Sweet Alert -->
    {{-- <link href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet"> --}}
@endsection

@section('breadcrumbs', Breadcrumbs::render('admin'))

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
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Ajouter un nouveau utilisateur</a>
                </div>
            </div>

            <table id="admins_datatable" class="table table-bordered table-hover table-striped">
              <thead>
                 <tr>
                    <th>ID</th>
                    <th width="50">N°</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    {{-- <th>Roles</th> --}}
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

        var listing_table   = $("#admins_datatable");

        fill_datatable();

        function fill_datatable()
        {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            listing_table.DataTable({
                // language: { 
                // url: "{{ asset('js/plugins/DataTables/French.json') }}"
                // },
                processing: true,
                serverSide: true,
                searching: true,
                info: true,
                lengthMenu: [[10, 25, 50, 100, 200], [10, 25, 50, 100, 200]],
                dom: '<"row"<"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i> <"col-sm-12 col-md-3 text-right"B> <"col-sm-12 col-md-3 text-right"f>>r t <"col-sm-12 col-md-2"l> <"col-sm-12 col-md-4"i><"col-sm-12 col-md-6"p>',//'Bfrtip',
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
                    //url     : SITEURL + "/backoffice/admin/users",
                    url     : '{{ route('admin.users.index') }}',
                    type    : 'GET',
                },
                columns: [
                        { data: 'id', name: 'id', 'visible': false },
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false },
                        { data: 'lastname', name: 'nom' },
                        { data: 'firstname', name: 'prenom' },
                        { data: 'email', name: 'email' },
                        //{ data: 'roles', name: 'roles' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'etat', name: 'etat' },
                        { data: 'action', name: 'action', orderable: false },
                    ],
                order: [[1, 'desc']]
            });
            
            // Apply the tooltips //
            //$('body').tooltip({selector: '[data-toggle="tooltip"]'});
        }

     
       /* When click edit user */
        $('body').on('click', '.edit-user', function () {
            var user_id = $(this).data('id');
            window.location.href = SITEURL + "/admin/users/"+user_id+"/edit";
       });


        // When click delete button
        $('body').on('click', '#delete-user', function () {
            var user_id = $(this).data("id");

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
                    url: SITEURL + "/admin/users/"+user_id,
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
                user_id        = elem.attr('data-id'),
                user_status    = elem.attr('data-status');

            $.ajax({ 
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: "POST",
            url: SITEURL + "/admin/users/ajax/"+user_id+'/status',
            data: { etat : user_status }, 
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

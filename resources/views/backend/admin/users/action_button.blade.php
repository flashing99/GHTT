@can('edit-users')
<a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{ $id }}" data-original-title="Modifier" class="edit btn btn-success edit-user">
    <i class="fa fa-edit"></i>
</a>
@endcan

@can('delete-users')
<a href="javascript:void(0);" id="delete-user" data-toggle="tooltip" data-original-title="Supprimer" data-id="{{ $id }}" class="delete btn btn-danger">
    <i class="fa fa-trash"></i>
</a>
@endcan
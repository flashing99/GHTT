
@can('edit-galleries')
<a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{ $id }}" data-original-title="Modifier" class="edit btn btn-success edit-article">
    <i class="fa fa-edit"></i>
</a>
@endcan

@can('delete-galleries')
<a href="javascript:void(0);" id="delete-article" data-toggle="tooltip" data-original-title="Supprimer" data-id="{{ $id }}" class="delete btn btn-danger">
    <i class="fa fa-trash"></i>
</a>
@endcan
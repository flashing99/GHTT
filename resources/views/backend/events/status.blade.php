@can('edit-sliders')

    <div class="onoffswitch">
        <input type="checkbox" @if($state==1) checked @endif data-id="{{ $id }}" data-status="@if($state==1) 0 @else 1 @endif" class="etat onoffswitch-checkbox" id="status-{{ $id }}">
        <label class="onoffswitch-label" for="status-{{ $id }}">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>

@endcan
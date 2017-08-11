<?php $type = isset( $type ) ? $type:'text'; ?>

<label class="col-md-2 control-label">
    {{ $name }}
    <small style="display: block">{{ $description }}</small>
</label>
<div class="col-md-8">
    <div class="checkbox checkbox-inline">
        <input type="checkbox" id="{{$slug}}" @if($item != '') @if($item->$slug == 1) checked @endif @endif>
        <label for="done"><small>Si esta palomeada se mostrará en el sitio web.</small></label>
    </div>
</div>

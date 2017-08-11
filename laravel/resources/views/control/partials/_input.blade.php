<?php $type = isset( $type ) ? $type:'text'; ?>
<label for="{{$slug}}" class="col-md-2 control-label">{{$name}}:</label>
<div class="col-md-8">
    <input id="{{$slug}}" name="{{$slug}}" type="{{$type}}" class="form-control" value="{{ $item != ''?$item->{$slug}:'' }}">
</div>
{{--<div class="form-group">--}}
    {{----}}
{{--</div>--}}

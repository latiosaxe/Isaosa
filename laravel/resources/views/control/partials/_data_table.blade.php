<?php $type = isset( $type ) ? $type:'text'; ?>
<label for="{{$slug}}" class="col-md-2 control-label">{{$name}}:</label>
<div class="col-md-8">
    <div class="row">
        <div class="col-md-6">
            <input id="{{$copy}}" name="{{$copy}}" placeholder="Tipo, Ej: Zn" type="{{$type}}" class="form-control" value="{{ $item != ''?$item->{$copy}:'' }}">
        </div>
        <div class="col-md-6">
            <input id="{{$slug}}" name="{{$slug}}" placeholder="Valor, Ej: 1.5" type="{{$type}}" class="form-control" value="{{ $item != ''?$item->{$slug}:'' }}">
        </div>
    </div>
</div>
{{--<div class="form-group">--}}
    {{----}}
{{--</div>--}}

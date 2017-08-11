<?php $type = isset( $type ) ? $type:'text'; ?>
<label class="col-md-2 control-label">{{$name}}:</label>
<div class="col-md-8">
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control image_text_url" id="{{$slug}}_url" placeholder="Agregar una imagen -->" value="{{ $item != ''?$item->{$slug}:'' }}">
            @if($item != '')
                <img src="{{ $item->{$slug} }}" alt="preview" style="width: 150px;">
            @endif
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 text-right"><p style="margin-top: 10px;">Reemplazar/agregar</p></div>
                <div class="col-md-6">
                    <input type="file" class="form-control image_url" id="{{$slug}}">
                </div>
            </div>
        </div>
    </div>
</div>

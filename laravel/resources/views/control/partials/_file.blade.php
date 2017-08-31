<?php $type = isset( $type ) ? $type:'text'; ?>
<label class="col-md-2 control-label">{{$name}}:</label>
<div class="col-md-8">
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" id="{{$slug}}-name">
        </div>
        <div class="col-md-6">
            <input type="file" class="form-control file_url" id="{{$slug}}">
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 text-right">
                    {{--<select name="type" id="" class="type form-control">--}}
                        {{--<option value="ficha">Ficha</option>--}}
                        {{--<option value="folleto">Folleto</option>--}}
                    {{--</select>--}}
                </div>
            </div>
        </div>
    </div>
</div>

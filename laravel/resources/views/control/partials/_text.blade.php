<label class="col-md-2 control-label">{{$name}}:</label>
<div class="col-md-8">
    <textarea id="{{$slug}}" class="form-control redactor-text" placeholder="Resumen">
        {{ $item != ''?$item->{$slug}:'' }}
    </textarea>
</div>
<div class="form-group">
    @include('control.partials._input', ['item'=>$post,'slug'=>'title','name'=>'Titulo'])
</div>
<div class="form-group">
    @include('control.partials._input', ['item'=>$post,'slug'=>'description','name'=>'Subtitulo'])
</div>
<div class="form-group">
    @include('control.partials._text', ['item'=>$post,'slug'=>'body','name'=>'Resumen'])
</div>
<div class="form-group">
    @include('control.partials._image', ['item'=>$post,'slug'=>'img_thumb','name'=>'Imagen'])
</div>
<div class="form-group">
    @include('control.partials._checkbox', ['item'=>$post,'slug'=>'active','name'=>'Activa', 'description'=>' '])
</div>





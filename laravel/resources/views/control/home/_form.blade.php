<div class="form-group">
    @include('control.partials._input', ['item'=>$card,'slug'=>'title','name'=>'Titulo'])
</div>
<div class="form-group">
    @include('control.partials._input', ['item'=>$card,'slug'=>'description','name'=>'Descripción'])
</div>
{{--<div class="form-group">--}}
    {{--@include('control.partials._input', ['item'=>$card,'slug'=>'link','name'=>'Link'])--}}
{{--</div>--}}
<div class="form-group">
    @include('control.partials._image', ['item'=>$card,'slug'=>'image','name'=>'Imagen de fondo'])
</div>
<div class="form-group">
    @include('control.partials._input', ['item'=>$card,'slug'=>'position','name'=>'Posición'])
</div>
<div class="form-group">
    @include('control.partials._checkbox', ['item'=>$card,'slug'=>'active','name'=>'Activa', 'description'=>' '])
</div>





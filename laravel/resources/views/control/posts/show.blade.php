@extends('control.master')
@section('content')
    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h3>Editar publicación</h3>
        </div>

        <form id="showPost" data-id="{{ $post->id }}" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Titulo:</label>
                <div class="col-md-8">
                    <input type="text" id="title" class="form-control" placeholder="Titulo" required="required" value="{{ $post->title }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Descripción:</label>
                <div class="col-md-8">
                    <input type="text" id="description" class="form-control" placeholder="Descripción" required="required" value="{{ $post->description }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nota:</label>
                <div class="col-md-8">
                    <textarea id="body" class="form-control redactor-text" placeholder="Resumen">{{ $post->body }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Imagen:</label>
                <div class="col-md-8">
                    <div class="fakeFileInput">
                        <input type="file" class="hidden" id="image">
                        <div class="text">
                            <span>Imagen destacada</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Activa:</label>
                <div class="col-md-8">
                    <div class="checkbox checkbox-inline">
                        <input type="checkbox" id="active" @if($post->active == 1) checked @endif>
                        <label for="active"><small>Si esta palomeada se mostrará.</small></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
    {{--<div class="wrapper">--}}
        {{--<div class="page-subtitle">--}}
            {{--<h3>Sección de galería</h3>--}}
        {{--</div>--}}
        {{--<ul class="actual_leagues">--}}
            {{--@if($post->gallery)--}}
                {{--@foreach($post->gallery->images as $image)--}}
                    {{--<li><img src="{{$image->url}}" alt="{{$image->title}}"><button class="btn btn-danger deleteImage" data-image-id="{{$image->id}}" data-gallery-id="{{$post->gallery_id}}">Eliminar imagen</button></li>--}}
                {{--@endforeach--}}
            {{--@endif--}}
        {{--</ul>--}}
        {{--<form action="/api/image" class="dropzone" id="image-gallery">--}}
            {{--<div class="fallback">--}}
                {{--<input name="file" type="file" multiple />--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</div>--}}
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            TC.blog.init();
//            console.log($("#showStadium").data('id'));

        });
    </script>
@endsection
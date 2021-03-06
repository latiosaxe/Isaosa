@extends('control.master')
@section('content')
    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h3>Editar publicación</h3>
        </div>

        <form id="showElement" data-id="{{ $post->id }}" data-img="0" class="form-horizontal">
            @include('control.posts._form', ['post' => $post])
            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            var elements = ['id','title', 'description', 'resume', 'img_thumb', 'active'],
                    url = 'blog'
                    ;
            TC.main.edit(elements, url);
        });
    </script>
@endsection
@extends('control.master')
@section('content')

    <div class="wrapper">
        <div class="page-subtitle">
            <h2>Publicaciones</h2>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Nota</th>
                <th class="text-center">Estatus</th>
                <th class="text-center">Editar</th>
                {{--<th>Mostrar</th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td class="text-center">
                        @if($post->active == 1)
                            <span class="alert alert-info alert-dismissible" style="padding-right: 15px;">Activa</span>
                        @else
                            Inactiva
                        @endif
                    </td>
                    <td class="text-center"><a class="btn btn-clean btn-primary" href="{{url('control/blog/'.$post->id)}}"><i class="fa fa-pencil"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h2>Crear Publicación</h2>
        </div>
        <form id="newPost" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Titulo:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="title" placeholder="Titulo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Descripción:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="description" placeholder="Descripción">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Resumen:</label>
                <div class="col-md-8">
                    <textarea id="resume" class="form-control redactor-text" placeholder="Resumen"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Galería:</label>
                <div class="col-md-8">
                    <p>
                        * Las imagenes se suben una vez creada la galería
                    </p>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Crear nota</button>
                </div>
            </div>
        </form>
    </div>


@endsection


@section('javascript')
    <script>
        $(document).ready(function(){
            TC.blog.init();
        });
    </script>
@endsection
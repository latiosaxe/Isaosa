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
        <form id="newElement" class="form-horizontal">
            <?php $post = '' ?>
            @include('control.posts._form', ['post'=>$post])

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
            var elements = ['id','title', 'description', 'resume', 'img_thumb', 'active'],
                    url = 'blog'
                    ;
            TC.main.create(elements, url);
        });
    </script>
@endsection
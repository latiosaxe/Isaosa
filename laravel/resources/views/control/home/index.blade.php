@extends('control.master')
@section('content')
    <?php
        $name = 'Carta';
        $slug = str_slug($name);
    ?>
    <div class="wrapper">
        <div class="page-subtitle">
            <h2>{{ $name }}s</h2>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th class="text-center" style="width: 90px;">Posicion</th>
                <th class="text-center">Estatus</th>
                <th class="text-center">Editar</th>
                {{--<th>Mostrar</th>--}}
            </tr>
            </thead>
            <tbody>
                @foreach($cards as $cardList)
                    <tr>
                        <td>{{ $cardList->id }}</td>
                        <td>{{ $cardList->title }}</td>
                        <td>{{ $cardList->position }}</td>
                        <td class="text-center">
                            @if($cardList->active == 1)
                                <span class="alert alert-info alert-dismissible" style="padding-right: 15px;">Activa</span>
                            @else
                                Inactiva
                            @endif
                        </td>
                        <td class="text-center"><a class="btn btn-clean btn-primary" href="{{url('control/cartas/'.$cardList->id)}}"><i class="fa fa-pencil"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h2>Crear {{ $name }}</h2>
        </div>
        <form id="newElement" class="form-horizontal">
            <?php $card = '' ?>
            @include('control.home._form', ['card'=>$card])

            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Crear {{ $name }}</button>
                </div>
            </div>
        </form>
    </div>


@endsection


@section('javascript')
    <script>
        $(document).ready(function(){
            var elements = ['id','title', 'description', 'link', 'image', 'position'],
                url = 'cartas'
                ;
            TC.main.create(elements, url);
        });
    </script>
@endsection
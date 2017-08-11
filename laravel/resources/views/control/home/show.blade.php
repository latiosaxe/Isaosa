@extends('control.master')
@section('content')
    <?php
        $name = 'Carta'
    ?>
    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h3>Editar {{ $name }}</h3>
        </div>

        <form id="showElement" data-id="{{ $card->id }}"  class="form-horizontal">
            @include('control.home._form', ['accesory'=>$card])
            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Actualizar {{ $name }}</button>
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
            TC.main.edit(elements, url);
        });
    </script>
@endsection
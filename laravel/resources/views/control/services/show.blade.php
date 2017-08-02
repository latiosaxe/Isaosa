@extends('control.master')
@section('content')
    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h3>Editar servicio</h3>
        </div>

        <form id="showService" data-id="{{ $service->id }}" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Nombre:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="name" placeholder="Titulo" value="{{$service->name}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Resumen:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="description" placeholder="Titulo" value="{{$service->description}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Description:</label>
                <div class="col-md-8">
                    <textarea id="body" class="form-control redactor-text" placeholder="Description">
                         {{$service->body}}
                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Categoría:</label>
                <div class="col-md-8">
                    <select id="category_id" class="form-control selectpicker">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Activa:</label>
                <div class="col-md-8">
                    <div class="checkbox checkbox-inline">
                        <input type="checkbox" id="active" @if($service->active == 1) checked @endif>
                        <label for="active"><small>Si esta palomeada se mostrará.</small></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Actualizar servicio</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            TC.services.init();
        });
    </script>
@endsection
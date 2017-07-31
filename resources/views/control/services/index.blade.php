@extends('control.master')
@section('content')
    <div class="wrapper">
        <div class="page-subtitle">
            <h2>Servicios</h2>
        </div>
        <table class="table table-bordered table-sortable" data-order="[[ 0, &quot;desc&quot; ]]">
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
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->name }}</td>
                    <td class="text-center">
                        @if($service->active == 1)
                            <span class="alert alert-info alert-dismissible" style="padding-right: 15px;">Activa</span>
                        @else
                            Inactiva
                        @endif
                    </td>
                    <td class="text-center"><a class="btn btn-clean btn-primary" href="{{url('control/servicios/'.$service->id)}}"><i class="fa fa-pencil"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h2>Crear Servicio</h2>
        </div>
        <form id="newService" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Nombre:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="name" placeholder="Titulo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Resumen:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="description" placeholder="Titulo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Description:</label>
                <div class="col-md-8">
                    <textarea id="body" class="form-control redactor-text" placeholder="Description"></textarea>
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
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Crear servicio</button>
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
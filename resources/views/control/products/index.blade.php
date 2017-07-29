@extends('control.master')
@section('content')
    <div class="wrapper">
        <div class="page-subtitle">
            <h2>Productos</h2>
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
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td class="text-center">
                        @if($product->active == 1)
                            <span class="alert alert-info alert-dismissible" style="padding-right: 15px;">Activa</span>
                        @else
                            Inactiva
                        @endif
                    </td>
                    <td class="text-center"><a class="btn btn-clean btn-primary" href="{{url('control/productos/'.$product->id)}}"><i class="fa fa-pencil"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h2>Crear Productos</h2>
        </div>
        <form id="newProducts" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Nombre:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="name" placeholder="Titulo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Formula:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="formula" placeholder="Titulo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Resumen:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="description" placeholder="Titulo">
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
                <label class="col-md-2 control-label">Description:</label>
                <div class="col-md-8">
                    <textarea id="body" class="form-control redactor-text" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Caracteristicas:</label>
                <div class="col-md-8">
                    <textarea id="characteristics" class="form-control redactor-text" placeholder="Caracteristicas"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Crear producto</button>
                </div>
            </div>
        </form>
    </div>


@endsection


@section('javascript')
    <script>
        $(document).ready(function(){
            TC.products.init();
        });
    </script>
@endsection
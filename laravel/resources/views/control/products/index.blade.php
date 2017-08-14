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

    <?php $product='' ?>
    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h2>Crear Productos</h2>
        </div>
        <form id="newProduct" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Nombre:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="name" placeholder="Titulo">
                </div>
            </div>
            <div class="form-group">
                @include('control.partials._text', ['item'=>$product,'slug'=>'formula','name'=>'Formula'])
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
                <label class="col-md-2 control-label">Posición:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="position" placeholder="Posición en número">
                </div>
            </div>

            <div class="form-group">
                @include('control.partials._data_table', ['item'=>$product, 'slug'=>'table_1', 'copy'=>'table_1_copy', 'name'=>'Tabla 1'])
            </div>
            <div class="form-group">
                @include('control.partials._data_table', ['item'=>$product, 'slug'=>'table_2', 'copy'=>'table_2_copy','name'=>'Tabla 2'])
            </div>
            <div class="form-group">
                @include('control.partials._data_table', ['item'=>$product, 'slug'=>'table_3', 'copy'=>'table_3_copy','name'=>'Tabla 3'])
            </div>
            <div class="form-group">
                @include('control.partials._data_table', ['item'=>$product, 'slug'=>'table_4', 'copy'=>'table_4_copy','name'=>'Tabla 4'])
            </div>
            <div class="form-group">
                @include('control.partials._data_table', ['item'=>$product, 'slug'=>'table_5', 'copy'=>'table_5_copy','name'=>'Tabla 5'])
            </div>
            <div class="form-group">
                @include('control.partials._data_table', ['item'=>$product, 'slug'=>'table_6', 'copy'=>'table_6_copy','name'=>'Tabla 6'])
            </div>
            <div class="form-group">
                @include('control.partials._data_table', ['item'=>$product, 'slug'=>'table_7', 'copy'=>'table_7_copy','name'=>'Tabla 7'])
            </div>
            <div class="form-group">
                @include('control.partials._data_table', ['item'=>$product, 'slug'=>'table_8', 'copy'=>'table_8_copy','name'=>'Tabla 8'])
            </div>
            <div class="form-group">
                @include('control.partials._data_table', ['item'=>$product, 'slug'=>'table_9', 'copy'=>'table_9_copy','name'=>'Tabla 9'])
            </div>
            <div class="form-group">
                @include('control.partials._data_table', ['item'=>$product, 'slug'=>'table_10', 'copy'=>'table_10_copy','name'=>'Tabla 10'])
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
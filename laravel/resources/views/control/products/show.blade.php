@extends('control.master')
@section('content')
    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h3>Editar producto</h3>
        </div>

        <form id="showElement" data-id="{{ $product->id }}" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Nombre:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="name" placeholder="Titulo" value="{{ $product->name }}">
                </div>
            </div>
            <div class="form-group">
                @include('control.partials._text', ['item'=>$product,'slug'=>'formula','name'=>'Formula'])
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Resumen:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="description" placeholder="Titulo" value="{{ $product->description }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Categoría:</label>
                <div class="col-md-8">
                    <select id="category_id" class="form-control selectpicker">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Description:</label>
                <div class="col-md-8">
                    <textarea id="body" class="form-control redactor-text" placeholder="Description">
                         {{ $product->body }}
                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Caracteristicas:</label>
                <div class="col-md-8">
                    <textarea id="characteristics" class="form-control redactor-text" placeholder="Caracteristicas">
                        {{ $product->characteristics }}
                    </textarea>
                </div>
            </div>

            <div class="form-group">
                @include('control.partials._image', ['item'=>$product,'slug'=>'img_thumb','name'=>'Preview'])
            </div>
            <div class="form-group">
                @include('control.partials._image', ['item'=>$product,'slug'=>'img','name'=>'Imagen'])
            </div>


            <div class="form-group">
                <label class="col-md-2 control-label">Posición:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="position" placeholder="Posición en número" value="{{ $product->position }}">
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
                @include('control.partials._checkbox', ['item'=>$product,'slug'=>'active','name'=>'Activa', 'description'=>' '])
            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Actualizar producto</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('javascript')
    <script>
        var elements = ['id','name', 'formula', 'description', 'category_id', 'body', 'characteristics','img_thumb', 'img', 'active', 'position',
                'table_1','table_2','table_3','table_4','table_5','table_6','table_7','table_8','table_9', 'table_10',
                'table_1_copy','table_2_copy','table_3_copy','table_4_copy','table_5_copy','table_6_copy','table_7_copy','table_8_copy','table_9_copy', 'table_10_copy'],
                url = 'productos'
                ;
        TC.main.edit(elements, url);
    </script>
@endsection
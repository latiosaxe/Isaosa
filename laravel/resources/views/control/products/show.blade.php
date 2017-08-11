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
        var elements = ['id','name', 'formula', 'description', 'category_id', 'body', 'characteristics','img_thumb', 'img', 'active', 'position'],
                url = 'productos'
                ;
        TC.main.edit(elements, url);
    </script>
@endsection
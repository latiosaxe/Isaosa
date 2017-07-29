@extends('control.master')
@section('content')
    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h3>Editar producto</h3>
        </div>

        <form id="showProducts" data-id="{{ $category->id }}" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Nombre:</label>
                <div class="col-md-8">
                    <input type="text" id="name" class="form-control" placeholder="Titulo" required="required" value="{{ $category->name }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Categoria padre:</label>
                <div class="col-md-8">
                    <select id="category_id" class="form-control selectpicker">
                        <option value="0">Sin categoria padre</option>
                        @foreach($categories as $categorySelect)
                            @if($categorySelect->parentcategory_id == 0)
                                <option value="{{ $categorySelect->id }}"  @if($category->parentcategory_id == $categorySelect->id) selected @endif>{{ $categorySelect->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="done"><small>Si la categoria no depende de otra dejar en "Sin categoria padre".</small></label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Activa:</label>
                <div class="col-md-8">
                    <div class="checkbox checkbox-inline">
                        <input type="checkbox" id="active" @if($category->active == 1) checked @endif>
                        <label for="active"><small>Si esta palomeada se mostrará.</small></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            TC.category.init();
        });
    </script>
@endsection
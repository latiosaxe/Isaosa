@extends('control.master')
@section('content')
    <div class="wrapper">
        <div class="page-subtitle">
            <h2>Categorias</h2>
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
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>
                        @if($category->parentcategory_id > 0) &nbsp;---- @endif
                            {{ $category->name }}</td>
                    <td class="text-center">
                        @if($category->active == 1)
                            <span class="alert alert-info alert-dismissible" style="padding-right: 15px;">Activa</span>
                        @else
                            Inactiva
                        @endif
                    </td>
                    <td class="text-center"><a class="btn btn-clean btn-primary" href="{{url('control/categorias/'.$category->id)}}"><i class="fa fa-pencil"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="wrapper wrapper-white">
        <div class="page-subtitle">
            <h2>Crear Categoria</h2>
        </div>
        <form id="newCategory" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Nombre:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="name" placeholder="Titulo">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Categoria padre:</label>
                <div class="col-md-8">
                    <select id="category_id" class="form-control selectpicker">
                        <option value="0">Sin categoria padre</option>
                        @foreach($categories as $category)
                            @if($category->parentcategory_id == 0)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="done"><small>Si la categoria no depende de otra dejar en "Sin categoria padre".</small></label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    <button type="submit" class="btn btn-default">Crear categoria</button>
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
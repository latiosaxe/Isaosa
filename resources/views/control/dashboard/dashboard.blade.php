@extends ('control.master')
@section ('content')
<div class="wrapper">
    <div class="row">
        <div class="co-md-12">
            <h3>Foto de la semana</h3>
            @foreach($featureds as $featured)
                <div class="featured-image">
                    <img src="{{ $featured->image  }}" alt="{{ $featured->description }}">
                    <p>Copy: <strong>{{ $featured->description }}</strong></p>
                    <p>Url: <strong>{{ $featured->link }}</strong></p>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="wrapper wrapper-white">
    <div class="page-subtitle">
        <h2>Actualizar imagen destacada</h2>
    </div>

    <form action="/api/image" class="dropzone small" id="image-gallery">
        <div class="fallback">
            <input name="file" type="file"/>
        </div>
    </form>
    <form id="featuredImage" class="form-horizontal">
        <div class="form-group">
            <label class="col-md-2 control-label">Texto:</label>
            <div class="col-md-8">
                <input type="text" id="description" class="form-control" placeholder="Máximo 80 caracteres" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Link: <small>(Opcional)</small></label>
            <div class="col-md-8">
                <input type="url" id="link" class="form-control" placeholder="Url externa">
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-default">Actualziar</button>
            </div>
        </div>
    </form>
</div>

@endsection



@section('javascript')
    <script>
        $(document).ready(function(){
            TC.featured.init();
            Dropzone.options.imageGallery = {
                paramName: "file",
                autoProcessQueue: true,
                maxFiles: 1,
                maxFilesize: 50,
                sending: function(file, xhr, formData) {
                    formData.append("type", 'featured-image');
                    formData.append("id", 1);
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                init: function() {
                    this.on("maxfilesexceeded", function(file){
                        alert("Solo se puede subir una imagen");
                    });
                }
            };
        });
    </script>
@endsection
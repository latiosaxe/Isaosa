@extends ('control.master')
@section ('content')
<div class="wrapper">
    <div class="row">
        <div class="co-md-12">
            <h3>Foto de la semana</h3>
        </div>
    </div>
</div>

<div class="wrapper wrapper-white">
    <div class="page-subtitle">
        <h2>Bienvenido al panel de administración de Isaosa</h2>
    </div>


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
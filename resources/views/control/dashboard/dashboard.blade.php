@extends ('control.master')
@section ('content')

<div class="wrapper wrapper-white">
    <div class="page-subtitle">
        <h2>Bienvenido al panel de administración de Isaosa <strong>{{ $user }}</strong></h2>
    </div>
</div>
<div class="wrapper">
    {{--<div class="page-subtitle">--}}
        {{--<h2>Bienvenido al panel de administración de Isaosa <strong>{{ $user }}</strong></h2>--}}
    {{--</div>--}}
</div>

@endsection



@section('javascript')
    <script>
        $(document).ready(function(){
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
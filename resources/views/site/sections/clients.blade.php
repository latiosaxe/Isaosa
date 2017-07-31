@extends ('site.master')
@section ('content')
<div class="fake-header"></div>

<div class="section-site solicitud">
    <div class="container">
        <h1 class="color-green">ALTA DE CLIENTES</h1>

        <form onsubmit="return false;" id="NewClient">
            <div class="">
                <div class="">
                    <div class="col-md-6 gray-block">
                        <div class="title">
                            <span>DATOS GENERALES</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12 element fake-select margin-botom-20">
                                <select name="regimen-fiscal" id="regimen-de-ventas">
                                    <option value="">Ejecutivo de Ventas</option>
                                </select>
                            </div>
                            <div class="col-md-12 element fake-select margin-botom-20">
                                <select name="regimen-fiscal" id="regimen-fiscal">
                                    <option value="">Régimen Fiscal</option>
                                </select>
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Razón Social">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="RFC">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="CURP">
                            </div>
                            <div class="col-md-12 ">
                                <div class="fakeFileInput">
                                    <input type="file" class="hidden" id="constancia-situacion-fiscal">
                                    <div class="text">
                                        <span>Constancia de Situación Fiscal</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="fakeFileInput">
                                    <input type="file" class="hidden" id="comprobante-de-domicilio">
                                    <div class="text">
                                        <span>Comprobante de Domicilio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="title">
                            <span>USUARIOS DEL SITIO WEB</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12 element fake-select margin-botom-20">
                                <select name="regimen-fiscal" id="regimen-fiscal">
                                    <option value="">Título</option>
                                </select>
                            </div>
                            <div class="col-md-12 element fake-select margin-botom-20">
                                <input type="text" placeholder="Nombre Completo">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Puesto en la empresa">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Teléfono">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Celular">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Correo Electrónico">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 gray-block">
                        <div class="title">
                            <span>DOMICILIO FISCAL</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Calle y número">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Colonia">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Ciudad">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="CP">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Municipio">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Estado">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="País">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Teléfono 1">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Teléfono 2">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Celular">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Sitio Web">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Correo Electrónico">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Persona de contacto">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn forms" type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="mobile-show">
        <div class="spacing"></div>
        <div class="spacing"></div>
    </div>


    <div class="go-up-action">
        <img src="/assets/images/icons/ir_arriba.svg" alt="Ir arriba">
    </div>
</div>

@endsection
@section('javascript')
    <script>
        $(document).ready(function () {

            var formData;
            $('header').addClass('block');

            $(".fakeFileInput .text").on('click', function () {
                var input = $(this).closest('.fakeFileInput').find('.hidden');
                input.trigger('click');
            });

            function appendIfFile(file_id ) {
                var file = document.querySelector('#' + file_id).files[0];
                console.log(file);
                var ext = file.name.split('.').pop();
                if(ext=="pdf" || ext=="docx" || ext=="doc" || ext=='png' || ext=='jpg'){
                    console.info(file_id, file);
                    formData.append(file_id, file);
                    console.log("Si", ext);
                    return true;
                } else{
                    console.log("No", ext);
                    return false;
                }
            }

            $("#NewClient").on('submit', function (event) {
                event.preventDefault();

//                VALIDACIONES

                formData = new FormData();

                formData.append("action", "new_client");
                formData.append("curp", $("#curp").val());
                formData.append("regimen-de-ventas", $("#regimen-de-ventas").val());
                formData.append("regimen-fiscal", $("#regimen-fiscal").val());
//
//                appendIfFile(formData, 'regimen-de-ventas');
//                appendIfFile(formData, 'regimen-fiscal');
                appendIfFile('comprobante-de-domicilio');
                appendIfFile('constancia-situacion-fiscal');

                console.info(formData);


                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

                var request = new XMLHttpRequest();
                request.open("POST", "/alta-de-clientes");
                request.send(formData);

//
//                $.ajax({
//                    url: '/alta-de-clientes', // Url to which the request is send
//                    type: 'POST',
//                    data: formData,
//                    processData: false,
//                    contentType: false,
//                    success: function ( json_data ) {
//                        if( callback ){
//                            callback( json_data );
//                        }
//                        alert("Callback");
//                    }
//                });


            });
        });
//        $("input[type='file']").on('change', function () {
//            var _$this = $(this),
//                    input = this,
//                    file,
//                    size;
//            if(_$this.hasClass('hidden')){
//                console.log(input);
//
//                if (!window.FileReader) {
////                    bodyAppend("p", "The file API isn't supported on this browser yet.");
//                    return;
//                }
//
//                if (!input) {
//                    console.log("NO archivo");
//                }
//                else if (!input.files) {
//                    console.log(input);
//                    console.log("Navegador antiguo")
//                }
//                else if (!input.files[0]) {
//                    console.log("Por favor selecciona un archivo")
//                }
//                else {
//                    file = input.files[0];
//                    size = input.files[0].size/1024/1024;
//                    console.log("Nombre: " + file.name);
//                    console.log("Size: " +size);
//
//                    if(size <= 10){
//                        var fileData = file;
//                        var request = new XMLHttpRequest();
//                        request.open('post', '/uploadFile');
//                        request.addEventListener('load', uploadComplete);
//                        request.send(fileData);
//
//                    }else{
//                        swal("El archivo es muy pesado", "Favor de subir un archivo no mayor a 10MB");
//                    }
//                }
//            }
//            function uploadComplete(data) {
//                console.log(data.currentTarget.respone);
//            }
//        })
    </script>
@endsection
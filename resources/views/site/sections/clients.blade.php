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
                                    <option value="Ejecutivo-de-ventas">Ejecutivo de Ventas</option>
                                </select>
                            </div>
                            <div class="col-md-12 element fake-select margin-botom-20">
                                <select name="regimen-fiscal" id="regimen-fiscal">
                                    <option value="Regimen-fiscal">Régimen Fiscal</option>
                                </select>
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Razón Social" id="razon_social">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="RFC" id="rfc">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="CURP" id="curp">
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
                                <select name="regimen-fiscal" id="titulo">
                                    <option value="sin-definir">Título</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                </select>
                            </div>
                            <div class="col-md-12 element fake-select margin-botom-20">
                                <input type="text" placeholder="Nombre Completo" id="complete_name">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Puesto en la empresa" id="job">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Teléfono" id="tel">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Celular" id="cel">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="email" placeholder="Correo Electrónico" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 gray-block">
                        <div class="title">
                            <span>DOMICILIO FISCAL</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Calle y número" id="addres_stret">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Colonia" id="addres_colonia">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Ciudad"  id="addres_city">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="CP" id="addres_cp">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Municipio" id="addres_municipio">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Estado"  id="addres_state">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="País" id="addres_country">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Teléfono 1" id="addres_tel">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Teléfono 2" id="addres_tel2">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Celular" id="addres_cel">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Sitio Web" id="addres_website">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Correo Electrónico"  id="addres_email">
                            </div>
                            <div class="col-md-12 element margin-botom-20">
                                <input type="text" placeholder="Persona de contacto" id="addres_contact">
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
            $(".fakeFileInput input").on('change', function () {
                var file = $(this).val().split('.').pop();
                console.log(file);
                if(file=="pdf" || file=="docx" || file=="doc" || file=='png' || file=='jpg'){
                    console.log('Si se permite');
                    $(this).closest('.fakeFileInput').find('p').remove();
                    $(this).closest('.fakeFileInput').append('<p>'+ $(this).val().split(/(\\|\/)/g).pop() +'</p>');
                } else{
                    sweetAlert("Oops...", "El archivo no es valido, por favor intenta con un archivo PDF, DOCX, DOC, PNG o JPG", "error");
                }
            });

            function appendIfFile(file_id ) {
                var file = document.querySelector('#' + file_id).files[0];
                console.log(file);
                if (typeof file === 'undefined' || !file) {
                    console.log("No hay " + file_id );
                }else{
                    var ext = file.name.split('.').pop();
                    if(ext=="pdf" || ext=="docx" || ext=="doc" || ext=='png' || ext=='jpg'){
                        console.info(file_id, file);
                        formData.append(file_id, file);
                        console.log("Si", ext);
                        return true;
                    } else{
                        formData.append(file_id, 'Sin archivo');
                        console.log("No", ext);
                        return false;
                    }
                }
            }

            function reqListener () {
                console.log(this.responseText);
                var response = JSON.parse(this.responseText);
                console.log(response);
                if(response.status == 'ok'){
                    sweetAlert("Solicitud exitosa", "Nos pondremos en contacto contigo tan pronto nos sea posible");
                }else{
                    sweetAlert("Oops...", "Parece que hubo un error, intentalo mas tarde o ponte en contacto con nosotros", "error");
                }
            }

            $("#NewClient").on('submit', function (event) {
                event.preventDefault();

//                VALIDACIONES

                formData = new FormData();

                formData.append("action", "new_client");
                formData.append("regimen_de_ventas", noValue( $("#regimen-de-ventas").val()) );
                formData.append("regimen_fiscal", noValue( $("#regimen-fiscal").val()) );
                formData.append("razon_social", noValue( $("#razon_social").val()) );
                formData.append("rfc", noValue( $("#rfc").val()) );
                formData.append("curp", noValue( $("#curp").val()) );

                formData.append("titulo", noValue( $("#titulo").val()) );
                formData.append("complete_name", noValue( $("#complete_name").val()) );
                formData.append("job", noValue( $("#job").val()) );
                formData.append("tel", noValue( $("#tel").val()) );
                formData.append("cel", noValue( $("#cel").val()) );
                formData.append("email", noValue( $("#email").val()) );

                formData.append("addres_stret", noValue( $("#addres_stret").val()) );
                formData.append("addres_colonia", noValue( $("#addres_colonia").val()) );
                formData.append("addres_city", noValue( $("#addres_city").val()) );
                formData.append("addres_cp", noValue( $("#addres_cp").val()) );
                formData.append("addres_municipio", noValue( $("#addres_municipio").val()) );
                formData.append("addres_state", noValue( $("#addres_state").val()) );
                formData.append("addres_country", noValue( $("#addres_tel").val()) );
                formData.append("addres_tel", noValue( $("#addres_tel").val()) );
                formData.append("addres_tel2", noValue( $("#addres_tel2").val()) );
                formData.append("addres_cel", noValue( $("#addres_cel").val()) );
                formData.append("addres_website", noValue( $("#addres_website").val()) );
                formData.append("addres_email", noValue( $("#addres_email").val()) );
                formData.append("addres_contact", noValue( $("#addres_contact").val()) );

                appendIfFile('constancia-situacion-fiscal');
                appendIfFile('comprobante-de-domicilio');

                console.info(formData);

                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

                var request = new XMLHttpRequest();
                request.addEventListener("load", reqListener);
                request.open("POST", "/alta-de-clientes");
                request.send(formData);
            });

            function noValue(input){
                console.log(input);
                if(input.length == 0){
                    return 'Sin valor'
                }else{
                    return input;
                }
            }
        });
    </script>
@endsection
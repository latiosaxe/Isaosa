@extends ('site.master')
@section ('content')
<div class="fake-header"></div>

<div class="section-site solicitud">
    <div class="container">
        <h1>SOLICITUD DE CRÉDITO</h1>
        <p class="sub-title">
            <strong>
                VERIFICAR ESTADO DE SOLICITUD DE CRÉDITO
            </strong>
        </p>

        <div class="gray-block">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <span>CRÉDITO</span>
                    </div>
                    <p>Aquí puedes ingresar el número único que se proporcionó al realizar tu solicitud de crédito y ver el estado actual del mismo</p>
                </div>
                <div class="col-md-12">
                    <form onsubmit="return false;">
                        <div class="row">
                            <fieldset>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Número Único">
                                </div>
                                <div class="col-md-6">
                                    {{--<select name="select-state" id="select-state">--}}
                                        {{--<option value="">Estado Actual</option>--}}
                                    {{--</select>--}}
                                </div>
                            </fieldset>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn forms">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="label-orange">
            <p>NUEVA SOLICITUD DE CRÉDITO</p>
        </div>

        <form onsubmit="return false;" class="please-help-me" id="NewRequest">
            <div class="gray-block">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <span>DATOS GENERALES</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <fieldset>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Empresa" required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="R.F.C." required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="C.U.R.P." required="required">
                                </div>
                                <div class="col-md-6 element fake-select">
                                    <select name="regimen-fiscal" id="regimen-fiscal">
                                        <option value="">Régimen Fiscal</option>
                                    </select>
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Domicilio Fiscal">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Colonia" required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Ciudad" required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Municipio" required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Estado" required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="C.P." required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Teléfono 1" required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Teléfono 2" required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Celular" required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Correo electrónico" required="required">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Apoderado legal">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Nombre del contacto" required="required">
                                </div>
                                <div class="col-md-6 element margin-botom-0">
                                    <input type="text" placeholder="Consumo anual de fertilizante">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gray-block">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <span>REFERENCIAS BANCARIAS</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <fieldset>
                                <div class="col-md-6">
                                    <div class="element">
                                        <p><strong>BANCO 1</strong></p>
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 1 Banco">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 1 Sucursal">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 1 Ejecutivo de cuenta">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 1 Teléfono 1">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 1 Teléfono 2">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 1 Celular">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 1 Ciudad">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 1 Municipio">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 1 Estado">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="element">
                                        <p><strong>BANCO 2</strong></p>
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 2 Banco">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 2 Sucursal">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 2 Ejecutivo de cuenta">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 2 Teléfono 1">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 2 Teléfono 2">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 2 Celular">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 2 Ciudad">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 2 Municipio">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Referencia 2 Estado">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gray-block">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <span>REFERENCIAS COMERCIALES</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <fieldset>
                                <div class="col-md-6">
                                    <div class="element">
                                        <p><strong>EMPRESA 1</strong></p>
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 1 RFC">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 1 Domicilio Fiscal">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 1 CP">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 1 Ciudad">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 1 Municipio">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 1 Teléfono 1">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 1 Teléfono 2">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 1 Celular">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 1 Correo electrónico">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 1 Nombre del contacto">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="element">
                                        <p><strong>EMPRESA 2</strong></p>
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 2 RFC">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 2 Domicilio Fiscal">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 2 CP">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 2 Ciudad">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 2 Municipio">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 2 Teléfono 1">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 2 Teléfono 2">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 2 Celular">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 2 Correo electrónico">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Empresa 2 Nombre del contacto">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gray-block">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <span>ARCHIVOS ANEXOS</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <fieldset>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden" id="acta_constitutiva">
                                        <div class="text">
                                            <span>Acta constitutiva</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden" id="constancia_situacion_fiscal">
                                        <div class="text">
                                            <span>Constancia de situación fiscal</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden" id="poder_notarial">
                                        <div class="text">
                                            <span>Poder notarial del representante o persona</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden" id="identificacion_oficial">
                                        <div class="text">
                                            <span>Identificación oficial del apoderado y/o aval</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden" id="comprobante_curp">
                                        <div class="text">
                                            <span>Comprobante del CURP</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden" id="formato_32_d">
                                        <div class="text">
                                            <span>Formato 32-D</span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <span>ESTADOS FINANCIEROS DE LOS ÚLTIMOS 3 AÑOS</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <fieldset>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden" id="estado-ultimo">
                                        <div class="text">
                                            <span>Último año</span>
                                        </div>
                                    </div>
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden" id="estado-segundo">
                                        <div class="text">
                                            <span>Segundo año</span>
                                        </div>
                                    </div>
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden" id="estado-tercer">
                                        <div class="text">
                                            <span>Tercer año</span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button class="btn forms" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    <div class="mobile-show">
        <div class="spacing"></div>
        <div class="spacing"></div>
    </div>

    <div class="go-up-action">
        <img src="/assets/images/icons/flecha_abajo.svg" alt="Ir arriba">
    </div>
</div>

@endsection
@section('javascript')
    <script>
        var formData;
        $('header').addClass('block');

        $.each($(".please-help-me fieldset input").not(':input[type=button], :input[type=submit], :input[type=file]'), function( index, value ) {
            var fakeid = $(this).attr('placeholder').replace(/ /g,"_");
            var newid = fakeid.toLowerCase();
            var clean = getCleanedString(newid);
//            console.log(clean);
            $(this).attr('id', clean);
        });

        $(".fakeFileInput .text").on('click', function () {
            var input = $(this).closest('.fakeFileInput').find('.hidden');
            input.trigger('click');
        });
        $(".fakeFileInput input").on('change', function () {
            var file = $(this).val().split('.').pop();
            console.log(file);
            if(file=="pdf" || file=="docx" || file=="doc" || file=='png' || file=='jpg'){
                console.log('Si se permite');
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
                sweetAlert("Solicitud exitosa", "Es importante que guardes tu código de verificación para un fututo: " + response.uid);
            }else{
                sweetAlert("Oops...", "Parece que hubo un error, intentalo mas tarde o ponte en contacto con nosotros", "error");
            }
        }

        $("#NewRequest").on('submit', function (event) {
            event.preventDefault();

//                VALIDACIONES

            formData = new FormData();

            formData.append("action", "new_request");
            formData.append("empresa", noValue( $("#empresa").val()) );
            formData.append("rfc", noValue( $("#rfc").val()) );
            formData.append("curp", noValue( $("#curp").val()) );
            formData.append("domicilio_fiscal", noValue( $("#domicilio_fiscal").val()) );
            formData.append("colonia", noValue( $("#colonia").val()) );
            formData.append("ciudad", noValue( $("#ciudad").val()) );
            formData.append("municipio", noValue( $("#municipio").val()) );
            formData.append("estado", noValue( $("#estado").val()) );
            formData.append("cp", noValue( $("#cp").val()) );
            formData.append("telefono_1", noValue( $("#telefono_1").val()) );
            formData.append("telefono_2", noValue( $("#telefono_2").val()) );
            formData.append("celular", noValue( $("#celular").val()) );
            formData.append("correo_electronico", noValue( $("#correo_electronico").val()) );
            formData.append("apoderado_legal", noValue( $("#apoderado_legal").val()) );
            formData.append("nombre_del_contacto", noValue( $("#nombre_del_contacto").val()) );
            formData.append("consumo_anual_de_fertilizante", noValue( $("#consumo_anual_de_fertilizante").val()) );
            formData.append("referencia_1_banco", noValue( $("#referencia_1_banco").val()) );
            formData.append("referencia_1_sucursal", noValue( $("#referencia_1_sucursal").val()) );
            formData.append("referencia_1_ejecutivo_de_cuenta", noValue( $("#referencia_1_ejecutivo_de_cuenta").val()) );
            formData.append("referencia_1_telefono_1", noValue( $("#referencia_1_telefono_1").val()) );
            formData.append("referencia_1_telefono_2", noValue( $("#referencia_1_telefono_2").val()) );
            formData.append("referencia_1_celular", noValue( $("#referencia_1_celular").val()) );
            formData.append("referencia_1_ciudad", noValue( $("#referencia_1_ciudad").val()) );
            formData.append("referencia_1_municipio", noValue( $("#referencia_1_municipio").val()) );
            formData.append("referencia_1_estado", noValue( $("#referencia_1_estado").val()) );
            formData.append("referencia_2_banco", noValue( $("#referencia_2_banco").val()) );
            formData.append("referencia_2_sucursal", noValue( $("#referencia_2_sucursal").val()) );
            formData.append("referencia_2_ejecutivo_de_cuenta", noValue( $("#referencia_2_ejecutivo_de_cuenta").val()) );
            formData.append("referencia_2_telefono_1", noValue( $("#referencia_2_telefono_1").val()) );
            formData.append("referencia_2_telefono_2", noValue( $("#referencia_2_telefono_2").val()) );
            formData.append("referencia_2_celular", noValue( $("#referencia_2_celular").val()) );
            formData.append("referencia_2_ciudad", noValue( $("#referencia_2_ciudad").val()) );
            formData.append("referencia_2_municipio", noValue( $("#referencia_2_municipio").val()) );
            formData.append("referencia_2_estado", noValue( $("#referencia_2_estado").val()) );
            formData.append("empresa_1_rfc", noValue( $("#empresa_1_rfc").val()) );
            formData.append("empresa_1_domicilio_fiscal", noValue( $("#empresa_1_domicilio_fiscal").val()) );
            formData.append("empresa_1_cp", noValue( $("#empresa_1_cp").val()) );
            formData.append("empresa_1_ciudad", noValue( $("#empresa_1_ciudad").val()) );
            formData.append("empresa_1_municipio", noValue( $("#empresa_1_municipio").val()) );
            formData.append("empresa_1_telefono_1", noValue( $("#empresa_1_telefono_1").val()) );
            formData.append("empresa_1_telefono_2", noValue( $("#empresa_1_telefono_2").val()) );
            formData.append("empresa_1_celular", noValue( $("#empresa_1_celular").val()) );
            formData.append("empresa_1_correo_electronico", noValue( $("#empresa_1_correo_electronico").val()) );
            formData.append("empresa_1_nombre_del_contacto", noValue( $("#empresa_1_nombre_del_contacto").val()) );
            formData.append("empresa_2_rfc", noValue( $("#empresa_2_rfc").val()) );
            formData.append("empresa_2_domicilio_fiscal", noValue( $("#empresa_2_domicilio_fiscal").val()) );
            formData.append("empresa_2_cp", noValue( $("#empresa_2_cp").val()) );
            formData.append("empresa_2_ciudad", noValue( $("#empresa_2_ciudad").val()) );
            formData.append("empresa_2_municipio", noValue( $("#empresa_2_municipio").val()) );
            formData.append("empresa_2_telefono_1", noValue( $("#empresa_2_telefono_1").val()) );
            formData.append("empresa_2_telefono_2", noValue( $("#empresa_2_telefono_2").val()) );
            formData.append("empresa_2_celular", noValue( $("#empresa_2_celular").val()) );
            formData.append("empresa_2_correo_electronico", noValue( $("#empresa_2_correo_electronico").val()) );
            formData.append("empresa_2_nombre_del_contacto", noValue( $("#empresa_2_nombre_del_contacto").val()) );

            appendIfFile('acta_constitutiva');
            appendIfFile('constancia_situacion_fiscal');
            appendIfFile('poder_notarial');
            appendIfFile('identificacion_oficial');
            appendIfFile('comprobante_curp');
            appendIfFile('formato_32_d');

            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

            console.info(formData);

            var request = new XMLHttpRequest();
            request.addEventListener("load", reqListener);
            request.open("POST", "/solicitud");
            request.send(formData);
        });

        function noValue(input){
            console.log(input);
            if(input.length == 0){
                return 'Sin valor'
            }
        }


        function getCleanedString(cadena){
            var specialChars = "!@#$^&%*()+=-[]\/{}|:<>?,.";
            for (var i = 0; i < specialChars.length; i++) {
                cadena= cadena.replace(new RegExp("\\" + specialChars[i], 'gi'), '');
            }
            cadena = cadena.toLowerCase();
            cadena = cadena.replace(/ /g,"_");
            cadena = cadena.replace(/á/gi,"a");
            cadena = cadena.replace(/é/gi,"e");
            cadena = cadena.replace(/í/gi,"i");
            cadena = cadena.replace(/ó/gi,"o");
            cadena = cadena.replace(/ú/gi,"u");
            cadena = cadena.replace(/ñ/gi,"n");
            return cadena;
        }

    </script>
@endsection
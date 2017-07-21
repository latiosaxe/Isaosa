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
                                    <select name="select-state" id="select-state">
                                        <option value="">Estado Actual</option>
                                    </select>
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

        <form onsubmit="return false;">
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
                                    <input type="text" placeholder="Empresa">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="R.F.C.">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="C.U.R.P.">
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
                                    <input type="text" placeholder="Colonia">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Ciudad">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Municipio">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Estado">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="C.P.">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Teléfono 1">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Teléfono 2">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Celular">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Correo electrónico">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Apoderado legal">
                                </div>
                                <div class="col-md-6 element">
                                    <input type="text" placeholder="Nombre del contacto">
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
                                        <input type="text" placeholder="Banco 1">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Sucursal">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Ejecutivo de cuenta">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Teléfono 1">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Teléfono 2">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Celular">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Ciudad">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Municipio">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Estado">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="element">
                                        <p><strong>BANCO 2</strong></p>
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Banco 2">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Sucursal">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Ejecutivo de cuenta">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Teléfono 1">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Teléfono 2">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Celular">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Ciudad">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Municipio">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Estado">
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
                                        <input type="text" placeholder="RFC">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Domicilio Fiscal">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="CP">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Ciudad">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Municipio">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Teléfono 1">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Teléfono 2">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Celular">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Correo electrónico">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Nombre del contacto">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="element">
                                        <p><strong>EMPRESA 2</strong></p>
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="RFC">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Domicilio Fiscal">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="CP">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Ciudad">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Municipio">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Teléfono 1">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Teléfono 2">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Celular">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Correo electrónico">
                                    </div>
                                    <div class="element">
                                        <input type="text" placeholder="Nombre del contacto">
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
                                        <input type="file" class="hidden">
                                        <div class="text">
                                            <span>Acta constitutiva</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden">
                                        <div class="text">
                                            <span>Constancia de situación fiscal</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden">
                                        <div class="text">
                                            <span>Poder notarial del representante o persona</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden">
                                        <div class="text">
                                            <span>Acta constitutiva</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden">
                                        <div class="text">
                                            <span>Identificación oficial del apoderado y/o aval</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden">
                                        <div class="text">
                                            <span>Comprobante del CURP</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden">
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
                                        <input type="file" class="hidden">
                                        <div class="text">
                                            <span>Último año</span>
                                        </div>
                                    </div>
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden">
                                        <div class="text">
                                            <span>Segundo año</span>
                                        </div>
                                    </div>
                                    <div class="fakeFileInput">
                                        <input type="file" class="hidden">
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
        $('header').addClass('block');

        $(".fakeFileInput .text").on('click', function () {
            var input = $(this).closest('.fakeFileInput').find('.hidden');
            console.log( input );
            input.trigger('click');
        });
    </script>
@endsection
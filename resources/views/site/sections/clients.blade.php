@extends ('site.master')
@section ('content')
<div class="fake-header"></div>

<div class="section-site solicitud">
    <div class="container">
        <h1 class="color-green">ALTA DE CLIENTES</h1>

        <form onsubmit="return false;">
            <div class="">
                <div class="">
                    <div class="col-md-6 gray-block">
                        <div class="title">
                            <span>DATOS GENERALES</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12 element fake-select margin-botom-20">
                                <select name="regimen-fiscal" id="regimen-fiscal">
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
                                    <input type="file" class="hidden">
                                    <div class="text">
                                        <span>Constancia de Situación Fiscal</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="fakeFileInput">
                                    <input type="file" class="hidden">
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
    <div class="go-up-action">
        <img src="/assets/images/icons/ir_arriba.svg" alt="Ir arriba">
    </div>
</div>

@endsection
@section('javascript')
    <script>
        $('header').addClass('block');
    </script>
@endsection
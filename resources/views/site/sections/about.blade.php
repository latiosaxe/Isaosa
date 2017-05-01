@extends ('site.master')
@section ('content')
<div class="fake-header"></div>

<div class="section-site quienes-somos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>QUIÉNES SOMOS</h1>
            </div>
        </div>
        <div class="row margin-0">
            <div class="col-md-3">
                <img src="/assets/images/about/quienesomos1.jpg" alt="Quienes sosmos">
            </div>
            <div class="col-md-6" style="padding-top: 70px">
                <h3>HISTORIA</h3>
                <p>ISAOSA es una empresa fundada en 1996. Desde entonces ha estado evolucionando y creciendo comprometidamente con el campo mexicano, en la búsqueda constante e importación de fertilizantes de alta calidad y productos de nuevas tecnologías e innovación, que contribuyan a maximizar la rentabilidad del consumidor final/agricultor, mediante cosechas de alto rendimiento, optimizando costo beneficio.</p>
            </div>
        </div>
        <div class="row margin-0">
            <div class="col-md-3 text-right">
                <h2>VALORES</h2>
                <ul>
                    <li>VISIÓN Y LIDERAZGO</li>
                    <li>INTEGRIDAD Y HONESTIDAD</li>
                    <li>CONFIABILIDAD</li>
                    <li>CREATIVIDAD E INNOVACIÓN</li>
                </ul>
            </div>
            <div class="col-md-3">
                <img src="/assets/images/about/quienesomos2.jpg" alt="Quienes sosmos">
            </div>
            <div class="col-md-6">
                <h3>MISIÓN</h3>
                <p>Somos una empresa líder en la comercialización de fertilizantes con una estructura ligera, ágil, dinámica y eficiente. Buscando anticipar los cambios del mercado internacional, innovando constantemente y persiguiendo un valor agregado en todas las operaciones.</p>
                <h3 style="margin-top: 20px">VISIÓN</h3>
                <p>Ser una organización de clase mundial, con calidad humana, valores propios, aportando innovación a la fertilización en el agro mexicano, beneficiando a los agricultores y sus familias.</p>
            </div>
        </div>
        <div class="row margin-0">
            <div class="col-md-3">
                <img src="/assets/images/about/quienesomos3.jpg" alt="Quienes sosmos">
            </div>
            <div class="col-md-6">
                <div class="space-temp"></div>
                <h3>PRESENCIA</h3>
                <p>ISAOSA cuenta con una infraestructura de bodegas de recepción, manejo, envasado y distribución de sus productos con una ubicación estratégica para atender el centro, occidente y norte del país. Las bodegas se localizan en los puertos de Altamira, Manzanillo y Topolobampo, surtiendo los productos por tolva de ferrocarril o transporte terrestre; optimizando así la logística y costos de transporte, con venta directa a costado de buque o directo de las bodegas mencionadas. </p>
            </div>
        </div>
    </div>

    <div class="go-up-action center-element">
        <img src="/assets/images/icons/ir_arriba.svg" alt="Ir arriba">
    </div>
</div>

@endsection
@section('javascript')
    <script>
        $('header').addClass('block');
    </script>
@endsection
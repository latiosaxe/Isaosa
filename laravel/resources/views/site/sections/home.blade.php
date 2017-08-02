@extends ('site.master')
@section ('content')
<section class="home-section">
    <div class="home-carousel">
        <div class="carousel-card">
            <div class="container">
                <div class="vertical-align">
                    <h2>NUEVA GENERACIÓN</h2>
                    <div class="line"></div>
                    <p>Nuevas tecnologías que permiten mayor eficiencia y control en la entrega de nutrientes al suelo.</p>
                    <a href="productos?data=1" class="read-more">
                        <img src="/assets/images/icons/mas.svg" alt="Leer más">
                        <span>Ver productos</span>
                    </a>
                </div>
            </div>
            <div class="background" style="background-image: url('/assets/images/home/nuevas/_1.jpg')"></div>
        </div>
        <div class="carousel-card">
            <div class="container">
                <div class="vertical-align">
                    <h2>MEZCLA VALOR AGREGADO</h2>
                    <div class="line"></div>
                    <p>Conoce la nueva línea de mezclas granulares, todos los nutrientes necesarios para maximizar el rendimiento de sus cultivos.</p>
                    <a href="productos?data=2" class="read-more">
                        <img src="/assets/images/icons/mas.svg" alt="Leer más">
                        <span>Ver productos</span>
                    </a>
                </div>
            </div>
            <div class="background" style="background-image: url('/assets/images/home/nuevas/_2.jpg')"></div>
        </div>
        <div class="carousel-card">
            <div class="container">
                <div class="vertical-align">
                    <h2>LÍQUIDOS</h2>
                    <div class="line"></div>
                    <p>Conoce nuestros fertilizantes líquidos, ideales para los sistemas de fertilización por goteo.</p>
                    <a href="productos?data=3" class="read-more">
                        <img src="/assets/images/icons/mas.svg" alt="Leer más">
                        <span>Ver productos</span>
                    </a>
                </div>
            </div>
            <div class="background" style="background-image: url('/assets/images/home/nuevas/_3.jpg')"></div>
        </div>
        <div class="carousel-card">
            <div class="container">
                <div class="vertical-align">
                    <h2>SOLUBLES</h2>
                    <div class="line"></div>
                    <p>Maxima tecnología en cada gota</p>
                    <a href="productos?data=4" class="read-more">
                        <img src="/assets/images/icons/mas.svg" alt="Leer más">
                        <span>Ver productos</span>
                    </a>
                </div>
            </div>
            <div class="background" style="background-image: url('/assets/images/home/nuevas/_4.jpg')"></div>
        </div>
        <div class="carousel-card">
            <div class="container">
                <div class="vertical-align">
                    <h2>FOLIARES</h2>
                    <div class="line"></div>
                    <p>La mejor nutrición en el menor tiempo</p>
                    <a href="productos?data=5" class="read-more">
                        <img src="/assets/images/icons/mas.svg" alt="Leer más">
                        <span>Ver productos</span>
                    </a>
                </div>
            </div>
            <div class="background" style="background-image: url('/assets/images/home/nuevas/_5.jpg')"></div>
        </div>
        <div class="carousel-card">
            <div class="container">
                <div class="vertical-align">
                    <h2>NPK ESPECIALIDAD</h2>
                    <div class="line"></div>
                    <p>Los mejores nutrientes en el mejor balance</p>
                    <a href="productos?data=6" class="read-more">
                        <img src="/assets/images/icons/mas.svg" alt="Leer más">
                        <span>Ver productos</span>
                    </a>
                </div>
            </div>
            <div class="background" style="background-image: url('/assets/images/home/nuevas/_6.jpg')"></div>
        </div>
        <div class="carousel-card">
            <div class="container">
                <div class="vertical-align">
                    <h2>COMMODITIES</h2>
                    <div class="line"></div>
                    <p>Conoce nuestros fertilizantes líquidos, ideales para los sistemas de fertilización por goteo.</p>
                    <a href="productos?data=7" class="read-more">
                        <img src="/assets/images/icons/mas.svg" alt="Leer más">
                        <span>Ver productos</span>
                    </a>
                </div>
            </div>
            <div class="background" style="background-image: url('/assets/images/home/nuevas/_7.jpg')"></div>
        </div>
    </div>
    <div class="home-carousel-nav">
        <div class="container relative">
            <div class="bar-active"><div class="padding"><span></span></div></div>
            <ul>
                <li class="active">
                    <span href="#">NUEVA GENERACIÓN</span>
                </li>
                <li>
                    <span href="#">MEZCLA VALOR AGREGADO</span>
                </li>
                <li>
                    <span href="#">LÍQUIDOS</span>
                </li>
                <li>
                    <span href="#">SOLUBLES</span>
                </li>
                <li>
                    <span href="#">FOLIARES</span>
                </li>
                <li>
                    <span href="#">NPK ESPECIALIDAD</span>
                </li>
                <li>
                    <span href="#">COMMODITIES</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="nav-users">
        <ul>
            <li><a href="#">Ingreso de clientes</a></li>
            <li><a href="#">Proveedores</a></li>
            <li><a href="/solicitud">Solicitud de Crédito</a></li>
            <li><a href="/alta-de-clientes">Alta de clientes</a></li>
        </ul>
    </div>

    <div class="cta-section goToButton" data-id="report-section">
        <p>
            <img src="/assets/images/icons/flecha_abajo.svg" alt="Avanzar">
        </p>
    </div>
</section>


<section class="report" id="report-section">
    <div class="container">
        <div class="left"><span>Reporte del clima</span></div>
        <div class="right">
            <ul>
                <li>
                    <a href="#">
                        México
                    </a>
                    <ul>
                        <li><a href="/boletines/boletin_mensual_nacional_201706.pdf" target="_blank">Junio 2017</a></li>
                        <li><a href="/boletines/boletin_mensual_nacional_201705.pdf" target="_blank">Mayo 2017</a></li>
                        <li><a href="/boletines/perspectiva_abril_noviembre_2017.pdf" target="_blank">Perspectiva 2017 Abril - Noviembre</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        Chihuahua
                    </a>
                    <ul>
                        <li><a href="/boletines/boletin_mensual_chihuahua_201611.pdf" target="_blank">Noviembre 2016</a></li>
                        <li><a href="/boletines/boletin_mensual_chihuahua_201610.pdf" target="_blank">Octubre 2016</a></li>
                        <li><a href="/boletines/boletin_mensual_chiguagua_201609.pdf" target="_blank">Septiembre 2016</a></li>
                        <li><a href="/boletines/boletin_mensual_chihuahua_201608.pdf" target="_blank">Agosto 2016</a></li>
                        <li><a href="/boletines/boletin_mensual_chihuahua_201607.pdf" target="_blank">Julio 2016</a></li>
                        <li><a href="/boletines/boletin_mensual_chihuahua_201606.pdf" target="_blank">Junio 2016</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>

{{--<section class="home-calculator" id="home-calculator">--}}
    {{--<div class="container">--}}
        {{--<div class="title">CALCULADORA</div>--}}
        {{--<div class="content">--}}
            {{--<form onsubmit="return false;">--}}
                {{--<input type="text" value="Placeholder temporal">--}}
            {{--</form>--}}
        {{--</div>--}}
        {{--<div class="alt-image"></div>--}}
    {{--</div>--}}
{{--</section>--}}

<section class="home-sections relative">
    <div class="container full-width">
        <div class="content">
            <div class="title"><a href="/servicios">SERVICIOS</a></div>
            <div class="grid">
                <?php $i = 1 ?>
                @foreach($services as $service)
                    <div class="element">
                        <div class="icon">
                            <img src="{{ $service->icon }}" alt="{{ $service->name }}">
                        </div>
                        <h3>{{ $service->name }}</h3>
                        <div class="line"></div>
                        <p>{{ $service->description }}.</p>
                        <div class="more">
                            <a href="/servicios?type={{ $i }}"><span>Leer más</span> <img src="/assets/images/icons/vermas.svg" alt="Leer más"></a>
                        </div>
                    </div>
                    <?php $i++ ?>
                @endforeach

                {{--<div class="element">--}}
                    {{--<div class="icon">--}}
                        {{--<img src="/assets/images/icons/analisis_suelo.svg" alt="Análisis del suelo">--}}
                    {{--</div>--}}
                    {{--<h3>ANÁLISIS<br/>DEL SUELO</h3>--}}
                    {{--<div class="line"></div>--}}
                    {{--<p>Hemos observado en las diversas.</p>--}}
                    {{--<div class="more">--}}
                        {{--<a href="/servicios?type=2"><span>Leer más</span> <img src="/assets/images/icons/vermas.svg" alt="Leer más"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="element">--}}
                    {{--<div class="icon">--}}
                        {{--<img src="/assets/images/icons/analisis_foliar.svg" alt="Análisis foliar">--}}
                    {{--</div>--}}
                    {{--<h3>ANÁLISIS<br/>FOLIAR</h3>--}}
                    {{--<div class="line"></div>--}}
                    {{--<p>Hemos observado en las diversas.</p>--}}
                    {{--<div class="more">--}}
                        {{--<a href="/servicios?type=3"><span>Leer más</span> <img src="/assets/images/icons/vermas.svg" alt="Leer más"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="element">--}}
                    {{--<div class="icon">--}}
                        {{--<img src="/assets/images/icons/analisis_tecnico.svg" alt="Análisis técnico">--}}
                    {{--</div>--}}
                    {{--<h3>ÁREA<br/>TÉCNICA</h3>--}}
                    {{--<div class="line"></div>--}}
                    {{--<p>Hemos observado en las diversas.</p>--}}
                    {{--<div class="more">--}}
                        {{--<a href="/servicios?type=4"><span>Leer más</span> <img src="/assets/images/icons/vermas.svg" alt="Leer más"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="alt-image"></div>
    </div>
</section>
<section class="home-locations" id="bodegas">
    <div class="container">
        <div class="relative">
            <div class="head">
                <p class="title">Nuestras<br/> bodegas</p>
                <div class="desktop-show">
                    <div class="pipe"></div>
                    <ul class="ul-locations">
                        <li><span>Manzanillo</span></li>
                        <li><span>Altamira</span></li>
                        <li><span>Topolobampo</span></li>
                        <li><span>Tampico</span></li>
                    </ul>
                    <div class="resume-block hidden">
                        <div class="resume">
                            <p>
                                Carretera Manzanillo - Minatitlán
                            </p><p>
                                Km. 6.5 S/N
                            </p><p>
                                C.P. 28876
                            </p><p>
                                Manzanillo, Colima, México
                            </p><p>
                                Teléfono: (314) 336 4877
                            </p>
                        </div>
                        <div class="resume">
                            <p>
                                Carretera Altamira
                            </p><p>
                                Puerto Industrial Km. 4
                            </p><p>
                                C.P. 89608
                            </p><p>
                                Altamira, Tamaulipas, México
                            </p><p>
                                Teléfono: (833) 260 9119
                            </p>
                        </div>
                        <div class="resume">
                            <p>
                                Recinto Portuario de Topolobampo,
                            </p><p>
                                Patio de Contenedores
                            </p><p>
                                C.P. 81370
                            </p><p>
                                Topolobampo, Ahome, Sinaloa, México
                            </p><p>
                                Teléfono: (668) 862 1600
                            </p>
                        </div>
                        <div class="resume">
                            <p>
                                Carretera Tampico
                            </p><p>
                                Km. 6.5 S/N
                            </p><p>
                                C.P. 28876
                            </p><p>
                                Manzanillo, Colima, México
                            </p><p>
                                Teléfono: (314) 336 4877
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desktop-show" style="width: 100%;">
                <div class="body" style="width: 100%;">
                    <div id="map"></div>
                </div>
            </div>
            <div class="mobile-show">
                <div class="mobile-carousel">
                    <ul class="circles">
                        <li class="circle">
                            <div class="resume">
                                <div class="vertical-align">
                                    <p>
                                        Carretera Manzanillo - Minatitlán
                                    </p><p>
                                        Km. 6.5 S/N
                                    </p><p>
                                        C.P. 28876
                                    </p><p>
                                        Manzanillo, Colima, México
                                    </p><p>
                                        <a href="te:(314) 336 4877">Teléfono: (314) 336 4877</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="circle">
                            <div class="resume">
                                <div class="vertical-align">
                                    <p>
                                        Carretera Altamira
                                    </p><p>
                                        Puerto Industrial Km. 4
                                    </p><p>
                                        C.P. 89608
                                    </p><p>
                                        Altamira, Tamaulipas, México
                                    </p><p>
                                        <a href="tel:(833) 260 9119">Teléfono: (833) 260 9119</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="circle">
                            <div class="resume">
                                <div class="vertical-align">
                                    <p>
                                        Recinto Portuario de Topolobampo,
                                    </p><p>
                                        Patio de Contenedores
                                    </p><p>
                                        C.P. 81370
                                    </p><p>
                                        Topolobampo, Ahome, Sinaloa, México
                                    </p><p>
                                        <a href="tel:(668) 862 1600">Teléfono: (668) 862 1600</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="circle">
                            <div class="resume">
                                <div class="vertical-align">
                                    <p>
                                        Carretera Tampico
                                    </p><p>
                                        Km. 6.5 S/N
                                    </p><p>
                                        C.P. 28876
                                    </p><p>
                                        Manzanillo, Colima, México
                                    </p><p>
                                        <a href="tel:(314) 336 4877">Teléfono: (314) 336 4877</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head">
                    <h3><a href="/blog">Noticias</a></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="fake-center">
            @foreach( $news as $new)
                <div class="quad">
                    {{--style="background-image: url('/assets/images/home/04_isaosa_img_home_contacto.png')"--}}
                    <div class="image-circle">
                        <div class="overlay">
                            <a href="/publicacion/{{ $new->id }}">
                                <p>
                                    {{ $new->description }}
                                </p>
                                <p>
                                    <img src="/assets/images/icons/vermas.svg" alt="Ver mas">
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="line"></div>
                    <h4>
                        <a href="/publicacion/{{ $new->id }}">{{ $new->title }}</a>
                    </h4>
                </div>
            @endforeach
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cta">
                    <a href="/blog" class="btn">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-about_us">
    <div class="container">
        <div class="relative">
            <div class="title">
                <h4><a href="/quienes-somos">QUIÉNES SOMOS</a></h4>
            </div>
            <div class="image" style="background-image: url('/assets/images/home/03_isaosa_img_home_quienesomos.jpg')"></div>
            <div class="text">
                <div class="text-title">Historia</div>
                <p>
                    ISAOSA es una empresa fundada en 1996. Desde entonces ha estado evolucionando y creciendo comprometidamente con el campo mexicano, en la búsqueda constante e importación de fertilizantes de alta calidad y productos de nuevas tecnologías e innovación, que contribuyan a maximizar la rentabilidad del consumidor final/agricultor, mediante cosechas de alto rendimiento, optimizando costo beneficio.
                </p>
                <div class="cta">
                    <a href="#">
                        <span>Ver más</span>
                        <span class="circle">
                                <img src="/assets/images/icons/vermas.svg" alt="Ver más">
                            </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-contact relative" id="contacto">
    <div class="container">
        <h4><span>Contacto</span></h4>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-right">
                            <a href="#">
                                Av. Prologación Mariano Otero 3820
                                Col. Santa Ana Tepetitlán C.P. 45230
                                Zapopan, Jalisco, México
                            </a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <a href="tel:+52 (33) 5000 1500" class="margin-botom-0">
                                Tel: +52 (33) 5000 1500
                            </a>
                            <a href="mailto:ventas@isaosa.com.mx">
                                ventas@isaosa.com.mx
                            </a>
                        </p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form class="form_contact" onsubmit="form_success(); return false;">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text"  placeholder="NOMBRE">
                            <input type="email" placeholder="CORREO">
                            <input type="text"  placeholder="EMPRESA">
                        </div>
                        <div class="col-md-6">
                            <p>Mensaje</p>
                            <textarea name="text" id="text" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn" type="submit">ENVIAR</button>
                        </div>
                    </div>
                </form>
                <div class="succes-message" style="display: none;">
                    <div class="border">
                        <p>Recibimos tu mensaje.</p>
                        <div class="line"></div>
                        <p>En breve nos pondremos<br/>en contacto contigo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="go-up-action">
        <img src="/assets/images/icons/ir_arriba.svg" alt="Ir arriba">
    </div>
</section>


@endsection
@section('javascript')
    <script src="../assets/scripts/libs/gmaps.js"></script>
    <script>
        var mapStyle=[{featureType:"water",elementType:"geometry",stylers:[{color:"#e9e9e9"},{lightness:17}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#f5f5f5"},{lightness:20}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#ffffff"},{lightness:17}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#ffffff"},{lightness:29},{weight:.2}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#ffffff"},{lightness:18}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#ffffff"},{lightness:16}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#f5f5f5"},{lightness:21}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#dedede"},{lightness:21}]},{elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#ffffff"},{lightness:16}]},{elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#333333"},{lightness:40}]},{elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#f2f2f2"},{lightness:19}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#fefefe"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#fefefe"},{lightness:17},{weight:1.2}]}];
        function initMap() {
            var locations = [
                        ['MANZANILLO',  19.078111, -104.286239, 4],
                        ['ALTAMIRA',    22.378796, -97.910722,  5],
                        ['TOPOLOBAMPO', 25.584447, -109.061701, 3],
                        ['TÁMPICO',     22.227143, -97.8408613, 2]
                    ],
                    MapPosition = {lat: 19.078111, lng: -104.286239}
                    ;

            var map = new google.maps.Map(document.getElementById('map'), {
                center: MapPosition,
                scrollwheel: false,
                zoom: 10,
                styles: mapStyle,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;
            var markerBounds = new google.maps.LatLngBounds();

            for (i = 0; i < locations.length; i++) {
                console.log(locations[i][1]);

                var point = new google.maps.LatLng(locations[i][1], locations[i][2]);
                marker = new google.maps.Marker({
                    position: point,
                    map: map,
                    infoWindow: {
                        content: '<p>'+locations[1][0]+'</p>'
                    }
                });

                markerBounds.extend(point);

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }

            map.fitBounds(markerBounds);

            $(".ul-locations li").on('click', function () {
                var index = $(this).index();
                map.setCenter(new google.maps.LatLng(locations[index][1], locations[index][2]));
                map.setZoom(14);
            });

//            GMaps.geolocate({
//                success: function(position) {
////                    map.setCenter(position.coords.latitude, position.coords.longitude);
//                    loadWeather(position.coords.latitude+','+ position.coords.longitude);
//                },
//                error: function(error) {
////                    alert('Error al localizar: '+error.message);
//                },
//                not_supported: function() {
////                    alert("Tu navegador no cuenta con posibilidad de geolocalización");
//                }
//            });

        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4cqGoTfEt52V5IoUO0drBTt17S4gZUak&callback=initMap" type="text/javascript"></script>
    <script>
        $(".mobile-menu").addClass('home-special');
        var form_success = function form_success(){
            $(".form_contact").slideUp(600, function(){
                $(".succes-message").slideDown();
            });
        }
    </script>
@endsection
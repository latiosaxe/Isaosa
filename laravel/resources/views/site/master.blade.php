<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>Isaosa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="../assets/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="../assets/plugins/sweetalert/sweetalert.css">
    <!--<link rel="stylesheet" href="assets/plugins/owl/assets/owl.carousel.min.css">-->
    <!--<link rel="stylesheet" href="assets/plugins/owl/assets/owl.theme.default.min.css">-->
    <link rel="stylesheet" href="../assets/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        var ISAOSA = {};
    </script>
    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="ISAOSA" />
    <meta property="og:description"   content="ISAOSA nutrientes agrícolas" />
    <meta property="og:image"         content="/assets/images/home/nuevas/_5.jpg" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId=105419609517426";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="mobile-menu">
    <div class="close" style="opacity:0;">
        <img src="/assets/images/icons/cerrar.svg" alt="Cerrar">
    </div>
    <ul>
        <li><a href="/productos">PRODUCTOS</a></li>
        {{--<li><a href="#">CALCULADORA</a></li>--}}
        <li><a href="/servicios">SERVICIOS</a></li>
        <li><a href="/#bodegas">BODEGAS</a></li>
        <li><a href="/blog">NOTICIAS</a></li>
        <li><a href="/quienes-somos">QUIÉNES SOMOS</a></li>
        <li><a href="/#contacto">CONTACTO</a></li>
        <li>
            <span>ACCESO INTERNO</span>
            <ul>
                <li><a href="http://200.76.34.67/isaosaweb/loginadmin.aspx">- ISAOSA</a></li>
                <li><a href="http://200.76.34.67/nutrientesweb/loginadmin.aspx">- SOLUCIONES</a></li>
                <li><a href="http://200.76.34.67/insumosweb/loginadmin.aspx">- INSUMOS</a></li>
                <li><a href="http://200.76.34.68/GastoComprobar/Account/Login?ReturnUrl=%2fGastoComprobar">- Comprobación de gastos</a></li>
                <li><a href="http://insumosyservicios.mx/prices">- Tarifario de insumos</a></li>
            </ul>
        </li>
    </ul>
</div>
<div class="site">
    <header>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="/">
                    <img src="/assets/images/icons/logo.svg" alt="Isaosa" class="logo">
                </a>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-6 text-right header-margin-up">
                <div class="links">
                    <ul>
                        <li><a href="https://www.facebook.com/ISAOSA-164861660285225/" target="_blank"><img src="/assets/images/icons/fb.svg" alt="Facebook"></a></li>
                        <li><a href="https://twitter.com/isaosa_mexico" target="_blank"><img src="/assets/images/icons/tw.svg" alt="Twitter"></a></li>
                        <li><a href="https://www.youtube.com/user/IsaosaSoluciones" target="_blank"><img src="/assets/images/icons/youtube.svg" alt="YouTube"></a></li>
                    </ul>
                </div>
                <div class="pipe"></div>
                <a href="#" class="header-menu">
                    <span>Menú</span>
                    <div class="hamburguer-bt">
                        <div class="hamburguer-bt__stripe hamburguer-bt__stripe__top"></div>
                        <div class="hamburguer-bt__stripe hamburguer-bt__stripe__middle"></div>
                        <div class="hamburguer-bt__stripe hamburguer-bt__stripe__bottom"></div>
                    </div>
                    {{--<img src="/assets/images/icons/menu.svg" alt="Menú">--}}
                </a>
            </div>
        </div>
        <div class="apis">
            <div class="block dollar">
                USD: $<span id="dollar-price"></span> MXN
            </div>
            <div class="block weather">
                <ul></ul>
            </div>
        </div>
    </header>

    <div class="isaosa-content">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-right">
                    <form onsubmit="return false;">
                        <label for="newsletter-email">
                            <span>SUSCRÍBETE  A NUESTRO BOLETÍN</span>
                            <input type="email" id="newsletter-email" placeholder="corre@ejemplo.com">
                            <button class="btn just-icon">
                                <img src="/assets/images/icons/newsletter_flecha.svg" alt="Mandar">
                            </button>
                        </label>
                    </form>
                </div>
                <div class="col-md-3 col-md-offset-1 footer-logo">
                    <a href="/">
                        <img src="/assets/images/icons/logo_with_r.svg" alt="ISAOSA">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="last">
                    ISAOSA S.A. de C.V. Todos los derechos reservados 2017
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="../assets/scripts/libs/jquery-3.2.0.min.js"></script>
<script src="../assets/scripts/libs/money.js"></script>
<script src="../assets/scripts/libs/jquery.simpleWeather.min.js"></script>
<script src="../assets/plugins/slick/slick.min.js"></script>
<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="../assets/scripts/script.js"></script>
<script>
    $(document).ready(function(){
        var _token =  $('meta[name="csrf-token"]').attr('content');
//        console.info(_token);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': _token
            }
        });


        ISAOSA.main.init();

        var demo = function(data) {
            fx.rates = data.rates;
            var rate = fx(1).from("USD").to("MXN");
            $("#dollar-price").text(rate.toFixed(2));
            console.log("MXN = $" + rate.toFixed(2));
        };

        $.getJSON("http://api.fixer.io/latest", demo);

        var _positions = [
            ['MANZANILLO',  19.078111, -104.286239, 4],
            ['ALTAMIRA',    22.378796, -97.910722,  5],
            ['TOPOLOBAMPO', 25.584447, -109.061701, 3],
            ['TÁMPICO',     22.227143, -97.8408613, 2]
        ];

        $.each(_positions, function(index){
            loadWeather(_positions[index][1]+','+_positions[index][2]);
        });
        
        function loadWeather(location, woeid) {
            $.simpleWeather({
                location: location,
                woeid: woeid,
                unit: 'c',
                success: function(weather) {
                    $(".site header .apis .block.weather ul").append('<li><a href="http://smn.cna.gob.mx/es/" target="_blank"><span class="icon"><i class="icon-'+weather.code+'"></i></span> '+ weather.city +' '+ weather.temp+'&deg;'+weather.units.temp+'</a></li>')
                },
                error: function(error) {
                    $(".site header .apis .block.weather").hide()
                }
            });
        }

        if($(window).width() <= 768){
            $(".site .home-sections .content .grid .element").on('click', function(event){
                event.preventDefault();
                console.log("Wop", $(this).find('.more a').attr('href'));
                window.location.href = $(this).find('.more a').attr('href');
            });

            $(".site .home-about_us").on('click', function (event) {
                event.preventDefault();
                window.location.href = '/quienes-somos';
            })
        }


        var posititonWindow = 0;
        var doc = document.documentElement;
        $(window).scroll(function(){
            posititonWindow = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
            if(posititonWindow > 100){
                $('header').addClass('home-active-special');
            }else{
                $('header').removeClass('home-active-special');
            }
        })
    });
</script>

@yield('javascript')
</body>
</html>
<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>Isaosa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="../assets/plugins/slick/slick-theme.css">
    <!--<link rel="stylesheet" href="assets/plugins/owl/assets/owl.carousel.min.css">-->
    <!--<link rel="stylesheet" href="assets/plugins/owl/assets/owl.theme.default.min.css">-->
    <link rel="stylesheet" href="../assets/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        var ISAOSA = {};
    </script>
</head>
<body>
<div class="mobile-menu">
    <div class="close" style="opacity:0;">
        <img src="/assets/images/icons/cerrar.svg" alt="Cerrar">
    </div>
    <ul>
        <li><a href="/productos">PRODUCTOS</a></li>
        <li><a href="#">CALCULADORA</a></li>
        <li><a href="/servicios">SERVICIOS</a></li>
        <li><a href="#">BODEGAS</a></li>
        <li><a href="/blog">NOTICIAS</a></li>
        <li><a href="/quieres-somos">QUIÉNES SOMOS</a></li>
        <li><a href="#">CONTACTO</a></li>
        <li>
            <span>ACCESO INTERNO</span>
            <ul>
                <li><a href="#">- ISAOSA</a></li>
                <li><a href="#">- SOLUCIONES</a></li>
                <li><a href="#">- INSUMOS</a></li>
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
                        <li><a href="#" target="_blank"><img src="/assets/images/icons/fb.svg" alt="Facebook"></a></li>
                        <li><a href="#" target="_blank"><img src="/assets/images/icons/tw.svg" alt="Twitter"></a></li>
                        <li><a href="#" target="_blank"><img src="/assets/images/icons/youtube.svg" alt="YouTube"></a></li>
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
                        <img src="/assets/images/icons/logo_footer.svg" alt="ISAOSA">
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
<script src="../assets/scripts/script.js"></script>
<script>
    $(document).ready(function(){
        ISAOSA.main.init();

        var demo = function(data) {
            fx.rates = data.rates;
            var rate = fx(1).from("USD").to("MXN");
            $("#dollar-price").text(rate.toFixed(2));
            console.log("MXN = $" + rate.toFixed(2));
        };

        var clima = function (data) {
            console.log(data);
        };

        $.getJSON("http://api.fixer.io/latest", demo);

        $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=London,uk&callback=clima", function (data) {
            console.log(data);
        });


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
                    console.log(weather);
                    $(".site header .apis .block.weather ul").append('<li><span class="icon"><i class="icon-'+weather.code+'"></i></span> '+ weather.city +' '+ weather.temp+'&deg;'+weather.units.temp+'</li>')
                },
                error: function(error) {
                    $(".site header .apis .block.weather").hide()
                }
            });
        }

    });
</script>

@yield('javascript')
</body>
</html>
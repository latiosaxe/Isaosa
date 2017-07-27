<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta section -->
    <title>Tercer Cuarto</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >

    <link rel="icon" href="favicon.ico" type="image/x-icon" >
    <!-- ./meta section -->

    <!-- css styles -->
    <link rel="stylesheet" type="text/css" href="/assets/control/plugins/dropzone/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/control/plugins/redactor/redactor.css">
    <link rel="stylesheet" type="text/css" href="/assets/intuitive/css/default-blue-white.css" id="dev-css">
    <link rel="stylesheet" type="text/css" href="/assets/style/style-control.css">
    <!-- ./css styles -->

    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="/assets/intuitive/css/dev-other/dev-ie-fix.css">
    <![endif]-->

    <!-- javascripts -->
    <script type="text/javascript" src="/assets/intuitive/js/plugins/modernizr/modernizr.js"></script>
    <!-- ./javascripts -->

    <style>
        .dev-page{visibility: hidden;}
    </style>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        var TC={
            base_url: '{{ url('/') }}/',
            control_url: '{{ url('/control') }}/',
            api_url: '{{ url('/api') }}/'
        };
    </script>
</head>
<body>
<!-- set loading layer -->
<div class="dev-page-loading preloader"></div>
<!-- ./set loading layer -->

<!-- page wrapper -->
<div class="dev-page">

    <!-- page header -->
    <div class="dev-page-header">

        <div class="dph-logo">
            <a href="/control/dashboard">Tercer Cuarto</a>
            <a class="dev-page-sidebar-collapse" style="display: none;">
                <div class="dev-page-sidebar-collapse-icon">
                    <span class="line-one"></span>
                    <span class="line-two"></span>
                    <span class="line-three"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- ./page header -->

    <!-- page container -->
    <div class="dev-page-container">

        <!-- page sidebar -->
        <div class="dev-page-sidebar">
            <ul class="dev-page-navigation">


                <li class="active">
                    <a href="/control/dashboard"><i class="fa fa-desktop"></i> <span>Inicio</span></a>
                </li>

                <li>
                    <a href="/control/matches"><i class="fa fa-calendar"></i> <span>Partidos</span></a>
                </li>


                <li>
                    <a href="/control/posts"><i class="fa fa-pencil"></i> <span>Notas</span></a>
                </li>



                <li class="title">Administrar</li>

                <li>
                    <a href="/control/leagues"><i class="fa fa-users"></i> <span>Ligas</span></a>
                </li>
                <li>
                    <a href="/control/teams"><i class="fa fa-user"></i> <span>Equipos</span></a>
                </li>

                <li>
                    <a href="/control/stadiums"><i class="fa fa-compass"></i> <span>Estadios</span></a>
                </li>

            </ul>

        </div>
        <!-- ./page sidebar -->

        <!-- page content -->
        <div class="dev-page-content">
            <!-- page content container -->
            <div class="container">
                @yield('content')
            </div>
            <!-- ./page content container -->

        </div>
        <!-- ./page content -->
    </div>
    <!-- ./page container -->


</div>
<!-- ./page wrapper -->

<!-- javascript -->
<script type="text/javascript" src="/assets/intuitive/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/plugins/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript" src="/assets/intuitive/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/plugins/moment/moment.js"></script>

<script type="text/javascript" src="/assets/intuitive/js/plugins/knob/jquery.knob.min.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="/assets/intuitive/js/plugins/bootstrap-select/bootstrap-select.js"></script>

<script type="text/javascript" src="/assets/intuitive/js/plugins/nvd3/d3.min.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/plugins/nvd3/nv.d3.min.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/plugins/nvd3/lib/stream_layers.js"></script>

<script type="text/javascript" src="/assets/intuitive/js/plugins/waypoint/waypoints.min.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/plugins/counter/jquery.counterup.min.js"></script>

<script type="text/javascript" src="/assets/intuitive/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>

<script type="text/javascript" src="/assets/intuitive/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/plugins/sortable/sortable.min.js"></script>


<script type="text/javascript" src="/assets/control/plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript" src="/assets/control/plugins/redactor/redactor.min.js"></script>


<script type="text/javascript" src="/assets/intuitive/js/dev-settings.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/dev-loaders.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/dev-layout-default.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/demo.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/dev-app.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/demo-dashboard.js"></script>

<script type="text/javascript" src="/assets/control/js/main.js"></script>
<script type="text/javascript" src="/assets/control/js/teams.js"></script>
<script type="text/javascript" src="/assets/control/js/leagues.js"></script>
<script type="text/javascript" src="/assets/control/js/matches.js"></script>
<script type="text/javascript" src="/assets/control/js/stadiums.js"></script>
<script type="text/javascript" src="/assets/control/js/posts.js"></script>
<script type="text/javascript" src="/assets/control/js/featured.js"></script>

<script>
    $(document).ready(function(){
       TC.main.init();
    });
</script>

@yield('javascript')
<!-- ./javascript -->
</body>
</html>
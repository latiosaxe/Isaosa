<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta section -->
    <title>Iniciar Sesión | Tercer Cuarto</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >

    <link rel="icon" href="favicon.ico" type="image/x-icon" >
    <!-- /meta section -->

    <!-- css styles -->
    <link rel="stylesheet" type="text/css" href="/assets/intuitive/css/default-blue-white.css" id="dev-css">
    <!-- ./css styles -->

    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="/assets/intuitive/css/dev-other/dev-ie-fix.css">
    <![endif]-->

    <!-- javascripts -->
    <script type="text/javascript" src="/assets/intuitive/js/plugins/modernizr/modernizr.js"></script>
    <!-- ./javascripts -->

    <style>.dev-page{visibility: hidden;}</style>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<!-- page wrapper -->
<div class="dev-page dev-page-login">

    <div class="dev-page-login-block">
        <a class="dev-page-login-block__logo">CMS Tercer Cuarto</a>
        <div class="dev-page-login-block__form">
            {{--<div class="title"><strong>Welcome</strong>, please login</div>--}}
            <form id="loginForm">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="user_name" class="form-control" placeholder="Usuario">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" id="password" class="form-control" placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-group no-border margin-top-20">
                    <button class="btn btn-success btn-block">Ingresar</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- ./page wrapper -->

<!-- javascript -->
<script type="text/javascript" src="/assets/intuitive/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/assets/intuitive/js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- ./javascript -->
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#loginForm").submit(function(event){
            event.preventDefault();

            var data = {};
            data.username = $("#user_name").val();
            data.password = $("#password").val();

            data._token = $('meta[name="csrf-token"]').attr('content');
            
            $.ajax({
                url: '/authenticate',
                data: data,
                type: 'post',
                success: function () {
                    document.location.href = '/control'
                },
                error: function () {
                    alert("Error usuario y contraseña");
                }
            })
        });
    });
</script>
</body>
</html>







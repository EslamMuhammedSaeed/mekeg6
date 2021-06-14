<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="rtl">
<head>
    <meta charset="utf-8">
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>MEKEG</title>
    {{-- <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{asset('css/voyager.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Luckiest+Guy&family=Potta+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- @if (__('voyager::generic.is_rtl') == 'true')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif --}}
    <style>
        body {
            /* background-image:url('{{ asset('images/background_green3.png') }}'); */
            background-size: cover;
            background-color: #00775e;
        }
        body.login .login-sidebar {
            border-top:5px solid #00775e ;
        }
        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top:0px !important;
                
            }
            
            /* img.hidden-md {
                display: block !important;
            } */
        }
        body.login .form-group-default.focused{
            border-color: #00775e;
        }
        .login-button, .bar:before, .bar:after{
            background: #00775e;
        }
        .remember-me-text{
            padding:0 5px;
        }
    </style>
    
    @yield('pre_css')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body class="login">
<div class="container-fluid">
    <div class="row">
        

        <div class="col-xs-12 col-sm-12 col-md-5 login-sidebar">

            @yield('content')
 
        </div> 
        <div class="animated"></div> 
        <div class=" col-sm-12 col-md-7 text-center" style="vertical-align: middle;display: flex; flex-direction: column; justify-content: center;">          
            <div class=" text-center" style="">
                <img class="img-responsive mx-auto  flip  animated fadeIn" style="max-width:600px" src="{{ asset('images/white-logo.png') }}" alt="Logo Icon">
                <h2 class="text-white mt-4" style="font-family:  'Almarai', sans-serif;">مختبر تطوير</h2>
                <h2 class="text-white mt-3" style="font-family:  'Almarai', sans-serif;">آداء المنظمات الأهلية</h2>
                
            </div> <!-- .logo-title-container -->
        </div>

        <!-- .login-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
@yield('post_js')
</body>
</html>

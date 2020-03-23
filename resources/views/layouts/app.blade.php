<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <title>Indicadores</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/comun.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body class="navbar-bottom navbar-top">

@include('layouts/menu')

@yield('content')

<!-- Footer -->
<div class="navbar navbar-default navbar-fixed-bottom footer">
    <ul class="nav navbar-nav visible-xs-block">
        <li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
    </ul>

    <div class="navbar-collapse collapse" id="footer">
        <div class="navbar-text">
            &copy; 2018. Villa María - Córdoba Oversoft S.A.
        </div>

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="#">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /footer -->


<!-- Core JS files -->
<script type="text/javascript" src="{{asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/ui/nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/ui/drilldown.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/ui/fab.min.js')}}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/ui/moment/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/pickers/daterangepicker.js')}}"></script>


<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('assets/js/plugins/visualization/echarts/echarts.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/charts/echarts/timeline_option.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pages/general_widgets_stats.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('assets/js/pages/dashboard.js')}}"></script>--}}

<!-- Librerias para el contador usado en home -->
<script type="text/javascript" src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- /Librerias para el contador usado en home -->

<script type="text/javascript" src="{{asset('assets/js/plugins/ui/ripple.min.js')}}"></script>

@yield('scripts')
</body>
</html>

@extends('layouts.app')

@section('content')

<?php

setlocale(LC_TIME, config('app.locale'));

$dt = \Carbon\Carbon::parse($fecha_elegida)->formatLocalized('%B');

//echo strftime("%A %d de %B del %Y");
//Salida: viernes 24 de febrero del 2012

?>

        <!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Top full width position -->
            <div class="content-group header-demo">
                <div class="page-header page-header-default">
                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li><a href="{{ url('bug_fixing/error_evitable_index') }}">Errores Evitables</a></li>
                            <li class="active">{{ ucfirst($dt) }} - {{ $anio }}</li>
                        </ul>

                        @include('layouts.breadcrumb')
                    </div>

                </div>
            </div>
            <!-- /top full width position -->

            <!-- Panel body table -->
            <div class="panel panel-white">
                <div class="panel-heading">

                    <h5 class="panel-title">Errores Evitables de <span class="text-bold">{{ ucfirst($dt) }} - {{ $anio }}</span>
                    </h5>
                    <div class="heading-elements">
                        <a type="button" href="{{ url('excel_exportacion_error_evitable/' .$anio. '/' .$mes) }}" class="btn btn-default btn-raised btn-sm heading-btn"><i class="icon-file-download icon-dowload-excel"></i> Descargar Excel</a>
                    </div>
                </div>

                <div class="loading_gif"></div>

                <div class="resultado"></div>

            </div>
            <!-- /panel body table -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

@endsection

@section('scripts')

    <script>
        $(document).ready(function () {

            $('.resultado').load('{{ URL::to("bug_fixing/error_evitable_detalle_contenido/".$anio."/".$mes) }}', function () {
                $(".loading_gif").hide();
            });
        });
    </script>

@endsection
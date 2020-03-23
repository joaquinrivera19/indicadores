@extends('layouts.app')

@section('content')

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
                            <li class="active">Tareas con Fecha Prometida</li>
                        </ul>

                        @include('layouts.breadcrumb')
                    </div>

                </div>
            </div>
            <!-- /top full width position -->

            <div class="loading_gif"></div>

            <div class="resultado"></div>

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
            $('.resultado').load('{{ URL::to("/desarrollo/tareas_fecha_prometida_index_contenido") }}', function () {
                $(".loading_gif").hide();
            });
        });
    </script>

@endsection
@extends('layouts.app')

@section('content')

        <!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

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

    <script type="text/javascript">

        $(document).ready(function () {
            $('.resultado').load('{{ URL::to("calidad_contenido") }}', function () {
                $(".loading_gif").hide();
                $('.resultado').hide().fadeIn();
                $('.counter').counterUp();
            });
        });

    </script>

@endsection

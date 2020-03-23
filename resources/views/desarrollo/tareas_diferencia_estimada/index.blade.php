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
                            <li class="active">Tareas Con Diferencias Estimadas</li>
                        </ul>

                        @include('layouts.breadcrumb')
                    </div>

                </div>
            </div>
            <!-- /top full width position -->

            <div class="loading_gif"></div>

            <div class="resultado"></div>

            <!-- Basic column chart -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Gráfico Tareas Con Diferencias Estimadas</h5>
                </div>

                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="basic_columns"></div>
                    </div>
                </div>
            </div>
            <!-- /basic column chart -->

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

            $('.resultado').load('{{ URL::to("desarrollo/tareas_diferencia_estimada_index_contenido") }}', function () {
                $(".loading_gif").hide();
                grafic_panel();

            });
        });

        function grafic_panel() {

            require.config({
                paths: {
                    echarts: '../assets/js/plugins/visualization/echarts'
                }
            });

            require(
                    [
                        'echarts',
                        'echarts/theme/limitless',
                        'echarts/chart/bar',
                        'echarts/chart/line'
                    ],

                    // Charts setup
                    function (ec, limitless) {

                        var basic_columns = ec.init(document.getElementById('basic_columns'), limitless);

                        basic_columns_options = {

                            // Setup grid
                            grid: {
                                x: 40,
                                x2: 20,
                                y: 35,
                                y2: 25
                            },

                            // Add tooltip
                            tooltip: {
                                trigger: 'axis',
                                axisPointer: {
                                    type: 'shadow'
                                }
                            },

                            // Add legend
                            /*legend: {
                             data: ['Evaporation']
                             },*/

                            // Enable drag recalculate
                            calculable: false,

                            // Horizontal axis
                            xAxis: [{
                                type: 'category',
                                data: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
                            }],

                            // Vertical axis
                            yAxis: [{
                                type: 'value'
                            }],

                            // Add series
                            series: [
                                {
                                    name: 'Cantidad 2017',
                                    type: 'bar',
                                    data: <?php echo $valor_grafico2017; ?>
                                },
                                {
                                    name: 'Cantidad 2018',
                                    type: 'bar',
                                    data: <?php echo $valor_grafico2018; ?>
                                }
                            ]
                        };

                        basic_columns.setOption(basic_columns_options);

                        window.onresize = function () {
                            setTimeout(function () {
                                basic_columns.resize();
                            }, 200);
                        }
                    }
            );

        }

    </script>

@endsection
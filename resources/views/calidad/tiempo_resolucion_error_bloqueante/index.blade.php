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
                            <li class="active">Tiempo de Resolución de Errores Bloqueantes</li>
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
                    <h5 class="panel-title">Gráfico Tiempo de Resolución de Errores Bloqueantes</h5>
                </div>

                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="basic_lines"></div>
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

    <script type="application/javascript">

        $(document).ready(function () {

            $('.resultado').load('{{ URL::to("calidad/errores_bloqueantes_index_contenido") }}', function () {
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

                        var basic_lines = ec.init(document.getElementById('basic_lines'), limitless);

                        basic_lines_options = {

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
                            legend: {
                                data: ['> 24 hs - 2018', '> 48 hs - 2018', '> 24 hs - 2017', '> 48 hs - 2017']
                            },

                            // Add custom colors
                            color: ['#689F38','#D32F2F','#689F38','#D32F2F '],

                            // Enable drag recalculate
                            calculable: false,

                            // Horizontal axis
                            xAxis: [{
                                type: 'category',
                                //boundaryGap: false,
                                data: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
                            }],

                            // Vertical axis
                            yAxis: [{
                                type: 'value',
                                axisLabel: {
                                    formatter: '{value} %'
                                }
                            }],

                            // Add series
                            series: [
                                {
                                    name: '> 24 hs - 2018',
                                    type: 'line',
                                    data: <?php echo $valor_grafico_verde[2018]; ?>
                                },
                                {
                                    name: '> 48 hs - 2018',
                                    type: 'line',
                                    data: <?php echo $valor_grafico_rojo[2018]; ?>
                                },
                                {
                                    name: '> 24 hs - 2017',
                                    type: 'line',
                                    data: <?php echo $valor_grafico_verde[2017]; ?>
                                },
                                {
                                    name: '> 48 hs - 2017',
                                    type: 'line',
                                    data: <?php echo $valor_grafico_rojo[2017]; ?>
                                }
                            ]
                        };

                        basic_lines.setOption(basic_lines_options);

                        window.onresize = function () {
                            setTimeout(function () {
                                basic_lines.resize();
                            }, 200);
                        }
                    }
            );
        };

    </script>

@endsection
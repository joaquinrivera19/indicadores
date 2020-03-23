@extends('layouts.app')

@section('content')

        <!-- page container -->
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
                            <li class="active">Errores Por Prioridad</li>
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
                    <h5 class="panel-title">Gráfico Errores Por Prioridad <span class="class_valor_anio"></span></h5>
                </div>

                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="basic_lines"></div>
                    </div>
                </div>
            </div>

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

            $('.resultado').load('{{ URL::to("bug_fixing/error_prioridad_index_contenido") }}', function () {
                $(".loading_gif").hide();

                $valor_anio = 2018;
                $('.class_valor_anio').text($valor_anio);

                grafic_panel_2018();
            });
        });

        function grafic_panel_2018() {

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
                                data: ['% Urgente - 2018', '% Muy Alta - 2018', '% Alta - 2018', '% Normal - 2018']
                            },

                            // Add custom colors
                            color: ['#7c659c','#9c3b3a','#f59547','#9bba59'],

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
                                    name: '% Urgente - 2018',
                                    type: 'line',
                                    data: <?php echo $valor_grafico2018_urgente; ?>,
                                    itemStyle: {
                                        normal: {
                                            label: {
                                                show: true,
                                                position: 'top'
                                            }
                                        }
                                    }
                                },
                                {
                                    name: '% Muy Alta - 2018',
                                    type: 'line',
                                    data: <?php echo $valor_grafico2018_muy_alta; ?>,
                                    itemStyle: {
                                        normal: {
                                            label: {
                                                show: true,
                                                position: 'top'
                                            }
                                        }
                                    }
                                },
                                {
                                    name: '% Alta - 2018',
                                    type: 'line',
                                    data: <?php echo $valor_grafico2018_alta; ?>,
                                    itemStyle: {
                                        normal: {
                                            label: {
                                                show: true,
                                                position: 'top'
                                            }
                                        }
                                    }
                                },
                                {
                                    name: '% Normal - 2018',
                                    type: 'line',
                                    data: <?php echo $valor_grafico2018_normal; ?>,
                                    itemStyle: {
                                        normal: {
                                            label: {
                                                show: true,
                                                position: 'top'
                                            }
                                        }
                                    }
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
        }

        function grafic_panel_2017() {

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
                                data: ['% Urgente - 2017', '% Muy Alta - 2017', '% Alta - 2017', '% Normal - 2017']
                            },

                            // Add custom colors
                            color: ['#7c659c','#9c3b3a','#f59547','#9bba59'],

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
                                    name: '% Urgente - 2017',
                                    type: 'line',
                                    data: <?php echo $valor_grafico2017_urgente; ?>,
                                    itemStyle: {
                                        normal: {
                                            label: {
                                                show: true,
                                                position: 'top'
                                            }
                                        }
                                    }
                                },
                                {
                                    name: '% Muy Alta - 2017',
                                    type: 'line',
                                    data: <?php echo $valor_grafico2017_muy_alta; ?>,
                                    itemStyle: {
                                        normal: {
                                            label: {
                                                show: true,
                                                position: 'top'
                                            }
                                        }
                                    }
                                },
                                {
                                    name: '% Alta - 2017',
                                    type: 'line',
                                    data: <?php echo $valor_grafico2017_alta; ?>,
                                    itemStyle: {
                                        normal: {
                                            label: {
                                                show: true,
                                                position: 'top'
                                            }
                                        }
                                    }
                                },
                                {
                                    name: '% Normal - 2017',
                                    type: 'line',
                                    data: <?php echo $valor_grafico2017_normal; ?>,
                                    itemStyle: {
                                        normal: {
                                            label: {
                                                show: true,
                                                position: 'top'
                                            }
                                        }
                                    }
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
        }


    </script>

@endsection
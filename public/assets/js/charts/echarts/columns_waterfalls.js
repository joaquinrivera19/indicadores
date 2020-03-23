$(function () {

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
                    x2: 40,
                    y: 35,
                    y2: 25
                },

                // Add tooltip
                tooltip: {
                    trigger: 'axis'
                },

                // Add legend
                legend: {
                    data: ['Evaporation']
                },

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
                        name: 'Evaporation',
                        type: 'bar',
                        data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
                        itemStyle: {
                            normal: {
                                label: {
                                    show: true,
                                    textStyle: {
                                        fontWeight: 500
                                    }
                                }
                            }
                        }
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
});

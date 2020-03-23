<!-- Panel body table -->
<div class="panel-group-control">
    <div class="panel panel-white">
        <div class="panel-heading">
            <h5 class="panel-title">Errores Por Prioridad
            </h5>
        </div>

        <div class="panel-body">
            {{--<p class="content-group">Example of a table placed inside <code>panel body</code>. Such tables
                always have additional whitespace taken from <code>.panel-body</code> element padding.</p>--}}

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;"></th>
                        <th style="text-align: center;">Ene</th>
                        <th style="text-align: center;">Feb</th>
                        <th style="text-align: center;">Mar</th>
                        <th style="text-align: center;">Abr</th>
                        <th style="text-align: center;">May</th>
                        <th style="text-align: center;">Jun</th>
                        <th style="text-align: center;">Jul</th>
                        <th style="text-align: center;">Ago</th>
                        <th style="text-align: center;">Sep</th>
                        <th style="text-align: center;">Oct</th>
                        <th style="text-align: center;">Nov</th>
                        <th style="text-align: center;">Dic</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr class="border-double">
                        <td style="padding: 12px 10px; width: 116px;">
                            <div class="panel-title"><a class="collapsed btn_2018" data-toggle="collapse" href="#collapsible-control-group1">SIAC 2018</a></div>
                        </td>
                        @for ($i = 1; $i <= 12; $i++)

                            <td align="center" style="padding: 12px 10px;width: 84px;">
                                <a href="{{ url('bug_fixing/error_prioridad_detalle/2018/'.$i)}}"
                                   type="button" class="btn btn-default btn-raised btn-sm">
                                            <span class="text-green-700 text-bold">

                                                {{ isset($sum_mes2018_total[$i]) ? $sum_mes2018_total[$i] : '0' }}

                                            </span>
                                </a>
                            </td>
                        @endfor
                    </tr>

                    <tr>
                        <td colspan="13" style="padding: 0px;">
                            <div id="collapsible-control-group1" class="panel-collapse collapse">

                                <table class="table table-striped">

                                    <tr>
                                        <td style="padding: 12px 27px 12px 10px;width: 118px;">% Urgente</td>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <td align="center" style="padding: 12px 10px;width: 84px;">
                                            <span class="text-green-700 text-bold">
                                                 {{ isset($sum_mes2018_urgente[$i]) ? $sum_mes2018_urgente[$i] : '0' }}
                                                %
                                            </span>
                                            </td>
                                        @endfor
                                    </tr>

                                    <tr class="border-dashed">
                                        <td style="padding: 12px 27px 12px 10px;width: 118px;">% Muy Alta</td>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <td align="center" style="padding: 12px 10px;width: 84px;">
                                            <span class="text-green-700 text-bold">
                                                 {{ isset($sum_mes2018_muy_alta[$i]) ? $sum_mes2018_muy_alta[$i] : '0' }}
                                                %
                                            </span>
                                            </td>
                                        @endfor
                                    </tr>

                                    <tr class="border-dashed">
                                        <td style="padding: 12px 27px 12px 10px;width: 118px;">% Alta</td>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <td align="center" style="padding: 12px 10px;width: 84px;">
                                            <span class="text-green-700 text-bold">
                                                 {{ isset($sum_mes2018_alta[$i]) ? $sum_mes2018_alta[$i] : '0' }} %
                                            </span>
                                            </td>
                                        @endfor
                                    </tr>

                                    <tr class="border-dashed">
                                        <td style="padding: 12px 27px 12px 10px;width: 118px;">% Normal</td>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <td align="center" style="padding: 12px 10px;width: 84px;">
                                            <span class="text-green-700 text-bold">
                                                 {{ isset($sum_mes2018_normal[$i]) ? $sum_mes2018_normal[$i] : '0' }} %
                                            </span>
                                            </td>
                                        @endfor
                                    </tr>

                                </table>

                            </div>
                        </td>
                    </tr>

                    <tr class="border-double">
                        <td style="padding: 12px 10px; width: 116px;">
                            <div class="panel-title"><a class="collapsed btn_2017" data-toggle="collapse" href="#collapsible-control-group2">SIAC 2017</a></div>
                        </td>
                        @for ($i = 1; $i <= 12; $i++)

                            <td align="center" style="padding: 12px 10px;width: 84px;">
                                <a href="{{ url('bug_fixing/error_prioridad_detalle/2017/'.$i)}}"
                                   type="button" class="btn btn-default btn-raised btn-sm">
                                            <span class="text-green-700 text-bold">

                                                {{ isset($sum_mes2017_total[$i]) ? $sum_mes2017_total[$i] : '0' }}

                                            </span>
                                </a>
                            </td>
                        @endfor
                    </tr>

                    <tr>
                        <td colspan="13" style="padding: 0px;">
                            <div id="collapsible-control-group2" class="panel-collapse collapse">

                                <table class="table table-striped">

                                    <tr>
                                        <td style="padding: 12px 27px 12px 10px;width: 118px;">% Urgente</td>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <td align="center" style="padding: 12px 10px;width: 84px;">
                                            <span class="text-green-700 text-bold">
                                                 {{ isset($sum_mes2017_urgente[$i]) ? $sum_mes2017_urgente[$i] : '0' }}
                                                %
                                            </span>
                                            </td>
                                        @endfor
                                    </tr>

                                    <tr class="border-dashed">
                                        <td style="padding: 12px 27px 12px 10px;width: 118px;">% Muy Alta</td>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <td align="center" style="padding: 12px 10px;width: 84px;">
                                            <span class="text-green-700 text-bold">
                                                 {{ isset($sum_mes2017_muy_alta[$i]) ? $sum_mes2017_muy_alta[$i] : '0' }}
                                                %
                                            </span>
                                            </td>
                                        @endfor
                                    </tr>

                                    <tr class="border-dashed">
                                        <td style="padding: 12px 27px 12px 10px;width: 118px;">% Alta</td>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <td align="center" style="padding: 12px 10px;width: 84px;">
                                            <span class="text-green-700 text-bold">
                                                 {{ isset($sum_mes2017_alta[$i]) ? $sum_mes2017_alta[$i] : '0' }} %
                                            </span>
                                            </td>
                                        @endfor
                                    </tr>

                                    <tr class="border-dashed">
                                        <td style="padding: 12px 27px 12px 10px;width: 118px;">% Normal</td>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <td align="center" style="padding: 12px 10px;width: 84px;">
                                            <span class="text-green-700 text-bold">
                                                 {{ isset($sum_mes2017_normal[$i]) ? $sum_mes2017_normal[$i] : '0' }} %
                                            </span>
                                            </td>
                                        @endfor
                                    </tr>

                                </table>

                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /panel body table -->

<script type="application/javascript">

    $(document).ready(function () {

        $('.btn_2018').click(function () {

            $valor_anio = 2018;
            $('.class_valor_anio').text($valor_anio);

            grafic_panel_2018();

        });

        $('.btn_2017').click(function () {

            $valor_anio = 2017;
            $('.class_valor_anio').text($valor_anio);

            grafic_panel_2017();

        });

    });


</script>
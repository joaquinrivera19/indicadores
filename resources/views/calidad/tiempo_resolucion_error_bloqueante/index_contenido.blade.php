<!-- Panel body table -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h5 class="panel-title">Tiempo de Resolución de Errores Bloqueantes
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
                    <td style="padding: 12px 10px;">SIAC - 2018</td>

                    @for ($m = 1; $m <= 12; $m++)

                        <td align="center" style="padding: 12px 10px;">
                            <a href="{{ url('calidad/errores_bloqueantes_detalle/2018/'.($m))}}"
                               type="button" class="btn btn-default btn-raised btn-sm">
                                            <span class="text-green-700 text-bold">

                                             {{ isset($cantidad_total_del_mes[2018][$m]) ? $cantidad_total_del_mes[2018][$m] : '0' }}

                                            </span>
                            </a>
                        </td>
                    @endfor

                </tr>

                <tr class="border-dashed">
                    <td style="padding: 12px 10px;">> 24 hs</td>

                    @for ($m = 1; $m <= 12; $m++)
                        <td align="center" style="padding: 12px 10px;">

                            @if (number_format(isset($porcentaje_verde_del_mes[2018][$m]) ? $porcentaje_verde_del_mes[2018][$m] : '0' ,2,'.',',') >= 25 )
                                <span class="text-danger-700 text-bold">
                                        @else
                                        <span class="text-green-700 text-bold">
                                        @endif
                                            {{ number_format(isset($porcentaje_verde_del_mes[2018][$m]) ? $porcentaje_verde_del_mes[2018][$m] : '0' ,2,'.',',') }}
                                            %
                                        </span>

                        </td>
                    @endfor

                </tr>

                <tr class="border-dashed">
                    <td style="padding: 12px 10px;">> 48 hs</td>

                    @for ($m = 1; $m <= 12; $m++)
                        <td align="center" style="padding: 12px 10px;">

                            @if (number_format(isset($porcentaje_rojo_del_mes[2018][$m]) ? $porcentaje_rojo_del_mes[2018][$m] : '0' ,2,'.',',') == 0 )
                                <span class="text-green-700 text-bold">
                                        @else
                                        <span class="text-danger-700 text-bold">
                                        @endif
                                            {{ number_format(isset($porcentaje_rojo_del_mes[2018][$m]) ? $porcentaje_rojo_del_mes[2018][$m] : '0' ,2,'.',',') }}
                                            %
                                        </span>

                        </td>
                    @endfor

                </tr>


                <tr class="border-double">
                    <td style="padding: 12px 10px;">SIAC - 2017</td>

                    @for ($m = 1; $m <= 12; $m++)

                        <td align="center" style="padding: 12px 10px;">
                            <a href="{{ url('calidad/errores_bloqueantes_detalle/2017/'.($m))}}"
                               type="button" class="btn btn-default btn-raised btn-sm">
                                            <span class="text-green-700 text-bold">

                                             {{ isset($cantidad_total_del_mes[2017][$m]) ? $cantidad_total_del_mes[2017][$m] : '0' }}

                                            </span>
                            </a>
                        </td>
                    @endfor

                </tr>

                <tr class="border-dashed">
                    <td style="padding: 12px 10px;">> 24 hs</td>

                    @for ($m = 1; $m <= 12; $m++)
                        <td align="center" style="padding: 12px 10px;">

                            @if (number_format(isset($porcentaje_verde_del_mes[2017][$m]) ? $porcentaje_verde_del_mes[2017][$m] : '0' ,2,'.',',') >= 25 )
                                <span class="text-danger-700 text-bold">
                                        @else
                                        <span class="text-green-700 text-bold">
                                        @endif
                                            {{ number_format(isset($porcentaje_verde_del_mes[2017][$m]) ? $porcentaje_verde_del_mes[2017][$m] : '0' ,2,'.',',') }}
                                            %
                                        </span>

                        </td>
                    @endfor

                </tr>

                <tr class="border-dashed">
                    <td style="padding: 12px 10px;">> 48 hs</td>

                    @for ($m = 1; $m <= 12; $m++)
                        <td align="center" style="padding: 12px 10px;">

                            @if (number_format(isset($porcentaje_rojo_del_mes[2017][$m]) ? $porcentaje_rojo_del_mes[2017][$m] : '0' ,2,'.',',') == 0 )
                                <span class="text-green-700 text-bold">
                                        @else
                                        <span class="text-danger-700 text-bold">
                                        @endif
                                            {{ number_format(isset($porcentaje_rojo_del_mes[2017][$m]) ? $porcentaje_rojo_del_mes[2017][$m] : '0' ,2,'.',',') }}
                                            %
                                        </span>

                        </td>
                    @endfor

                </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /panel body table -->
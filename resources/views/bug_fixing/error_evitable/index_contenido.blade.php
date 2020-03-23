<!-- Panel body table -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h5 class="panel-title">Errores Evitables
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

                    @for ($i = 1; $i <= 12; $i++)

                        <td align="center" style="padding: 12px 10px;">
                            <a href="{{ url('bug_fixing/error_evitable_detalle/2018/'.($i))}}"
                               type="button" class="btn btn-default btn-raised btn-sm">
                                <span class="text-green-700 text-bold">

                                    @if(isset ($datos_evitables[2018][$i]))
                                        {{ count($datos_evitables[2018][$i]) }}
                                    @else
                                        0
                                    @endif

                                </span>
                            </a>
                        </td>
                    @endfor

                </tr>

                <tr class="border-dashed">
                    <td style="padding: 12px 10px;">Porcentaje</td>

                    @for ($i = 1; $i <= 12; $i++)
                        <td align="center" style="padding: 12px 10px;">
                            <span class="text-green-700 text-bold">
                                {{ isset($sum_mes2018[$i]) ? $sum_mes2018[$i] : '0' }} %
                            </span>
                        </td>
                    @endfor

                </tr>

                <tr class="border-double">
                    <td style="padding: 12px 10px;">SIAC - 2017</td>

                    @for ($i = 1; $i <= 12; $i++)

                        <td align="center" style="padding: 12px 10px;">
                            <a href="{{ url('bug_fixing/error_evitable_detalle/2017/'.($i))}}"
                               type="button" class="btn btn-default btn-raised btn-sm">
                                <span class="text-green-700 text-bold">

                                    @if(isset ($datos_evitables[2017][$i]))
                                        {{ count($datos_evitables[2017][$i]) }}
                                    @else
                                        0
                                    @endif

                                </span>
                            </a>
                        </td>
                    @endfor

                </tr>

                <tr class="border-dashed">
                    <td style="padding: 12px 10px;">Porcentaje</td>

                    @for ($i = 1; $i <= 12; $i++)
                        <td align="center" style="padding: 12px 10px;">
                            <span class="text-green-700 text-bold">
                                {{ isset($sum_mes2017[$i]) ? $sum_mes2017[$i] : '0' }} %
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
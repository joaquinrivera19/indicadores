<!-- Panel body table -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h5 class="panel-title">Errores Pendientes de Resolución (90/35)
        </h5>
    </div>

    <div class="panel-body">
        {{--<p class="content-group">Example of a table placed inside <code>panel body</code>. Such tables always have additional whitespace taken from <code>.panel-body</code> element padding.</p>--}}

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
                <tr class="border-solid">
                    <td>SIAC 2018</td>

                    @for ($i = 0; $i < 12; $i++)
                        <td align="center">
                                            <span class="text-green-700 text-bold">
                                             {{ isset($calculo_por_mes[1][$i]) ? $calculo_por_mes[1][$i] : '0' }}
                                            </span>
                        </td>
                    @endfor
                </tr>

                <tr class="border-solid">
                    <td>SIAC 2017</td>

                    @for ($i = 0; $i < 12; $i++)
                        <td align="center">
                                            <span class="text-green-700 text-bold">
                                             {{ isset($calculo_por_mes[0][$i]) ? $calculo_por_mes[0][$i] : '0' }}
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
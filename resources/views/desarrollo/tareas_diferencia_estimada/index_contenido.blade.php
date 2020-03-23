<!-- Panel body table -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h5 class="panel-title">Tareas Con Diferencias Estimadas
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

                    @for ($p = 12; $p <= 23; $p++)

                        <?php $pp = $p - 11 ?>
                        <td align="center">
                            <a href="{{ url('desarrollo/tareas_diferencia_estimada_detalle/2018/'. $pp)}}"
                               type="button" class="btn btn-default btn-raised btn-sm">
                                            <span class="text-green-700 text-bold">
                                                {{ isset($tarea_diferencias_estimadas[$p]->Cantidad) ? $tarea_diferencias_estimadas[$p]->Cantidad : '0' }}
                                            </span>
                            </a>
                        </td>
                    @endfor
                </tr>
                <tr>
                    <td>Tiempo 2018</td>

                    @for ($p = 12; $p <= 23; $p++)

                        <?php $pp = $p - 11 ?>
                        <td align="center">
                                            <span class="text-green-700 text-bold">
                                                {{ number_format(isset($tarea_diferencias_estimadas[$p]->Tiempo) ? $tarea_diferencias_estimadas[$p]->Tiempo : '0' ,2,'.',',') }}
                                            </span>
                        </td>
                    @endfor
                </tr>


                <tr class="border-solid">
                    <td>SIAC 2017</td>

                    @for ($i = 0; $i <= 11; $i++)

                        <?php $j = $i + 1 ?>
                        <td align="center">
                            <a href="{{ url('desarrollo/tareas_diferencia_estimada_detalle/2017/'. $j)}}"
                               type="button" class="btn btn-default btn-raised btn-sm">
                                            <span class="text-green-700 text-bold">
                                                {{ isset($tarea_diferencias_estimadas[$i]->Cantidad) ? $tarea_diferencias_estimadas[$i]->Cantidad : '0' }}
                                            </span>
                            </a>
                        </td>
                    @endfor
                </tr>
                <tr>
                    <td>Tiempo 2017</td>

                    @for ($i = 0; $i <= 11; $i++)

                        <?php $j = $i + 1 ?>
                        <td align="center">
                                            <span class="text-green-700 text-bold">
                                                {{ number_format(isset($tarea_diferencias_estimadas[$i]->Tiempo) ? $tarea_diferencias_estimadas[$i]->Tiempo : '0' ,2,'.',',') }}
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
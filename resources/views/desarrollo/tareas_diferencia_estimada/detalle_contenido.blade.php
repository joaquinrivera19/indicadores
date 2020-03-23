<div class="panel-body">
    {{--<p class="content-group">Example of a table placed inside <code>panel body</code>. Such tables
        always have additional whitespace taken from <code>.panel-body</code> element padding.</p>--}}

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Tarea</th>
                <th>Título</th>
                <th>Tipo Req.</th>
                <th>Fecha Fin.</th>
                <th>Programador</th>
                <th>Tiempo Est.</th>
                <th>Tiempo Tra.</th>
                <th>Diferencia</th>
            </tr>
            </thead>
            <tbody>

            @foreach($tareas_diferencias_estimadas as $tarea_diferencia_estimada)

                <tr class="border-solid">
                    <td style="width: 110px;">{{ $tarea_diferencia_estimada->CodTarea }}</td>
                    <td>{{ $tarea_diferencia_estimada->Titulo }}</td>
                    <td>{{ $tarea_diferencia_estimada->TipoReq }}</td>
                    <td>{{ $tarea_diferencia_estimada->FechaActualizacion }}</td>
                    <td>{{ $tarea_diferencia_estimada->Programador }}</td>
                    <td align="center">{{ number_format($tarea_diferencia_estimada->TotFin,2,'.',',') }}</td>
                    <td align="center">{{ number_format($tarea_diferencia_estimada->TotTrab,2,'.',',') }}</td>
                    <td align="center">{{ number_format($tarea_diferencia_estimada->Diferencia,2,'.',',') }}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
</div>


<div class="panel-body" style="border-top: 0px">
    <div class="row invoice-payment">
        <div class="col-sm-5">

        </div>

        <div class="col-sm-7">
            <div class="content-group">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th style="text-align: right">Total de diferencias de tiempo trabajados/estimados calculados
                                del mes:
                            </th>
                            <td class="text-right text-primary"><h5 class="text-semibold">{{ $total_diferencia }}</h5>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

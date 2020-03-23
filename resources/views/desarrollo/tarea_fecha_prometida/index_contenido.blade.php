<!-- Panel body table -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h5 class="panel-title">Tareas con Fecha Prometida
        </h5>
        <div class="heading-elements">
            <a type="button" href="{{ url('excel_exportacion_tareas_fecha_prometida') }}" class="btn btn-default btn-raised btn-sm heading-btn"><i class="icon-file-download icon-dowload-excel"></i> Descargar Excel</a>
        </div>
    </div>

    <div class="panel-body">
        {{--<p class="content-group">Example of a table placed inside <code>panel body</code>. Such tables
            always have additional whitespace taken from <code>.panel-body</code> element padding.</p>--}}

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Tarea</th>
                    <th>Título</th>
                    <th>Programador</th>
                    <th>Prometido</th>
                    <th>Solicitado</th>
                    <th>Estimado</th>
                    <th>Falta</th>
                    <th>Versión</th>
                    <th>Prioridad</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>

                @foreach($tareas_fecha_prometida as $tarea_fecha_prometida)

                    <tr class="border-solid">
                        <td style="width: 120px;">{{ $tarea_fecha_prometida->Tarea }}</td>
                        <td>{{ $tarea_fecha_prometida->Titulo }}</td>
                        <td>{{ $tarea_fecha_prometida->Programador }}</td>
                        <td>{{ $tarea_fecha_prometida->Prometido }}</td>
                        <td>{{ $tarea_fecha_prometida->Solicitado }}</td>
                        <td>{{ number_format(($tarea_fecha_prometida->TotReEst), 2, '.', ',') }}</td>
                        <td>{{ number_format(($tarea_fecha_prometida->Falta), 2, '.', ',') }}</td>
                        <td>{{ $tarea_fecha_prometida->Version }}</td>
                        <td>{{ $tarea_fecha_prometida->Prioridad }}</td>
                        <td>{{ $tarea_fecha_prometida->Estado }}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /panel body table -->




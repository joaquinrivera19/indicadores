<div class="panel-body">
    {{--<p class="content-group">Example of a table placed inside <code>panel body</code>. Such tables
        always have additional whitespace taken from <code>.panel-body</code> element padding.</p>--}}

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Fecha Error</th>
                <th>Descripción</th>
                <th>Versión</th>
                <th>Tarea</th>
                <th>Prioridad</th>
                <th>Cant hs</th>
            </tr>
            </thead>
            <tbody>

            @foreach($tiempo_resolucion_errores_bloqueantes as $tiempo_resolucion_error_bloqueante)

                <tr class="border-solid">
                    <td>{{ $tiempo_resolucion_error_bloqueante->Fecha_Error }}</td>
                    <td>{{ $tiempo_resolucion_error_bloqueante->Descripcion }}</td>
                    <td>{{ $tiempo_resolucion_error_bloqueante->Version }}</td>
                    <td>{{ $tiempo_resolucion_error_bloqueante->Conces }} - {{ $tiempo_resolucion_error_bloqueante->Tarea }}</td>
                    <td>{{ $tiempo_resolucion_error_bloqueante->Prioridad }}</td>
                    <td>{{ number_format($tiempo_resolucion_error_bloqueante->DemoraNetaGPMenosPedInf,2,'.',',') }}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
</div>
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
                <th>Causante</th>
                <th>Prioridad</th>
                <th>Fecha Causante</th>
                <th>Evitable</th>
            </tr>
            </thead>
            <tbody>

            @foreach($errores_nuevos_desarrollos as $error_nuevo_desarrollo)

                <tr class="border-solid">
                    <td>{{ $error_nuevo_desarrollo->Fecha_Error }}</td>
                    <td>{{ $error_nuevo_desarrollo->Descripcion }}</td>
                    <td>{{ $error_nuevo_desarrollo->Version }}</td>
                    <td>{{ $error_nuevo_desarrollo->Conces }} - {{ $error_nuevo_desarrollo->Tarea }}</td>
                    <td>{{ $error_nuevo_desarrollo->Causante }}</td>
                    <td>{{ $error_nuevo_desarrollo->Prioridad }}</td>
                    <td>{{ $error_nuevo_desarrollo->Fecha_Causante }}</td>
                    <td>{{ $error_nuevo_desarrollo->Evitable }}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
</div>
<div class="panel-body">
    {{--<p class="content-group">Example of a table placed inside <code>panel body</code>. Such tables
        always have additional whitespace taken from <code>.panel-body</code> element padding.</p>--}}

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Tarea</th>
                <th>Programador</th>
                <th>Fecha Error</th>
                <th>Prioridad</th>
                <th>Rol</th>
            </tr>
            </thead>
            <tbody>

            @foreach($errores_generados as $error_generado)

                <tr class="border-solid">
                    <td>{{ $error_generado->tar_conces }} - {{ $error_generado->tar_codigo }}</td>
                    <td>{{ $error_generado->ProgramadorResp }}</td>
                    <td>{{ $error_generado->tar_fecfin }}</td>
                    <td>
                        @if ($error_generado->Prioridad == 'Urgente')
                            <span class="label label-flat" style="color: #7c659c; border-color: #7c659c">{{ $error_generado->Prioridad }}</span>
                        @elseif($error_generado->Prioridad == 'Muy Alta')
                            <span class="label label-flat" style="color: #9c3b3a; border-color: #9c3b3a">{{ $error_generado->Prioridad }}</span>
                        @elseif($error_generado->Prioridad == 'Alta')
                            <span class="label label-flat" style="color: #f59547; border-color: #f59547">{{ $error_generado->Prioridad }}</span>
                        @elseif($error_generado->Prioridad == 'Normal')
                            <span class="label label-flat" style="color: #9bba59; border-color: #9bba59">{{ $error_generado->Prioridad }}</span>
                        @else
                            <span class="label label-flat border-info text-info-600">{{ $error_generado->Prioridad }}</span>
                        @endif
                    </td>
                    <td>{{ $error_generado->rp_nombre }}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
</div>
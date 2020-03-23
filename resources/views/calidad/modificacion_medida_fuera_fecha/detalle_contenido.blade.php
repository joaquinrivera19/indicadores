<div class="panel-body">
    {{--<p class="content-group">Example of a table placed inside <code>panel body</code>. Such tables
        always have additional whitespace taken from <code>.panel-body</code> element padding.</p>--}}

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Conces</th>
                <th>Título</th>
                <th>Tarea</th>
                <th>Inicio</th>
                <th>Prevista</th>
                <th>Real</th>
                <th>Tipo</th>
            </tr>
            </thead>
            <tbody>

            @foreach($modificaciones_medida_fuera_fecha as $modificacion_medida_fuera_fecha)


                <?php

                $prevista = $modificacion_medida_fuera_fecha->Prevista;
                $real = $modificacion_medida_fuera_fecha->Real;

                $prev = \Carbon\Carbon::createFromFormat('d/m/Y', $prevista)->toDateString();
                $re = \Carbon\Carbon::createFromFormat('d/m/Y', $real)->toDateString();

                ?>


                @if ( $prev <= $re )
                    <tr class="border-solid bg-danger">
                @else
                    <tr class="border-solid">
                        @endif

                        <td>{{ $modificacion_medida_fuera_fecha->Conces }}</td>
                        <td>{{ $modificacion_medida_fuera_fecha->Titulo }}</td>
                        <td>{{ $modificacion_medida_fuera_fecha->Cod_Conces }}
                            - {{ $modificacion_medida_fuera_fecha->Tarea }}</td>
                        <td>{{ $modificacion_medida_fuera_fecha->Inicio }}</td>
                        <td>{{ $modificacion_medida_fuera_fecha->Prevista }}</td>
                        <td>{{ $modificacion_medida_fuera_fecha->Real }}</td>
                        <td>{{ $modificacion_medida_fuera_fecha->Tipo }}</td>
                    </tr>

                    @endforeach

            </tbody>
        </table>
    </div>
</div>
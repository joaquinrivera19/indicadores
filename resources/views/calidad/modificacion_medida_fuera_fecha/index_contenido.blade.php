<!-- Panel body table -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h5 class="panel-title">Modificaciones a Medida Fuera de Fecha REQ (último semestre) (0 / 10)
        </h5>
    </div>

    <div class="panel-body">
        {{--<p class="content-group">Example of a table placed inside <code>panel body</code>. Such tables
            always have additional whitespace taken from <code>.panel-body</code> element padding.</p>--}}

        <div class="table-responsive">
            <table class="table table-striped">
                @foreach($ModificacionesMedidaFueraFechas as $ModificacionMedidaFueraFecha)
                    <thead>
                    <tr>
                        <th style="text-align: center;"></th>
                        <th style="text-align: center;">{{ $ModificacionMedidaFueraFecha->Mes6_Nombre }}</th>
                        <th style="text-align: center;">{{ $ModificacionMedidaFueraFecha->Mes5_Nombre }}</th>
                        <th style="text-align: center;">{{ $ModificacionMedidaFueraFecha->Mes4_Nombre }}</th>
                        <th style="text-align: center;">{{ $ModificacionMedidaFueraFecha->Mes3_Nombre }}</th>
                        <th style="text-align: center;">{{ $ModificacionMedidaFueraFecha->Mes2_Nombre }}</th>
                        <th style="text-align: center;">{{ $ModificacionMedidaFueraFecha->Mes1_Nombre }}</th>
                        <th style="text-align: center;">{{ $ModificacionMedidaFueraFecha->MesActual_Nombre }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-solid">
                        <td>SIAC</td>
                        <td align="center">
                            <a href="{{ url($menu. '/modificacion_medida_fuera_fecha_detalle/'. $anio[6] .'/' .$ModificacionMedidaFueraFecha->Mes6_Numero ) }}"
                               type="button" class="btn btn-default btn-raised btn-sm">

                                @if($ModificacionMedidaFueraFecha->Mes6_Porcentaje === "0.0" or $ModificacionMedidaFueraFecha->Mes6_Porcentaje === NULL)
                                    <span class="text-green-700 text-bold">

                                            @elseif($ModificacionMedidaFueraFecha->Mes6_Porcentaje >= "1" and $ModificacionMedidaFueraFecha->Mes6_Porcentaje <= "10" )
                                            <span class="text-yellow-700 text-bold">

                                            @else <span class="text-danger-700 text-bold">

                                            @endif {{ number_format($ModificacionMedidaFueraFecha->Mes6_Porcentaje === "0.0" ? "0" : $ModificacionMedidaFueraFecha->Mes6_Porcentaje ,0,'.',',') }}
                                                    %</span>
                            </a>
                        </td>
                        <td align="center">
                            <a href="{{ url($menu. '/modificacion_medida_fuera_fecha_detalle/'. $anio[5] .'/' . $ModificacionMedidaFueraFecha->Mes5_Numero ) }}"
                               type="button" class="btn btn-default btn-raised btn-sm">

                                @if($ModificacionMedidaFueraFecha->Mes5_Porcentaje === "0.0" or $ModificacionMedidaFueraFecha->Mes5_Porcentaje === NULL)
                                    <span class="text-green-700 text-bold">

                                            @elseif($ModificacionMedidaFueraFecha->Mes5_Porcentaje >= "1" and $ModificacionMedidaFueraFecha->Mes5_Porcentaje <= "10" )
                                            <span class="text-yellow-700 text-bold">

                                            @else <span class="text-danger-700 text-bold">

                                            @endif {{ number_format($ModificacionMedidaFueraFecha->Mes5_Porcentaje === "0.0" ? "0" : $ModificacionMedidaFueraFecha->Mes5_Porcentaje ,0,'.',',') }}
                                                    %</span>
                            </a>
                        </td>
                        <td align="center">
                            <a href="{{ url($menu. '/modificacion_medida_fuera_fecha_detalle/'. $anio[4] .'/' . $ModificacionMedidaFueraFecha->Mes4_Numero ) }}"
                               type="button" class="btn btn-default btn-raised btn-sm">

                                @if($ModificacionMedidaFueraFecha->Mes4_Porcentaje === "0.0" or $ModificacionMedidaFueraFecha->Mes4_Porcentaje === NULL)
                                    <span class="text-green-700 text-bold">

                                            @elseif($ModificacionMedidaFueraFecha->Mes4_Porcentaje >= "1" and $ModificacionMedidaFueraFecha->Mes4_Porcentaje <= "10" )
                                            <span class="text-yellow-700 text-bold">

                                            @else <span class="text-danger-700 text-bold">

                                            @endif {{ number_format($ModificacionMedidaFueraFecha->Mes4_Porcentaje === "0.0" ? "0" : $ModificacionMedidaFueraFecha->Mes4_Porcentaje ,0,'.',',') }}
                                                    %</span>
                            </a>
                        </td>
                        <td align="center">
                            <a href="{{ url($menu. '/modificacion_medida_fuera_fecha_detalle/'. $anio[3] .'/' . $ModificacionMedidaFueraFecha->Mes3_Numero ) }}"
                               type="button" class="btn btn-default btn-raised btn-sm">

                                @if($ModificacionMedidaFueraFecha->Mes3_Porcentaje === "0.0" or $ModificacionMedidaFueraFecha->Mes3_Porcentaje === NULL)
                                    <span class="text-green-700 text-bold">

                                            @elseif($ModificacionMedidaFueraFecha->Mes3_Porcentaje >= "1" and $ModificacionMedidaFueraFecha->Mes3_Porcentaje <= "10" )
                                            <span class="text-yellow-700 text-bold">

                                            @else <span class="text-danger-700 text-bold">

                                            @endif {{ number_format($ModificacionMedidaFueraFecha->Mes3_Porcentaje === "0.0" ? "0" : $ModificacionMedidaFueraFecha->Mes3_Porcentaje ,0,'.',',') }}
                                                    %</span>
                            </a>
                        </td>
                        <td align="center">
                            <a href="{{ url($menu. '/modificacion_medida_fuera_fecha_detalle/'. $anio[2] .'/' . $ModificacionMedidaFueraFecha->Mes2_Numero ) }}"
                               type="button" class="btn btn-default btn-raised btn-sm">

                                @if($ModificacionMedidaFueraFecha->Mes2_Porcentaje === "0.0" or $ModificacionMedidaFueraFecha->Mes2_Porcentaje === NULL)
                                    <span class="text-green-700 text-bold">

                                            @elseif($ModificacionMedidaFueraFecha->Mes2_Porcentaje >= "1" and $ModificacionMedidaFueraFecha->Mes2_Porcentaje <= "10" )
                                            <span class="text-yellow-700 text-bold">

                                            @else <span class="text-danger-700 text-bold">

                                            @endif {{ number_format($ModificacionMedidaFueraFecha->Mes2_Porcentaje === "0.0" ? "0" : $ModificacionMedidaFueraFecha->Mes2_Porcentaje ,0,'.',',') }}
                                                    %</span>
                            </a>
                        </td>
                        <td align="center">
                            <a href="{{ url($menu. '/modificacion_medida_fuera_fecha_detalle/'. $anio[1] .'/' . $ModificacionMedidaFueraFecha->Mes1_Numero ) }}"
                               type="button" class="btn btn-default btn-raised btn-sm">

                                @if($ModificacionMedidaFueraFecha->Mes1_Porcentaje === "0.0" or $ModificacionMedidaFueraFecha->Mes1_Porcentaje === NULL)
                                    <span class="text-green-700 text-bold">

                                            @elseif($ModificacionMedidaFueraFecha->Mes1_Porcentaje >= "1" and $ModificacionMedidaFueraFecha->Mes1_Porcentaje <= "10" )
                                            <span class="text-yellow-700 text-bold">

                                            @else <span class="text-danger-700 text-bold">

                                            @endif {{ number_format($ModificacionMedidaFueraFecha->Mes1_Porcentaje === "0.0" ? "0" : $ModificacionMedidaFueraFecha->Mes1_Porcentaje ,0,'.',',') }}
                                                    %</span>
                            </a>
                        </td>
                        <td align="center">
                            <a href="{{ url($menu. '/modificacion_medida_fuera_fecha_detalle/'. $anio[0] .'/' . $ModificacionMedidaFueraFecha->MesActual_Numero ) }}"
                               type="button" class="btn btn-default btn-raised btn-sm">

                                @if($ModificacionMedidaFueraFecha->MesActual_Porcentaje === "0.0" or $ModificacionMedidaFueraFecha->MesActual_Porcentaje === NULL)
                                    <span class="text-green-700 text-bold">

                                            @elseif($ModificacionMedidaFueraFecha->MesActual_Porcentaje >= "1" and $ModificacionMedidaFueraFecha->MesActual_Porcentaje <= "10" )
                                            <span class="text-yellow-700 text-bold">

                                            @else <span class="text-danger-700 text-bold">

                                            @endif {{ number_format($ModificacionMedidaFueraFecha->MesActual_Porcentaje === "0.0" ? "0" : $ModificacionMedidaFueraFecha->MesActual_Porcentaje ,0,'.',',') }}
                                                    %</span>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
<!-- /panel body table -->

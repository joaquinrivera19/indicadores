<div class="row">
    <div class="col-sm-6 col-md-3">
        <a href="{{ url('calidad/error_nuevo_desarrollo_index') }}">
            <div class="panel panel-body panel-body-accent">
                <div class="media no-margin">
                    <div class="media-left media-middle">
                        <i class="icon-enter6 icon-3x text-danger-400"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                                    <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                        {{ isset($ErroresNuevosDesarrollos_Suma) ? $ErroresNuevosDesarrollos_Suma : '0' }}
                                    </span>
                        </h3>
                        <span class="text-uppercase text-size-mini text-muted">Errores</br>Nuevos Desarrollos</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-md-3">
        <a href="{{ url('calidad/modificacion_medida_fuera_fecha_index') }}">
            <div class="panel panel-body panel-body-accent">
                <div class="media no-margin">
                    <div class="media-left media-middle">
                        <i class="icon-wrench icon-3x text-blue-400"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                            <?php
                            $var = number_format(($ModificacionesMedidaFueraFechas->MesActual_Porcentaje), 2, '.', ',');
                            $valor = $var * 100;
                            ?>

                            <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                        <?php echo $valor; ?>
                                    </span> %

                        </h3>
                                    <span class="text-uppercase text-size-mini text-muted">Modificaciones a Medida</br>
                                        Fuera de Fecha REQ</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-md-3">
        <a href="{{ url('calidad/errores_pendientes_index') }}">
            <div class="panel panel-body panel-body-accent">
                <div class="media no-margin">
                    <div class="media-left media-middle">
                        <i class="icon-warning icon-3x text-teal-400"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                                    <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                        {{ $ErroresPendientes_calculo }}
                                    </span>
                        </h3>
                        <span class="text-uppercase text-size-mini text-muted">Errores</br>Pendientes</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-md-3">
        <a href="{{ url('calidad/errores_bloqueantes_index') }}">
            <div class="panel panel-body panel-body-accent">
                <div class="media no-margin">
                    <div class="media-left media-middle">
                        <i class="icon-watch2 icon-3x text-purple-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                                    <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                        {{ $TiempoBloqueantes }}
                                    </span>
                        </h3>
                                    <span class="text-uppercase text-size-mini text-muted">
                                        Tiempos de Resolución</br>Errores Bloqueantes
                                    </span>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>
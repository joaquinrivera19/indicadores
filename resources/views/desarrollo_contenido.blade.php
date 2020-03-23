<div class="row">

    <div class="col-sm-6 col-md-3">
        <a href="{{ url('desarrollo/tareas_fecha_prometida_index') }}">
            <div class="panel panel-body panel-body-accent">
                <div class="media no-margin">
                    <div class="media-left media-middle">
                        <i class="icon-calendar icon-3x text-success-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                                    <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                        {{ isset($TareaFechaPrometida->Cantidad) ? $TareaFechaPrometida->Cantidad : '0' }}
                                    </span>
                        </h3>
                        <span class="text-uppercase text-size-mini text-muted">Tareas con</br>Fecha Prometida</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-md-3">
        <a href="{{ url('desarrollo/tareas_diferencia_estimada_index') }}">
            <div class="panel panel-body panel-body-accent">
                <div class="media no-margin">
                    <div class="media-left media-middle">
                        <i class="icon-file-text2 icon-3x text-primary-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                                    <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                        {{ isset($TareaDiferenciaEstimada->Cantidad) ? $TareaDiferenciaEstimada->Cantidad : '0' }}
                                    </span>
                        </h3>
                        <span class="text-uppercase text-size-mini text-muted">Tareas con</br>Diferencia Estimada</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-md-3">
        <a href="{{ url('desarrollo/modificacion_medida_fuera_fecha_index') }}">
            <div class="panel panel-body panel-body-accent">
                <div class="media no-margin">
                    <div class="media-left media-middle">
                        <i class="icon-wrench icon-3x text-pink-300"></i>
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
                                        Fuera de Fecha PM</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>
<div class="row">

    <div class="col-sm-6 col-md-3">
        <a href="{{ url('bug_fixing/error_evitable_index') }}">
            <div class="panel panel-body panel-body-accent">
                <div class="media no-margin">
                    <div class="media-left media-middle">
                        <i class="icon-equalizer2 icon-3x text-warning-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                            <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                {{ isset($error_evitable_valor) ? $error_evitable_valor : '0' }}
                            </span> %
                        </h3>
                        <span class="text-uppercase text-size-mini text-muted">Errores</br>Evitables</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-md-3">
        <a href="{{ url('bug_fixing/error_generado_index') }}">
            <div class="panel panel-body panel-body-accent">
                <div class="media no-margin">
                    <div class="media-left media-middle">
                        <i class="icon-file-text2 icon-3x text-primary-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                                    <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                        {{ isset($error_generado_valor) ? $error_generado_valor : '0' }}
                                    </span>
                        </h3>
                        <span class="text-uppercase text-size-mini text-muted">Cantidad mensual</br>
                            de errores generados</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-md-6">
        <a href="{{ url('bug_fixing/error_prioridad_index') }}">
            <div class="panel panel-body panel-body-accent">
                <div class="media no-margin">
                    <div class="media-left media-middle">
                        <i class="icon-sort-amount-desc icon-3x text-indigo-300"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                            <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                        <?php echo $sum_prioridad_urgente; ?>
                            </span> %
                        </h3>
                        <span class="text-uppercase text-size-mini text-muted">Errores por prioridad</br> % Urgente</span>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                            <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                        <?php echo $sum_prioridad_muy_alta; ?>
                            </span> %
                        </h3>
                        <span class="text-uppercase text-size-mini text-muted">Errores por prioridad</br> % Muy Alta</span>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">
                            <span class="counter" data-counterup-time="1500" data-counterup-delay="30">
                                        <?php echo $sum_prioridad_alta; ?>
                            </span> %
                        </h3>
                        <span class="text-uppercase text-size-mini text-muted">Errores por prioridad</br> % Alta</span>
                    </div>

                </div>
            </div>
        </a>
    </div>

</div>
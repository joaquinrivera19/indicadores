<?php

namespace App\Http\Controllers;

use App\Repositories\IndicadorDesarrolloRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $indicadorDesarrolloRepository, $errorPendienteController;

    public function __construct(IndicadorDesarrolloRepository $indicadorDesarrolloRepository, ErrorPendienteController $errorPendienteController)
    {
        $this->indicadorDesarrolloRepository = $indicadorDesarrolloRepository;
        $this->errorPendienteController = $errorPendienteController;
    }

    public function calidad()
    {
        $menu = 'calidad';

        return view('calidad', compact('menu'));
    }

    public function calidad_contenido()
    {

        $ModificacionesMedidaFueraFechas = array_first($this->indicadorDesarrolloRepository->getModificacionesMedidaFueraFechaHome());

        // Comieza el proceso de Errores Nuevos Desarrollos

        $ErroresNuevosDesarrollos = $this->indicadorDesarrolloRepository->getErrorNuevoDesarrolloHome();

        $mes_actual = [];
        foreach ($ErroresNuevosDesarrollos as $key => $ErrorNuevoDesarrollo) {
            $mes_actual[] = $ErrorNuevoDesarrollo->Cantidad;
        }
        $ErroresNuevosDesarrollos_Suma = array_sum($mes_actual);

        // Finaliza el proceso de Errores Nuevos Desarrollos


        $TiempoBloqueantes = count($this->indicadorDesarrolloRepository->getTiempoResolucionErroresBloqueantesHome());

/*        if ($TiempoBloqueantes[0]->total == '0') {
            $TiempoBloqueantes_calculo = '0';
        } else {

            if (isset($TiempoBloqueantes[1])){

                $TiempoBloqueantes_calculo = $TiempoBloqueantes[0]->total + $TiempoBloqueantes[1]->total;
            } else {

                $TiempoBloqueantes_calculo = $TiempoBloqueantes[0]->total;
            }

        }*/
        
        $ErroresPendientes = $this->errorPendienteController->calculo();
        $mes_actal = Carbon::now('America/Argentina/Buenos_Aires')->month;
        $ErroresPendientes_calculo = $ErroresPendientes[1][$mes_actal - 1];

        /*        dump($ErroresPendientes);
                dd();*/

        $menu = 'calidad';

        return view('calidad_contenido', compact('ModificacionesMedidaFueraFechas', 'ErroresNuevosDesarrollos_Suma',
            'TiempoBloqueantes', 'ErroresPendientes_calculo', 'menu'));

    }

    public function desarrollo()
    {
        $menu = 'desarrollo';

        return view('desarrollo', compact('menu'));
    }

    public function desarrollo_contenido()
    {
        $TareaFechaPrometida = array_first($this->indicadorDesarrolloRepository->getTareaFechaPrometidaHome());

        $TareaDiferenciaEstimada = array_first($this->indicadorDesarrolloRepository->getTareaDiferenciaEstimadaHome());

        $ModificacionesMedidaFueraFechas = array_first($this->indicadorDesarrolloRepository->getModificacionesMedidaFueraFechaHomePM());

        $menu = 'desarrollo';

        return view('desarrollo_contenido', compact('TareaFechaPrometida', 'TareaDiferenciaEstimada', 'ModificacionesMedidaFueraFechas', 'menu'));
    }

    public function bug_fixing()
    {
        $menu = 'bug_fixing';

        return view('bug_fixing', compact('menu'));
    }

    public function bug_fixing_contenido()
    {
        $errores_evitables = $this->indicadorDesarrolloRepository->getErrorEvitableHome();

        if (count($errores_evitables) == 0) {

            $error_evitable_valor = 0;

        } else {

            foreach ($errores_evitables as $error_evitable) {
                if ($error_evitable->Evitable == 'Si') {
                    $datos_evitables[] = $error_evitable->conces;
                }
            }

            if (isset($datos_evitables)) {

                if (count($datos_evitables) == 0) {
                    $valor = (count($datos_evitables) / count($errores_evitables)) * 100;
                    $error_evitable_valor = number_format($valor, 0, '.', ',');
                }

            } else {
                $error_evitable_valor = 0;
            }

        }

        $error_generado = $this->indicadorDesarrolloRepository->getErrorGeneradoHome();
        $error_generado_valor = count($error_generado);

        $ModificacionesMedidaFueraFechas = array_first($this->indicadorDesarrolloRepository->getModificacionesMedidaFueraFechaHomePM());

        // Inicia procesos de error prioridad

        $errores_prioridad = $this->indicadorDesarrolloRepository->getErrorPrioridadHome();

        foreach ($errores_prioridad as $key => $error_prioridad) {
            
            $datos_mes_total[] = $error_prioridad->conces;

            if ($error_prioridad->Prioridad == 'Urgente') {

                $datos_urgente[] = $error_prioridad->conces;

            } elseif ($error_prioridad->Prioridad == 'Muy Alta') {

                $datos_muy_alta[] = $error_prioridad->conces;

            } elseif ($error_prioridad->Prioridad == 'Alta') {

                $datos_alta[] = $error_prioridad->conces;

            }


        }
        
        if (isset($datos_mes_total)) {

            if (isset($datos_urgente)) {
                $valor_urgente = (count($datos_urgente) / count($datos_mes_total)) * 100;
            } else {
                $valor_urgente = 0;
            }
            $sum_prioridad_urgente = number_format($valor_urgente, 0, '.', ',');

            if (isset($datos_muy_alta)) {
                $valor_muy_alta = (count($datos_muy_alta) / count($datos_mes_total)) * 100;
            } else {
                $valor_muy_alta = 0;
            }
            $sum_prioridad_muy_alta = number_format($valor_muy_alta, 0, '.', ',');

            if (isset($datos_alta)) {
                $valor_alta = (count($datos_alta) / count($datos_mes_total)) * 100;
            } else {
                $valor_alta = 0;
            }
            $sum_prioridad_alta = number_format($valor_alta, 0, '.', ',');

        }

        // Finaliza procesos de error prioridad

        $menu = 'bug_fixing';

        return view('bug_fixing_contenido', compact('error_evitable_valor', 'error_generado_valor',
            'ModificacionesMedidaFueraFechas', 'sum_prioridad_urgente', 'sum_prioridad_muy_alta', 'sum_prioridad_alta', 'menu'));

    }

}

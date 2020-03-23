<?php

namespace App\Http\Controllers;

use App\Repositories\IndicadorDesarrolloRepository;
use Illuminate\Http\Request;

class ErrorPrioridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $indicadorDesarrolloRepository;

    public function __construct(IndicadorDesarrolloRepository $indicadorDesarrolloRepository)
    {
        $this->indicadorDesarrolloRepository = $indicadorDesarrolloRepository;
    }

    public function index()
    {
        $errores_prioridades = $this->indicadorDesarrolloRepository->getErrorPrioridad();

        foreach ($errores_prioridades as $key => $error_prioridad) {

            for ($mes = 1; $mes <= 12; $mes++) {
                if ($error_prioridad->Mes == $mes) {

                    $datos_mes_total[$error_prioridad->Anio][$mes][] = ($error_prioridad->conces);

                    if ($error_prioridad->Prioridad == 'Urgente') {

                        $datos_urgentes[$error_prioridad->Anio][$mes][] = ($error_prioridad->conces);

                    } elseif ($error_prioridad->Prioridad == 'Muy Alta') {

                        $datos_muy_alta[$error_prioridad->Anio][$mes][] = ($error_prioridad->conces);

                    } elseif ($error_prioridad->Prioridad == 'Alta') {

                        $datos_alta[$error_prioridad->Anio][$mes][] = ($error_prioridad->conces);

                    } elseif ($error_prioridad->Prioridad == 'Normal') {

                        $datos_normal[$error_prioridad->Anio][$mes][] = ($error_prioridad->conces);

                    }
                }
            }

        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos_mes_total[2017][$mes])) {

                if (isset($datos_urgentes[2017][$mes])){
                    $valor_urgente = (count($datos_urgentes[2017][$mes]) / count($datos_mes_total[2017][$mes])) * 100;
                } else {
                    $valor_urgente = 0;
                }
                $sum_mes2017_urgente [$mes] = number_format($valor_urgente,2,'.',',');

                if (isset($datos_muy_alta[2017][$mes])){
                    $valor_muy_alta = (count($datos_muy_alta[2017][$mes]) / count($datos_mes_total[2017][$mes])) * 100;
                } else {
                    $valor_muy_alta = 0;
                }
                $sum_mes2017_muy_alta [$mes] = number_format($valor_muy_alta,2,'.',',');

                if (isset($datos_alta[2017][$mes])){
                    $valor_alta = (count($datos_alta[2017][$mes]) / count($datos_mes_total[2017][$mes])) * 100;
                } else {
                    $valor_alta = 0;
                }
                $sum_mes2017_alta [$mes] = number_format($valor_alta,2,'.',',');

                if (isset($datos_normal[2017][$mes])){
                    $valor_normal = (count($datos_normal[2017][$mes]) / count($datos_mes_total[2017][$mes])) * 100;
                } else {
                    $valor_normal = 0;
                }
                $sum_mes2017_normal [$mes] = number_format($valor_normal,2,'.',',');

            }
        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos_mes_total[2018][$mes])) {

                if (isset($datos_urgentes[2018][$mes])){
                    $valor_urgente = (count($datos_urgentes[2018][$mes]) / count($datos_mes_total[2018][$mes])) * 100;
                } else {
                    $valor_urgente = 0;
                }
                $sum_mes2018_urgente [$mes] = number_format($valor_urgente,2,'.',',');

                if (isset($datos_muy_alta[2018][$mes])){
                    $valor_muy_alta = (count($datos_muy_alta[2018][$mes]) / count($datos_mes_total[2018][$mes])) * 100;
                } else {
                    $valor_muy_alta = 0;
                }
                $sum_mes2018_muy_alta [$mes] = number_format($valor_muy_alta,2,'.',',');

                if (isset($datos_alta[2018][$mes])){
                    $valor_alta = (count($datos_alta[2018][$mes]) / count($datos_mes_total[2018][$mes])) * 100;
                } else {
                    $valor_alta = 0;
                }
                $sum_mes2018_alta [$mes] = number_format($valor_alta,2,'.',',');

                if (isset($datos_normal[2018][$mes])){
                    $valor_normal = (count($datos_normal[2018][$mes]) / count($datos_mes_total[2018][$mes])) * 100;
                } else {
                    $valor_normal = 0;
                }
                $sum_mes2018_normal [$mes] = number_format($valor_normal,2,'.',',');

            }
        }

/*        dump($sum_mes2017_urgente,$sum_mes2017_muy_alta,$sum_mes2017_alta,$sum_mes2017_normal);
        dd();*/

        $valor_grafico2017_urgente = json_encode(array_flatten($sum_mes2017_urgente), JSON_NUMERIC_CHECK);
        $valor_grafico2017_muy_alta = json_encode(array_flatten($sum_mes2017_muy_alta), JSON_NUMERIC_CHECK);
        $valor_grafico2017_alta = json_encode(array_flatten($sum_mes2017_alta), JSON_NUMERIC_CHECK);
        $valor_grafico2017_normal = json_encode(array_flatten($sum_mes2017_normal), JSON_NUMERIC_CHECK);

        $valor_grafico2018_urgente = json_encode(array_flatten($sum_mes2018_urgente), JSON_NUMERIC_CHECK);
        $valor_grafico2018_muy_alta = json_encode(array_flatten($sum_mes2018_muy_alta), JSON_NUMERIC_CHECK);
        $valor_grafico2018_alta = json_encode(array_flatten($sum_mes2018_alta), JSON_NUMERIC_CHECK);
        $valor_grafico2018_normal = json_encode(array_flatten($sum_mes2018_normal), JSON_NUMERIC_CHECK);
        

        $menu = 'bug_fixing';

        return view('bug_fixing/error_prioridad/index', compact('menu', 'valor_grafico2017_urgente',
            'valor_grafico2017_muy_alta','valor_grafico2017_alta','valor_grafico2017_normal','valor_grafico2018_urgente',
            'valor_grafico2018_muy_alta','valor_grafico2018_alta','valor_grafico2018_normal'));

    }

    public function index_contenido()
    {

        $errores_prioridades = $this->indicadorDesarrolloRepository->getErrorPrioridad();

        foreach ($errores_prioridades as $key => $error_prioridad) {

            for ($mes = 1; $mes <= 12; $mes++) {
                if ($error_prioridad->Mes == $mes) {

                    $datos_mes_total[$error_prioridad->Anio][$mes][] = ($error_prioridad->conces);

                    if ($error_prioridad->Prioridad == 'Urgente') {

                        $datos_urgentes[$error_prioridad->Anio][$mes][] = ($error_prioridad->conces);

                    } elseif ($error_prioridad->Prioridad == 'Muy Alta') {

                        $datos_muy_alta[$error_prioridad->Anio][$mes][] = ($error_prioridad->conces);

                    } elseif ($error_prioridad->Prioridad == 'Alta') {

                        $datos_alta[$error_prioridad->Anio][$mes][] = ($error_prioridad->conces);

                    } elseif ($error_prioridad->Prioridad == 'Normal') {

                        $datos_normal[$error_prioridad->Anio][$mes][] = ($error_prioridad->conces);

                    }
                }
            }

        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos_mes_total[2017][$mes])) {

                if (isset($datos_urgentes[2017][$mes])){
                    $valor_urgente = (count($datos_urgentes[2017][$mes]) / count($datos_mes_total[2017][$mes])) * 100;
                } else {
                    $valor_urgente = 0;
                }
                $sum_mes2017_urgente [$mes] = number_format($valor_urgente,2,'.',',');

                if (isset($datos_muy_alta[2017][$mes])){
                    $valor_muy_alta = (count($datos_muy_alta[2017][$mes]) / count($datos_mes_total[2017][$mes])) * 100;
                } else {
                    $valor_muy_alta = 0;
                }
                $sum_mes2017_muy_alta [$mes] = number_format($valor_muy_alta,2,'.',',');

                if (isset($datos_alta[2017][$mes])){
                    $valor_alta = (count($datos_alta[2017][$mes]) / count($datos_mes_total[2017][$mes])) * 100;
                } else {
                    $valor_alta = 0;
                }
                $sum_mes2017_alta [$mes] = number_format($valor_alta,2,'.',',');

                if (isset($datos_normal[2017][$mes])){
                    $valor_normal = (count($datos_normal[2017][$mes]) / count($datos_mes_total[2017][$mes])) * 100;
                } else {
                    $valor_normal = 0;
                }
                $sum_mes2017_normal [$mes] = number_format($valor_normal,2,'.',',');

            }
        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos_mes_total[2018][$mes])) {

                if (isset($datos_urgentes[2018][$mes])){
                    $valor_urgente = (count($datos_urgentes[2018][$mes]) / count($datos_mes_total[2018][$mes])) * 100;
                } else {
                    $valor_urgente = 0;
                }
                $sum_mes2018_urgente [$mes] = number_format($valor_urgente,2,'.',',');

                if (isset($datos_muy_alta[2018][$mes])){
                    $valor_muy_alta = (count($datos_muy_alta[2018][$mes]) / count($datos_mes_total[2018][$mes])) * 100;
                } else {
                    $valor_muy_alta = 0;
                }
                $sum_mes2018_muy_alta [$mes] = number_format($valor_muy_alta,2,'.',',');

                if (isset($datos_alta[2018][$mes])){
                    $valor_alta = (count($datos_alta[2018][$mes]) / count($datos_mes_total[2018][$mes])) * 100;
                } else {
                    $valor_alta = 0;
                }
                $sum_mes2018_alta [$mes] = number_format($valor_alta,2,'.',',');

                if (isset($datos_normal[2018][$mes])){
                    $valor_normal = (count($datos_normal[2018][$mes]) / count($datos_mes_total[2018][$mes])) * 100;
                } else {
                    $valor_normal = 0;
                }
                $sum_mes2018_normal [$mes] = number_format($valor_normal,2,'.',',');

            }
        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos_mes_total[2017][$mes])) {
                $sum_mes2017_total [$mes] = count($datos_mes_total[2017][$mes]);
            }
        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos_mes_total[2018][$mes])) {
                $sum_mes2018_total [$mes] = count($datos_mes_total[2018][$mes]);
            }
        }

        
        $menu = 'bug_fixing';

        return view('bug_fixing/error_prioridad/index_contenido', compact('sum_mes2017_urgente', 'sum_mes2017_muy_alta',
            'sum_mes2017_alta','sum_mes2017_normal','menu','sum_mes2017_total','sum_mes2018_urgente',
            'sum_mes2018_muy_alta','sum_mes2018_alta','sum_mes2018_normal','sum_mes2018_total'));
    }

    public function detalle($anio, $mes)
    {
        $fecha_elegida = $mes . '/01/' . $anio;
        $menu = 'bug_fixing';

        return view('bug_fixing/error_prioridad/detalle', compact('anio', 'mes', 'fecha_elegida', 'menu'));
    }

    public function detalle_contenido($anio, $mes)
    {
        $errores_prioridades = $this->indicadorDesarrolloRepository->getErrorPrioridadPorFecha($anio,$mes);

        return view('bug_fixing/error_prioridad/detalle_contenido', compact('errores_prioridades'));
    }

}

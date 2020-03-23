<?php

namespace App\Http\Controllers;

use App\Repositories\IndicadorDesarrolloRepository;
use Illuminate\Http\Request;

class ErrorEvitableController extends Controller
{
    
    private $indicadorDesarrolloRepository;

    public function __construct(IndicadorDesarrolloRepository $indicadorDesarrolloRepository)
    {
        $this->indicadorDesarrolloRepository = $indicadorDesarrolloRepository;
    }

    public function index()
    {
        $errores_evitables = $this->indicadorDesarrolloRepository->getErrorEvitable();

        foreach ($errores_evitables as $key => $error_evitable) {

            for ($mes = 1; $mes <= 12; $mes++) {
                if ($error_evitable->Mes == $mes) {

                    $datos_total[$error_evitable->Anio][$mes][] = ($error_evitable->conces);

                    if ($error_evitable->Evitable == 'Si') {
                        $datos_evitables[$error_evitable->Anio][$mes][] = ($error_evitable->conces);
                    }

                }
            }
        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos_total[2017][$mes])) {

                if (isset($datos_evitables[2017][$mes])){

                    $valor = (count($datos_evitables[2017][$mes]) / count($datos_total[2017][$mes])) * 100;
                    $sum_mes2017 [$mes] = number_format($valor,2,'.',',');
                }else{
                    $sum_mes2017 [$mes] = 0;
                }

            }
        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos_total[2018][$mes])) {

                if (isset($datos_evitables[2018][$mes])){

                    $valor = (count($datos_evitables[2018][$mes]) / count($datos_total[2018][$mes])) * 100;
                    $sum_mes2018 [$mes] = number_format($valor,2,'.',',');
                }else{
                    $sum_mes2018 [$mes] = 0;
                }

            }
        }

        $valor_grafico2017 = json_encode(array_flatten($sum_mes2017), JSON_NUMERIC_CHECK);
        $valor_grafico2018 = json_encode(array_flatten($sum_mes2018), JSON_NUMERIC_CHECK);

        $menu = 'bug_fixing';

        return view('bug_fixing/error_evitable/index', compact('menu', 'valor_grafico2017', 'valor_grafico2018'));
    }

    public function index_contenido()
    {
        $errores_evitables = $this->indicadorDesarrolloRepository->getErrorEvitable();

        foreach ($errores_evitables as $key => $error_evitable) {

            for ($mes = 1; $mes <= 12; $mes++) {
                if ($error_evitable->Mes == $mes) {

                    $datos_total[$error_evitable->Anio][$mes][] = ($error_evitable->conces);

                    if ($error_evitable->Evitable == 'Si') {
                        $datos_evitables[$error_evitable->Anio][$mes][] = ($error_evitable->conces);
                    }

                }
            }
        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos_total[2017][$mes])) {

                if (isset($datos_evitables[2017][$mes])){

                    $valor = (count($datos_evitables[2017][$mes]) / count($datos_total[2017][$mes])) * 100;
                    $sum_mes2017 [$mes] = number_format($valor,2,'.',',');
                }else{
                    $sum_mes2017 [$mes] = 0;
                }

            }
        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos_total[2018][$mes])) {

                if (isset($datos_evitables[2018][$mes])){

                    $valor = (count($datos_evitables[2018][$mes]) / count($datos_total[2018][$mes])) * 100;
                    $sum_mes2018 [$mes] = number_format($valor,2,'.',',');
                }else{
                    $sum_mes2018 [$mes] = 0;
                }

            }
        }
        
        $menu = 'bug_fixing';

        return view('bug_fixing/error_evitable/index_contenido', compact('sum_mes2017', 'sum_mes2018', 'menu','datos_evitables'));

    }

    public function detalle($anio, $mes)
    {
        $fecha_elegida = $mes . '/01/' . $anio;
        $menu = 'bug_fixing';

        return view('bug_fixing/error_evitable/detalle', compact('anio', 'mes', 'fecha_elegida', 'menu'));
    }

    public function detalle_contenido($anio, $mes)
    {
        $errores_evitables = $this->indicadorDesarrolloRepository->getErrorEvitablePorFecha($anio,$mes);

        return view('bug_fixing/error_evitable/detalle_contenido', compact('errores_evitables'));
    }
}

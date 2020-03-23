<?php

namespace App\Http\Controllers;

use App\Repositories\IndicadorDesarrolloRepository;
use Illuminate\Http\Request;

class ErrorGeneradoController extends Controller
{

    private $indicadorDesarrolloRepository;

    public function __construct(IndicadorDesarrolloRepository $indicadorDesarrolloRepository)
    {
        $this->indicadorDesarrolloRepository = $indicadorDesarrolloRepository;
    }
    
    public function index()
    {
        $errores_generados = $this->indicadorDesarrolloRepository->getErrorGenerado();

        foreach ($errores_generados as $key => $error_generado) {

            for ($mes = 1; $mes <= 12; $mes++) {
                if ($error_generado->Mes == $mes) {
                    $datos[$error_generado->Anio][$mes][] = ($error_generado->Cantidad);
                }
            }
        }


        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos[2017][$mes])) {
                $sum_mes2017 [$mes] = array_sum($datos[2017][$mes]);
            }
        }


        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos[2018][$mes])) {
                $sum_mes2018 [$mes] = array_sum($datos[2018][$mes]);
            }
        }

        //dump($sum_mes2017);
        //dd();

        $valor_grafico2017 = json_encode(array_flatten($sum_mes2017), JSON_NUMERIC_CHECK);
        $valor_grafico2018 = json_encode(array_flatten($sum_mes2018), JSON_NUMERIC_CHECK);

        //$aniofecha = Carbon::now('America/Argentina/Buenos_Aires')->year;

        $menu = 'bug_fixing';

        return view('bug_fixing/error_generado/index', compact('valor_grafico2017', 'valor_grafico2018', 'menu'));
    }


    public function index_contenido()
    {

        $errores_generados = $this->indicadorDesarrolloRepository->getErrorGenerado();
        
        foreach ($errores_generados as $key => $error_generado) {

            for ($mes = 1; $mes <= 12; $mes++) {
                if ($error_generado->Mes == $mes) {
                    $datos[$error_generado->Anio][$mes][] = ($error_generado->Cantidad);
                }
            }
        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos[2017][$mes])) {
                $sum_mes2017 [$mes] = array_sum($datos[2017][$mes]);
            }
        }

        for ($mes = 1; $mes <= 12; $mes++) {
            if (isset($datos[2018][$mes])) {
                $sum_mes2018 [$mes] = array_sum($datos[2018][$mes]);
            }
        }

        $menu = 'bug_fixing';

        return view('bug_fixing/error_generado/index_contenido', compact('sum_mes2017', 'sum_mes2018', 'menu'));
    }

    public function detalle($anio, $mes)
    {
        $fecha_elegida = $mes . '/01/' . $anio;
        $menu = 'bug_fixing';

        return view('bug_fixing/error_generado/detalle', compact('anio', 'mes', 'fecha_elegida', 'menu'));
    }

    public function detalle_contenido($anio, $mes)
    {
        $errores_generados = $this->indicadorDesarrolloRepository->getErrorGeneradoPorFecha($anio, $mes);

        return view('bug_fixing/error_generado/detalle_contenido', compact('errores_generados'));
    }
}

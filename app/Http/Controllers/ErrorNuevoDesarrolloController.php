<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\IndicadorDesarrolloRepository;
use Carbon\Carbon;

class ErrorNuevoDesarrolloController extends Controller
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

        $ErroresNuevosDesarrollo = $this->indicadorDesarrolloRepository->getErrorNuevoDesarrollo();

/*                dump($ErroresNuevosDesarrollo);
                dd();*/

        foreach ($ErroresNuevosDesarrollo as $key => $ErrorNuevoDesarrollo) {

            for ($mes = 1; $mes <= 12; $mes++) {
                if ($ErrorNuevoDesarrollo->Mes == $mes) {
                    $datos[$ErrorNuevoDesarrollo->Anio][$mes][] = ($ErrorNuevoDesarrollo->Cantidad);
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

        $menu = 'calidad';

        return view('calidad/error_nuevo_desarrollo/index', compact('valor_grafico2017', 'valor_grafico2018', 'menu'));
    }

    public function index_contenido()
    {

        $ErroresNuevosDesarrollo = $this->indicadorDesarrolloRepository->getErrorNuevoDesarrollo();

        /*        dump($ErroresNuevosDesarrollo);
                dd();*/

        foreach ($ErroresNuevosDesarrollo as $key => $ErrorNuevoDesarrollo) {

            for ($mes = 1; $mes <= 12; $mes++) {
                if ($ErrorNuevoDesarrollo->Mes == $mes) {
                    $datos[$ErrorNuevoDesarrollo->Anio][$mes][] = ($ErrorNuevoDesarrollo->Cantidad);
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

        $menu = 'calidad';

        return view('calidad/error_nuevo_desarrollo/index_contenido', compact('sum_mes2017', 'sum_mes2018', 'menu'));

    }

    public function detalle($anio, $mes)
    {
        $fecha_elegida = $mes . '/01/' . $anio;
        //$mes = Carbon::parse($anio . '-' . $mes . '-01')->format('F');
        $menu = 'calidad';

        return view('calidad/error_nuevo_desarrollo/detalle', compact('anio', 'mes', 'fecha_elegida', 'menu'));
    }


    public function detalle_contenido($anio, $mes)
    {

        $errores_nuevos_desarrollos = $this->indicadorDesarrolloRepository->getErrorNuevoDesarrolloPorFecha($anio, $mes);

        return view('calidad/error_nuevo_desarrollo/detalle_contenido', compact('errores_nuevos_desarrollos'));

    }
}

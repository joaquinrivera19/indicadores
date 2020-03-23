<?php

namespace App\Http\Controllers;

use App\Repositories\IndicadorDesarrolloRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TareaFechaPrometidaController extends Controller
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
        $menu = 'desarrollo';
        
        return view('desarrollo/tarea_fecha_prometida/index', compact('menu'));
    }

    public function index_contenido()
    {
        $tareas_fecha_prometida = $this->indicadorDesarrolloRepository->getTareaFechaPrometidaHomePorFecha();

        return view('desarrollo/tarea_fecha_prometida/index_contenido', compact('tareas_fecha_prometida'));
    }

    
/*    public function index()
    {

        $TareasFechaPrometida = $this->indicadorDesarrolloRepository->getTareaFechaPrometida();
        
        $mes1 = [];
        $mes2 = [];
        $mes3 = [];
        $mes4 = [];
        $mes5 = [];
        $mes6 = [];
        $mes7 = [];
        $mes8 = [];
        $mes9 = [];
        $mes10 = [];
        $mes11 = [];
        $mes12 = [];

        $all = [];

        foreach ($TareasFechaPrometida as $key => $TareaFechaPrometida) {

            if ($TareaFechaPrometida->Mes == 1){$mes1[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 2){$mes2[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 3){$mes3[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 4){$mes4[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 5){$mes5[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 6){$mes6[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 7){$mes7[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 8){$mes8[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 9){$mes9[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 10){$mes10[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 11){$mes11[] = $TareaFechaPrometida->Cantidad;}
            if ($TareaFechaPrometida->Mes == 12){$mes12[] = $TareaFechaPrometida->Cantidad;}

        }

        $sum_mes1 = array_sum($mes1);
        $sum_mes2 = array_sum($mes2);
        $sum_mes3 = array_sum($mes3);
        $sum_mes4 = array_sum($mes4);
        $sum_mes5 = array_sum($mes5);
        $sum_mes6 = array_sum($mes6);
        $sum_mes7 = array_sum($mes7);
        $sum_mes8 = array_sum($mes8);
        $sum_mes9 = array_sum($mes9);
        $sum_mes10 = array_sum($mes10);
        $sum_mes11 = array_sum($mes11);
        $sum_mes12 = array_sum($mes12);

        $all = [$sum_mes1, $sum_mes2, $sum_mes3, $sum_mes4, $sum_mes5, $sum_mes6, $sum_mes7, $sum_mes8
            , $sum_mes9, $sum_mes10, $sum_mes11, $sum_mes12];
        
        $valor_grafico = json_encode($all,JSON_NUMERIC_CHECK);

        $aniofecha = Carbon::now('America/Argentina/Buenos_Aires')->year;

        return view('desarrollo/tarea_fecha_prometida', compact('sum_mes1','sum_mes2','sum_mes3','sum_mes4'
            ,'sum_mes5','sum_mes6','sum_mes7','sum_mes8','sum_mes9','sum_mes10','sum_mes11','sum_mes12','valor_grafico','aniofecha'));

    }*/

}

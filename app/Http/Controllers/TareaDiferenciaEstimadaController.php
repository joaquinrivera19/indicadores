<?php

namespace App\Http\Controllers;

use App\Repositories\IndicadorDesarrolloRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TareaDiferenciaEstimadaController extends Controller
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
        $tarea_diferencias_estimadas= $this->indicadorDesarrolloRepository->getTareaDiferenciaEstimada();
        $menu = 'desarrollo';

        foreach ($tarea_diferencias_estimadas as $tarea_diferencia_estimada)
        {

            $anio = $tarea_diferencia_estimada->Anio;

            if($anio == 2017){

                $array_cantidad2017 [] = $tarea_diferencia_estimada->Cantidad;

            } elseif($anio == 2018){

                $array_cantidad2018 [] = $tarea_diferencia_estimada->Cantidad;

            }

        }
        
        $valor_grafico2017 = json_encode($array_cantidad2017,JSON_NUMERIC_CHECK);
        $valor_grafico2018 = json_encode($array_cantidad2018,JSON_NUMERIC_CHECK);

        return view('desarrollo/tareas_diferencia_estimada/index', compact('menu',
            'valor_grafico2017','valor_grafico2018'));
    }
    
    public function index_contenido()
    {
        $tarea_diferencias_estimadas= $this->indicadorDesarrolloRepository->getTareaDiferenciaEstimada();

        return view('desarrollo/tareas_diferencia_estimada/index_contenido', compact('tarea_diferencias_estimadas'));
    }
    

    public function detalle($anio,$mes)
    {
        $fecha_elegida = $mes . '/01/' . $anio;
        $menu = 'desarrollo';

        return view('desarrollo/tareas_diferencia_estimada/detalle', compact('anio','mes', 'fecha_elegida','menu'));
    }

    public function detalle_contenido($anio,$mes)
    {
        
        $tareas_diferencias_estimadas = $this->indicadorDesarrolloRepository->getTareaDiferenciaEstimadaPorFecha($anio,$mes);
        
        if(count($tareas_diferencias_estimadas) == 0){

            $array_diferencia[] = 0;

        } else {

            foreach ($tareas_diferencias_estimadas as $tarea_diferencia_estimada)
            {
                $array_diferencia[] = $tarea_diferencia_estimada->Diferencia;
            }

        }

        $total_diferencia = array_sum($array_diferencia);

        return view('desarrollo/tareas_diferencia_estimada/detalle_contenido', compact('tareas_diferencias_estimadas','total_diferencia'));
    }
}

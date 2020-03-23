<?php

namespace App\Http\Controllers;

use App\Repositories\IndicadorDesarrolloRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ErrorBloqueanteController extends Controller
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
        $resultado = $this->indicadorDesarrolloRepository->getTiempoResolucionErroresBloqueantes();

        $cantidad_no_mostrar = [];
        $cantidad_en_verde = [];
        $cantidad_en_rojo = [];
        $cantidad_en_otro = [];
        $valor_hora = [];
        $valor_hora_mes = [];

        $cantidad_total_del_mes = [];
        $porcentaje_verde_del_mes = [];
        $porcentaje_rojo_del_mes = [];
        $porcentaje_otro_del_mes = [];


        foreach ($resultado as $i => $value) {

            $valor_hora[] = $value->DemoraNetaGPMenosPedInf;

            $mes = $value->mes;
            $anio = $value->anio;

            for ($m = 1; $m <= 12; $m++) {

                if ($m == $mes) {

                    $valor_hora_mes[$anio][$m][] = $valor_hora[$i];

                    if ($valor_hora[$i] >= "0" and $valor_hora[$i] <= "24") {

                        $cantidad_no_mostrar[$anio][$m][] = $valor_hora[$i];

                    } elseif ($valor_hora[$i] > "24") {

                        $cantidad_en_verde[$anio][$m][] = $valor_hora[$i];

                        if ($valor_hora[$i] > "48"){
                            $cantidad_en_rojo[$anio][$m][] = $valor_hora[$i];
                        }

                    } else {

                        //$cantidad_en_otro[$m][] = $valor_hora[$i];

                        //Los valores negativos se agregan a la variable

                        $cantidad_no_mostrar[$anio][$m][] = $valor_hora[$i];

                    }

                }
            }

        }

//'imprime los valores verdes del mes [3]' ---> $verde[3]
//'imprime el valor [1] de los verdes del mes [3]' ---> $verde[3][1]

        for ($anio = 2017; $anio <=2018; $anio++){

            for ($m = 1; $m <= 12; $m++) {

                if (isset($valor_hora_mes[$anio][$m])) {

                    $cantidad_total_del_mes[$anio][$m] = count($valor_hora_mes[$anio][$m]);

                    if (isset($cantidad_en_verde[$anio][$m])) {
                        $porcentaje_verde_del_mes[$anio][$m] = (count($cantidad_en_verde[$anio][$m]) * 100) / $cantidad_total_del_mes[$anio][$m];
                    }

                    if (isset($cantidad_en_rojo[$anio][$m])) {
                        $porcentaje_rojo_del_mes[$anio][$m] = (count($cantidad_en_rojo[$anio][$m]) * 100) / $cantidad_total_del_mes[$anio][$m];
                    }

                    if (isset($cantidad_en_otro[$anio][$m])) {
                        $porcentaje_otro_del_mes[$anio][$m] = (count($cantidad_en_otro[$anio][$m]) * 100) / $cantidad_total_del_mes[$anio][$m];
                    }

                }

            }

        }

/*                dump($porcentaje_verde_del_mes,count($porcentaje_verde_del_mes[2017]), count($porcentaje_rojo_del_mes));
        dd();*/

        $valor_verde = [];
        $valor_rojo = [];


        for ($a=2017; $a<=2018; $a++){

            $cant_ver[$a] = count($porcentaje_verde_del_mes[$a]);
            $cant_roj[$a] = count($porcentaje_rojo_del_mes[$a]);

        }


/*        dump($cant_ver[2017], $cant_roj[2017]);
        dd();*/


        for ($a=2017; $a<=2018; $a++){

            for ($m = 1; $m <= $cant_ver[$a]; $m++) {
                $valor_verde[$a][] = number_format($porcentaje_verde_del_mes[$a][$m],2,'.',',');
            }

            for ($m = 1; $m <= $cant_roj[$a]; $m++) {
                $valor_rojo[$a][] = number_format($porcentaje_rojo_del_mes[$a][$m],2,'.',',');
            }

        }


        for ($a=2017; $a<=2018; $a++){
            $valor_grafico_verde[$a] = json_encode($valor_verde[$a],JSON_NUMERIC_CHECK);
            $valor_grafico_rojo[$a] = json_encode($valor_rojo[$a],JSON_NUMERIC_CHECK);
        }

/*        dump($valor_grafico_verde);
        dd();*/

        //$aniofecha = Carbon::now('America/Argentina/Buenos_Aires')->year;

        $menu = 'calidad';

        return view('calidad/tiempo_resolucion_error_bloqueante/index', compact('valor_grafico_verde','valor_grafico_rojo','menu'));

    }

    public function index_contenido()
    {

        $resultado = $this->indicadorDesarrolloRepository->getTiempoResolucionErroresBloqueantes();

        $cantidad_no_mostrar = [];
        $cantidad_en_verde = [];
        $cantidad_en_rojo = [];
        $cantidad_en_otro = [];
        $valor_hora = [];
        $valor_hora_mes = [];

        $cantidad_total_del_mes = [];
        $porcentaje_verde_del_mes = [];
        $porcentaje_rojo_del_mes = [];
        $porcentaje_otro_del_mes = [];


        foreach ($resultado as $i => $value) {

            $valor_hora[] = $value->DemoraNetaGPMenosPedInf;

            $mes = $value->mes;
            $anio = $value->anio;

            for ($m = 1; $m <= 12; $m++) {

                if ($m == $mes) {

                    $valor_hora_mes[$anio][$m][] = $valor_hora[$i];

                    if ($valor_hora[$i] >= "0" and $valor_hora[$i] <= "24") {

                        $cantidad_no_mostrar[$anio][$m][] = $valor_hora[$i];

                    } elseif ($valor_hora[$i] > "24") {

                        $cantidad_en_verde[$anio][$m][] = $valor_hora[$i];

                        if ($valor_hora[$i] > "48"){
                            $cantidad_en_rojo[$anio][$m][] = $valor_hora[$i];
                        }

                    } else {

                        //$cantidad_en_otro[$m][] = $valor_hora[$i];

                        //Los valores negativos se agregan a la variable

                        $cantidad_no_mostrar[$anio][$m][] = $valor_hora[$i];

                    }

                }
            }

        }

//'imprime los valores verdes del mes [3]' ---> $verde[3]
//'imprime el valor [1] de los verdes del mes [3]' ---> $verde[3][1]

        for ($anio = 2017; $anio <=2018; $anio++){

            for ($m = 1; $m <= 12; $m++) {

                if (isset($valor_hora_mes[$anio][$m])) {

                    $cantidad_total_del_mes[$anio][$m] = count($valor_hora_mes[$anio][$m]);

                    if (isset($cantidad_en_verde[$anio][$m])) {
                        $porcentaje_verde_del_mes[$anio][$m] = (count($cantidad_en_verde[$anio][$m]) * 100) / $cantidad_total_del_mes[$anio][$m];
                    }

                    if (isset($cantidad_en_rojo[$anio][$m])) {
                        $porcentaje_rojo_del_mes[$anio][$m] = (count($cantidad_en_rojo[$anio][$m]) * 100) / $cantidad_total_del_mes[$anio][$m];
                    }

                    if (isset($cantidad_en_otro[$anio][$m])) {
                        $porcentaje_otro_del_mes[$anio][$m] = (count($cantidad_en_otro[$anio][$m]) * 100) / $cantidad_total_del_mes[$anio][$m];
                    }

                }

            }

        }

        $menu = 'calidad';

        return view('calidad/tiempo_resolucion_error_bloqueante/index_contenido', compact('cantidad_total_del_mes', 'porcentaje_verde_del_mes',
            'porcentaje_rojo_del_mes','menu'));


    }

    public function detalle($anio, $mes)
    {
        $fecha_elegida = $mes . '/01/' . $anio;
        //$mes = Carbon::parse($anio . '-' . $mes . '-01')->format('F');
        $menu = 'calidad';

        return view('calidad/tiempo_resolucion_error_bloqueante/detalle', compact('anio', 'mes', 'fecha_elegida', 'menu'));
    }


    public function detalle_contenido($anio, $mes)
    {

        $tiempo_resolucion_errores_bloqueantes = $this->indicadorDesarrolloRepository->getTiempoResolucionErroresBloqueantesPorFecha($anio,$mes);

        return view('calidad/tiempo_resolucion_error_bloqueante/detalle_contenido', compact('tiempo_resolucion_errores_bloqueantes'));

    }
}

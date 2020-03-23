<?php

namespace App\Http\Controllers;

use App\Repositories\IndicadorDesarrolloRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ErrorPendienteController extends Controller
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
        
        //dump($calculo_por_mes);
        //dd();

        //$error_pendiente = $this->indicadorDesarrolloRepository->getErroresPendientes()->toArray();

        //$aniofecha = Carbon::now('America/Argentina/Buenos_Aires')->year;

        $menu = 'calidad';

        return view('calidad/error_pendiente/index', compact('menu'));
    }

    public function obtener_datos_index()
    {
        $calculo_por_mes = $this->calculo();

        return view('calidad/error_pendiente/index_contenido', compact('calculo_por_mes'));
    }

    public function calculo()
    {

        $resultado2017 = $this->indicadorDesarrolloRepository->getErroresPendientes(2017)->toArray();
        $resultado2018 = $this->indicadorDesarrolloRepository->getErroresPendientes(2018)->toArray();

/*        dump($resultado2017);
        dd();*/

        $pendiente_anio_pasado2016 = 34;

        $pendiente_por_mes2017 = [];
        $pendiente_por_mes2018 = [];
        $calculo_por_mes2017 = [];
        $calculo_por_mes2018 = [];

        foreach ($resultado2017 as $i => $value) {

            if ($value === reset($resultado2017)) {

                $ingresada = $value->TotalIngresados;
                $finalizada = $value->Total_Finalizados;
                $stand_by = $value->Total_Stand_By;

                $calculo_por_mes2017[$i] = $pendiente_anio_pasado2016 + $ingresada - $finalizada - $stand_by;

                $pendiente_por_mes2017 [$i] = $calculo_por_mes2017[$i];

            } else {

                $ingresada = $value->TotalIngresados;
                $finalizada = $value->Total_Finalizados;
                $stand_by = $value->Total_Stand_By;

                $calculo_por_mes2017[$i] = $pendiente_por_mes2017[$i - 1] + $ingresada - $finalizada - $stand_by;

                $pendiente_por_mes2017 [$i] = $calculo_por_mes2017[$i];

            }

        }

/*        dump($pendiente_por_mes2017);
        dd();*/

        foreach ($resultado2018 as $i => $value) {

            if ($value === reset($resultado2018)) {

                $ingresada = $value->TotalIngresados;
                $finalizada = $value->Total_Finalizados;
                $stand_by = $value->Total_Stand_By;

                $calculo_por_mes2018[$i] = end($calculo_por_mes2017) + $ingresada - $finalizada - $stand_by;

                $pendiente_por_mes2018 [$i] = $calculo_por_mes2018[$i];

            } else {

                $ingresada = $value->TotalIngresados;
                $finalizada = $value->Total_Finalizados;
                $stand_by = $value->Total_Stand_By;

                if ($ingresada == 0 or $finalizada == 0){

                    $calculo_por_mes2018[$i] = 0 + $ingresada - $finalizada - $stand_by;

                    $pendiente_por_mes2018 [$i] = $calculo_por_mes2018[$i];

                } else {

                    $calculo_por_mes2018[$i] = $pendiente_por_mes2018[$i - 1] + $ingresada - $finalizada - $stand_by;

                    $pendiente_por_mes2018 [$i] = $calculo_por_mes2018[$i];

                }



            }

        }

/*        dump(end($calculo_por_mes2017));
        dd();*/

        return [$calculo_por_mes2017,$calculo_por_mes2018];
    }

    

    public function ErrorPendientePorFecha($id)
    {

        $mesfecha1 = $id;
        $aniofecha1 = Carbon::now('America/Argentina/Buenos_Aires')->year;
        
        $fecha_elegida = $mesfecha1 . '/01/' . $aniofecha1;

        //$errores_nuevos_desarrollos = $this->indicadorDesarrolloRepository->getErrorNuevoDesarrolloPorFecha($mesfecha1,$aniofecha1,$mesfecha2,$aniofecha2);

        //dump($errores_nuevos_desarrollos);
        //dd();

        $menu = 'calidad';

        return view('calidad/detalle_errores_pendientes', compact('mesfecha1', 'fecha_elegida', 'menu'));

    }
}

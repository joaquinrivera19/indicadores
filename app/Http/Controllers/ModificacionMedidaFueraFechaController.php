<?php

namespace App\Http\Controllers;

use App\Repositories\IndicadorDesarrolloRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class ModificacionMedidaFueraFechaController extends Controller
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

    public function index($tipo)
    {

        if ($tipo == 'calidad') {

            $ModificacionesMedidaFueraFechas = $this->indicadorDesarrolloRepository->getModificacionesMedidaFueraFecha();

        } elseif ($tipo == 'desarrollo') {

            $ModificacionesMedidaFueraFechas = $this->indicadorDesarrolloRepository->getModificacionesMedidaFueraFechaPM();
        }

        $MesActual_Porcentaje = number_format($ModificacionesMedidaFueraFechas[0]->MesActual_Porcentaje, 0, '.', ',');
        $Mes1_Porcentaje = number_format($ModificacionesMedidaFueraFechas[0]->Mes1_Porcentaje, 0, '.', ',');
        $Mes2_Porcentaje = number_format($ModificacionesMedidaFueraFechas[0]->Mes2_Porcentaje, 0, '.', ',');
        $Mes3_Porcentaje = number_format($ModificacionesMedidaFueraFechas[0]->Mes3_Porcentaje, 0, '.', ',');
        $Mes4_Porcentaje = number_format($ModificacionesMedidaFueraFechas[0]->Mes4_Porcentaje, 0, '.', ',');
        $Mes5_Porcentaje = number_format($ModificacionesMedidaFueraFechas[0]->Mes5_Porcentaje, 0, '.', ',');
        $Mes6_Porcentaje = number_format($ModificacionesMedidaFueraFechas[0]->Mes6_Porcentaje, 0, '.', ',');

        $MesActual_Nombre = substr($ModificacionesMedidaFueraFechas[0]->MesActual_Nombre, 0, 3);
        $Mes1_Nombre = substr($ModificacionesMedidaFueraFechas[0]->Mes1_Nombre, 0, 3);
        $Mes2_Nombre = substr($ModificacionesMedidaFueraFechas[0]->Mes2_Nombre, 0, 3);
        $Mes3_Nombre = substr($ModificacionesMedidaFueraFechas[0]->Mes3_Nombre, 0, 3);
        $Mes4_Nombre = substr($ModificacionesMedidaFueraFechas[0]->Mes4_Nombre, 0, 3);
        $Mes5_Nombre = substr($ModificacionesMedidaFueraFechas[0]->Mes5_Nombre, 0, 3);
        $Mes6_Nombre = substr($ModificacionesMedidaFueraFechas[0]->Mes6_Nombre, 0, 3);

        $porcentaje = array($Mes6_Porcentaje, $Mes5_Porcentaje, $Mes4_Porcentaje, $Mes3_Porcentaje, $Mes2_Porcentaje, $Mes1_Porcentaje, $MesActual_Porcentaje);
        $nombre = array($Mes6_Nombre, $Mes5_Nombre, $Mes4_Nombre, $Mes3_Nombre, $Mes2_Nombre, $Mes1_Nombre, $MesActual_Nombre);

        $valor_grafico = json_encode($porcentaje, JSON_NUMERIC_CHECK);
        $nombre_grafico = json_encode($nombre, JSON_NUMERIC_CHECK);

        $menu = $tipo;

        return view($tipo. '/modificacion_medida_fuera_fecha/index', compact('valor_grafico', 'nombre_grafico','menu'));
    }

    public function index_contenido($tipo)
    {

        if ($tipo == 'calidad') {

            $ModificacionesMedidaFueraFechas = $this->indicadorDesarrolloRepository->getModificacionesMedidaFueraFecha();

        } elseif ($tipo == 'desarrollo') {

            $ModificacionesMedidaFueraFechas = $this->indicadorDesarrolloRepository->getModificacionesMedidaFueraFechaPM();
        }

        $aniofecha = Carbon::now('America/Argentina/Buenos_Aires')->year;
        $feach_actual = Carbon::now('America/Argentina/Buenos_Aires');

        $anio[] = $aniofecha;

        for ($i = 1; $i <= 6; $i++) {

            $hasta = $feach_actual->subMonth(1);
            $anio[] = $hasta->year;

        }
        
        $menu = $tipo;

        return view($tipo. '/modificacion_medida_fuera_fecha/index_contenido', compact('ModificacionesMedidaFueraFechas', 'anio', 'menu'));
    }

    public function detalle($tipo,$anio, $mes)
    {
        $fecha_elegida = $mes . '/01/' . $anio;
        $mes = Carbon::parse($anio.'-'.$mes.'-01')->format('F');
        $menu = $tipo;

        return view($tipo. '/modificacion_medida_fuera_fecha/detalle', compact('anio', 'mes', 'fecha_elegida', 'menu'));
    }

    public function detalle_contenido($tipo,$anio, $mes)
    {
        $mes = Carbon::parse($anio.'-'.$mes.'-01')->format('F');
        $hasta = Carbon::parse('last day of  ' . $mes . ' ' . $anio)->toDateString();

        if ($tipo == 'calidad') {

            $modificaciones_medida_fuera_fecha = $this->indicadorDesarrolloRepository->getModificacionMedidaFueraFechaPorFecha($hasta);

        } elseif ($tipo == 'desarrollo') {

            $modificaciones_medida_fuera_fecha = $this->indicadorDesarrolloRepository->getModificacionMedidaFueraFechaPorFechaPM($hasta);
        }
        
        return view($tipo. '/modificacion_medida_fuera_fecha/detalle_contenido', compact('modificaciones_medida_fuera_fecha'));

    }
}

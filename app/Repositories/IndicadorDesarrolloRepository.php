<?php

/**
 * Created by PhpStorm.
 * User: jrivera
 * Date: 12/10/2017
 * Time: 12:33 PM
 */
namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndicadorDesarrolloRepository
{

    /*----------- INICIO - Procedimientos Almacedados : Errores Nuevos Desarrollos ----------*/

    public function getErrorNuevoDesarrollo()
    {
        return DB::select('exec getErrorNuevoDesarrollo');
    }

    public function getErrorNuevoDesarrolloPorFecha ($anio, $mes)
    {
        return DB::select('exec getErrorNuevoDesarrolloPorFecha ?,?', array($anio,$mes));
    }

    public function getErrorNuevoDesarrolloHome()
    {
        return DB::select('exec getErrorNuevoDesarrolloHome');
    }

    /*----------- FIN - Procedimientos Almacedados : Errores Nuevos Desarrollos ----------*/

    /*----------- INICIO - Procedimientos Almacedados : Modificaciones a Medidas Fuera de Fecha ----------*/

    public function getModificacionesMedidaFueraFecha()
    {
        return DB::select('exec getModificacionMedidaFueraFecha');
    }

    public function getModificacionMedidaFueraFechaPorFecha($hasta)
    {
        return DB::select('exec getModificacionMedidaFueraFechaPorFecha ?', array($hasta));
    }
    
    public function getModificacionesMedidaFueraFechaHome()
    {
        return DB::select('exec getModificacionMedidaFueraFechaHome');
    }

    /*----------- FIN - Procedimientos Almacedados : Modificaciones a Medidas Fuera de Fecha ----------*/

    /*----------- INICIO - Procedimientos Almacedados : Modificaciones a Medidas Fuera de Fecha PM ----------*/

    public function getModificacionesMedidaFueraFechaPM()
    {
        return DB::select('exec getModificacionMedidaFueraFechaPM');
    }

    public function getModificacionMedidaFueraFechaPorFechaPM($hasta)
    {
        return DB::select('exec getModificacionMedidaFueraFechaPorFechaPM ?', array($hasta));
    }

    public function getModificacionesMedidaFueraFechaHomePM()
    {
        return DB::select('exec getModificacionMedidaFueraFechaHomePM');
    }

    /*----------- FIN - Procedimientos Almacedados : Modificaciones a Medidas Fuera de Fecha PM ----------*/

    /*----------- INICIO - Procedimientos Almacedados : Errores Pendientes ----------*/

    public function getErroresPendientes($anio)
    {
        //return DB::select('exec getErroresPendientes');

        //return DB::select("SELECT * FROM getErroresPendientesFunction()");

        return DB::table('ErrorPendiente')
            ->select('erp_mes as Mes','erp_anio as Año','erp_total_ingresado as TotalIngresados',
                'erp_total_finalizado as Total_Finalizados','erp_total_standby as Total_Stand_By')
            ->where('erp_anio','=',$anio)
            ->orderBy('erp_codigo')
            ->get();
    }

    /*----------- FIN - Procedimientos Almacedados : Errores Pendientes ----------*/

    /*----------- INICIO - Procedimientos Almacedados : Tiempo de resolución de errores bloqueantes ----------*/

    public function getTiempoResolucionErroresBloqueantes()
    {
        return DB::select('exec getTiempoResolucionErroresBloqueantes');
    }

    public function getTiempoResolucionErroresBloqueantesPorFecha($anio,$mes)
    {
        return DB::select('exec getTiempoResolucionErroresBloqueantesPorFecha ?,?', array($anio,$mes));
    }

    public function getTiempoResolucionErroresBloqueantesHome()
    {
        return DB::select('exec getTiempoResolucionErroresBloqueantesHome');
    }

    /*----------- FIN - Procedimientos Almacedados : Tiempo de resolución de errores bloqueantes ----------*/

    /*----------- INICIO - Procedimientos Almacedados : Tarea Fecha Prometida ----------*/

    public function getTareaFechaPrometida()
    {
        return DB::select('exec getTareaFechaPrometida');
    }

    public function getTareaFechaPrometidaHome()
    {
        return DB::select('exec getTareaFechaPrometidaHome');
    }

    public function getTareaFechaPrometidaHomePorFecha()
    {
        return DB::select('exec getTareaFechaPrometidaHomePorFecha');
    }

    /*----------- FIN - Procedimientos Almacedados : Tarea Fecha Prometida ----------*/


    /*----------- INICIO - Procedimientos Almacedados : Tarea Diferencia Estimada ----------*/

    public function getTareaDiferenciaEstimada()
    {
        return DB::select('exec getTareaDiferenciaEstimada');
    }

    public function getTareaDiferenciaEstimadaHome()
    {
        return DB::select('exec getTareaDiferenciaEstimadaHome');
    }

    public function getTareaDiferenciaEstimadaPorFecha($anio,$mes)
    {
        return DB::select('exec getTareaDiferenciaEstimadaPorFecha ?,?', array($anio,$mes));
    }

    /*----------- FIN - Procedimientos Almacedados : Tarea Diferencia Estimada -------------*/


    /*----------- INICIO - Procedimientos Almacedados : Error Evitable ----------*/

    public function getErrorEvitable()
    {
        return DB::select('exec getErrorEvitable');
    }

    public function getErrorEvitableHome()
    {
        return DB::select('exec getErrorEvitableHome');
    }

    public function getErrorEvitablePorFecha($anio,$mes)
    {
        return DB::select('exec getErrorEvitablePorFecha ?,?', array($anio,$mes));
    }
    
    /*----------- FIN - Procedimientos Almacedados : Error Evitable -------------*/

    /*----------- INICIO - Procedimientos Almacedados : Error Generado ----------*/

    public function getErrorGenerado()
    {
        return DB::select('exec getErrorGenerado');
    }

    public function getErrorGeneradoHome()
    {
        return DB::select('exec getErrorEvitableHome');
    }

    public function getErrorGeneradoPorFecha($anio,$mes)
    {
        return DB::select('exec getErrorGeneradoPorFecha ?,?', array($anio,$mes));
    }

    /*----------- FIN - Procedimientos Almacedados : Error Generado -------------*/

    /*----------- INICIO - Procedimientos Almacedados : Error Prioridad ----------*/

    public function getErrorPrioridad()
    {
        return DB::select('exec getErrorPrioridad');
    }

    public function getErrorPrioridadHome()
    {
        return DB::select('exec getErrorEvitableHome');
    }

    public function getErrorPrioridadPorFecha($anio,$mes)
    {
        return DB::select('exec getErrorGeneradoPorFecha ?,?', array($anio,$mes));
    }

    /*----------- FIN - Procedimientos Almacedados : Error Prioridad -------------*/

}
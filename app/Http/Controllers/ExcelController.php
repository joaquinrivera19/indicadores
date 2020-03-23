<?php

namespace App\Http\Controllers;

use App\Repositories\IndicadorDesarrolloRepository;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ExcelController extends Controller
{

    private $indicadorDesarrolloRepository;

    public function __construct(IndicadorDesarrolloRepository $indicadorDesarrolloRepository)
    {

        $this->indicadorDesarrolloRepository=$indicadorDesarrolloRepository;

    }

    public function excelExportacionErrorNuevoDesarrolloPorFecha($anio,$mes)
    {

        Excel::create('Errores Nuevos Desarrollos', function($excel) use ($anio,$mes) {

            $excel->sheet('Mes '.$mes, function($sheet) use ($anio,$mes) {
                
                $errores_nuevos_desarrollos = $this->indicadorDesarrolloRepository->getErrorNuevoDesarrolloPorFecha ($anio, $mes);

                $data = json_decode(json_encode($errores_nuevos_desarrollos), true);

                $sheet->fromArray($data);

                $sheet->cell('A1:I1', function ($cells) {

                    $cells->setFont(array(
                        'family' => 'Calibri',
                        'size' => '12',
                        'bold' => true
                    ));

                });

            });
        })->export('xls');

    }
    
    public function excelExportacionModificacionMedidaFueraFechaPorFecha($tipo,$anio,$mes)
    {
        Excel::create('Modificacion Medida Fuera de Fecha', function($excel) use ($tipo,$anio,$mes) {

            $excel->sheet('Mes '.$mes, function($sheet) use ($tipo,$anio,$mes) {

                $hasta = Carbon::parse('last day of  ' . $mes . ' ' . $anio)->toDateString();
                
                if ($tipo == 'calidad') {

                    $modificacion_fuera_fecha = $this->indicadorDesarrolloRepository->getModificacionMedidaFueraFechaPorFecha($hasta);

                } elseif ($tipo == 'desarrollo') {

                    $modificacion_fuera_fecha = $this->indicadorDesarrolloRepository->getModificacionMedidaFueraFechaPorFechaPM($hasta);
                }

                $data = json_decode(json_encode($modificacion_fuera_fecha), true);

                $sheet->fromArray($data);

                $sheet->cell('A1:I1', function ($cells) {

                    $cells->setFont(array(
                        'family' => 'Calibri',
                        'size' => '12',
                        'bold' => true
                    ));

                });

            });
        })->export('xls');
    }


    public function excelExportacionTiempoResolucionErroresBloqueantesPorFecha($anio,$mes)
    {
        Excel::create('Tiempo Resolucion Errores Bloqueantes', function($excel) use ($anio,$mes) {

            $excel->sheet('Mes '.$mes, function($sheet) use ($anio,$mes) {

                $tiempo_resolucion_errores_bloqueantes = $this->indicadorDesarrolloRepository->getTiempoResolucionErroresBloqueantesPorFecha($anio,$mes);

                $data = json_decode(json_encode($tiempo_resolucion_errores_bloqueantes), true);

                $sheet->fromArray($data);

                $sheet->cell('A1:I1', function ($cells) {

                    $cells->setFont(array(
                        'family' => 'Calibri',
                        'size' => '12',
                        'bold' => true
                    ));

                });

            });
        })->export('xls');
    }
    
    
    public function excelExportacionTareaFechaPrometidaPorFecha()
    {

        Excel::create('Tarea Fecha Prometida', function($excel) {

            $excel->sheet('Fecha Prometida', function($sheet) {
                
                $tareas_fecha_prometida = $this->indicadorDesarrolloRepository->getTareaFechaPrometidaHomePorFecha();

                $data = json_decode(json_encode($tareas_fecha_prometida), true);

                $sheet->fromArray($data);

                $sheet->cell('A1:I1', function ($cells) {

                    $cells->setFont(array(
                        'family' => 'Calibri',
                        'size' => '12',
                        'bold' => true
                    ));

                });

            });
        })->export('xls');
        
    }

    public function excelExportacionTareaDiferenciaEstimadaPorFecha($anio,$mes)
    {

        Excel::create('Tarea Diferencia Estimada', function($excel) use ($anio,$mes) {

            $excel->sheet('Fecha Diferencia Estimada', function($sheet) use ($anio,$mes) {
                
                $tareas_diferencia_estimada = $this->indicadorDesarrolloRepository->getTareaDiferenciaEstimadaPorFecha($anio,$mes);

                $data = json_decode(json_encode($tareas_diferencia_estimada), true);

                $sheet->fromArray($data);

                $sheet->cell('A1:Q1', function ($cells) {

                    $cells->setFont(array(
                        'family' => 'Calibri',
                        'size' => '12',
                        'bold' => true
                    ));

                });

            });
        })->export('xls');

    }

    public function excelExportacionErrorEvitablePorFecha($anio,$mes)
    {
        Excel::create('Errores Evitables', function($excel) use ($anio,$mes) {

            $excel->sheet('Errores Evitables', function($sheet) use ($anio,$mes) {

                $errores_evitables = $this->indicadorDesarrolloRepository->getErrorEvitablePorFecha($anio,$mes);

                $data = json_decode(json_encode($errores_evitables), true);

                $sheet->fromArray($data);

                $sheet->cell('A1:Q1', function ($cells) {

                    $cells->setFont(array(
                        'family' => 'Calibri',
                        'size' => '12',
                        'bold' => true
                    ));

                });

            });
        })->export('xls');
    }

    public function excelExportacionErrorGeneradoPorFecha($anio,$mes)
    {
        Excel::create('Cantidad Errores Generados', function($excel) use ($anio,$mes) {

            $excel->sheet('Cantidad Errores Generados', function($sheet) use ($anio,$mes) {

                $errores_generados = $this->indicadorDesarrolloRepository->getErrorGeneradoPorFecha($anio, $mes);

                $data = json_decode(json_encode($errores_generados), true);

                $sheet->fromArray($data);

                $sheet->cell('A1:Q1', function ($cells) {

                    $cells->setFont(array(
                        'family' => 'Calibri',
                        'size' => '12',
                        'bold' => true
                    ));

                });

            });
        })->export('xls');
    }

    public function excelExportacionErrorPrioridadPorFecha($anio,$mes)
    {
        Excel::create('Errores Por Prioridad', function($excel) use ($anio,$mes) {

            $excel->sheet('Errores Por Prioridad', function($sheet) use ($anio,$mes) {
                
                $errores_prioridades = $this->indicadorDesarrolloRepository->getErrorPrioridadPorFecha($anio,$mes);

                $data = json_decode(json_encode($errores_prioridades), true);

                $sheet->fromArray($data);

                $sheet->cell('A1:Q1', function ($cells) {

                    $cells->setFont(array(
                        'family' => 'Calibri',
                        'size' => '12',
                        'bold' => true
                    ));

                });

            });
        })->export('xls');
    }
}

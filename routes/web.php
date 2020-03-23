<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@calidad');

Route::get('calidad', 'HomeController@calidad');
Route::get('calidad_contenido', 'HomeController@calidad_contenido');

Route::get('desarrollo', 'HomeController@desarrollo');
Route::get('desarrollo_contenido', 'HomeController@desarrollo_contenido');

Route::get('bug_fixing', 'HomeController@bug_fixing');
Route::get('bug_fixing_contenido', 'HomeController@bug_fixing_contenido');

//Errores Nuevos Desarrollos
Route::get('calidad/error_nuevo_desarrollo_index', 'ErrorNuevoDesarrolloController@index');
Route::get('calidad/error_nuevo_desarrollo_index_contenido', 'ErrorNuevoDesarrolloController@index_contenido');
Route::get('calidad/error_nuevo_desarrollo_detalle/{anio}/{mes}', 'ErrorNuevoDesarrolloController@detalle');
Route::get('calidad/error_nuevo_desarrollo_detalle_contenido/{anio}/{mes}', 'ErrorNuevoDesarrolloController@detalle_contenido');

//Modificaciones a Medida Fuera de Fecha
Route::get('{tipo}/modificacion_medida_fuera_fecha_index', 'ModificacionMedidaFueraFechaController@index');
Route::get('{tipo}/modificacion_medida_fuera_fecha_index_contenido', 'ModificacionMedidaFueraFechaController@index_contenido');
Route::get('{tipo}/modificacion_medida_fuera_fecha_detalle/{anio}/{mes}', 'ModificacionMedidaFueraFechaController@detalle');
Route::get('{tipo}/modificacion_medida_fuera_fecha_detalle_contenido/{anio}/{mes}', 'ModificacionMedidaFueraFechaController@detalle_contenido');

//Errores Pendientes
Route::get('calidad/errores_pendientes_index', 'ErrorPendienteController@index');
Route::get('calidad/errores_pendientes_index_contenido', 'ErrorPendienteController@obtener_datos_index');
Route::get('calidad/errores_pendientes/{id}', 'ErrorPendienteController@ErrorPendientePorFecha');

//Tiempo de Resolucion Errores Bloqueantes
Route::get('calidad/errores_bloqueantes_index', 'ErrorBloqueanteController@index');
Route::get('calidad/errores_bloqueantes_index_contenido', 'ErrorBloqueanteController@index_contenido');
Route::get('calidad/errores_bloqueantes_detalle/{anio}/{mes}', 'ErrorBloqueanteController@detalle');
Route::get('calidad/errores_bloqueantes_detalle_contenido/{anio}/{mes}', 'ErrorBloqueanteController@detalle_contenido');

//Tarea Fecha Prometida
Route::get('desarrollo/tareas_fecha_prometida_index', 'TareaFechaPrometidaController@index');
Route::get('desarrollo/tareas_fecha_prometida_index_contenido', 'TareaFechaPrometidaController@index_contenido');

//Tarea Diferencia Estiamada
Route::get('desarrollo/tareas_diferencia_estimada_index', 'TareaDiferenciaEstimadaController@index');
Route::get('desarrollo/tareas_diferencia_estimada_index_contenido', 'TareaDiferenciaEstimadaController@index_contenido');
Route::get('desarrollo/tareas_diferencia_estimada_detalle/{anio}/{mes}', 'TareaDiferenciaEstimadaController@detalle');
Route::get('desarrollo/tareas_diferencia_estimada_detalle_contenido/{anio}/{mes}', 'TareaDiferenciaEstimadaController@detalle_contenido');

//Error Evitable
Route::get('bug_fixing/error_evitable_index', 'ErrorEvitableController@index');
Route::get('bug_fixing/error_evitable_index_contenido', 'ErrorEvitableController@index_contenido');
Route::get('bug_fixing/error_evitable_detalle/{anio}/{mes}', 'ErrorEvitableController@detalle');
Route::get('bug_fixing/error_evitable_detalle_contenido/{anio}/{mes}', 'ErrorEvitableController@detalle_contenido');

//Error Generado
Route::get('bug_fixing/error_generado_index', 'ErrorGeneradoController@index');
Route::get('bug_fixing/error_generado_index_contenido', 'ErrorGeneradoController@index_contenido');
Route::get('bug_fixing/error_generado_detalle/{anio}/{mes}', 'ErrorGeneradoController@detalle');
Route::get('bug_fixing/error_generado_detalle_contenido/{anio}/{mes}', 'ErrorGeneradoController@detalle_contenido');

//Error Generado
Route::get('bug_fixing/error_prioridad_index', 'ErrorPrioridadController@index');
Route::get('bug_fixing/error_prioridad_index_contenido', 'ErrorPrioridadController@index_contenido');
Route::get('bug_fixing/error_prioridad_detalle/{anio}/{mes}', 'ErrorPrioridadController@detalle');
Route::get('bug_fixing/error_prioridad_detalle_contenido/{anio}/{mes}', 'ErrorPrioridadController@detalle_contenido');


//Exportacion Excel Calidad
Route::get('excel_exportacion_error_nuevo_desarrollo_por_fecha/{anio}/{mes}','ExcelController@excelExportacionErrorNuevoDesarrolloPorFecha');
Route::get('excel_exportacion_modificacion_fuera_fecha/{tipo}/{anio}/{mes}','ExcelController@excelExportacionModificacionMedidaFueraFechaPorFecha');
Route::get('excel_exportacion_tiempo_resolucion_errores_bloqueantes/{anio}/{mes}','ExcelController@excelExportacionTiempoResolucionErroresBloqueantesPorFecha');

//Exportacion Excel Desarrollo
Route::get('excel_exportacion_tareas_fecha_prometida','ExcelController@excelExportacionTareaFechaPrometidaPorFecha');
Route::get('excel_exportacion_tareas_diferencia_estimada/{anio}/{mes}','ExcelController@excelExportacionTareaDiferenciaEstimadaPorFecha');

//Exportacion Excel Bug Fixing
Route::get('excel_exportacion_error_evitable/{anio}/{mes}','ExcelController@excelExportacionErrorEvitablePorFecha');
Route::get('excel_exportacion_error_generado/{anio}/{mes}','ExcelController@excelExportacionErrorGeneradoPorFecha');
Route::get('excel_exportacion_error_prioridad/{anio}/{mes}','ExcelController@excelExportacionErrorPrioridadPorFecha');



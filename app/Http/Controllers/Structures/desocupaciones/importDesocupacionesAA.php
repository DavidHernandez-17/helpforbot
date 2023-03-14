<?php

namespace App\Http\Controllers\Structures\desocupaciones;

use App\Http\Controllers\Controller;
use App\Models\Desocupaciones\DesocupacionesAA;
use Illuminate\Http\Request;

class importDesocupacionesAA extends Controller
{
    public function import($file)
    {
        if($file)
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);

            foreach($lineas as $linea)
            {
                $datos = explode("	", $linea);

                $id = $datos[0];
                $id_inmueble = $datos[1];
                $arrendatario = $datos[2];
                $email = $datos[3];
                $notificacion_entrega = $datos[4];
                $fecha_asignacion_cita = $datos[5];
                $fecha_entrega_inmueble = $datos[6];
                $concepto_notificacion = $datos[7];
                $concepto_notificacion_estandar = $datos[8];
                $funcionario_recibe = $datos[9];
                $destino_final_acta_entrega = $datos[10];
                $destino_llaves = $datos[11];
                $anticipo_servicios_publicos = $datos[12];
                $numero_contrato_epm = $datos[13];
                $pendiente_pago_anticipo = $datos[14];
                $pp_recibio = $datos[15];
                $fecha_recepcion_pp = $datos[16];
                
                $duplicates = DesocupacionesAA::where('id', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {
                    
                    $registro = new DesocupacionesAA();

                    $registro->id = $id;
                    $registro->id_inmueble = $id_inmueble;
                    $registro->arrendatario = $arrendatario;
                    $registro->email = $email;
                    $registro->notificacion_entrega = $notificacion_entrega;
                    $registro->fecha_asignacion_cita = $fecha_asignacion_cita;
                    $registro->fecha_entrega_inmueble = $fecha_entrega_inmueble;
                    $registro->concepto_notificacion = $concepto_notificacion;
                    $registro->concepto_notificacion_estandar = $concepto_notificacion_estandar;
                    $registro->funcionario_recibe = $funcionario_recibe;
                    $registro->destino_final_acta_entrega = $destino_final_acta_entrega;
                    $registro->destino_llaves = $destino_llaves;
                    $registro->anticipo_servicios_publicos = $anticipo_servicios_publicos;
                    $registro->numero_contrato_epm = $numero_contrato_epm;
                    $registro->pendiente_pago_anticipo = $pendiente_pago_anticipo;
                    $registro->pp_recibio = $pp_recibio;
                    $registro->fecha_recepcion_pp = $fecha_recepcion_pp;
                    $registro->save();
                }
                else
                {
                    //Recorro id existentes en la BD para luego buscar y actualizar.
                    foreach( $duplicates as $duplicate )
                    {
                        $id = $duplicate->id;
                    }
                    
                    //Busco y actualizo todos los campos en BD
                    $updateRegistro = DesocupacionesAA::find($id);

                    $updateRegistro->id = $id;
                    $updateRegistro->id_inmueble = $id_inmueble;
                    $updateRegistro->arrendatario = $arrendatario;
                    $updateRegistro->email = $email;
                    $updateRegistro->notificacion_entrega = $notificacion_entrega;
                    $updateRegistro->fecha_asignacion_cita = $fecha_asignacion_cita;
                    $updateRegistro->fecha_entrega_inmueble = $fecha_entrega_inmueble;
                    $updateRegistro->concepto_notificacion = $concepto_notificacion;
                    $updateRegistro->concepto_notificacion_estandar = $concepto_notificacion_estandar;
                    $updateRegistro->funcionario_recibe = $funcionario_recibe;
                    $updateRegistro->destino_final_acta_entrega = $destino_final_acta_entrega;
                    $updateRegistro->destino_llaves = $destino_llaves;
                    $updateRegistro->anticipo_servicios_publicos = $anticipo_servicios_publicos;
                    $updateRegistro->numero_contrato_epm = $numero_contrato_epm;
                    $updateRegistro->pendiente_pago_anticipo = $pendiente_pago_anticipo;
                    $updateRegistro->pp_recibio = $pp_recibio;
                    $updateRegistro->fecha_recepcion_pp = $fecha_recepcion_pp;
                    $updateRegistro->save();

                }                            
            }

            return response('', 200);

        }

        return response('', 400);

    }
}

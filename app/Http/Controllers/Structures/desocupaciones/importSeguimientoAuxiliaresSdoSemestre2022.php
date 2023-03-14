<?php

namespace App\Http\Controllers\Structures\desocupaciones;

use App\Http\Controllers\Controller;
use App\Models\Desocupaciones\SeguimientoAuxiliaresSdoSemestre;
use Illuminate\Http\Request;

class importSeguimientoAuxiliaresSdoSemestre2022 extends Controller
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
                $fecha_notificacion = $datos[2];
                $tipo_inmueble = $datos[3];
                $tipo_desocupacion = $datos[4];
                $tipo_visita = $datos[5];
                $citas_caso = $datos[6];
                $arr_fecha_cita_1 = $datos[7];
                $arr_fecha_cita_2 = $datos[8];
                $arr_fecha_cita_3 = $datos[9];
                $arr_fecha_cita_4 = $datos[10];
                $arr_fecha_cita_5 = $datos[11];
                $arr_fecha_cita_7 = $datos[12];
                $auxiliar_recibe_arr = $datos[13];
                $pp_fecha_cita_1 = $datos[14];
                $pp_fecha_cita_2 = $datos[15];
                $pp_fecha_cita_3 = $datos[16];
                $pp_fecha_cita_4 = $datos[17];
                $pp_fecha_cita_5 = $datos[18];
                $pp_fecha_cita_6 = $datos[19];
                $auxiliar_entrega_pp = $datos[20];
                $tipo_entrega_pp = $datos[21];
                $estado_inmueble = $datos[22];
                $aviso = $datos[23];
                $descarga_video = $datos[24];
                $acta_fisica_centro_acopio = $datos[25];
                $acta_escaneada_zoho = $datos[26];
                $inventario_chepe_pepe = $datos[27];
                $video = $datos[28];
                $observaciones = $datos[29];
                
                $duplicates = SeguimientoAuxiliaresSdoSemestre::where('id', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {
                    
                    $registro = new SeguimientoAuxiliaresSdoSemestre();

                    $registro->id = $id;
                    $registro->id_inmueble = $id_inmueble;
                    $registro->fecha_notificacion = $fecha_notificacion;
                    $registro->tipo_inmueble = $tipo_inmueble;
                    $registro->tipo_desocupacion = $tipo_desocupacion;
                    $registro->tipo_visita = $tipo_visita;
                    $registro->citas_caso = $citas_caso;
                    $registro->arr_fecha_cita_1 = $arr_fecha_cita_1;
                    $registro->arr_fecha_cita_2 = $arr_fecha_cita_2;
                    $registro->arr_fecha_cita_3 = $arr_fecha_cita_3;
                    $registro->arr_fecha_cita_4 = $arr_fecha_cita_4;
                    $registro->arr_fecha_cita_5 = $arr_fecha_cita_5;
                    $registro->arr_fecha_cita_7 = $arr_fecha_cita_7;
                    $registro->auxiliar_recibe_arr = $auxiliar_recibe_arr;
                    $registro->pp_fecha_cita_1 = $pp_fecha_cita_1;
                    $registro->pp_fecha_cita_2 = $pp_fecha_cita_2;
                    $registro->pp_fecha_cita_3 = $pp_fecha_cita_3;
                    $registro->pp_fecha_cita_4 = $pp_fecha_cita_4;
                    $registro->pp_fecha_cita_5 = $pp_fecha_cita_5;
                    $registro->pp_fecha_cita_6 = $pp_fecha_cita_6;
                    $registro->auxiliar_entrega_pp = $auxiliar_entrega_pp;
                    $registro->tipo_entrega_pp = $tipo_entrega_pp;
                    $registro->estado_inmueble = $estado_inmueble;
                    $registro->aviso = $aviso;
                    $registro->descarga_video = $descarga_video;
                    $registro->acta_fisica_centro_acopio = $acta_fisica_centro_acopio;
                    $registro->acta_escaneada_zoho = $acta_escaneada_zoho;
                    $registro->inventario_chepe_pepe = $inventario_chepe_pepe;
                    $registro->video = $video;
                    $registro->observaciones = $observaciones;
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
                    $updateRegistro = SeguimientoAuxiliaresSdoSemestre::find($id);

                    $updateRegistro->id = $id;
                    $updateRegistro->id_inmueble = $id_inmueble;
                    $updateRegistro->fecha_notificacion = $fecha_notificacion;
                    $updateRegistro->tipo_inmueble = $tipo_inmueble;
                    $updateRegistro->tipo_desocupacion = $tipo_desocupacion;
                    $updateRegistro->tipo_visita = $tipo_visita;
                    $updateRegistro->citas_caso = $citas_caso;
                    $updateRegistro->arr_fecha_cita_1 = $arr_fecha_cita_1;
                    $updateRegistro->arr_fecha_cita_2 = $arr_fecha_cita_2;
                    $updateRegistro->arr_fecha_cita_3 = $arr_fecha_cita_3;
                    $updateRegistro->arr_fecha_cita_4 = $arr_fecha_cita_4;
                    $updateRegistro->arr_fecha_cita_5 = $arr_fecha_cita_5;
                    $updateRegistro->arr_fecha_cita_7 = $arr_fecha_cita_7;
                    $updateRegistro->auxiliar_recibe_arr = $auxiliar_recibe_arr;
                    $updateRegistro->pp_fecha_cita_1 = $pp_fecha_cita_1;
                    $updateRegistro->pp_fecha_cita_2 = $pp_fecha_cita_2;
                    $updateRegistro->pp_fecha_cita_3 = $pp_fecha_cita_3;
                    $updateRegistro->pp_fecha_cita_4 = $pp_fecha_cita_4;
                    $updateRegistro->pp_fecha_cita_5 = $pp_fecha_cita_5;
                    $updateRegistro->pp_fecha_cita_6 = $pp_fecha_cita_6;
                    $updateRegistro->auxiliar_entrega_pp = $auxiliar_entrega_pp;
                    $updateRegistro->tipo_entrega_pp = $tipo_entrega_pp;
                    $updateRegistro->estado_inmueble = $estado_inmueble;
                    $updateRegistro->aviso = $aviso;
                    $updateRegistro->descarga_video = $descarga_video;
                    $updateRegistro->acta_fisica_centro_acopio = $acta_fisica_centro_acopio;
                    $updateRegistro->acta_escaneada_zoho = $acta_escaneada_zoho;
                    $updateRegistro->inventario_chepe_pepe = $inventario_chepe_pepe;
                    $updateRegistro->video = $video;
                    $updateRegistro->observaciones = $observaciones;
                    $updateRegistro->save();

                }                            
            }

            return response('', 200);

        }

        return response('', 400);

    }
}

<?php

namespace App\Http\Controllers\Structures;

use App\Http\Controllers\Controller;
use App\Models\CobroIncapacidades_GH;
use Illuminate\Http\Request;

class importCobroIncapacidades_GH extends Controller
{
    public function CobroIncapacidades_GH($file)
    {
        if($file)    
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);

            foreach($lineas as $linea)
            {

                $datos = explode(",", $linea);
                $id = $datos[0];
                $fecha = $datos[1];
                $cedula = $datos[2];
                $nombre = $datos[3];
                $tipoIncapacidad = $datos[4];
                $pago = $datos[5];
                $quienAsume = $datos[6];
                $horas = $datos[7];
                $dias = $datos[8];
                $valor = $datos[9];
                
                $duplicate = CobroIncapacidades_GH::where('id', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicate) == 0) {
                    $registro = new CobroIncapacidades_GH();
                    $registro->id = $id;
                    $registro->fecha = $fecha;
                    $registro->cedula = $cedula;
                    $registro->nombre = $nombre;
                    $registro->tipoIncapacidad = $tipoIncapacidad;
                    $registro->pago = $pago;
                    $registro->quienAsume = $quienAsume;
                    $registro->horas = $horas;
                    $registro->dias = $dias;
                    $registro->valor = $valor;
                    $registro->save(); 
                }
                else
                {
                    //Recorro las cedulas existentes en la BD para luego buscar y actualizar.
                    foreach( $duplicate as $duplicate )
                    {
                        $id = $duplicate->id;
                    }
                    
                    //Busco y actualizo campo quienAsume en BD 
                    $updateRegistro = CobroIncapacidades_GH::find($id);
                    $updateRegistro->quienAsume = $quienAsume;
                    $updateRegistro->save();
                }                    
                              
            }

            return response('', 200);

        }

        return response('', 400);
    }
}

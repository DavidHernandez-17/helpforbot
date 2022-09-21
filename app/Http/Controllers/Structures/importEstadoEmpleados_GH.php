<?php

namespace App\Http\Controllers\Structures;

use App\Http\Controllers\Controller;
use App\Models\EstadoEmpleados_GH;
use Illuminate\Http\Request;

class importEstadoEmpleados_GH extends Controller
{
    public function EstadoEmpleados_GH($file)
    {
        if($file)    
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);

            foreach($lineas as $linea)
            {

                $datos = explode(",", $linea);
                $cedula = $datos[0];
                $nombreEmpleado = $datos[1];
                $isActive = $datos[2];
                
                $cedulaDuplicate = EstadoEmpleados_GH::where('cedula', $cedula)->get();

                //Si no existe cédula, realiza inserción en BD
                if (sizeof($cedulaDuplicate) == 0) {
                    $registro = new EstadoEmpleados_GH();
                    $registro->cedula = $cedula;
                    $registro->nombreEmpleado = $nombreEmpleado;
                    $registro->isActive = $isActive;
                    $registro->save(); 
                }
                else
                {
                    //Recorro las cedulas existentes en la BD para luego buscar y actualizar.
                    foreach( $cedulaDuplicate as $cedula )
                    {
                        $id = $cedula->id;
                    }
                    
                    //Busco y actualizo campo isActive en BD 
                    $updateRegistro = EstadoEmpleados_GH::find($id);
                    $updateRegistro->isActive = $isActive;
                    $updateRegistro->save();
                }                    
                              
            }

            return response('', 200);

        }

        return response('', 400);
    }
}

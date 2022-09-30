<?php

namespace App\Http\Controllers\Structures;

use App\Http\Controllers\Controller;
use App\Models\ProvisionPersonal_GH;
use App\Models\ProvisionPersonalBitacora_GH;
use Carbon\Carbon;
use Illuminate\Http\Request;

class importProvisionPersonal_GH extends Controller
{

    public function ProvisionPersonal_GH($file)
    {
        if($file)    
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);

            foreach($lineas as $linea)
            {
                $datos = explode(",", $linea);

                $cedula  = $datos[0];
                $nombreEmpleado = $datos[1];
                $centroCostos = $datos[2];
                $oficio = $datos[3];
                $cargo = $datos[4];
                $ingreso = $datos[5];
                $retiro = $datos[6];
                $consecutivo = $datos[7];


                $duplicates = ProvisionPersonal_GH::where('cedula', $cedula)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {

                    $registro = new ProvisionPersonal_GH();

                    $registro->cedula = $cedula;
                    $registro->nombreEmpleado = $nombreEmpleado;
                    $registro->centroCostos = $centroCostos;
                    $registro->oficio = $oficio;
                    $registro->cargo = $cargo;
                    $registro->ingreso = $ingreso;
                    $registro->retiro = $retiro;
                    $registro->consecutivo = $consecutivo;
                    
                    $registro->save(); 
                }
                //Else hace referencia a que existe duplicado
                else
                {

                    //Recorro las cedulas existentes en la BD para luego buscar y actualizar.
                    foreach( $duplicates as $duplicate )
                    {
                        $id = $duplicate->id;
                    }


                    //Busco y actualizo todos los campos en BD 
                    $updateRegistro = ProvisionPersonal_GH::find($id);

                    $updateRegistro->cedula = $cedula;
                    $updateRegistro->nombreEmpleado = $nombreEmpleado;
                    $updateRegistro->centroCostos = $centroCostos;
                    $updateRegistro->oficio = $oficio;
                    $updateRegistro->cargo = $cargo;
                    $updateRegistro->ingreso = $ingreso;
                    $updateRegistro->retiro = $retiro;
                    $updateRegistro->consecutivo = $consecutivo;

                    $updateRegistro->save();


                    //Registro los datos de los empleados activos en la tabla bitacora
                    $RegisterBitacora = new importProvisionPersonal_GH();
                    ($retiro == '') ? $RegisterBitacora->RegisterTableBitacora($cedula, 'true') : $RegisterBitacora->RegisterTableBitacora($cedula, 'false');

                }                    
                              
            }

            return response('', 200);

        }

        return response('', 400);
    }

    public function RegisterTableBitacora($cedula, $isActive)
    {
        $now = Carbon::now();

        if( $isActive == 'true' )
        {
            $bitacora = new ProvisionPersonalBitacora_GH();
            $bitacora->cedula = $cedula;
            $bitacora->isActive = '1';
            $bitacora->created_at = $now;
            $bitacora->updated_at = $now;
            $bitacora->save();
        }
        else{
            $bitacora = new ProvisionPersonalBitacora_GH;
            $bitacora->cedula = $cedula;
            $bitacora->isActive = '0';
            $bitacora->created_at = $now;
            $bitacora->updated_at = $now;
            $bitacora->save();
        }

    }

}

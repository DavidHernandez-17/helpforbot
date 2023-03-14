<?php

namespace App\Http\Controllers\Structures;

use App\Http\Controllers\Controller;
use App\Models\Capacitaciones_GH;
use Illuminate\Http\Request;

class importCapacitaciones_GH extends Controller
{

    public function import($file)
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
                $año = $datos[2];
                $categoria = $datos[3];
                $cantidadCapacitaciones = $datos[4];
                $temaCapacitacion = $datos[5];
                $areas = $datos[6];
                $capacitador = $datos[7];
                $tipo = $datos[8];
                $tiempo = $datos[9];
                $cantidadPersonas = $datos[10];
                $valorEmpresa = $datos[11];
                $valorEmpleado = $datos[12];
                $observaciones = $datos[13];
                
                $duplicates = Capacitaciones_GH::where('id', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {
                    
                    $registro = new Capacitaciones_GH();

                    $registro->id = $id;
                    $registro->fecha = $fecha;
                    $registro->año = $año;
                    $registro->categoria = $categoria;
                    $registro->cantidadCapacitaciones = $cantidadCapacitaciones;
                    $registro->temaCapacitacion = $temaCapacitacion;
                    $registro->areas = $areas;
                    $registro->capacitador = $capacitador;
                    $registro->tipo = $tipo;
                    $registro->tiempo = $tiempo;
                    $registro->cantidadPersonas = $cantidadPersonas;
                    $registro->valorEmpresa = $valorEmpresa;
                    $registro->valorEmpleado = $valorEmpleado;
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
                    $updateRegistro = Capacitaciones_GH::find($id);
                    
                    $updateRegistro->id = $id;
                    $updateRegistro->fecha = $fecha;
                    $updateRegistro->año = $año;
                    $updateRegistro->categoria = $categoria;
                    $updateRegistro->cantidadCapacitaciones = $cantidadCapacitaciones;
                    $updateRegistro->temaCapacitacion = $temaCapacitacion;
                    $updateRegistro->areas = $areas;
                    $updateRegistro->capacitador = $capacitador;
                    $updateRegistro->tipo = $tipo;
                    $updateRegistro->tiempo = $tiempo;
                    $updateRegistro->cantidadPersonas = $cantidadPersonas;
                    $updateRegistro->valorEmpresa = $valorEmpresa;
                    $updateRegistro->valorEmpleado = $valorEmpleado;
                    $updateRegistro->observaciones = $observaciones;
                    $updateRegistro->save();
                }                              
            }

            return response('', 200);

        }

        return response('', 400);
    }
    
}

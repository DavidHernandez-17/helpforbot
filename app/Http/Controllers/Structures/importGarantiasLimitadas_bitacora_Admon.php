<?php

namespace App\Http\Controllers\Structures;

use App\Http\Controllers\Controller;
use App\Models\GarantiasLimitadasBitacora_Admon;
use Illuminate\Http\Request;

class importGarantiasLimitadas_bitacora_Admon extends Controller
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
                $idInmueble = $datos[1];
                $novedades = $datos[2];
                $fechaNovedad = $datos[3];
                $destinacion = $datos[4];
                $limite = $datos[5];
                $cartera = $datos[6];
                $mesesSiniestrados = $datos[7];
                $fechaInicialSiniestro = $datos[8];
                $simiEntroNegocio = $datos[9];
                $comentarios = $datos[10];
                
                $duplicates = GarantiasLimitadasBitacora_Admon::where('id', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {
                    
                    $registro = new GarantiasLimitadasBitacora_Admon();

                    $registro->id = $id;
                    $registro->idInmueble = $idInmueble;
                    $registro->novedades = $novedades;
                    $registro->fechaNovedad = $fechaNovedad;
                    $registro->destinacion = $destinacion;
                    $registro->limite = $limite;
                    $registro->cartera = $cartera;
                    $registro->mesesSiniestrados = $mesesSiniestrados;
                    $registro->fechaInicialSiniestro = $fechaInicialSiniestro;
                    $registro->simiEntroNegocio = $simiEntroNegocio;
                    $registro->comentarios = $comentarios;
                    $registro->save(); 
                }
                else
                {
                    //Recorro las cedulas existentes en la BD para luego buscar y actualizar.
                    foreach( $duplicates as $duplicate )
                    {
                        $id = $duplicate->id;
                    }
                    
                    //Busco y actualizo todos los campos en BD 
                    $updateRegistro = GarantiasLimitadasBitacora_Admon::find($id);
                    $updateRegistro->id = $id;
                    $updateRegistro->idInmueble = $idInmueble;
                    $updateRegistro->novedades = $novedades;
                    $updateRegistro->fechaNovedad = $fechaNovedad;
                    $updateRegistro->destinacion = $destinacion;
                    $updateRegistro->limite = $limite;
                    $updateRegistro->cartera = $cartera;
                    $updateRegistro->mesesSiniestrados = $mesesSiniestrados;
                    $updateRegistro->fechaInicialSiniestro = $fechaInicialSiniestro;
                    $updateRegistro->simiEntroNegocio = $simiEntroNegocio;
                    $updateRegistro->comentarios = $comentarios;
                    $updateRegistro->save();
                }                    
                              
            }

            return response('', 200);

        }

        return response('', 400);
    }
}

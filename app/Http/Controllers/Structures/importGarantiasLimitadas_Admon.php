<?php

namespace App\Http\Controllers\structures;

use App\Http\Controllers\Controller;
use App\Models\GarantiasLimitadas_Admon;
use Illuminate\Http\Request;

class importGarantiasLimitadas_Admon extends Controller
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
                $mesInforme = $datos[1];
                $aseguradora = $datos[2];
                $solicitud = $datos[3];
                $arrendatario = $datos[4];
                $canon = $datos[5];
                $destinacion = $datos[6];
                $limite = $datos[7];
                $deudor = $datos[8];
                $polizaHogar = $datos[9];
                $polizaIntegral = $datos[10];
                $cartera = $datos[11];
                $mesesSiniestrados = $datos[12];
                $fechaInicialSiniestro = $datos[13];
                $fechaAprobacion = $datos[14];
                $mes = $datos[15];
                $año = $datos[16];
                $condicionFirmada = $datos[17];
                $simiEntroNegocio = $datos[18];
                $comentarios = $datos[19];
                
                $duplicates = GarantiasLimitadas_Admon::where('id', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {
                    $registro = new GarantiasLimitadas_Admon();
                    $registro->id = $id;
                    $registro->mesInforme = $mesInforme;
                    $registro->aseguradora = $aseguradora;
                    $registro->solicitud = $solicitud;
                    $registro->arrendatario = $arrendatario;
                    $registro->canon = $canon;
                    $registro->destinacion = $destinacion;
                    $registro->limite = $limite;
                    $registro->deudor = $deudor;
                    $registro->polizaHogar = $polizaHogar;
                    $registro->polizaIntegral = $polizaIntegral;
                    $registro->cartera = $cartera;
                    $registro->mesesSiniestrados = $mesesSiniestrados;
                    $registro->fechaInicialSiniestro = $fechaInicialSiniestro;
                    $registro->fechaAprobacion = $fechaAprobacion;
                    $registro->mes = $mes;
                    $registro->año = $año;
                    $registro->condicionFirmada = $condicionFirmada;
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
                    $updateRegistro = GarantiasLimitadas_Admon::find($id);
                    $updateRegistro->id = $id;
                    $updateRegistro->mesInforme = $mesInforme;
                    $updateRegistro->aseguradora = $aseguradora;
                    $updateRegistro->solicitud = $solicitud;
                    $updateRegistro->arrendatario = $arrendatario;
                    $updateRegistro->canon = $canon;
                    $updateRegistro->destinacion = $destinacion;
                    $updateRegistro->limite = $limite;
                    $updateRegistro->deudor = $deudor;
                    $updateRegistro->polizaHogar = $polizaHogar;
                    $updateRegistro->polizaIntegral = $polizaIntegral;
                    $updateRegistro->cartera = $cartera;
                    $updateRegistro->mesesSiniestrados = $mesesSiniestrados;
                    $updateRegistro->fechaInicialSiniestro = $fechaInicialSiniestro;
                    $updateRegistro->fechaAprobacion = $fechaAprobacion;
                    $updateRegistro->mes = $mes;
                    $updateRegistro->año = $año;
                    $updateRegistro->condicionFirmada = $condicionFirmada;
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

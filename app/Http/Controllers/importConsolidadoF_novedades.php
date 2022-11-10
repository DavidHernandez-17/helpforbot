<?php

namespace App\Http\Controllers;

use App\Models\ConsolidadoF_novedades;
use Illuminate\Http\Request;

class importConsolidadoF_novedades extends Controller
{

    public function ConsolidadoF($file)
    {
        if($file)
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);

            foreach($lineas as $linea)
            {
                $datos = explode(";", $linea);

                $id = $datos[0];
                $fechaPQRS = $datos[1];
                $mesPQR = $datos[2];
                $añoPQR = $datos[3];
                $nPQR = $datos[4];
                $idInmueble = $datos[5];
                $tipoPQR = $datos[6];
                $estadoPQR = $datos[7];
                $aceptada = $datos[8];
                $penalidad_indemnizacion = $datos[9];
                $valorPenalizacion = $datos[10];
                $motivoEntrega = $datos[11];
                $observaciones = $datos[12];
                $fechaCierre = $datos[13];
                $tiempoGestion = $datos[14];
                $promedio = $datos[15];
                $festivos = $datos[16];
                $segmento = $datos[17];
                $estadoDesocupacion = $datos[18];
                $quienPagoComision = $datos[19];
                $valorComisionPagada = $datos[20];
                $fechaDesocupacion = $datos[21];
                $comision = $datos[22];
                $fechaInicioContrato = $datos[23];
                $fechaFinContrato = $datos[24];

                $duplicates = ConsolidadoF_novedades::where('id', '=', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {
                    
                    $registro = new ConsolidadoF_novedades();

                    $registro->id = $id;
                    $registro->fechaPQRS = $fechaPQRS;
                    $registro->mesPQR = $mesPQR;
                    $registro->añoPQR = $añoPQR;
                    $registro->nPQR = $nPQR;
                    $registro->idInmueble = $idInmueble;
                    $registro->tipoPQR = $tipoPQR;
                    $registro->estadoPQR = $estadoPQR;
                    $registro->aceptada = $aceptada;
                    $registro->penalidad_indemnizacion = $penalidad_indemnizacion;
                    $registro->valorPenalizacion = $valorPenalizacion;
                    $registro->motivoEntrega = $motivoEntrega;
                    $registro->observaciones = $observaciones;
                    $registro->fechaCierre = $fechaCierre;
                    $registro->tiempoGestion = $tiempoGestion;
                    $registro->promedio = $promedio;
                    $registro->festivos = $festivos;
                    $registro->segmento = $segmento;
                    $registro->estadoDesocupacion = $estadoDesocupacion;
                    $registro->quienPagoComision = $quienPagoComision;
                    $registro->valorComisionPagada = $valorComisionPagada;
                    $registro->fechaDesocupacion = $fechaDesocupacion;
                    $registro->comision = $comision;
                    $registro->fechaInicioContrato = $fechaInicioContrato;
                    $registro->fechaFinContrato = $fechaFinContrato;

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
                    $updateRegistro = ConsolidadoF_novedades::find($id);
                    
                    // dd($fechaPQRS);
                    $updateRegistro->fechaPQRS = $fechaPQRS;
                    $updateRegistro->mesPQR = $mesPQR;
                    $updateRegistro->añoPQR = $añoPQR;
                    $updateRegistro->nPQR = $nPQR;
                    $updateRegistro->idInmueble = $idInmueble;
                    $updateRegistro->tipoPQR = $tipoPQR;
                    $updateRegistro->estadoPQR = $estadoPQR;
                    $updateRegistro->aceptada = $aceptada;
                    $updateRegistro->penalidad_indemnizacion = $penalidad_indemnizacion;
                    $updateRegistro->valorPenalizacion = $valorPenalizacion;
                    $updateRegistro->motivoEntrega = $motivoEntrega;
                    $updateRegistro->observaciones = $observaciones;
                    $updateRegistro->fechaCierre = $fechaCierre;
                    $updateRegistro->tiempoGestion = $tiempoGestion;
                    $updateRegistro->promedio = $promedio;
                    $updateRegistro->festivos = $festivos;
                    $updateRegistro->segmento = $segmento;
                    $updateRegistro->estadoDesocupacion = $estadoDesocupacion;
                    $updateRegistro->quienPagoComision = $quienPagoComision;
                    $updateRegistro->valorComisionPagada = $valorComisionPagada;
                    $updateRegistro->fechaDesocupacion = $fechaDesocupacion;
                    $updateRegistro->comision = $comision;
                    $updateRegistro->fechaInicioContrato = $fechaInicioContrato;
                    $updateRegistro->fechaFinContrato = $fechaFinContrato;

                    $updateRegistro->save();

                }                              
            }

            return response('', 200);

        }

        return response('', 400);
    }

}

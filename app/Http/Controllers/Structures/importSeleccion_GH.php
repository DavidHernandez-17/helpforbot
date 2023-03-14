<?php

namespace App\Http\Controllers\Structures;

use App\Http\Controllers\Controller;
use App\Models\Seleccion_GH;
use Illuminate\Http\Request;

class importSeleccion_GH extends Controller
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
                $fechaSolicitud = $datos[1];
                $fechaInicioBusqueda = $datos[2];
                $tipoConvocatoria = $datos[3];
                $vacante = $datos[4];
                $proceso = $datos[5];
                $comercialAdministrativo = $datos[6];
                $nivelAcademico = $datos[7];
                $fechaEnvioHvPrimerFiltro = $datos[8];
                $fechaRespuestaCitacion = $datos[9];
                $respuestaLiderPrimerFiltro = $datos[10];
                $respuestaPsicologa = $datos[11];
                $fechaAprobacion = $datos[12];
                $fechaContratacion = $datos[13];
                $PlataformaVacante = $datos[14];
                $estado = $datos[15];
                $requisicion = $datos[16];
                $observaciones = $datos[17];

                
                $duplicates = Seleccion_GH::where('id', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {
                    
                    $registro = new Seleccion_GH();

                    $registro->id = $id;
                    $registro->fechaSolicitud = $fechaSolicitud;
                    $registro->fechaInicioBusqueda = $fechaInicioBusqueda;
                    $registro->tipoConvocatoria = $tipoConvocatoria;
                    $registro->vacante = $vacante;
                    $registro->proceso = $proceso;
                    $registro->comercialAdministrativo = $comercialAdministrativo;
                    $registro->nivelAcademico = $nivelAcademico;
                    $registro->fechaEnvioHvPrimerFiltro = $fechaEnvioHvPrimerFiltro;
                    $registro->fechaRespuestaCitacion = $fechaRespuestaCitacion;
                    $registro->respuestaLiderPrimerFiltro = $respuestaLiderPrimerFiltro;
                    $registro->respuestaPsicologa = $respuestaPsicologa;
                    $registro->fechaAprobacion = $fechaAprobacion;
                    $registro->fechaContratacion = $fechaContratacion;
                    $registro->PlataformaVacante = $PlataformaVacante;
                    $registro->estado = $estado;
                    $registro->requisicion = $requisicion;
                    $registro->observaciones = $observaciones;

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
                    $updateRegistro = Seleccion_GH::find($id);

                    $updateRegistro->fechaSolicitud = $fechaSolicitud;
                    $updateRegistro->fechaInicioBusqueda = $fechaInicioBusqueda;
                    $updateRegistro->tipoConvocatoria = $tipoConvocatoria;
                    $updateRegistro->vacante = $vacante;
                    $updateRegistro->proceso = $proceso;
                    $updateRegistro->comercialAdministrativo = $comercialAdministrativo;
                    $updateRegistro->nivelAcademico = $nivelAcademico;
                    $updateRegistro->fechaEnvioHvPrimerFiltro = $fechaEnvioHvPrimerFiltro;
                    $updateRegistro->fechaRespuestaCitacion = $fechaRespuestaCitacion;
                    $updateRegistro->respuestaLiderPrimerFiltro = $respuestaLiderPrimerFiltro;
                    $updateRegistro->respuestaPsicologa = $respuestaPsicologa;
                    $updateRegistro->fechaAprobacion = $fechaAprobacion;
                    $updateRegistro->fechaContratacion = $fechaContratacion;
                    $updateRegistro->PlataformaVacante = $PlataformaVacante;
                    $updateRegistro->estado = $estado;
                    $updateRegistro->requisicion = $requisicion;
                    $updateRegistro->observaciones = $observaciones;
                    
                    $updateRegistro->save();
                }                    
            
            }

            return response('', 200);

        }

        return response('', 400);
    }
}

<?php

namespace App\Http\Controllers\Structures;

use App\Http\Controllers\Controller;
use App\Models\NegociosCerrados_Centro;
use Illuminate\Http\Request;

class ImportNegociosCerrados_Centro extends Controller
{
    public function NegociosCerrados($file)
    {
        if($file)
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);

            foreach($lineas as $linea)
            {
                $datos = explode(",", $linea);

                $id = $datos[0];
                $rangoFecha = $datos[1];
                $fecha2 = $datos[2];
                $fechaLegalizacion = $datos[3];
                $mes = $datos[4];
                $año2 = $datos[5];
                $año = $datos[6];
                $metaMensual = $datos[7];
                $metaAsesor6 = $datos[8];
                $metaAsesor9 = $datos[9];
                $metaAsesor12 = $datos[10];
                $cod = $datos[11];
                $referencia = $datos[12];
                $direccion = $datos[13];
                $inmueble = $datos[14];
                $propietario = $datos[15];
                $arrendatario = $datos[16];
                $canon = $datos[17];
                $asesor = $datos[18];
                $captador = $datos[19];
                $promotor = $datos[20];
                $medioArr = $datos[21];
                $tipo = $datos[22];
                $aseguradora = $datos[23];
                $mandato = $datos[24];


                $duplicates = NegociosCerrados_Centro::where('id', '=', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {
                    
                    $registro = new NegociosCerrados_Centro();

                    $registro->id = $id;
                    $registro->rangoFecha = $rangoFecha;
                    $registro->fecha2 = $fecha2;
                    $registro->fechaLegalizacion = $fechaLegalizacion;
                    $registro->mes = $mes;
                    $registro->año2 = $año2;
                    $registro->año = $año;
                    $registro->metaMensual = $metaMensual;
                    $registro->metaAsesor6 = $metaAsesor6;
                    $registro->metaAsesor9 = $metaAsesor9;
                    $registro->metaAsesor12 = $metaAsesor12;
                    $registro->cod = $cod;
                    $registro->referencia = $referencia;
                    $registro->direccion = $direccion;
                    $registro->inmueble = $inmueble;
                    $registro->propietario = $propietario;
                    $registro->arrendatario = $arrendatario;
                    $registro->canon = $canon;
                    $registro->asesor = $asesor;
                    $registro->captador = $captador;
                    $registro->promotor = $promotor;
                    $registro->medioArr = $medioArr;
                    $registro->tipo = $tipo;
                    $registro->aseguradora = $aseguradora;
                    $registro->mandato = $mandato;

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
                    $updateRegistro = NegociosCerrados_Centro::find($id);

                    $updateRegistro->rangoFecha = $rangoFecha;
                    $updateRegistro->fecha2 = $fecha2;
                    $updateRegistro->fechaLegalizacion = $fechaLegalizacion;
                    $updateRegistro->mes = $mes;
                    $updateRegistro->año2 = $año2;
                    $updateRegistro->año = $año;
                    $updateRegistro->metaMensual = $metaMensual;
                    $updateRegistro->metaAsesor6 = $metaAsesor6;
                    $updateRegistro->metaAsesor9 = $metaAsesor9;
                    $updateRegistro->metaAsesor12 = $metaAsesor12;
                    $updateRegistro->cod = $cod;
                    $updateRegistro->referencia = $referencia;
                    $updateRegistro->direccion = $direccion;
                    $updateRegistro->inmueble = $inmueble;
                    $updateRegistro->propietario = $propietario;
                    $updateRegistro->arrendatario = $arrendatario;
                    $updateRegistro->canon = $canon;
                    $updateRegistro->asesor = $asesor;
                    $updateRegistro->captador = $captador;
                    $updateRegistro->promotor = $promotor;
                    $updateRegistro->medioArr = $medioArr;
                    $updateRegistro->tipo = $tipo;
                    $updateRegistro->aseguradora = $aseguradora;
                    $updateRegistro->mandato = $mandato;

                    $updateRegistro->save();

                }                              
            }

            return response('', 200);

        }

        return response('', 400);
    }
}

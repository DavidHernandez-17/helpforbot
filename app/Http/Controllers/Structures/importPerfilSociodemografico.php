<?php

namespace App\Http\Controllers\Structures;

use App\Http\Controllers\Controller;
use App\Models\PerfilSociodemografico_GH;
use Illuminate\Http\Request;

class importPerfilSociodemografico extends Controller
{
    public function PerfilSociodemografico_GH($file)
    {
        if($file)
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);

            foreach($lineas as $linea)
            {
                $datos = explode("	", $linea);


                $id = $datos[0];
                $cedula = $datos[1];
                $centroCosto = $datos[2];
                $cargo = $datos[3];
                $ingreso = $datos[4];
                $sexo = $datos[5];
                $fechaNacimiento = $datos[6];
                $direccionResidencia = $datos[7];
                $estratoSocioeconomico = $datos[8];
                $categoriaVivienda = $datos[9];
                $telefonoFijo = $datos[10];
                $celularPersonal = $datos[11];
                $nombrePariente = $datos[12];
                $telefonoPariente = $datos[13];
                $nombreFamiliarEmergencia = $datos[14];
                $parentezco = $datos[15];
                $telefonoCelularFamiliarEmergencia = $datos[16];
                $estadoCivil = $datos[17];
                $nombreConyugue = $datos[18];
                $telefonoConyugue = $datos[19];
                $tienesHijos = $datos[20];
                $CuantosHijos = $datos[21];
                $nombrePrimerHijo = $datos[22];
                $fechaNacimientoPrimerHijo = $datos[23];
                $nombreSegundoHijo = $datos[24];
                $fechaNacimientoSegundoHijo = $datos[25];
                $nombreTercerHijo = $datos[26];
                $fechaNacimientoTercerHijo = $datos[27];
                $nombreCuartoHijo = $datos[28];
                $fechaNacimientoCuartoHijo = $datos[29];
                $UltimoNivelAcademicoAlcanzado = $datos[30];
                $nombreProfesion = $datos[31];
                $pasionFelicidad = $datos[32];
                $fraseCelebreIdentificacion = $datos[33];
                $comidaFavorita = $datos[34];
                $colorFavorito = $datos[35];
                $tipoNombrePeliculaFavorita = $datos[36];
                $libroFavorito = $datos[37];
                $musicaFavorita = $datos[38];
                $pasatiempoFavorito = $datos[39];
                $queGustariaRegalo = $datos[40];
                $molestiasSalud_6meses = $datos[41];
                $DiagnosticadoEnfermedadComun = $datos[42];
                $fumarFrecuencia = $datos[43];
                $consumeBebidasAlcoholicas = $datos[44];
                $deportesFrecuencia = $datos[45];
                $iluminacionPuestoTrabajoAdecuada = $datos[46];
                $trabajoOportunidadesDesarrolloPersonal = $datos[47];
                $trabajoOportunidadesDesarrolloPersonalBinario = $datos[48];
                    
                $duplicates = PerfilSociodemografico_GH::where('id', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {
                    
                    $registro = new PerfilSociodemografico_GH();

                    $registro->id = $id;
                    $registro->cedula = $cedula;
                    $registro->centroCosto = $centroCosto;
                    $registro->cargo = $cargo;
                    $registro->ingreso = $ingreso;
                    $registro->sexo = $sexo;
                    $registro->fechaNacimiento = $fechaNacimiento;
                    $registro->direccionResidencia = $direccionResidencia;
                    $registro->estratoSocioeconomico = $estratoSocioeconomico;
                    $registro->categoriaVivienda = $categoriaVivienda;
                    $registro->telefonoFijo = $telefonoFijo;
                    $registro->celularPersonal = $celularPersonal;
                    $registro->nombrePariente = $nombrePariente;
                    $registro->telefonoPariente = $telefonoPariente;
                    $registro->nombreFamiliarEmergencia = $nombreFamiliarEmergencia;
                    $registro->parentezco = $parentezco;
                    $registro->telefonoCelularFamiliarEmergencia = $telefonoCelularFamiliarEmergencia;
                    $registro->estadoCivil = $estadoCivil;
                    $registro->nombreConyugue = $nombreConyugue;
                    $registro->telefonoConyugue = $telefonoConyugue;
                    $registro->tienesHijos = $tienesHijos;
                    $registro->CuantosHijos = $CuantosHijos;
                    $registro->nombrePrimerHijo = $nombrePrimerHijo;
                    $registro->fechaNacimientoPrimerHijo = $fechaNacimientoPrimerHijo;
                    $registro->nombreSegundoHijo = $nombreSegundoHijo;
                    $registro->fechaNacimientoSegundoHijo = $fechaNacimientoSegundoHijo;
                    $registro->nombreTercerHijo = $nombreTercerHijo;
                    $registro->fechaNacimientoTercerHijo = $fechaNacimientoTercerHijo;
                    $registro->nombreCuartoHijo = $nombreCuartoHijo;
                    $registro->fechaNacimientoCuartoHijo = $fechaNacimientoCuartoHijo;
                    $registro->UltimoNivelAcademicoAlcanzado = $UltimoNivelAcademicoAlcanzado;
                    $registro->nombreProfesion = $nombreProfesion;
                    $registro->pasionFelicidad = $pasionFelicidad;
                    $registro->fraseCelebreIdentificacion = $fraseCelebreIdentificacion;
                    $registro->comidaFavorita = $comidaFavorita;
                    $registro->colorFavorito = $colorFavorito;
                    $registro->tipoNombrePeliculaFavorita = $tipoNombrePeliculaFavorita;
                    $registro->libroFavorito = $libroFavorito;
                    $registro->musicaFavorita = $musicaFavorita;
                    $registro->pasatiempoFavorito = $pasatiempoFavorito;
                    $registro->queGustariaRegalo = $queGustariaRegalo;
                    $registro->molestiasSalud_6meses = $molestiasSalud_6meses;
                    $registro->DiagnosticadoEnfermedadComun = $DiagnosticadoEnfermedadComun;
                    $registro->fumarFrecuencia = $fumarFrecuencia;
                    $registro->consumeBebidasAlcoholicas = $consumeBebidasAlcoholicas;
                    $registro->deportesFrecuencia = $deportesFrecuencia;
                    $registro->iluminacionPuestoTrabajoAdecuada = $iluminacionPuestoTrabajoAdecuada;
                    $registro->trabajoOportunidadesDesarrolloPersonal = $trabajoOportunidadesDesarrolloPersonal;
                    $registro->trabajoOportunidadesDesarrolloPersonalBinario = $trabajoOportunidadesDesarrolloPersonalBinario;

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
                    $updateRegistro = PerfilSociodemografico_GH::find($id);
                    
                    $updateRegistro->cedula = $cedula;
                    $updateRegistro->centroCosto = $centroCosto;
                    $updateRegistro->cargo = $cargo;
                    $updateRegistro->ingreso = $ingreso;
                    $updateRegistro->sexo = $sexo;
                    $updateRegistro->fechaNacimiento = $fechaNacimiento;
                    $updateRegistro->direccionResidencia = $direccionResidencia;
                    $updateRegistro->estratoSocioeconomico = $estratoSocioeconomico;
                    $updateRegistro->categoriaVivienda = $categoriaVivienda;
                    $updateRegistro->telefonoFijo = $telefonoFijo;
                    $updateRegistro->celularPersonal = $celularPersonal;
                    $updateRegistro->nombrePariente = $nombrePariente;
                    $updateRegistro->telefonoPariente = $telefonoPariente;
                    $updateRegistro->nombreFamiliarEmergencia = $nombreFamiliarEmergencia;
                    $updateRegistro->parentezco = $parentezco;
                    $updateRegistro->telefonoCelularFamiliarEmergencia = $telefonoCelularFamiliarEmergencia;
                    $updateRegistro->estadoCivil = $estadoCivil;
                    $updateRegistro->nombreConyugue = $nombreConyugue;
                    $updateRegistro->telefonoConyugue = $telefonoConyugue;
                    $updateRegistro->tienesHijos = $tienesHijos;
                    $updateRegistro->CuantosHijos = $CuantosHijos;
                    $updateRegistro->nombrePrimerHijo = $nombrePrimerHijo;
                    $updateRegistro->fechaNacimientoPrimerHijo = $fechaNacimientoPrimerHijo;
                    $updateRegistro->nombreSegundoHijo = $nombreSegundoHijo;
                    $updateRegistro->fechaNacimientoSegundoHijo = $fechaNacimientoSegundoHijo;
                    $updateRegistro->nombreTercerHijo = $nombreTercerHijo;
                    $updateRegistro->fechaNacimientoTercerHijo = $fechaNacimientoTercerHijo;
                    $updateRegistro->nombreCuartoHijo = $nombreCuartoHijo;
                    $updateRegistro->fechaNacimientoCuartoHijo = $fechaNacimientoCuartoHijo;
                    $updateRegistro->UltimoNivelAcademicoAlcanzado = $UltimoNivelAcademicoAlcanzado;
                    $updateRegistro->nombreProfesion = $nombreProfesion;
                    $updateRegistro->pasionFelicidad = $pasionFelicidad;
                    $updateRegistro->fraseCelebreIdentificacion = $fraseCelebreIdentificacion;
                    $updateRegistro->comidaFavorita = $comidaFavorita;
                    $updateRegistro->colorFavorito = $colorFavorito;
                    $updateRegistro->tipoNombrePeliculaFavorita = $tipoNombrePeliculaFavorita;
                    $updateRegistro->libroFavorito = $libroFavorito;
                    $updateRegistro->musicaFavorita = $musicaFavorita;
                    $updateRegistro->pasatiempoFavorito = $pasatiempoFavorito;
                    $updateRegistro->queGustariaRegalo = $queGustariaRegalo;
                    $updateRegistro->molestiasSalud_6meses = $molestiasSalud_6meses;
                    $updateRegistro->DiagnosticadoEnfermedadComun = $DiagnosticadoEnfermedadComun;
                    $updateRegistro->fumarFrecuencia = $fumarFrecuencia;
                    $updateRegistro->consumeBebidasAlcoholicas = $consumeBebidasAlcoholicas;
                    $updateRegistro->deportesFrecuencia = $deportesFrecuencia;
                    $updateRegistro->iluminacionPuestoTrabajoAdecuada = $iluminacionPuestoTrabajoAdecuada;
                    $updateRegistro->trabajoOportunidadesDesarrolloPersonal = $trabajoOportunidadesDesarrolloPersonal;
                    $updateRegistro->trabajoOportunidadesDesarrolloPersonalBinario = $trabajoOportunidadesDesarrolloPersonalBinario;

                    $updateRegistro->save();

                }                              
            }

            return response('', 200);

        }

        return response('', 400);
    }
}

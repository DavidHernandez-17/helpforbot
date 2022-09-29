<?php

namespace App\Http\Controllers\Structures;

use App\Http\Controllers\Controller;
use App\Models\EncuestaRetiro_GH;
use Illuminate\Http\Request;

class ImportEncuestaRetiro_GH extends Controller
{
    
    public function EncuestaRetiro_GH($file)
    {
        if($file)
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);

            foreach($lineas as $linea)
            {
                $datos = explode("	", $linea);

                $id = $datos[0];
                $anio = $datos[1];
                $nombresApellidos = $datos[2];
                $grupo = $datos[3];
                $area = $datos[4];
                $area2 = $datos[5];
                $cargoOcupado = $datos[6];
                $nombreJefeInmediato = $datos[7];
                $tiempolaboradoEmpresa = $datos[8];
                $motivoRetiro = $datos[9];
                $causa = $datos[10];
                $causaRetiro = $datos[11];
                $conformidadSalario = $datos[12];
                $herramientasTrabajoAdecuadas = $datos[13];
                $VolverTrabajarEmpresa = $datos[14];
                $calificacionJefeInmediato = $datos[15];
                $jefeInmediato_DominioTecnico = $datos[16];
                $jefeInmediato_LiderazgoMotivacion = $datos[17];
                $jefeInmediato_ComunicacionAsertiva = $datos[18];
                $jefeInmediato_Influencia = $datos[19];
                $jefeInmediato_ResolucionConflictos = $datos[20];
                $jefeInmediato_TomaDecisiones = $datos[21];
                $jefeInmediato_Innovacion = $datos[22];
                $calificacionRelacionCompaneros = $datos[23];
                $relacionasHumanasArea = $datos[24];
                $opinionSobreEmpresa = $datos[25];
                $companiaBrindoOportunidades = $datos[26];
                $nivelSatisfaccion_CapacitacionEntrenamiento = $datos[27];
                $nivelSatisfaccion_CriteriosEvaluacionDesempeno = $datos[28];
                $nivelSatisfaccion_ComunicacionDecisionesInvolucraran = $datos[29];
                $nivelSatisfaccion_BeneficiosAdicionales = $datos[30];
                $nivelSatisfaccion_JefeDirecto = $datos[31];
                $nivelSatisfaccion_Companeros = $datos[32];
                $nivelSatisfaccion_PlanesFormacion = $datos[33];
                $calificacionClimaEmpresa_OportunidadesFormacionAscenso = $datos[34];
                $calificacionClimaEmpresa_ReconocimientoDesempenoIndividual = $datos[35];
                $calificacionClimaEmpresa_ComunicacionNivelesInstitucion = $datos[36];
                $calificacionClimaEmpresa_Horarios = $datos[37];
                $calificacionClimaEmpresa_Salario = $datos[38];
                $MejoraFallasClimaLaboral = $datos[39];
                $ProblemasFrecuentesLaborDiaria = $datos[40];
                $MayorGustoTrabajo = $datos[41];
                $ExigenciasGeneradasSolucionadas = $datos[42];
                $RepetirPasoEmpresa = $datos[43];
                $comentario = $datos[44];
                    
                $duplicates = EncuestaRetiro_GH::where('id', $id)->get();

                //Si no existe duplicado, realiza inserción en BD
                if (sizeof($duplicates) == 0) {
                    
                    $registro = new EncuestaRetiro_GH();

                    $registro->id = $id;
                    $registro->anio = $anio;
                    $registro->nombresApellidos = $nombresApellidos;
                    $registro->grupo = $grupo;
                    $registro->area = $area;
                    $registro->area2 = $area2;
                    $registro->cargoOcupado = $cargoOcupado;
                    $registro->nombreJefeInmediato = $nombreJefeInmediato;
                    $registro->tiempolaboradoEmpresa = $tiempolaboradoEmpresa;
                    $registro->motivoRetiro = $motivoRetiro;
                    $registro->causa = $causa;
                    $registro->causaRetiro = $causaRetiro;
                    $registro->conformidadSalario = $conformidadSalario;
                    $registro->herramientasTrabajoAdecuadas = $herramientasTrabajoAdecuadas;
                    $registro->VolverTrabajarEmpresa = $VolverTrabajarEmpresa;
                    $registro->calificacionJefeInmediato = $calificacionJefeInmediato;
                    $registro->jefeInmediato_DominioTecnico = $jefeInmediato_DominioTecnico;
                    $registro->jefeInmediato_LiderazgoMotivacion = $jefeInmediato_LiderazgoMotivacion;
                    $registro->jefeInmediato_ComunicacionAsertiva = $jefeInmediato_ComunicacionAsertiva;
                    $registro->jefeInmediato_Influencia = $jefeInmediato_Influencia;
                    $registro->jefeInmediato_ResolucionConflictos = $jefeInmediato_ResolucionConflictos;
                    $registro->jefeInmediato_TomaDecisiones = $jefeInmediato_TomaDecisiones;
                    $registro->jefeInmediato_Innovacion = $jefeInmediato_Innovacion;
                    $registro->calificacionRelacionCompaneros = $calificacionRelacionCompaneros;
                    $registro->relacionasHumanasArea = $relacionasHumanasArea;
                    $registro->opinionSobreEmpresa = $opinionSobreEmpresa;
                    $registro->companiaBrindoOportunidades = $companiaBrindoOportunidades;
                    $registro->nivelSatisfaccion_CapacitacionEntrenamiento = $nivelSatisfaccion_CapacitacionEntrenamiento;
                    $registro->nivelSatisfaccion_CriteriosEvaluacionDesempeno = $nivelSatisfaccion_CriteriosEvaluacionDesempeno;
                    $registro->nivelSatisfaccion_ComunicacionDecisionesInvolucraran = $nivelSatisfaccion_ComunicacionDecisionesInvolucraran;
                    $registro->nivelSatisfaccion_BeneficiosAdicionales = $nivelSatisfaccion_BeneficiosAdicionales;
                    $registro->nivelSatisfaccion_JefeDirecto = $nivelSatisfaccion_JefeDirecto;
                    $registro->nivelSatisfaccion_Companeros = $nivelSatisfaccion_Companeros;
                    $registro->nivelSatisfaccion_PlanesFormacion = $nivelSatisfaccion_PlanesFormacion;
                    $registro->calificacionClimaEmpresa_OportunidadesFormacionAscenso = $calificacionClimaEmpresa_OportunidadesFormacionAscenso;
                    $registro->calificacionClimaEmpresa_ReconocimientoDesempenoIndividual = $calificacionClimaEmpresa_ReconocimientoDesempenoIndividual;
                    $registro->calificacionClimaEmpresa_ComunicacionNivelesInstitucion = $calificacionClimaEmpresa_ComunicacionNivelesInstitucion;
                    $registro->calificacionClimaEmpresa_Horarios = $calificacionClimaEmpresa_Horarios;
                    $registro->calificacionClimaEmpresa_Salario = $calificacionClimaEmpresa_Salario;
                    $registro->MejoraFallasClimaLaboral = $MejoraFallasClimaLaboral;
                    $registro->ProblemasFrecuentesLaborDiaria = $ProblemasFrecuentesLaborDiaria;
                    $registro->MayorGustoTrabajo = $MayorGustoTrabajo;
                    $registro->ExigenciasGeneradasSolucionadas = $ExigenciasGeneradasSolucionadas;
                    $registro->RepetirPasoEmpresa = $RepetirPasoEmpresa;
                    $registro->comentario = $comentario;
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
                    $updateRegistro = EncuestaRetiro_GH::find($id);
                    
                    $updateRegistro->id = $id;
                    $updateRegistro->anio = $anio;
                    $updateRegistro->nombresApellidos = $nombresApellidos;
                    $updateRegistro->grupo = $grupo;
                    $updateRegistro->area = $area;
                    $updateRegistro->area2 = $area2;
                    $updateRegistro->cargoOcupado = $cargoOcupado;
                    $updateRegistro->nombreJefeInmediato = $nombreJefeInmediato;
                    $updateRegistro->tiempolaboradoEmpresa = $tiempolaboradoEmpresa;
                    $updateRegistro->motivoRetiro = $motivoRetiro;
                    $updateRegistro->causa = $causa;
                    $updateRegistro->causaRetiro = $causaRetiro;
                    $updateRegistro->conformidadSalario = $conformidadSalario;
                    $updateRegistro->herramientasTrabajoAdecuadas = $herramientasTrabajoAdecuadas;
                    $updateRegistro->VolverTrabajarEmpresa = $VolverTrabajarEmpresa;
                    $updateRegistro->calificacionJefeInmediato = $calificacionJefeInmediato;
                    $updateRegistro->jefeInmediato_DominioTecnico = $jefeInmediato_DominioTecnico;
                    $updateRegistro->jefeInmediato_LiderazgoMotivacion = $jefeInmediato_LiderazgoMotivacion;
                    $updateRegistro->jefeInmediato_ComunicacionAsertiva = $jefeInmediato_ComunicacionAsertiva;
                    $updateRegistro->jefeInmediato_Influencia = $jefeInmediato_Influencia;
                    $updateRegistro->jefeInmediato_ResolucionConflictos = $jefeInmediato_ResolucionConflictos;
                    $updateRegistro->jefeInmediato_TomaDecisiones = $jefeInmediato_TomaDecisiones;
                    $updateRegistro->jefeInmediato_Innovacion = $jefeInmediato_Innovacion;
                    $updateRegistro->calificacionRelacionCompaneros = $calificacionRelacionCompaneros;
                    $updateRegistro->relacionasHumanasArea = $relacionasHumanasArea;
                    $updateRegistro->opinionSobreEmpresa = $opinionSobreEmpresa;
                    $updateRegistro->companiaBrindoOportunidades = $companiaBrindoOportunidades;
                    $updateRegistro->nivelSatisfaccion_CapacitacionEntrenamiento = $nivelSatisfaccion_CapacitacionEntrenamiento;
                    $updateRegistro->nivelSatisfaccion_CriteriosEvaluacionDesempeno = $nivelSatisfaccion_CriteriosEvaluacionDesempeno;
                    $updateRegistro->nivelSatisfaccion_ComunicacionDecisionesInvolucraran = $nivelSatisfaccion_ComunicacionDecisionesInvolucraran;
                    $updateRegistro->nivelSatisfaccion_BeneficiosAdicionales = $nivelSatisfaccion_BeneficiosAdicionales;
                    $updateRegistro->nivelSatisfaccion_JefeDirecto = $nivelSatisfaccion_JefeDirecto;
                    $updateRegistro->nivelSatisfaccion_Companeros = $nivelSatisfaccion_Companeros;
                    $updateRegistro->nivelSatisfaccion_PlanesFormacion = $nivelSatisfaccion_PlanesFormacion;
                    $updateRegistro->calificacionClimaEmpresa_OportunidadesFormacionAscenso = $calificacionClimaEmpresa_OportunidadesFormacionAscenso;
                    $updateRegistro->calificacionClimaEmpresa_ReconocimientoDesempenoIndividual = $calificacionClimaEmpresa_ReconocimientoDesempenoIndividual;
                    $updateRegistro->calificacionClimaEmpresa_ComunicacionNivelesInstitucion = $calificacionClimaEmpresa_ComunicacionNivelesInstitucion;
                    $updateRegistro->calificacionClimaEmpresa_Horarios = $calificacionClimaEmpresa_Horarios;
                    $updateRegistro->calificacionClimaEmpresa_Salario = $calificacionClimaEmpresa_Salario;
                    $updateRegistro->MejoraFallasClimaLaboral = $MejoraFallasClimaLaboral;
                    $updateRegistro->ProblemasFrecuentesLaborDiaria = $ProblemasFrecuentesLaborDiaria;
                    $updateRegistro->MayorGustoTrabajo = $MayorGustoTrabajo;
                    $updateRegistro->ExigenciasGeneradasSolucionadas = $ExigenciasGeneradasSolucionadas;
                    $updateRegistro->RepetirPasoEmpresa = $RepetirPasoEmpresa;
                    $updateRegistro->comentario = $comentario;
                    $updateRegistro->save();
                }                              
            }

            return response('', 200);

        }

        return response('', 400);
    }

}

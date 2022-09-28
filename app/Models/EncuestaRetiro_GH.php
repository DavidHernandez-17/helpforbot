<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncuestaRetiro_GH extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'anio',
        'nombresApellidos',
        'grupo',
        'area',
        'area2',
        'cargoOcupado',
        'nombreJefeInmediato',
        'tiempolaboradoEmpresa',
        'motivoRetiro',
        'causa',
        'causa/retiro',
        'conformidadSalario',
        'herramientasTrabajoAdecuadas',
        'VolverTrabajarEmpresa',
        'calificacionJefeInmediato',
        'jefeInmediato_DominioTecnico',
        'jefeInmediato_LiderazgoMotivacion',
        'jefeInmediato_ComunicacionAsertiva',
        'jefeInmediato_Influencia',
        'jefeInmediato_ResolucionConflictos',
        'jefeInmediato_TomaDecisiones',
        'jefeInmediato_Innovacion',
        'calificacionRelacionCompaneros',
        'relacionasHumanasArea',
        'opinionSobreEmpresa',
        'companiaBrindoOportunidades',
        'nivelSatisfaccion_CapacitacionEntrenamiento',
        'nivelSatisfaccion_CriteriosEvaluacionDesempeno',
        'nivelSatisfaccion_ComunicacionDecisionesInvolucraran',
        'nivelSatisfaccion_BeneficiosAdicionales',
        'nivelSatisfaccion_JefeDirecto',
        'nivelSatisfaccion_Companeros',
        'nivelSatisfaccion_PlanesFormacion',
        'calificacionClimaEmpresa_OportunidadesFormacionAscenso',
        'calificacionClimaEmpresa_ReconocimientoDesempenoIndividual',
        'calificacionClimaEmpresa_ComunicacionNivelesInstitucion',
        'calificacionClimaEmpresa_Horarios',
        'calificacionClimaEmpresa_Salario',
        'MejoraFallasClimaLaboral',
        'ProblemasFrecuentesLaborDiaria',
        'MayorGustoTrabajo',
        'ExigenciasGeneradasSolucionadas',
        'RepetirPasoEmpresa',
        'comentario'
    ];
}

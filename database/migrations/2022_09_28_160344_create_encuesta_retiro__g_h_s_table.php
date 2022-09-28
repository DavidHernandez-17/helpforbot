<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestaRetiroGHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta_retiro__g_h_s', function (Blueprint $table) {
            $table->string('id');
            $table->string('anio');
            $table->string('nombresApellidos');
            $table->string('grupo');
            $table->string('area');
            $table->string('area2');
            $table->string('cargoOcupado');
            $table->string('nombreJefeInmediato');
            $table->string('tiempolaboradoEmpresa');
            $table->string('motivoRetiro');
            $table->string('causa');
            $table->string('causaRetiro');
            $table->string('conformidadSalario');
            $table->string('herramientasTrabajoAdecuadas');
            $table->string('VolverTrabajarEmpresa');
            $table->string('calificacionJefeInmediato');
            $table->string('jefeInmediato_DominioTecnico');
            $table->string('jefeInmediato_LiderazgoMotivacion');
            $table->string('jefeInmediato_ComunicacionAsertiva');
            $table->string('jefeInmediato_Influencia');
            $table->string('jefeInmediato_ResolucionConflictos');
            $table->string('jefeInmediato_TomaDecisiones');
            $table->string('jefeInmediato_Innovacion');
            $table->string('calificacionRelacionCompaneros');
            $table->string('relacionasHumanasArea');
            $table->string('opinionSobreEmpresa');
            $table->string('companiaBrindoOportunidades');
            $table->string('nivelSatisfaccion_CapacitacionEntrenamiento');
            $table->string('nivelSatisfaccion_CriteriosEvaluacionDesempeno');
            $table->string('nivelSatisfaccion_ComunicacionDecisionesInvolucraran');
            $table->string('nivelSatisfaccion_BeneficiosAdicionales');
            $table->string('nivelSatisfaccion_JefeDirecto');
            $table->string('nivelSatisfaccion_Companeros');
            $table->string('nivelSatisfaccion_PlanesFormacion');
            $table->string('calificacionClimaEmpresa_OportunidadesFormacionAscenso');
            $table->string('calificacionClimaEmpresa_ReconocimientoDesempenoIndividual');
            $table->string('calificacionClimaEmpresa_ComunicacionNivelesInstitucion');
            $table->string('calificacionClimaEmpresa_Horarios');
            $table->string('calificacionClimaEmpresa_Salario');
            $table->string('MejoraFallasClimaLaboral');
            $table->string('ProblemasFrecuentesLaborDiaria');
            $table->string('MayorGustoTrabajo');
            $table->string('ExigenciasGeneradasSolucionadas');
            $table->string('RepetirPasoEmpresa');
            $table->string('comentario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuesta_retiro__g_h_s');
    }
}

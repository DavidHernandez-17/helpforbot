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
            $table->mediumText('relacionasHumanasArea');
            $table->mediumText('opinionSobreEmpresa');
            $table->mediumText('companiaBrindoOportunidades');
            $table->mediumText('nivelSatisfaccion_CapacitacionEntrenamiento');
            $table->mediumText('nivelSatisfaccion_CriteriosEvaluacionDesempeno');
            $table->mediumText('nivelSatisfaccion_ComunicacionDecisionesInvolucraran');
            $table->mediumText('nivelSatisfaccion_BeneficiosAdicionales');
            $table->mediumText('nivelSatisfaccion_JefeDirecto');
            $table->mediumText('nivelSatisfaccion_Companeros');
            $table->mediumText('nivelSatisfaccion_PlanesFormacion');
            $table->mediumText('calificacionClimaEmpresa_OportunidadesFormacionAscenso');
            $table->mediumText('calificacionClimaEmpresa_ReconocimientoDesempenoIndividual');
            $table->mediumText('calificacionClimaEmpresa_ComunicacionNivelesInstitucion');
            $table->mediumText('calificacionClimaEmpresa_Horarios');
            $table->mediumText('calificacionClimaEmpresa_Salario');
            $table->mediumText('MejoraFallasClimaLaboral');
            $table->mediumText('ProblemasFrecuentesLaborDiaria');
            $table->mediumText('MayorGustoTrabajo');
            $table->mediumText('ExigenciasGeneradasSolucionadas');
            $table->mediumText('RepetirPasoEmpresa');
            $table->mediumText('comentario');
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

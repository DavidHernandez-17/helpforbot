<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilSociodemograficoGHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_sociodemografico__g_h_s', function (Blueprint $table) {
            $table->string('id');
            $table->string('cedula')->nullable();
            $table->string('centroCosto')->nullable();
            $table->string('cargo')->nullable();
            $table->string('ingreso')->nullable();
            $table->string('sexo')->nullable();
            $table->string('fechaNacimiento')->nullable();
            $table->string('direccionResidencia')->nullable();
            $table->string('estratoSocioeconomico')->nullable();
            $table->string('categoriaVivienda')->nullable();
            $table->string('telefonoFijo')->nullable();
            $table->string('celularPersonal')->nullable();
            $table->string('nombrePariente')->nullable();
            $table->string('telefonoPariente')->nullable();
            $table->string('nombreFamiliarEmergencia')->nullable();
            $table->string('parentezco')->nullable();
            $table->string('telefonoCelularFamiliarEmergencia')->nullable();
            $table->string('estadoCivil')->nullable();
            $table->string('nombreConyugue')->nullable();
            $table->string('telefonoConyugue')->nullable();
            $table->string('tienesHijos')->nullable();
            $table->string('CuantosHijos')->nullable();
            $table->string('nombrePrimerHijo')->nullable();
            $table->string('fechaNacimientoPrimerHijo')->nullable();
            $table->string('nombreSegundoHijo')->nullable();
            $table->string('fechaNacimientoSegundoHijo')->nullable();
            $table->string('nombreTercerHijo')->nullable();
            $table->string('fechaNacimientoTercerHijo')->nullable();
            $table->string('nombreCuartoHijo')->nullable();
            $table->string('fechaNacimientoCuartoHijo')->nullable();
            $table->string('UltimoNivelAcademicoAlcanzado')->nullable();
            $table->string('nombreProfesion')->nullable();
            $table->string('pasionFelicidad')->nullable();
            $table->string('fraseCelebreIdentificacion')->nullable();
            $table->string('comidaFavorita')->nullable();
            $table->string('colorFavorito')->nullable();
            $table->string('tipoNombrePeliculaFavorita')->nullable();
            $table->string('libroFavorito')->nullable();
            $table->string('musicaFavorita')->nullable();
            $table->string('pasatiempoFavorito')->nullable();
            $table->string('queGustariaRegalo')->nullable();
            $table->string('molestiasSalud_6meses')->nullable();
            $table->string('DiagnosticadoEnfermedadComun')->nullable();
            $table->string('fumarFrecuencia')->nullable();
            $table->string('consumeBebidasAlcoholicas')->nullable();
            $table->string('deportesFrecuencia')->nullable();
            $table->string('iluminacionPuestoTrabajoAdecuada')->nullable();
            $table->string('trabajoOportunidadesDesarrolloPersonal')->nullable();
            $table->string('trabajoOportunidadesDesarrolloPersonalBinario')->nullable();
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
        Schema::dropIfExists('perfil_sociodemografico__g_h_s');
    }
}

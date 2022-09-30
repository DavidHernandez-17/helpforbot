<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilSociodemografico_GH extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cedula',
        'centroCosto',
        'cargo',
        'ingreso',
        'sexo',
        'fechaNacimiento',
        'direccionResidencia',
        'estratoSocioeconomico',
        'categoriaVivienda',
        'telefonoFijo',
        'celularPersonal',
        'nombrePariente',
        'telefonoPariente',
        'nombreFamiliarEmergencia',
        'parentezco',
        'telefonoCelularFamiliarEmergencia',
        'estadoCivil',
        'nombreConyugue',
        'telefonoConyugue',
        'tienesHijos',
        'CuantosHijos',
        'nombrePrimerHijo',
        'fechaNacimientoPrimerHijo',
        'nombreSegundoHijo',
        'fechaNacimientoSegundoHijo',
        'nombreTercerHijo',
        'fechaNacimientoTercerHijo',
        'nombreCuartoHijo',
        'fechaNacimientoCuartoHijo',
        'UltimoNivelAcademicoAlcanzado',
        'nombreProfesion',
        'pasionFelicidad',
        'fraseCelebreIdentificacion',
        'comidaFavorita',
        'colorFavorito',
        'tipoNombrePeliculaFavorita',
        'libroFavorito',
        'musicaFavorita',
        'pasatiempoFavorito',
        'queGustariaRegalo',
        'molestiasSalud_6meses',
        'DiagnosticadoEnfermedadComun',
        'fumarFrecuencia',
        'consumeBebidasAlcoholicas',
        'deportesFrecuencia',
        'iluminacionPuestoTrabajoAdecuada',
        'trabajoOportunidadesDesarrolloPersonal',
        'trabajoOportunidadesDesarrolloPersonalBinario',
    ];
}

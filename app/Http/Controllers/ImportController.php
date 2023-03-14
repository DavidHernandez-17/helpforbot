<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Structures\desocupaciones\importDesocupacionesAA;
use App\Http\Controllers\Structures\desocupaciones\importSeguimientoAuxiliaresSdoSemestre2022;
use App\Http\Controllers\Structures\importCapacitaciones_GH;
use App\Http\Controllers\Structures\importCobroIncapacidades_GH;
use App\Http\Controllers\Structures\importConsolidadoF_novedades;
use App\Http\Controllers\Structures\ImportEncuestaRetiro_GH;
use App\Http\Controllers\Structures\importEstadoEmpleados_GH;
use App\Http\Controllers\Structures\importGarantiasLimitadas_Admon;
use App\Http\Controllers\Structures\importGarantiasLimitadas_bitacora_Admon;
use App\Http\Controllers\Structures\ImportNegociosCerrados_Centro;
use App\Http\Controllers\Structures\importPerfilSociodemografico;
use App\Http\Controllers\Structures\importProvisionPersonal_GH;
use App\Http\Controllers\Structures\importSeleccion_GH;
use App\Http\Controllers\Structures\importSendinblue;
use App\Models\Desocupaciones\DesocupacionesAA;
use App\Models\MasterTable;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index()
    {
        return view('ImportData/index');
    }


    public function importData(Request $request)
    {
        $nameTable = $request->nameTable;

        //Valido el nombre de la tabla para realizar la asignación de estructura de datos para la importación.
        // switch($nameTable)
        // {
        //     case 'Sendinblue':
        //         $import = new importSendinblue();
        //         $import->importSendinblue($request);
        //         return response('Importación en Sendinblue', 200);
        //         break;
        //     case 'EstadoEmpleados_GH':
        //         $import = new importEstadoEmpleados_GH();
        //         $import->EstadoEmpleados_GH($request);
        //         return response('Importación en EstadoEmpleados_GH', 200);
        //         break;
        //     case 'CobroIncapacidades_GH':
        //         $import = new importCobroIncapacidades_GH();
        //         $import->CobroIncapacidades_GH($request);
        //         return response('Importación en CobroIncapacidades_GH', 200);
        //         break;
        //     case 'GarantiasLimitadasAseguradoras':
        //         $import = new importGarantiasLimitadas_Admon();
        //         $import->GarantiasLimitadas_Admon($request);
        //         return response('Importación en GarantiasLimitadas_Admon', 200);
        //         break;
        //     case 'GarantiasLimitadasBitacora':
        //         $import = new importGarantiasLimitadas_bitacora_Admon();
        //         $import->GarantiasLimitadas_bitacora($request);
        //         return response('Importación en GarantiasLimitadasBitacora', 200);
        //         break;
        //     case 'Capacitaciones_GH':
        //         $import = new importCapacitaciones_GH();
        //         $import->Capacitaciones_GH($request);
        //         return response('Importación en Capacitaciones_GH', 200);
        //         break;
        //     case 'EncuestaRetiro_GH':
        //         $import = new ImportEncuestaRetiro_GH();
        //         $import->EncuestaRetiro_GH($request);
        //         return response('Importación en EncuestaRetiro_GH', 200);
        //         break;
        //     case 'ProvisionPersonal_GH':
        //         $import = new importProvisionPersonal_GH();
        //         $import->ProvisionPersonal_GH($request);
        //         return response('Importación en ProvisionPersonal_GH', 200);
        //         break;
        //     case 'Seleccion_GH':
        //         $import = new importSeleccion_GH();
        //         $import->Seleccion_GH($request);
        //         return response('Importación en Seleccion_GH', 200);
        //         break;
        //     case 'PerfilSociodemografico_GH':
        //         $import = new importPerfilSociodemografico();
        //         $import->PerfilSociodemografico_GH($request);
        //         return response('Importación en PerfilSociodemografico_GH', 200);
        //         break;
        //     case 'ConsolidadF_novedades':
        //         $import = new importConsolidadoF_novedades;
        //         $import->ConsolidadoF($request);
        //         return response('Importación en ConsolidadF_novedades', 200);
        //         break;
        //     case 'NegociosCerrados_Centro':
        //         $import = new ImportNegociosCerrados_Centro;
        //         $import->NegociosCerrados($request);
        //         return response('Importación en NegociosCerrados_Centro', 200);
        //         break;
        //     case 'SeguimientoAuxiliares_Desocupaciones':
        //         $import = new importSeguimientoAuxiliaresSdoSemestre2022;
        //         $import->SeguimientoAuxiliares($request);
        //         return response('Importación en SeguimientoAuxiliares_Desocupaciones', 200);
        //         break;
        //     case 'Desocupaciones_AA':
        //         $import = new importDesocupacionesAA();
        //         $import->Desocupaciones($request);
        //         return response('Importación en Desocupaciones_AA', 200);
        //         break;

        //     default: 
        //     return response('Importación no realizada', 400);
        // }

        //Código optimizado
        //Arreglo asociativo
        $importClass = [
            'Sendinblue' => importSendinblue::class,
            'EstadoEmpleados_GH' => importEstadoEmpleados_GH::class,
            'CobroIncapacidades_GH' => importCobroIncapacidades_GH::class,
            'GarantiasLimitadasAseguradoras' => importGarantiasLimitadas_Admon::class,
            'GarantiasLimitadasBitacora' => importGarantiasLimitadas_bitacora_Admon::class,
            'Capacitaciones_GH' => importCapacitaciones_GH::class,
            'EncuestaRetiro_GH' => ImportEncuestaRetiro_GH::class,
            'ProvisionPersonal_GH' => importProvisionPersonal_GH::class,
            'Seleccion_GH' => importSeleccion_GH::class,
            'PerfilSociodemografico_GH' => importPerfilSociodemografico::class,
            'ConsolidadF_novedades' => importConsolidadoF_novedades::class,
            'NegociosCerrados_Centro' => ImportNegociosCerrados_Centro::class,
            'SeguimientoAuxiliares_Desocupaciones' => importSeguimientoAuxiliaresSdoSemestre2022::class,
            'Desocupaciones_AA' => importDesocupacionesAA::class
        ];

         // Verificar si la clase correspondiente a la tabla existe en el arreglo
         if (!array_key_exists($nameTable, $importClass)) {
            return response('Importación no realizada', 400);
        }

        // Crear instancia de la clase correspondiente a la tabla y llamar al método de importación
        $import = new $importClass[$nameTable];
        
        $import->import($request);

        return response('Importación en ' . $nameTable, 200);
    
    }

}

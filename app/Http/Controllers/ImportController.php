<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Structures\importEstadoEmpleados_GH;
use App\Http\Controllers\Structures\importSendinblue;
use App\Models\MasterTable;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index()
    {
        return view('ImportData/index', [
            'Tablas' => MasterTable::all()
        ]);
    }


    public function importData(Request $request)
    {
        $nameTable = $request->nameTable;

        //Valido el nombre de la tabla para realizar la asignación de estructura de datos para la importación.
        switch($nameTable)
        {
            case 'Sendinblue':
                $import = new importSendinblue();
                $import->importSendinblue($request);
                return response('Importación en Sendinblue', 200);
                break;
            case 'EstadoEmpleados_GH':
                $import = new importEstadoEmpleados_GH();
                $import->EstadoEmpleados_GH($request);
                return response('Importación en EstadoEmpleados_GH', 200);
                break;
            case 'CobroIncapacidades_GH':
                $import = new importEstadoEmpleados_GH();
                $import->EstadoEmpleados_GH($request);
                return response('Importación en EstadoEmpleados_GH', 200);
                break;     
                
            default: 
            return response('Importación no realizada', 400);
        }
    
    }




    

}

<?php

namespace App\Http\Controllers;

use App\Imports\SendinblueImport;
use App\Models\EstadoEmpleados_GH;
use App\Models\MasterTable;
use App\Models\Sendinblue;
use Dotenv\Repository\RepositoryInterface;
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

        $import = new ImportController;

        //Valido el nombre de la tabla para realizar la asignación de estructura de datos para la importación.
        switch($nameTable)
        {
            case 'Sendinblue':
                $import->importSendinblue($request);
                return response('Importación en Sendinblue', 200);
                break;
            case 'EstadoEmpleados_GH':
                $import->EstadoEmpleados_GH($request);
                return response('Importación en EstadoEmpleados_GH', 200);
                break;
                               
                
            default: 
            return response('Importación no realizada', 400);
        }
    
    }

    public function importSendinblue($file)
    {
        if($file)    
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);
            $i = 0;

            foreach($lineas as $linea)
            {
                $cantidad_registros = count($lineas);

                $datos = explode(",", $linea);
                
                $st_text = $datos[0];
                $ts = $datos[1];
                $sub = $datos[2];
                $frm = $datos[3];
                $email = $datos[4];
                $tag = $datos[5];
                $mid = $datos[6];
                    
                $registro = new Sendinblue();
                $registro->st_text = $st_text;
                $registro->ts = $ts;
                $registro->sub = $sub;
                $registro->frm = $frm;
                $registro->email = $email;
                $registro->tag = $tag;
                $registro->mid = $mid;
                $registro->save();

            }

            return response('', 200);

        }

        return response('', 400);
    }

    public function EstadoEmpleados_GH($file)
    {
        if($file)    
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);

            foreach($lineas as $linea)
            {
                $cantidad_registros = count($lineas);

                $datos = explode(";", $linea);
                $cedula = $datos[0];
                $nombreEmpleado = $datos[1];
                $isActive = $datos[2];
                
                $cedulaDuplicate = EstadoEmpleados_GH::where('cedula', $cedula)->get();

                //Si no existe cédula, realiza inserción en BD
                if (sizeof($cedulaDuplicate) == 0) {
                    $registro = new EstadoEmpleados_GH();
                    $registro->cedula = $cedula;
                    $registro->nombreEmpleado = $nombreEmpleado;
                    $registro->isActive = $isActive;
                    $registro->save(); 
                }
                else
                {
                    //Recorro las cedulas existentes en la BD para luego buscar y actualizar.
                    foreach( $cedulaDuplicate as $cedula )
                    {
                        $id = $cedula->id;
                    }
                    
                    //Busco y actualizo campo isActive en BD 
                    $updateRegistro = EstadoEmpleados_GH::find($id);
                    $updateRegistro->isActive = $isActive;
                    $updateRegistro->save();
                }                    
                              
            }

            return response('', 200);

        }

        return response('', 400);
    }
    

}

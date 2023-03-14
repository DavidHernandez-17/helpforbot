<?php

namespace App\Http\Controllers\Structures;

use App\Http\Controllers\Controller;
use App\Models\Sendinblue;
use Illuminate\Http\Request;

class importSendinblue extends Controller
{
    public function import($file)
    {
        if($file)    
        {
            $archivotmp = $_FILES['importFile']['tmp_name'];
            $lineas = file($archivotmp);
            
            foreach($lineas as $linea)
            {
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
}

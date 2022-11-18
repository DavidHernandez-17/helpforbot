<?php

namespace App\Console\Commands;

use App\Models\bitacora_InmArrendadosActuales;
use App\Models\qInmArrendadosActuales;
use Illuminate\Console\Command;

class Bitacora_InmArrendados extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Bitacora:InmArrendadosActuales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Se encarga de registrar bitacora de todos los inmuebles arrendados por mes.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo('Inicia registro de bitacora inmuebles arrendados actuales'. "\n");

        //Zona horaria
        date_default_timezone_set("America/Bogota");

        //Fecha actual fecha y hora junta
        $todayDateTime = date("Y-m-d");

        //Contador
        $contador = 0;

        //Consulta todos los registros de inmuebles arrendados actuales en bd sql server
        $inmArrendadosActuales = qInmArrendadosActuales::all();

        
        foreach ($inmArrendadosActuales as $inmArrendadosActual) 
        {
            //Crea objeto para insertar datos en HFB
            $registerBitacora = new bitacora_InmArrendadosActuales();

            $registerBitacora->Inmueble = $inmArrendadosActual['Inmueble'];
            $registerBitacora->Direccion = $inmArrendadosActual['Direccion'];
            $registerBitacora->Amparo_Integral = $inmArrendadosActual['Amparo Integral'];
            $registerBitacora->Aseguradora = $inmArrendadosActual['Aseguradora'];
            $registerBitacora->Vr_Canon = $inmArrendadosActual['Vr. Canon'];
            $registerBitacora->Vr_Admon = $inmArrendadosActual['Vr. Admon.'];
            $registerBitacora->Fecha_Inicio = $inmArrendadosActual['Fec. Inicio'];
            $registerBitacora->Fecha_Fin = $inmArrendadosActual['Fec. Fin'];
            $registerBitacora->Destinacion = $inmArrendadosActual['Destinacion'];
            $registerBitacora->Ced_Arrend = $inmArrendadosActual['Ced. Arrend.'];
            $registerBitacora->Arrendatario = $inmArrendadosActual['Arrendatario'];
            $registerBitacora->Email_Arrend = $inmArrendadosActual['E-mail Arrend.'];
            $registerBitacora->Ced_Prop = $inmArrendadosActual['Ced. Prop.'];
            $registerBitacora->Propietario = $inmArrendadosActual['Propietario'];
            $registerBitacora->Ciudad = $inmArrendadosActual['Ciudad'];
            $registerBitacora->Email_Prop = $inmArrendadosActual['E-mail Prop.'];
            $registerBitacora->Porce_Comision = $inmArrendadosActual['% Comision'];
            $registerBitacora->TipoPago = $inmArrendadosActual['TipoPago'];
            $registerBitacora->created_at = $todayDateTime;
            $registerBitacora->updated_at = $todayDateTime;
            $registerBitacora->save();

            $contador += 1;

        }

        echo('Finaliza registro de bitacora inmuebles arrendados actuales'. "\n" . $contador);

        return Command::SUCCESS;
    }
}

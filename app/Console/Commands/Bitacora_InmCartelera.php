<?php

namespace App\Console\Commands;

use App\Models\Bitacora_inmueblesCartelera;
use App\Models\InmCartelera;
use Illuminate\Console\Command;


class Bitacora_InmCartelera extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Bitacora:InmCartelera';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Se encarga de registrar bitacora de todos los inmuebles en cartelera por mes.';
    

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

        echo('Inicia registro de bitacora inmuebles en cartelera'. "\n");

        //Zona horaria
        date_default_timezone_set("America/Bogota");

        //Fecha actual fecha y hora junta
        $todayDateTime = date("Y-m-d H:i:s");

        //Contador
        $contador = 0;

        $InmCartelera = InmCartelera::where('IsVisible', '1')->get();

        foreach ($InmCartelera as $inmCarteleraSQL) 
        {
            //Crea objeto para insertar datos en HFB
            $registerBitacora = new Bitacora_inmueblesCartelera();

            $registerBitacora->PropertyId = $inmCarteleraSQL['PropertyId'];
            $registerBitacora->Title = $inmCarteleraSQL['Title'];
            $registerBitacora->IsForRent = $inmCarteleraSQL['IsForRent'];
            $registerBitacora->Price = $inmCarteleraSQL['Price'];
            $registerBitacora->BathRooms = $inmCarteleraSQL['BathRooms'];
            $registerBitacora->Rooms = $inmCarteleraSQL['Rooms'];
            $registerBitacora->CoveredArea = $inmCarteleraSQL['CoveredArea'];
            $registerBitacora->PlotArea = $inmCarteleraSQL['PlotArea'];
            $registerBitacora->Parking = $inmCarteleraSQL['Parking'];
            $registerBitacora->Latitude = $inmCarteleraSQL['Latitude'];
            $registerBitacora->Longitude = $inmCarteleraSQL['Longitude'];
            $registerBitacora->Estrate = $inmCarteleraSQL['Estrate'];
            $registerBitacora->PublicationDate = $inmCarteleraSQL['PublicationDate'];
            $registerBitacora->UpdateDate = $inmCarteleraSQL['UpdateDate'];
            $registerBitacora->PropertyType = $inmCarteleraSQL['PropertyType'];
            $registerBitacora->Zone = $inmCarteleraSQL['Zone'];
            $registerBitacora->City = $inmCarteleraSQL['City'];
            $registerBitacora->Neighborhood = $inmCarteleraSQL['Neighborhood'];
            $registerBitacora->created_at = $todayDateTime;
            $registerBitacora->updated_at = $todayDateTime;
            $registerBitacora->save();

            $contador += 1;

        }

        echo('Finaliza registro de bitacora inmuebles cartelera'. "\n" . $contador);

        return Command::SUCCESS;
    }
}

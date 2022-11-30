<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('Bitacora:InmCartelera')->timezone('America/Bogota')->monthlyOn(1, '3:00');
        // $schedule->command('Bitacora:InmArrendadosActuales')->timezone('America/Bogota')->monthlyOn(1, '3:00');      

        $schedule->command('Bitacora:InmCartelera')->everyMinute();
        $schedule->command('Bitacora:InmArrendadosActuales')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

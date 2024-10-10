<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule -> command('make:oder' , ['user_id' => 1, 'amount' => 20])-> cron('15 3 30 5 2'); //esto ejecutara la instruccion a las 3 y cuarto el 30 de mayo y el ultimo numero es el dia de la semana el martes si pongo un asterisco seran todos
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

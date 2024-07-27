<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands=[
        Commands\RemainderMail::class,
    ];
    /**
     * Define the application's command schedule.
     */


    protected function schedule(Schedule $schedule)
    {
        $schedule->command('installment:send-reminder')->daily();
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

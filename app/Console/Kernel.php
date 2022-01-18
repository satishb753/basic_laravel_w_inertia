<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use Spatie\SimpleExcel\SimpleExcelWriter;

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
        $schedule->command('inspire')->everyMinute();

        $schedule->call(function () {
            $path = public_path().'/excel';
            \File::isDirectory($path) or \File::makeDirectory($path, 0777, true, true);

            $pathToCsv = public_path('excel/'.time().'.csv');

            $writer = SimpleExcelWriter::create($pathToCsv)
                        ->addRow([
                            'name' => 'Artisan',
                        ]);
        })->everyMinute();
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

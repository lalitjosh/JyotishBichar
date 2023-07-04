<?php
namespace App\Console;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\schedules;
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
        // $schedule->command('inspire')->hourly();
         $schedule->call(function () {
                  $schedule = schedules::find(1);
                 // $user = User::find(Auth::id());
                 // $user->boolean_variable=0;
                  $schedule->endTime = "00:00:00";
                  $schedule->save();


                 })->daily();
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

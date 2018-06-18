<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Reservation;
use DateInterval;
use Carbon\Carbon;

class DeleteReservationsNotUsed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:reservationsNotUsed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all the reservations that are not used within the 10 minutes';

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
     * @return mixed
     */
    public function handle()
    {
        $reservations = Reservation::where('device_started_on',null)->where('status','Reservation made')->get();
        foreach($reservations as $reservation){
            $created_at = $reservation->created_at;

            if(Carbon::now()> $created_at->add(new DateInterval('PT10M'))){
                $reservation->device->task_status = 'unoccupied';
                $reservation->device->save();
                $reservation->delete();
            }
        }
    }
}

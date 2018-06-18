<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReservationFormRequest;
use App\Location;
use App\Device;
use App\Reservation;
use Auth;
use DateInterval;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::where('status','!=','finished')->get();
        return view('front.home.index',[
            'reservations' => $reservations
        ]);
    }

    public function open(Reservation $reservation){
        if($reservation && $reservation->status != 'finished'){
            return view('front.home.reservation.open',[
                'reservation' => $reservation
            ]);
        }
        return redirect()->route('home');
        
    }
    public function createStep1Location(){
        return view('front.home.reservation.create_steps.step1_location');
    }
    public function createStep2Type(Request $request){
        $location = Location::find($request->location);
        return view('front.home.reservation.create_steps.step2_type',[
            'location' => $location
        ]);
    }
    public function createStep3Device(Request $request){
        $type = $request->type;
        $location = Location::find($request->location);
        $devices = $location->devices->where('type',$type)->where('type',$type)->where('activation_status','!=','non-active')->sortBy('code_name');
        return view('front.home.reservation.create_steps.step3_device',[
            'devices' => $devices,
            'location' => $location
        ]);
    }
    public function createStep4Confirm(){
        return view('front.home.reservation.create_steps.step4_confirm');
    }

    public function store(CreateReservationFormRequest $request){
        //dd($request->device_id);
        $device = Device::find($request->device_id);
        if($device->type == 'wash'){
            $price = 6;
        }else{
            $price = 0.8;
        }

        $reservation = Reservation::create([
            'status' => 'Reservation made',
            'price' => $price,
            'device_id' => $request->device_id,
            'user_id' =>Auth::id()
        ]);

        $device = Device::find($request->device_id);
        $device->task_status = 'reserved';
        $device->save();
        
        if($request->reserve_dryer){
            Reservation::create([
                'status' => 'Reservation made for after wash',
                'price' => 0.8,
                'user_id' =>Auth::id(),
                'reservation_before_dry_id' => $reservation->id,
            ]);
        }
        
        return redirect()->route('home');
    }

    public function cancel(Reservation $reservation){
        if($reservation && $reservation->user_id == Auth::user() && $reservation->device != 'running'){
            $reservation->device->task_status = 'unoccupied';
            $reservation->device->save();
            $reservation->delete();
        }
        return redirect()->route('home');
    }

    public function clearUnusedReservations(){
        $reservations = Reservation::where('device_started_on',null)->where('status','Reservation made')->get();
        foreach($reservations as $reservation){
            $created_at = $reservation->created_at;

            if(Carbon::now()> $created_at->add(new DateInterval('PT10M'))){
                $reservation->device->task_status = 'unoccupied';
                $reservation->device->save();
                $reservation->delete();
            }
        }
        return 'Unused reservations cleared';
    }

    public function finishReservations(){
        $reservations = Reservation::where('status','active')->where('device_ended_on','!=',null)->get();
        foreach($reservations as $reservation){
            $end_datetime = $reservation->device_ended_on;

            if(Carbon::now() > $end_datetime){
                $reservation->device->task_status = 'finished';
                $reservation->device->save();
            }
        }
        return 'Reservations finished';
    }
}

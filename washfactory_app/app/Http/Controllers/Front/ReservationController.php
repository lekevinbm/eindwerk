<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReservationFormRequest;
use App\Location;
use App\Device;
use App\Reservation;
use Auth;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::all();
        return view('front.home.index',[
            'reservations' => $reservations
        ]);
    }

    public function open(Request $request){
        return view('front.home.reservation.open',[
            'link' => 'countdown'
        ]);
    }

    public function opentest(Request $request){
        $link = "";
        if($request->link)
        {
            $link= $request->link;
        }
        return view('front.home.reservation.open',[
            'link' => $link
        ]);
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

        Reservation::create([
            'status' => 'Reservation made',
            'price' => $price,
            'device_id' => $request->device_id,
            'user_id' =>Auth::id()
        ]);
        
        if($request->reserve_dryer){
            Reservation::create([
                'status' => 'Reservation made for after wash',
                'price' => 0.8,
                'user_id' =>Auth::id(),
                'reservation_before_dry_id' => $request->device_id,
            ]);
        }
        
        return redirect()->route('home');
    }
}

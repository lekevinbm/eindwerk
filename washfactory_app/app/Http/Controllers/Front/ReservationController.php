<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location;

class ReservationController extends Controller
{
    public function index(){
        return view('front.home.index');
    }

    public function open(Request $request){
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
}

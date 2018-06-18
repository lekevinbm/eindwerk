<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Device;
use Auth;
use Carbon\Carbon;
use DateInterval;

class DeviceController extends Controller
{
    public function getDevice(Request $request){
        $device = Device::where('id',$request->device)->with('location')->get()->first();
        return $device;
    }

    public function open(Device $device){
        if($device->task_status == 'reserved' && $device->current_reservation->first()->user_id == Auth::id() && $device->current_reservation->first()->status == 'Reservation made'){
            $device->task_status = 'ready to run';
            $device->save();
            $device->current_reservation->first()->status = 'active';
            $device->current_reservation->first()->save();
        }
        return back();
    }

    public function run(Device $device){
        //dd(Carbon::now());
        if($device->task_status == 'ready to run' && $device->current_reservation->first()->user_id == Auth::id() && $device->current_reservation->first()->status == 'active'){
            $device->task_status = 'running';
            $device->save();
            $device->current_reservation->first()->device_started_on = Carbon::now();
            $device->current_reservation->first()->device_ended_on = Carbon::now()->add(new DateInterval('PT25M'));
            $device->current_reservation->first()->save();
            Auth::user()->credits = Auth::user()->credits - $device->current_reservation->first()->price;
            Auth::user()->save();
        }
        return back();
    }
    public function end(Device $device){
        //dd(Carbon::now());
        if($device->task_status == 'finished' && $device->current_reservation->first()->user_id == Auth::id() && $device->current_reservation->first()->status == 'active'){
            $device->task_status = 'unoccupied';
            $device->save();
            $device->current_reservation->first()->status = 'finished';
            $device->current_reservation->first()->save();
            Auth::user()->save();
        }
        return back();
    }
}

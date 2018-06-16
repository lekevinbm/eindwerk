<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Device;

class DeviceController extends Controller
{
    public function getDevice(Request $request){
        $device = Device::where('id',$request->device)->with('location')->get()->first();
        return $device;
    }
}

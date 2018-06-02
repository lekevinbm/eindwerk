<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function openReserved(){
        return view('front.home.devices.open_reserved_device');
    }
}

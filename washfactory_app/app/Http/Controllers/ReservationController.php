<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function open(){
        return view('front.home.reservation.open');
    }
    public function createStep1Location(){
        return view('front.home.reservation.create_steps.step1_location');
    }
    public function createStep2Type(){
        return view('front.home.reservation.create_steps.step2_type');
    }
    public function createStep3Device(){
        return view('front.home.reservation.create_steps.step3_device');
    }
    public function createStep4Confirm(){
        return view('front.home.reservation.create_steps.step4_confirm');
    }
}

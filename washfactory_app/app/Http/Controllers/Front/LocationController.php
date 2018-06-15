<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location;

class LocationController extends Controller
{
    public function getAll(){
        $locations = Location::all();
        return $locations;
    }
}

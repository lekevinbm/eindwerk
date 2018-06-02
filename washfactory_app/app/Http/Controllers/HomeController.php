<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('front.home.index');
    }

    public function faq(){
        return view('front.home.other.faq');
    }

    public function contact(){
        return view('front.home.other.contact');
    }

    public function problem(){
        return view('front.home.other.problem');
    }
    
}

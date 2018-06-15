<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReportFormRequest;

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

    public function faq(){
        return view('front.home.other.faq');
    }

    public function contact(){
        return view('front.home.other.contact');
    }

    public function problem(){
        return view('front.home.other.problem');
    }

    public function reportProblem(CreateReportFormRequest $request){
        return view('front.home.other.problem');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreditFormRequest;
use App\Http\Requests\UpdateUserFormRequest;
use App\Http\Requests\UpdatePasswordFormRequest;
use Illuminate\Support\Facades\Hash;
use App\Credit_charge;
use Auth;

class UserController extends Controller
{
    public function openCharge(){
        return view('front.home.user.credit_charge');
    }

    public function charge(CreditFormRequest $request){
        Credit_charge::create([
            'amount' => $request->amount,
            'method' => $request->method,
            'user_id' => Auth::id()
        ]);

        $user = Auth::user();
        $user->credits += $request->amount;
        $user->save();

        return redirect()->route('home');
    }

    public function chargeHistory(){

        $credit_charges = Auth::user()->credit_charges;
        return view('front.home.user.credit_charge_history',[
            'credit_charges' => $credit_charges,
        ]);
    }

    public function edit(){
        return view('front.home.user.edit');
    }

    public function update(UpdateUserFormRequest $request){
        $user = Auth::user();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;    
        $user->date_of_birth = $request->date_of_birth;
        $user->street_name = $request->street_name;
        $user->street_number = $request->street_number;
        $user->postcode = $request->postcode;
        $user->city = $request->city;
        $user->save();
        
        return view('front.home.user.edit');
    }

    public function updatePassword(UpdatePasswordFormRequest $request){
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
        
        return view('front.home.user.edit');
    }
}

@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="saldo-section">
            <div id="menu-btn"><i class="fas fa-bars fa-lg"></i></div>
            
            <span id="saldo">&euro; {{number_format(Auth::user()->credits,2,',',' ')}}</span><br>
            <a href="#">Opladen <i class="fas fa-angle-right"></i></a>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div></div>
                </div>
            </div>
        </div>
        
    </div>
@endsection

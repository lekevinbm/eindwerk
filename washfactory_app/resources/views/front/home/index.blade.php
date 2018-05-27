@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="saldo-section">
            <div id="menu-btn" data-toggle="modal" data-target="#menu_modal"><i class="fas fa-bars fa-lg"></i></div>            
            <span id="saldo">&euro; {{number_format(Auth::user()->credits,2,',',' ')}}</span><br>
            <a href="#">Opladen <i class="fas fa-angle-right"></i></a>
        </div>
        <div id="reserved-devices">
            <a class="row reserved-device" href="{{ route('device.open_reserved') }}">
                <div class="wash-reserved-device-number">15</div>
                <div class="reserved-device-information">
                    <span class="reserved-device-status done">Gereed</span><br>
                    <span class="reserved-device-extra-information">Ledig het toestel</span>
                </div>
            </a>
            <a class="row reserved-device" href="{{ route('device.open_reserved') }}">
                <div class="wash-reserved-device-number">14</div>
                <div class="reserved-device-information">
                    <span class="reserved-device-status in-use">5:30</span><br>
                    <span class="reserved-device-extra-information">min resterend</span>
                </div>
            </a>
            <a class="row reserved-device" href="{{ route('device.open_reserved') }}">
                <div class="dry-reserved-device-number">12</div>
                <div class="reserved-device-information">
                    <span class="reserved-device-status">Na wasbeurt 15</span><br>
                    <span class="reserved-device-extra-information">Gereserveerd</span>
                </div>
            </a>
            <a class="row reserved-device" href="{{ route('device.open_reserved') }}">
                <div class="dry-reserved-device-number">6</div>
                <div class="reserved-device-information">
                    <span class="reserved-device-status">Vrij binnen 4:27</span><br>
                    <span class="reserved-device-extra-information">Gereserveerd</span>
                </div>
            </a>
        </div>
        
        <div id="reserve-device-btn">
            <i class="fas fa-plus fa-2x"></i>
        </div>
        
        
    </div>
@endsection

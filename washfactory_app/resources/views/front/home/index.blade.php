@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="saldo-section">
            <span id="saldo">&euro; {{number_format(Auth::user()->credits,2,',',' ')}}</span><br>
            <a href="{{route('user.charge.open')}}">Opladen <i class="fas fa-angle-right"></i></a>
        </div>
        <div id="reserved-devices">
            @foreach($reservations as $key => $reservation)
                <a class="row reserved-device" href="{{ route('reservation.open',$reservation) }}">
                    <div class="wash-reserved-device-number">{{explode('-',$reservation->device->code_name)[2]}}</div>
                    <div class="reserved-device-information">
                        <span class="reserved-device-status">
                            @if($reservation->status == 'Reservation made')
                                Gereserveerd
                            @endif
                        </span><br>
                        <span class="reserved-device-extra-information">
                            @if($reservation->status == 'Reservation made')
                                Open het toestel binnen <span class="times-left">10</span> min
                            @endif
                        </span>
                    </div>
                </a>
            @endforeach
            <a class="row reserved-device" href="{{ route('reservation.opentest','link=countdown') }}">
                <div class="wash-reserved-device-number">15</div>
                <div class="reserved-device-information">
                    <span class="reserved-device-status done">Gereed</span><br>
                    <span class="reserved-device-extra-information">Ledig het toestel</span>
                </div>
            </a>
            <a class="row reserved-device" href="{{ route('reservation.opentest','link=ready') }}">
                <div class="wash-reserved-device-number">14</div>
                <div class="reserved-device-information">
                    <span class="reserved-device-status in-use">5:30</span><br>
                    <span class="reserved-device-extra-information">min resterend</span>
                </div>
            </a>
            <a class="row reserved-device" href="{{ route('reservation.opentest') }}">
                <div class="dry-reserved-device-number">12</div>
                <div class="reserved-device-information">
                    <span class="reserved-device-status">Na wasbeurt 15</span><br>
                    <span class="reserved-device-extra-information">Gereserveerd</span>
                </div>
            </a>
            <a class="row reserved-device" href="{{ route('reservation.opentest') }}">
                <div class="dry-reserved-device-number">6</div>
                <div class="reserved-device-information">
                    <span class="reserved-device-status">Vrij binnen 4:27</span><br>
                    <span class="reserved-device-extra-information">Gereserveerd</span>
                </div>
            </a>
        </div>
        
        <div id="reserve-device-btn">
            <a href="{{ route('reservation.create.step1_location') }}">
                <i class="fas fa-plus fa-2x"></i>
            </a>            
        </div>       
    </div>
@endsection

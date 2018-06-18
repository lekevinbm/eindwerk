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
                    @if($reservation->device->type == "wash")
                        <div class="wash-reserved-device-number">{{explode('-',$reservation->device->code_name)[2]}}</div>
                    @else
                        <div class="dry-reserved-device-number">{{explode('-',$reservation->device->code_name)[2]}}</div>
                    @endif
                    <div class="reserved-device-information">
                        <span class="reserved-device-status">
                            @if($reservation->status == 'Reservation made')
                                Gereserveerd
                            @elseif($reservation->status == 'active' && $reservation->device->task_status == 'ready to run')
                                Start het toestel
                            @elseif($reservation->status == 'active' && $reservation->device->task_status == 'running')
                                <span class="times-left">...</span>
                            @elseif($reservation->status == 'active' && $reservation->device->task_status == 'finished')
                                Gereed
                            @endif
                            
                        </span><br>
                        <span class="reserved-device-extra-information">
                            @if($reservation->status == 'Reservation made')
                                Open het toestel binnen <span class="times-left">..</span> min
                            @elseif($reservation->status == 'active' && $reservation->device->task_status == 'running')
                                min resterend
                            @elseif($reservation->status == 'active' && $reservation->device->task_status == 'finished')
                                Ledig het toestel
                            @endif
                        </span>
                        @if($reservation->status == 'Reservation made')
                            <input class="reserved-device-status-input" type="hidden" value="reservation made">
                            <input class="reservation-creation-input" type="hidden" value="{{$reservation->created_at}}">
                        @elseif($reservation->status == 'active' && $reservation->device->task_status == 'running')
                            <input class="reserved-device-status-input" type="hidden" value="running">
                            <input class="reservation-end-input" type="hidden" value="{{$reservation->device_ended_on}}">
                        @endif                        
                    </div>
                </a>
            @endforeach
        </div>
        
        <div id="reserve-device-btn">
            <a href="{{ route('reservation.create.step1_location') }}">
                <i class="fas fa-plus fa-2x"></i>
            </a>            
        </div>       
    </div>
@endsection

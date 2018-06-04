@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="slide-page-1">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('reservation.create.step2_type')}}"><i class="fas fa-angle-left"></i></a>            
                <span id="title">Kies uw toestel</span>
            </div>
            <div id="page-content">
                <div class="row app-block white-block">
                    <div class="device-square unoccupied">
                        2
                        <div class="time-box">vrij</div>
                    </div>
                    Ellermanstraat 20 - Kelder 1<br>
                    2060 Antwerpen
                </div>

            </div>
        </div>
    </div>
@endsection

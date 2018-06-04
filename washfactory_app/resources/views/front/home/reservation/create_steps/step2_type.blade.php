@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="top-page-section">
            <a id="back-btn" href="{{route('reservation.create.step1_location')}}"><i class="fas fa-angle-left"></i></a>            
            <span id="title">Kies uw soort toestel</span>
        </div>
        <div id="page-content">
            <a href="{{route('reservation.create.step3_device')}}">
                <div class="row app-block app-block-2 light-blue-block wasmachine-background-img">
                    <div class="app-block-icon"></div>
                    <div class="app-block-text big-text">
                        Wasmachine<br>
                        <span class="device-info">3 vrij</span><br>
                        <span class="device-info">2 bezet</span>
                    </div>
                    <div class="app-block-right big-icon-block"><i class="fas fa-angle-right"></i></div>
                </div>
            </a>
            <a href="{{route('reservation.create.step3_device')}}">
                <div class="row app-block app-block-2 yellow-block dryer-background-img">
                    <div class="app-block-icon"></div>
                    <div class="app-block-text big-text">
                        Wasdroger<br>
                        <span class="device-info">1 vrij</span><br>
                        <span class="device-info">3 bezet</span>
                    </div>
                    <div class="app-block-right big-icon-block"><i class="fas fa-angle-right"></i></div>
                </div>
            </a>     
        </div>
    </div>
@endsection

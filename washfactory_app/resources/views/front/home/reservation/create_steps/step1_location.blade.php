@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="slide-page-1">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('home')}}"><i class="fas fa-angle-left"></i></a>            
                <span id="title">Kies uw wasruimte</span>
            </div>
            <div id="page-content">
                <div id="laundry-room-map" class="row app-block app-block-3 white-block">
                </div>
                <div class="row app-block app-block-5 white-block non-active hide-large-map-block">
                    <span class="app-block-icon"><i class="fas fa-angle-left"></i></span>
                    <span class="app-block-text normal-text">Terug naar lijst</span>
                </div>
                <div id="choose-device-type-page-activator" class="row app-text-row page-slide-activator">
                    <div class="app-text-row-large"><span class="big-text">Ellermanstraat 20 - kelder 1</span><br><span class="small-text">2060 Antwerpen</span></div>
                    <div class="app-text-row-large-value">2km</div>
                    <div class="app-text-row-large-end"><i class="fas fa-angle-right"></i></div>
                </div>
                <div id="choose-device-type-page-activator" class="row app-text-row page-slide-activator">
                    <div class="app-text-row-large"><span class="big-text">Tuyaertstraat 20</span><br><span class="small-text">2060 Antwerpen</span></div>
                    <div class="app-text-row-large-value">5km</div>
                    <div class="app-text-row-large-end"><i class="fas fa-angle-right"></i></div>
                </div>

            </div>
        </div>
        <div id="choose-device-type-page" class="slide-page">
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
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div id="home-page">
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
            <a href="{{route('reservation.create.step2_type')}}">
                <div id="choose-device-type-page-activator" class="row app-text-row page-slide-activator">
                    <div class="app-text-row-large"><span class="big-text">Ellermanstraat 20 - kelder 1</span><br><span class="small-text">2060 Antwerpen</span></div>
                    <div class="app-text-row-large-value">2km</div>
                    <div class="app-text-row-large-end"><i class="fas fa-angle-right"></i></div>
                </div>
            </a>
            <a href="{{route('reservation.create.step2_type')}}">
                <div id="choose-device-type-page-activator" class="row app-text-row page-slide-activator">
                    <div class="app-text-row-large"><span class="big-text">Tuyaertstraat 20</span><br><span class="small-text">2060 Antwerpen</span></div>
                    <div class="app-text-row-large-value">5km</div>
                    <div class="app-text-row-large-end"><i class="fas fa-angle-right"></i></div>
                </div>
            </a>
        </div>        
    </div>
@endsection

@section('scripts')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJiNEPVy4xA5KcdWT-XvXjqjXoIL22m0Y" async defer></script>
@endsection

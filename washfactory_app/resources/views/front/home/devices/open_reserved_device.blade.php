@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="top-page-section">
            <a id="back-btn" href="{{route('home')}}"><i class="fas fa-angle-left"></i></a>            
            <span id="title">Dryer details</span>
        </div>
        <div id="page-content">
            <div id="top-open-reserved-dryer">
                <div class="top-reserved-detail">
                    <span class="time-left">4:27</span><br>
                    Droogkast nr. 27<br>
                    Ellermanstraat 17                
                </div>            
            </div>
            <div id="open-reserved-device-details">
                <div class="row app-text-row">
                    <div class="app-text-row-title">Graden</div>
                    <div class="app-text-row-value">
                        30°
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

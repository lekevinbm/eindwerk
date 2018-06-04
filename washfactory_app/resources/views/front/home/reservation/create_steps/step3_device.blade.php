@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="slide-page-1">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('home')}}"><i class="fas fa-angle-left"></i></a>            
                <span id="title">Kies uw toestel</span>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="device-square unoccupied">
                        2
                        <div class="time-box">vrij</div>
                    </div>
                    <div class="device-square unoccupied">
                        4
                        <div class="time-box">vrij</div>
                    </div>
                    <div class="device-square occupied">
                        1
                        <div class="time-box"><i class="far fa-clock"></i> 7:34</div>
                    </div>
                    <div class="device-square occupied">
                        3
                        <div class="time-box"><i class="far fa-clock"></i> 11:28</div>
                    </div>
                    <div class="device-square occupied">
                        6
                        <div class="time-box"><i class="far fa-clock"></i> 22:27</div>
                    </div>
                    <div class="device-square out-of-service">
                        5
                        <div class="time-box">Buiten gebruik</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="slide-page-1">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('reservation.create.step2_type')}}"><i class="fas fa-angle-left"></i></a>            
                <span id="title">Kies uw toestel</span>
            </div>
            <div id="page-content">
                <div class="row">                    
                    <div class="device-square unoccupied" data-toggle="modal" data-target="#confirm_modal">
                        <div class="time-box">vrij</div>
                        2                        
                    </div>                
                
                    <div class="device-square unoccupied" data-toggle="modal" data-target="#confirm_modal">
                    <div class="time-box">vrij</div>
                        4                        
                    </div>                
                
                    <div class="device-square occupied" data-toggle="modal" data-target="#confirm_modal">
                        <div class="time-box"><i class="far fa-clock"></i> 7:34</div>
                        1                        
                    </div>                
                
                    <div class="device-square occupied" data-toggle="modal" data-target="#confirm_modal">
                        <div class="time-box"><i class="far fa-clock"></i> 11:28</div>
                        3                        
                    </div>
                
                    <div class="device-square occupied" data-toggle="modal" data-target="#confirm_modal">
                        <div class="time-box"><i class="far fa-clock"></i> 22:27</div>
                        6                        
                    </div>                
                
                    <div class="device-square out-of-service">
                        <div class="time-box">Buiten gebruik</div>
                        5                        
                    </div>                    
                </div>

            </div>
        </div>
    </div>
    @include('front.home.reservation.modals.confirm')
@endsection
@section('scripts')
<script>/*
$('.device-square.unoccupied').click(function(){
    $('#confirm_modal').modal('show');
})*/

<script>
@endsection

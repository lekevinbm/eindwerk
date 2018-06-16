@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="slide-page-1">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('reservation.create.step2_type',['location='.$location->id])}}"><i class="fas fa-angle-left"></i></a>            
                <span id="title">Kies uw toestel</span>
            </div>
            <div id="page-content">
                <div class="row">
                    @foreach($devices->where('task_status','unoccupied')->where('activation_status','active') as $device)
                        <div id="device-{{$device->id}}" class="device-square unoccupied" data-toggle="modal" data-target="#confirm_modal">
                            <div class="time-box">vrij</div>
                            {{explode('-',$device->code_name)[2]}}                    
                        </div>
                    @endforeach          

                    @foreach($devices->where('task_status','occupied')->where('activation_status','active') as $device)
                        <div id="device-{{$device->id}}" class="device-square occupied" data-toggle="modal" data-target="#confirm_modal">
                            <div class="time-box"><i class="far fa-clock"></i> 7:34</div>
                            {{explode('-',$device->code_name)[2]}}                        
                        </div>
                    @endforeach            
                
                    @foreach($devices->where('activation_status','out-of-service') as $device)
                        <div class="device-square out-of-service">
                            <div class="time-box">Buiten gebruik</div>
                            {{explode('-',$device->code_name)[2]}}
                        </div>
                    @endforeach                  
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

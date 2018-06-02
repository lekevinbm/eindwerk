@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="top-page-section">
            <a id="back-btn" href="{{route('home')}}"><i class="fas fa-angle-left"></i></a>            
            <span id="title">Oplaadgeschiedenis</span>
        </div>
        <div id="page-content">
            @foreach($credit_charges as $key => $charge)
                <div class="row app-text-row">           
                    <div class="app-text-row-title charge-date">{{date('j/n/y', strtotime($charge->created_at))}}</div>
                    <div class="app-text-row-value">
                    <span>&euro; {{number_format($charge->amount,2,',',' ')}}</span><br>
                    {{$charge->method}} 
                    </div>
                </div>
            @endforeach
        </div>             
    </div>
@endsection

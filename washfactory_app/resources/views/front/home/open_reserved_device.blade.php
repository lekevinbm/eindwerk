@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="top-page-section">
            <a id="back-btn" href="{{route('home')}}"><i class="fas fa-angle-left"></i></a>            
            <span id="title">Wasmachine details</span>
        </div>
        <div id="top-open-reserved-dryer">
        </div>
    </div>
@endsection

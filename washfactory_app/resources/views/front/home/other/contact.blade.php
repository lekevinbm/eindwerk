@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="top-page-section">
            <a id="back-btn" href="{{route('home')}}"><i class="fas fa-times fa-lg close-page-btn"></i></a>              
            <span id="title">Contacteer ons</span>
        </div>
        <div id="page-content">
            <div id="contact-section" class="app-text-row">           
                <h1>Washfactory</h1><br>
                Grote Steenweg 512<br>
                2600 Berchem<br><br>
                <a href="tel:0800257894"></a>0800/25.78.94<br>
                <a href="mailto:hello@washfactory.be">hello@washfactory.be</a><br><br>
                <a href="http://washfactory.be">www.washfactory.be</a><br>
                
                
            </div>
        </div>            
    </div>
@endsection

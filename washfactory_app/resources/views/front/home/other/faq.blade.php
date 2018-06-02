@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="slide-page-1">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('home')}}"><i class="fas fa-times fa-lg close-page-btn"></i></a>            
                <span id="title">FAQ</span>
            </div>
            <div id="page-content">
                <div class="row app-text-row tab-activator">           
                    <div class="row app-text-row-tab">
                        <div class="faq-carret"><i class="fas fa-caret-right fa-2x"></i></div><span class="app-text-row-tab-text">Wat als mijn gereserveerd toestel niet werkt?</span></div>
                    <div class="app-text-row-tab-value">
                        U kan altijd een toestel melden wanneer u uw toestel gereserveerd heeft. 
                        U krijgt dan uw credits terug, waarmee u dan een nieuw toestel kunt reserveren.
                    </div>
                </div>
                <div class="row app-text-row tab-activator">           
                    <div class="row app-text-row-tab">
                        <div class="faq-carret"><i class="fas fa-caret-right fa-2x"></i></div><span class="app-text-row-tab-text">Zal het toestel na mijn wasbeurt door iedereen geopend kunnen worden?</span></div>
                    <div class="app-text-row-tab-value">
                        Bij het beëindigen van uw wasbeurt krijgt u 5 minuten te tijd om het toestel te openen. Tot dan kan hij niet geopend worden door anderen.
                        Na die 5 minuten kan de gebruiker die het toestel na u gereserveerd heeft het toestel openen. U betaalt dan een toeslag.
                        U kan altijd aan de volgende vragen om het toestel in een wasmand te ledigen of in een aander apparaat. U betaalt dan wel een toeslag. Die persoon kan het toestel dan openen.
                    </div>
                </div>
            </div>            
        </div>       
    </div>
@endsection

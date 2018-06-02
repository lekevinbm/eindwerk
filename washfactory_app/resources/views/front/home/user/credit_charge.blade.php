@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="top-page-section">
            <a id="back-btn" href="{{route('home')}}"><i class="fas fa-angle-left"></i></a>            
            <span id="title">Krediet opladen</span>
        </div>
        <div id="page-content">
            <div class="row app-text-row">
                <div class="app-text-row-title">Jouw saldo</div>
                <div class="app-text-row-value">
                    &euro; {{number_format(Auth::user()->credits,2,',',' ')}}
                </div>
            </div>
            <div id="credit-charge-amount-section">
                Vul je oplaadbedrag in
                <form id="credit-charge-form" method="post" action="{{route('user.charge.create')}}">
                    @csrf
                    <input id="amount" type="number" class="app-input" name="amount" placeholder="0,00" min="0">
                    <input id="method" type="hidden" class="app-input" name="method">
                </form>      
            </div>
            <div id="credit-charge-method-section">
                Kies een betaalmethode
                <div class="row payment-methode-row">
                    <div>
                        <label for="bancontact-pay-method-input">
                            <img id="bancontact-pay-method" class="pay-method-img" src="{{asset('img/pay_method/bancontact.jpg')}}" alt="Logo van de betaalmethode bancontact">
                        </label>
                        <br><input id="bancontact-pay-method-input" class="pay-method-select" type="radio" name="pay-method">
                    </div>
                    <div>
                        <label for="mastercard-pay-method-input">
                            <img id="mastercard-pay-method" class="pay-method-img" src="{{asset('img/pay_method/mastercard.jpg')}}" alt="Logo van de betaalmethode mastercard">
                        </label>
                        <br><input id="mastercard-pay-method-input" class="pay-method-select" type="radio" name="pay-method">
                    </div>
                    <div>
                        <label for="visa-pay-method-input">
                            <img id="visa-pay-method" class="pay-method-img" src="{{asset('img/pay_method/visa.jpg')}}" alt="Logo van de betaalmethode visa">
                        </label>
                        <br><input id="visa-pay-method-input" class="pay-method-select" type="radio" name="pay-method">
                    </div>
                </div>
            </div>
            <div class="page-primary-button-section">
                <input type="submit" form="credit-charge-form" value="Krediet opladen">
            </div>
        </div>
    </div>
@endsection

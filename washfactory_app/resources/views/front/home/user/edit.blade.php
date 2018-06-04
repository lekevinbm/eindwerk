@extends('layouts.app')

@section('content')
    <div id="home-page">
        <div id="slide-page-1">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('home')}}"><i class="fas fa-times fa-lg close-page-btn"></i></a>            
                <span id="title">Accountgegevens</span>
            </div>
            <div id="page-content">
                <div id="edit-personal-info-page-activator" class="row app-text-row page-slide-activator">           
                    <div class="app-text-row-extra-large">Persoonlijke info wijzigen</div>
                    <div class="app-text-row-large-end">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
                <div id="edit-password-page-activator" class="row app-text-row page-slide-activator">           
                    <div class="app-text-row-extra-large">Wachtwoord wijzigen</div>
                    <div class="app-text-row-large-end">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>

        <div id="edit-personal-info-page" class="slide-page">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('home')}}"><i class="fas fa-angle-left"></i></a>            
                <span id="title">Persoonlijke info wijzigen</span>
            </div>
            <div id="page-content">
                <form method="post" action="{{route('user.update')}}">
                    @csrf
                    <div class="row app-text-row">           
                        <div class="app-text-row-title form-label">Voornaam</div>
                        <div class="app-text-row-value">
                            <input type="text" class="app-input" name="firstname" value="{{Auth::user()->firstname}}">
                        </div>
                    </div>
                    <div class="row app-text-row">           
                        <div class="app-text-row-title form-label">Achternaam</div>
                        <div class="app-text-row-value">
                            <input type="text" class="app-input" name="lastname" value="{{Auth::user()->lastname}}">
                        </div>
                    </div>
                    <div class="row app-text-row">           
                        <div class="app-text-row-title form-label">Email</div>
                        <div class="app-text-row-value">
                            <input type="email" class="app-input" name="email" value="{{Auth::user()->email}}">
                        </div>
                    </div>
                    <div class="row app-text-row">           
                        <div class="app-text-row-title form-label">Geboortedatum</div>
                        <div class="app-text-row-value">
                            <input type="text" class="app-input" name="date_of_birth" value="{{Auth::user()->date_of_birth}}">
                        </div>
                    </div>
                    <div class="row app-text-row">           
                        <div class="app-text-row-title form-label">Straatnaam</div>
                        <div class="app-text-row-value">
                            <input type="text" class="app-input" name="street_name" value="{{Auth::user()->street_name}}">
                        </div>
                    </div>
                    <div class="row app-text-row">           
                        <div class="app-text-row-title form-label">Nummer</div>
                        <div class="app-text-row-value">
                            <input type="text" class="app-input" name="street_number" value="{{Auth::user()->street_number}}">
                        </div>
                    </div>
                    <div class="row app-text-row">           
                        <div class="app-text-row-title form-label">Postcode</div>
                        <div class="app-text-row-value">
                            <input type="text" class="app-input" name="postcode" value="{{Auth::user()->postcode}}">
                        </div>
                    </div>
                    <div class="row app-text-row">           
                        <div class="app-text-row-title form-label">Stad</div>
                        <div class="app-text-row-value">
                            <input type="text" class="app-input" name="city" value="{{Auth::user()->city}}">
                        </div>
                    </div>

                    <div class="page-primary-button-section">
                        <input type="submit" value="Wijzigingen opslaan">
                    </div> 
                </form>
            </div>
        </div>
        <div id="edit-password-page" class="slide-page">
            <div id="top-page-section">
                <a id="back-btn" href="{{route('home')}}"><i class="fas fa-angle-left"></i></a>            
                <span id="title">Wachtwoord wijzigen</span>
            </div>
            <div id="page-content">
                <form method="post" action="{{route('user.password.update')}}">
                    @csrf
                    <div class="row app-text-row">           
                        <div class="app-text-row-extra-large bold-label">Uw oud wachtwoord</div>
                        <div class="app-text-row-extra-large">
                            <input type="password" class="app-input" name="old_password">
                        </div>
                    </div>
                    <div class="row app-text-row">           
                        <div class="app-text-row-extra-large bold-label">Uw nieuw wachtwoord</div>
                        <div class="app-text-row-extra-large">
                            <input type="password" class="app-input" name="password">
                        </div>
                    </div>
                    <div class="row app-text-row">           
                        <div class="app-text-row-extra-large bold-label">Bevestig uw nieuw wachtwoord</div>
                        <div class="app-text-row-extra-large">
                            <input type="password" class="app-input" name="password_confirmation">
                        </div>
                    </div>
                    <div class="page-primary-button-section">
                        <input type="submit" value="Wachtwoord wijzigen">
                    </div> 
                </form>
            </div>
        </div>
    </div>
@endsection

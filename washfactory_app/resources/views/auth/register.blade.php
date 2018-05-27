@extends('layouts.guest')

@section('content')
    <div id="register-page" class="container app-page">
        <a href="{{route('login')}}"><i class="fas fa-times fa-lg close-page-btn"></i></a>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Account aanmaken</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div id="register-page-1" class="active">
                        <div class="form-group row">
                            <div class="col">
                                <label for="firstname" >{{ __('Voornaam') }}</label>    
                                <input id="firstname" type="text" class="register-input" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">       
                            <div class="col">
                                <label for="lastname" >{{ __('Achternaam') }}</label>
                                <input id="lastname" type="text" class="register-input" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="email" >{{ __('Email') }}</label>
                                <input id="email" type="email" class="register-input" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="password" >{{ __('Wachtwoord') }}</label>
                                <input id="password" type="password" class="register-input" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="password-confirm" >{{ __('Wachtwoord bevestigen') }}</label>
                                <input id="password-confirm" type="password" class="register-input" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div id="register-button-section" class="col offset-md-4">
                                <button id="register-page-1-btn" type="button" class="btn btn-primary register-btn">
                                    {{ __('Volgende') }}
                                </button>
                            </div>
                        </div>

                    </div>

                    <div id="register-page-2">
                        <div class="form-group row">
                            <div class="col">
                                <label for="date_of_birth">{{ __('Geboortedatum') }}</label>
                                <input id="date_of_birth" type="date" class="register-input" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus>

                                @if ($errors->has('date_of_birth'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="street_name">{{ __('Straat') }}</label>
                                <input id="street_name" type="text" class="register-input" name="street_name" value="{{ old('street_name') }}" required autofocus>

                                @if ($errors->has('street_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('street_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="street_number" >{{ __('Nummer') }}</label>
                                <input id="street_number" type="text" class="register-input" name="street_number" value="{{ old('street_number') }}" required>

                                @if ($errors->has('street_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('street_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="postcode" >{{ __('Postcode') }}</label>
                                <input id="postcode" type="text" class="register-input" name="postcode" required>

                                @if ($errors->has('postcode'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="city" >{{ __('Stad') }}</label>
                                <input id="city" type="text" class="register-input" name="city" required>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div id="register-button-section" class="col offset-md-4">
                                <button id="register-button" type="submit" class="btn btn-primary register-btn">
                                    {{ __('Account aanmaken') }}
                                </button>
                            </div>
                        </div>

                    </div>

                    
                </form>
            </div>
        </div>
    </div>
@endsection

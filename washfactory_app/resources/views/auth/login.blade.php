@extends('layouts.guest')

@section('content')

<div id="login-page" class="container app-page">
    <img id="logo" src="{{ asset('img/logo-white.png') }}" alt="Logo of washfactory in white">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>LOGIN</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row justify-content-center">
                    <div class="col">
                        <label for="formGroupExampleInput">@lang('EMAIL')</label>
                        <input id="email" type="email" class="login-input" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row justify-content-center">

                    <div class="col">
                        <label for="formGroupExampleInput">@lang('WACHTWOORD')</label>
                        <input id="password" type="password" class="login-input" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <a class="btn btn-link password-link" href="{{ route('password.request') }}">
                            <strong>{{ __('Wachtwoord vergeten?') }}</strong>
                        </a>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div id="login-button-section" class="col">
                        <button id="login-button" type="submit" class="btn btn-primary">
                            <strong>{{ __('Login') }}</strong>
                        </button>    
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div id="register-button-section" class="col">
                        Nog geen account?
                        <a class="register-link" href="{{ route('register') }}">
                            <strong>{{ __('Account aanmaken') }}</strong>
                        </a>                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.back')
@section('content')
    <h1>Gebruiker wijzigen</h1>
    <form method="POST" action="{{ route('admin.users.update',$user)}}">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="firstname" class="col-md-5 col-form-label text-md-right">Voornaam*</label>

            <div class="col-md-4">
                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{$user->firstname}}" required autofocus>

                @if ($errors->has('firstname'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="lastname" class="col-md-5 col-form-label text-md-right">Achternaam*</label>

            <div class="col-md-4">
                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{$user->lastname}}" required autofocus>

                @if ($errors->has('lastname'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-5 col-form-label text-md-right">Email*</label>

            <div class="col-md-4">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="street_name" class="col-md-5 col-form-label text-md-right">Straat*</label>

            <div class="col-md-4">
                <input id="street_name" type="text" class="form-control{{ $errors->has('street_name') ? ' is-invalid' : '' }}" name="street_name" value="{{$user->street_name}}" required autofocus>

                @if ($errors->has('street_name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('street_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="street_number" class="col-md-5 col-form-label text-md-right">Nummer*</label>

            <div class="col-md-4">
                <input id="street_number" type="text" class="form-control{{ $errors->has('street_number') ? ' is-invalid' : '' }}" name="street_number" value="{{ $user->street_number }}" required autofocus>

                @if ($errors->has('street_number'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('street_number') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="postcode" class="col-md-5 col-form-label text-md-right">Postcode</label>

            <div class="col-md-4">
                <input id="postcode" type="text" class="form-control{{ $errors->has('postcode') ? ' is-invalid' : '' }}" name="postcode" value="{{ $user->postcode }}" required autofocus>

                @if ($errors->has('postcode'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('postcode') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-md-5 col-form-label text-md-right">City*</label>

            <div class="col-md-4">
                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $user->city }}" required autofocus>

                @if ($errors->has('city'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="role" class="col-md-5 col-form-label text-md-right">Rol</label>
            <div class="col-md-4">
                <select id="role" class="form-control{{ $errors->has('rol') ? ' is-invalid' : '' }}" name="role">
                    <option selected disabled>Kies een rol</option>
                    @foreach($roles as $key => $role)
                        <option value="{{$role->name}}" {{ $user->getRoleNames()->first() == $role->name ? 'selected' : '' }}>{{$role->name}}</option>
                    @endforeach
                </select>

                @if ($errors->has('role'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('role') }}</strong>
                    </span>
                @endif
            </div>
            
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-5 offset-md-5">
                <button type="submit" class="btn btn-primary">
                    Gebruiker wijzigen
                </button>
            </div>
        </div>
    </form>

@endsection
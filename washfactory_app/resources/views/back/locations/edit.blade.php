@extends('layouts.back')
@section('content')
    <h1>Locatie wijzigen</h1>
    <form method="POST" action="{{ route('admin.locations.update',$location)}}">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="name" class="col-md-5 col-form-label text-md-right">Locatienaam*</label>

            <div class="col-md-4">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$location->name}}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="street_name" class="col-md-5 col-form-label text-md-right">Straat*</label>

            <div class="col-md-4">
                <input id="street_name" type="text" class="form-control{{ $errors->has('street_name') ? ' is-invalid' : '' }}" name="street_name" value="{{$location->street_name}}" required autofocus>

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
                <input id="street_number" type="text" class="form-control{{ $errors->has('street_number') ? ' is-invalid' : '' }}" name="street_number" value="{{ $location->street_number }}" required autofocus>

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
                <input id="postcode" type="text" class="form-control{{ $errors->has('postcode') ? ' is-invalid' : '' }}" name="postcode" value="{{ $location->postcode }}" required autofocus>

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
                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $location->city }}" required autofocus>

                @if ($errors->has('city'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-5 col-form-label text-md-right">Beschrijving</label>

            <div class="col-md-4">
                <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" autofocus>{{ $location->description }}</textarea>

                @if ($errors->has('description'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-5 offset-md-5">
                <button type="submit" class="btn btn-primary">
                    Locatie wijzigen
                </button>
            </div>
        </div>
    </form>

@endsection
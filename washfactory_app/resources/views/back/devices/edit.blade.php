@extends('layouts.back')
@section('content')
    <h1>Toestel wijzigen</h1>
    <form method="POST" action="{{ route('admin.devices.update',$device)}}">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="type" class="col-md-5 col-form-label text-md-right">Toesteltype</label>

            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="type-dry" value="dry" {{ $device->type == 'dry' ? 'checked' : '' }} >
                    <label class="form-check-label" for="type-dry">
                        Wasdroger
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="type-wash" value="wash" {{ $device->type == 'wash' ? 'checked' : '' }}>
                    <label class="form-check-label" for="type-wash">
                        Wasmachine
                    </label>
                </div>
                

                @if ($errors->has('type'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('type') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="brand" class="col-md-5 col-form-label text-md-right">Merk</label>

            <div class="col-md-4">
                <input id="brand" type="text" class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }}" name="brand" value="{{$device->brand}}" required autofocus>

                @if ($errors->has('brand'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('brand') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="manufacturer_code" class="col-md-5 col-form-label text-md-right">Fabrieknummer</label>

            <div class="col-md-4">
                <input id="manufacturer_code" type="text" class="form-control{{ $errors->has('manufacturer_code') ? ' is-invalid' : '' }}" name="manufacturer_code" value="{{$device->manufacturer_code}}" required autofocus>

                @if ($errors->has('manufacturer_code'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('manufacturer_code') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="location" class="col-md-5 col-form-label text-md-right">Locatie</label>
            <div class="col-md-4">
                <select id="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location">
                    <option selected disabled>Kies een locatie</option>
                    @foreach($locations as $key => $location)
                        <option value="{{$location->id}}" {{ $device->location_id == $location->id ? 'selected' : '' }}>{{$location->name}}</option>
                    @endforeach
                </select>

                @if ($errors->has('location'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                @endif
            </div>
            
        </div>
        <div class="form-group row">
            <label for="activation_status" class="col-md-5 col-form-label text-md-right">Activatie status</label>
            <div class="col-md-4">
                <select id="activation_status" class="form-control{{ $errors->has('activation_status') ? ' is-invalid' : '' }}" name="activation_status">
                    <option disabled>Kies een activatie status</option>
                    <option value="active" {{ $device->activation_status == 'active' ? 'selected' : '' }}>Actief</option>
                    <option value="non-active" {{ $device->activation_status == 'non-active' ? 'selected' : '' }}>Non actief</option>
                    <option value="out-of-service" {{ $device->activation_status == 'out-of-service' ? 'selected' : '' }}>Out of service</option>
                </select>

                @if ($errors->has('activation_status'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('activation_status') }}</strong>
                    </span>
                @endif
            </div>
            
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-5 offset-md-5">
                <button type="submit" class="btn btn-primary">
                    Toestel wijzigen
                </button>
            </div>
        </div>
    </form>

@endsection
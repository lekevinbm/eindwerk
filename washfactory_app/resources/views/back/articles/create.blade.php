@extends('layouts.back')
@section('content')
    <h1>Artikel toevoegen</h1>
    <form method="POST" action="{{ route('admin.articles.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-md-3 col-form-label text-md-right">Titel*</label>

            <div class="col-md-4">
                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="content" class="col-md-3 col-form-label text-md-right">Artikel*</label>

            <div class="col-md-4">
                <textarea id="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" autofocus required>{{ old('content') }}</textarea>

                @if ($errors->has('content'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="image" class="col-md-3 col-form-label text-md-right">Afbeelding*</label>

            <div class="col-md-4">
                <input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" autofocus required>

                @if ($errors->has('image'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="publication_status" class="col-md-3 col-form-label text-md-right">Publicatiestatus</label>

            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="publication_status" id="online-status" value="online" required {{  old('publication_status') == 'online' ? 'checked' : '' }}>
                    <label class="form-check-label" for="online-status">
                        Online
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="publication_status" id="offline-status" value="offline" {{  old('publication_status') == 'offline' ? 'checked' : '' }}>
                    <label class="form-check-label" for="offline-status">
                        Offline
                    </label>
                </div>
                

                @if ($errors->has('type'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('type') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-3 offset-md-3">
                <button type="submit" class="btn btn-primary">
                    Artikel toevoegen
                </button>
            </div>
        </div>
    </form>

@endsection
@extends('layouts.back')
@section('content')
    <h1>Locaties</h1>
    @if($locations->count() == 0)
        <p>U heeft nog geen locaties. Voeg er eerst één toe.</p>
        <a class="btn btn-primary" href="{{route('admin.locations.create')}}">Locatie toevoegen</a>
    @else
        <div class="index-primary-btn-row"><a class="btn btn-primary" href="{{route('admin.locations.create')}}">Locatie toevoegen</a></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Adres</th>
                        <th scope="col">Stad</th>
                        <th scope="col">Beschrijving</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($locations as $key => $location)
                        <tr>
                            <td>{{$location->name}}</td>
                            <td>{{$location->street_name}} {{$location->street_number}}</td>
                            <td>{{$location->city}} ({{$location->postcode}})</td>
                            <td>{{$location->description}}</td>
                            <td><a class="btn btn-warning" href="{{route('admin.locations.edit',$location)}}">Wijzigen</a></td>
                            <td>
                                <form action="{{route('admin.locations.destroy',$location)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Verwijderen</button>
                                    @method('DELETE')                                
                                </form>                          
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection
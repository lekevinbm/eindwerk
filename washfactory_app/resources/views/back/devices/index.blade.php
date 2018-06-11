@extends('layouts.back')
@section('content')
    <h1>Toestellen</h1>
    @if($devices->count() == 0)
        <p>U heeft nog geen toestellen. Voeg er eerst één toe.</p>
        <a class="btn btn-primary" href="{{route('admin.devices.create')}}">Toestel toevoegen</a>
    @else
        <div class="index-primary-btn-row"><a class="btn btn-primary" href="{{route('admin.devices.create')}}">Toestel toevoegen</a></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Status</th>
                        <th scope="col">Type</th>
                        <th scope="col">Toestelcode</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Fabriekcode</th>
                        <th scope="col">Locatie</th>
                        <th scope="col">Toestand</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($devices as $key => $device)
                        <tr>
                            <td class="activation-status {{$device->activation_status}}"></td>
                            <td>{{$device->type}}</td>
                            <td>{{$device->code_name}}</td>
                            <td>{{$device->brand}}</td>
                            <td>{{$device->manufacturer_code}}</td>
                            <td>{{$device->location->name}}, {{$device->location->city}} ({{$device->location->postcode}})</td>
                            <td>{{$device->task_status}}</td>
                            <td><a class="btn btn-warning" href="{{route('admin.devices.edit',$device)}}">Wijzigen</a></td>
                            <td>
                                <form action="{{route('admin.devices.destroy',$device)}}" method="post">
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
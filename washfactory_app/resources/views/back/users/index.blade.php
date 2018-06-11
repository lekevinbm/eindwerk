@extends('layouts.back')
@section('content')
    <h1>Gebruikers</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Naam</th>
                    <th scope="col">Email</th>
                    <th scope="col">Stad</th>
                    <th scope="col">Rol</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{$user->lastname}} {{$user->firstname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->city}} ({{$user->postcode}})</td>
                        <td>
                            @foreach($user->getRoleNames() as $role)
                                    {{$role}} 
                            @endforeach
                        </td>
                        <td><a class="btn btn-warning" href="{{route('admin.users.edit',$user)}}">Wijzigen</a></td>
                        <td>
                            <form action="{{route('admin.users.destroy',$user)}}" method="post">
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

@endsection
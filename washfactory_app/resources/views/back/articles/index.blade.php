@extends('layouts.back')
@section('content')
    <h1>Toestellen</h1>
    @if($articles->count() == 0)
        <p>U heeft nog geen Tips & tricks artikel. Voeg er eerst één toe.</p>
        <a class="btn btn-primary" href="{{route('admin.articles.create')}}">Artikel toevoegen</a>
    @else
        <div class="index-primary-btn-row"><a class="btn btn-primary" href="{{route('admin.articles.create')}}">Artikel toevoegen</a></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Publicatiedatum</th>
                        <th scope="col">Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $key => $article)
                        <tr>
                            <td>
                                @if($article->publication_date)
                                    {{$article->publication_date}}
                                @else
                                    Nog niet gepubliceerd
                                @endif
                            </td>
                            <td>{{$article->title}}</td>
                            <td><a class="btn btn-warning" href="{{route('admin.articles.edit',$article)}}">Wijzigen</a></td>
                            <td>
                                <form action="{{route('admin.articles.destroy',$article)}}" method="post">
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
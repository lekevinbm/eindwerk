@extends('layouts.app')

@section('content')
    <div id="articles-page">
        <div id="top-page-section">
            <a id="back-btn" href="{{route('articles.index')}}"><i class="fas fa-angle-left fa-lg"></i></a>
            <span id="title">Opgeslagen tips & tricks</span>
        </div>
        <div id="page-content">
            @if(count($articles) == 0)
                <div class="row app-text-row full">U heeft nog geen artikels opgeslagen.</div>
            @else
                @foreach($articles as $article)
                    <a href="{{route('articles.open',$article)}}" class="row app-block app-block-3 white-block block-margin article-block" style="background: linear-gradient(rgba(0, 0, 0, 0.35),rgba(0, 0, 0, 0.35)),url({{asset($article->image)}})">    
                        <span class="app-block-icon">
                            <i class="fas fa-star fa-md"></i>
                        </span>
                        <span class="app-block-text normal-text">{{$article->title}}<br><span class="article-date">{{date('j/n/y', strtotime($article->publication_date))}}</span></span>
                    </a>
                @endforeach
            @endif   
        </div>
    </div>
@endsection
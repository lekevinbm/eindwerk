@extends('layouts.app')

@section('content')
    <div id="articles-page">
        <div id="top-page-section">
            <a id="back-btn" href="{{route('articles.index')}}"><i class="fas fa-angle-left fa-lg"></i></a>
            <span id="title">{{substr($article->title,0,30)}} @if(strlen($article->title) >30)...@endif</span>
        </div>
        <div id="page-content">            
            <div class="row app-block app-block-3 white-block article-block" style="background:url({{asset($article->image)}})"></div>
            <div class="article-content">
                <a id="favorites-btn" class="save-article-btn" href="{{route('problem')}}"><i class="far fa-star fa-2x"></i></a>
                <div class="article-date">{{date('j/n/y', strtotime($article->publication_date))}}</div>
                <h1>{{$article->title}}</h1>                
                <p class="article-content-text">{{$article->content}}</p>
            </div>
        </div>
    </div>
@endsection
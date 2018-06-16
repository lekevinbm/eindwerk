@extends('layouts.app')

@section('content')
    <div id="articles-page">
        <div id="top-page-section">
            <span id="title">Tips & tricks</span>
            <a id="favorites-btn" href="{{route('problem')}}"><i class="far fa-star fa-lg"></i></a>
        </div>
        <div id="page-content">
            @foreach($articles as $article)
                <a href="{{route('articles.open',$article)}}" class="row app-block app-block-3 white-block block-margin article-block" style="background: linear-gradient(rgba(0, 0, 0, 0.35),rgba(0, 0, 0, 0.35)),url({{asset($article->image)}})">    
                    <span class="app-block-icon">
                    <i class="far fa-star fa-md"></i>
                    </span>
                    <span class="app-block-text normal-text">{{$article->title}}<br><span class="article-date">{{date('j/n/y', strtotime($article->publication_date))}}</span></span>
                </a>
            @endforeach            
        </div>
    </div>
@endsection
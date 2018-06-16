<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::where('publication_date','!=',null)->get();
        return view('front.articles.index',[
            'articles' => $articles
        ]);
    }

    public function open(Article $article){
        return view('front.articles.open',[
            'article' => $article
        ]);
    }
}

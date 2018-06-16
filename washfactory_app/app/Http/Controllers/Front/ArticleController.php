<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Favorite_article;
use Auth;

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

    public function addToFavorites(Article $article){
        if($article->id && !Favorite_article::where('article_id', $article->id)->where('user_id',Auth::id())->get()->first()){
            Favorite_article::create([
                'user_id' => Auth::id(),
                'article_id' => $article->id,
            ]);
        }        
        return back();
    }

    public function removeFromFavorites(Article $article){
        $favorite = Favorite_article::where('article_id', $article->id)->where('user_id',Auth::id())->get()->first();
        if($favorite){
            $favorite->delete();
        }
        return back();
    }

    public function favorites(){
        $articles = Auth::user()->favorite_articles;
        return view('front.articles.favorites',[
            'articles' => $articles
        ]);
    }
}

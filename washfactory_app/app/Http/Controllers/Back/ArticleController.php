<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleFormRequest;
use App\Http\Requests\UpdateArticleFormRequest;
use Intervention\Image\Facades\Image;
use App\Article;
use File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('back.articles.index',[
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArticleFormRequest $request)
    {
        $image = $request->image;
        if($image){
            $img = Image::make($image)->encode('jpg', 75);
            $img = $img->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            //$extension = pathinfo(storage_path().$img->getClientOriginalName(), PATHINFO_EXTENSION);

            $imageName = 'article-'.date("d-m-Y").'-'.str_random(5).'.jpg';
            $img->save("img/articles/".$imageName);
            $imagePath = 'img/articles/'.$imageName;
        }
        if($request->publication_status == 'online'){
            $publication_date = date("Y-m-d");
        }else{
            $publication_date = null;
        }

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'publication_date' => $publication_date
        ]);

        return redirect()->route('admin.articles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('back.articles.edit',[
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleFormRequest $request, Article $article)
    {
        if(File::exists($article->image)) {
            File::delete($article->image);
        }

        $image = $request->image;
        if($image){
            $img = Image::make($image)->encode('jpg', 75);
            $img = $img->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            //$extension = pathinfo(storage_path().$img->getClientOriginalName(), PATHINFO_EXTENSION);

            $imageName = 'article-'.date("d-m-Y").'-'.str_random(5).'.jpg';
            $img->save("img/articles/".$imageName);
            $imagePath = 'img/articles/'.$imageName;
        }
        if($request->publication_status == 'online'){
            $publication_date = date("Y-m-d");
        }else{
            $publication_date = null;
        }

        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = $imagePath;
        $article->publication_date = $publication_date;
        $article->save();
        return redirect()->route('admin.articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if(File::exists($article->image)) {
            File::delete($article->image);
        }
        $article->delete();

        return redirect()->route('admin.articles');
    }
}

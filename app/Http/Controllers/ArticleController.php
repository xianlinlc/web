<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles=Article::all(['id','title_cn','title_en','picurl','description','created_at']);
//        dd($articles);
        return view('web.index',['articles'=>$articles]);
    }

    public function detail(Request $request,$id)
    {
        $article=Article::where('id',$id)->first();
//        dd($article);
        return view('web.detail',['article'=>$article]);
    }
}

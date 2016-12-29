<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(Request $request)
    {
        $articles=Article::all(['title_cn','title_en','picurl','description','created_at']);
//        dd($articles);
        return view('web.index',['articles'=>$articles]);
    }
}

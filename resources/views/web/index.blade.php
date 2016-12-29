@extends('layouts.app')

@section('content')
@foreach($articles as $article)
    <div class="container-fluid article-each">
        <div class="row">
            <div class="col-md-3">
                <img src="{{$article->picurl}}" alt="" >
            </div>
            <div class="col-md-9 ">
                <a href="details.html"><h2 class="article-title">{{$article->title_cn}}/{{$article->title_en}}</h2></a>
                <a href="#"><span class="glyphicon glyphicon-heart article-favor" aria-hidden="true">赞(0)</span></a>
                <p class="article-desc">
                {{$article->description}}
                </p>
                <p><span class="glyphicon glyphicon-calendar " aria-hidden="true">发布时间{{$article->created_at}}</span></p>
                <p><span class="glyphicon glyphicon-tags " aria-hidden="true">标签:<a href="#">科幻</a>&nbsp;<a href="#">科幻</a>&nbsp;</span></p>
            </div>

        </div>
    </div>
    @endforeach
@endsection
@extends('layouts.index')

@section('content')

    <h1 >{{$article->title_cn}}/{{$article->title_en}}</h1><span class="text-success" style="float: right">豆瓣评分:{{$article->douban}}</span>
    <!--图片-->
    <div class="row">
        <div class="col-md-5">
            <img style="width: 100%;margin-top: 1em;margin-bottom: 2em;" src="{{$article->picurl}}" alt="">
        </div>
    </div>

    <!--简介-->
    <div class="row">
        <div class="col-md-12">
            <p style="text-indent: 2em;">{{$article->description}}
            </p>
        </div>
    </div>

    <!--演员介绍-->
    <div class="row">
        <div class="col-md-12">
            <p>
                导演: {{$article->director}}<br/>
                编剧: {{$article->writer}}<br/>
                主演: {{$article->performer}}<br/>
                类型:  <a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>科幻</a>&nbsp;
                <a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>剧情</a>&nbsp;
                <a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>黑色幽默</a>&nbsp;<br/>
                制片国家/地区: {{$article->country}}<br/>
                语言: {{$article->language}}<br/>
                上映日期: {{$article->perform_time}}<br/>
                片长: {{$article->last_time}}分钟
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p>
                下载链接 <small class="text-danger">请使用迅雷下载</small><br/>
                <a href="{{$article->download_url}}">{{$article->title_cn}}/{{$article->title_en}}</a>

            </p>
        </div>
    </div>
    <br/>
    <!--评论展示-->
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <td>ssss</td>
                </tr>
                <tr>
                    <td>ssss</td>
                </tr>
                <tr>
                    <td>ssss</td>
                </tr>

            </table>
        </div>
    </div>
    <!--评论表单-->
    <div class="row">
        <div class="col-md-12">
            <form >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">评论</label>
                            <input type="textarea" class="form-control" id="exampleInputEmail1" placeholder="输入评论内容">
                            <button type="submit" class="btn btn-primary ">评论</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    @endsection
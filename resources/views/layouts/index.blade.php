<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>主页</title>

    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->

</head>
<body>
<!--网站主页面-->
<!--导航-->
<nav class="navbar navbar-default my-nav">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--网页主标题-->
            <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">电影</a></li>
                <li><a href="#">美剧</a></li>
                <li><a href="#">音乐</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>

        </div>
    </div>
</nav>
<!--导航-->

<!--介绍-->
<div class="jumbotron description">
    @if (!Auth::check())
    <h3>welcome</h3>
    @else
        <h3>welcome,{{Auth::user()->name}}</h3>
    @endif
    <p>分享最好的电影，美剧，音乐</p>
    <p>
        @if (!Auth::check())
        <a class="btn btn-primary btn-sm" href="{{ url('/login') }}" role="button"> 登录 </a>
        <a class="btn btn-primary btn-sm" href="{{ url('/register') }}" role="button"> 注册 </a>
        @else
        <a class="btn btn-primary btn-sm" href="{{ url('/logout') }}"
            onclick="event.preventDefault();
   document.getElementById('logout-form').submit();">
            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 登出
        </a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="">
        {{ csrf_field() }}
    </form>
            @endif
    </p>
</div>
<!--介绍-->





<!--主体-->
<div class="container-fluid article" style="margin-left: 2em">
    <div class="row">
        <div class="col-md-8" >
            <!--文章主体-->
            @yield('content');

            <!--文章主体-->



        </div>

        <div class="col-md-4">
            <!--About me-->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">About me</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="http://pic.jia360.com/ueditor/jsp/upload/201501/18/67551421582869244.png">
                            </a>
                        </div>
                        <a href="http://weibo.com/u/5213477909" target="_blank">
                            <img src="/pic/Weibo.png" alt="" style="width: 32px;height: 32px">在微博关注我
                        </a>
                        <br/>
                        <a href="https://github.com/xianlinlc" target="_blank">
                            <img src="/pic/github_512_black.png" alt="" style="width: 32px;height: 32px">我的github
                        </a>
                    </div>
                </div>
            </div>
            <!--About me-->

            <!--标签-->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">标签</h3>
                </div>
                <div class="panel-body">
                    <a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>科幻</a>&nbsp;
                    <a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>剧情</a>&nbsp;
                    <a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>黑色幽默</a>&nbsp;
                    <a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>...</a>&nbsp;
                </div>
            </div>
            <!--标签-->
        </div>
    </div>


    <!--尾部信息-->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 8em">
                    <p><strong>尾部信息</strong></p>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<!--&lt;!&ndash; Include all compiled plugins (below), or include individual files as needed &ndash;&gt;-->
<script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
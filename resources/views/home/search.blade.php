<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-搜索</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
	</head>
	<body>
		<header>
			<div class="sort-top">
					<div class="sort-top-one">
					<a href="{{asset('/home/index')}}">〈</a>
					</div>
					<div class="sort-top-two">
					搜索
					</div>
					<div class="sort-top-three">
					…
					</div>
				</div>
			<nav class="sort-herd">
				<span class="nav-item menu" id="open-icon">
					<img class="sort-img-left" src="{{asset('images/sort-sys.png')}}"/>
				</span>
				<span class="nav-item logo">
					<lable id="search-wrap" class="search-wrap">
						<input id="search-input" class="search-input"style="color: #999999;" type="text" name="address"  value="请输入关键词搜索" onfocus="if(this.value=='请输入关键词搜索'){this.value=''};this.style.color='#999999';"
						onblur="if(this.value==''||this.value=='请输入关键词搜索'){this.value='请输入关键词搜索'};this.style.color='#999999';">
						<button id="search-button" class="search-button" type="submit">
							<img src="{{asset('images/search.png')}}"/>
						</button>
					</lable>
				</span>
				<span class="nav-item admin" id="open-top">
					<img class="sort-img-right" src="{{asset('images/sort-top1.png')}}"/>
				</span>
				<div class="clearfix"></div>
			</nav>
			<ul class="nav-list" id="nav-list">
				<img src="{{asset('images/2.png')}}"/>
			</ul>
			<div class="company-box">
				<ul class="company-introwrap" id="top-none" style="display: none">
					<a class="font40 fontwhite company-introitem index-compcur" href="../index.html"><li>首页</li></a>
					<a class="font40 fontwhite company-introitem" href="dynamic.html"><li>动态</li></a>
					<a class="font40 fontwhite company-introitem" href="sort.html"><li>排行榜</li></a>
					<a class="font40 fontwhite company-introitem" href="concert.html"><li>演唱会</li></a>
					<a class="font40 fontwhite company-introitem" href="sort.html"><li>醉强音</li></a>
					<a class="font40 fontwhite company-introitem" href="sort.html"><li>原创</li></a>
					<a class="font40 fontwhite company-introitem" href="comic.html"><li>声声漫画</li></a>
					<a class="font40 fontwhite company-introitem" href="#"><li>ˇ</li></a>
				</ul>
				<span class="company-conpic">
					<img src="../images/top.png"/>
				</span>
			</div>
		</header>
		<section>
			<!-- 歌手New-->
			<div class="news-box">
				<ul class="news-wrap">您查询的内容是：{{$keyWord}}</ul>
				@if($result == 0)
    				@foreach($result as $value)

    				<div class="news-newtitwrap">
    					<div class="news-titwrap-left">
    						<img height='100' src="{{asset($value['zimage'])}}"/>
    					</div>
    					<div class="news-titwrap-right">
    						<ul>
    							<li class="news-top"><a href="/home/musicDetails?zid={{$value['zid']}}&ting={{$value['ting']}}">{{$value['dname']}}：{{$value['ztitle']}}</a></li>
    							<li class="news-cont">{{$value['dcontent']}}</li>
    							<li class="news-data">2017-01-21</li>
    						</ul>
    					</div>
    				</div>
    				@endforeach
    			@else
    				<p style="font-size:15px">没有您要查询的歌手</p>
				@endif
		</div>


		</section>
		<footer>
			<div class="footer-note">
				<p class="font40 note-item">关于我们&nbsp;|&nbsp;帮助中心&nbsp;|&nbsp;友情链接&nbsp;|&nbsp;法律声明&nbsp;|&nbsp;网站地图</p>
				<p class="font40 note-item">公司地址：北京市朝阳区朝阳北路大悦公寓2-1603</p>
				<p class="font40 note-item">版权：北京雅典娜文化传播有限公司所有</p>
			</div>
		</footer>

	</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
	/*字号rem尺寸变化代码*/
	window.onload=window.onresize=function(){
	    document.documentElement.style.fontSize=100*document.documentElement.clientWidth/750+'px'
	};
    /*导航展开收起效果代码*/
    $(document).ready(function () {
            $("#open-icon").click(function () {
                $("#nav-list").slideToggle();
            });
        });
    /*导航展开收起效果代码  打开导航*/
   $(document).ready(function () {
         $("#open-top").click(function () {
             //document.getElementById("top-none").style.display="";
              $("#top-none").slideToggle();
         });
     });
</script>
</html>
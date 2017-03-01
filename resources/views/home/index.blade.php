<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
	</head>
	<body>
		<header>
			<nav>
				<span class="nav-item menu" id="open-icon">
					<img src="{{asset('images/sys.png')}}"/>扫一扫
				</span>
				<span class="nav-item logo">
					<lable id="search-wrap" class="search-wrap">
					<form id='searchForm' action="{{url('home/search')}}" method="post">
						{{ csrf_field() }}
						<input id="search-input" class="search-input"style="color: #999999;" type="text" name="address"  value="请输入关键词搜索" onfocus="if(this.value=='请输入关键词搜索'){this.value=''};this.style.color='#999999';"
						onblur="if(this.value==''||this.value=='请输入关键词搜索'){this.value='请输入关键词搜索'};this.style.color='#999999';">
						<button id="search-button" class="search-button" type="submit">
							<img src="{{asset('images/search.png')}}"/>
						</button>
					</form>

					</lable>
				</span>


				@include('home.head')
				<div class="clearfix"></div>
			</nav>
			<ul class="nav-list" id="nav-list">
				<img src="{{asset('images/2.png')}}"/>
			</ul>
			<div class="company-box">
				<ul class="company-introwrap">
					<a class="font40 fontwhite company-introitem index-compcur" href="{{asset('/home/index')}}"><li>首页</li></a>
					<a class="font40 fontwhite company-introitem" href="{{asset('/home/dynamic')}}"><li>动态</li></a>
					<a class="font40 fontwhite company-introitem" href="{{asset('/home/sort')}}"><li>排行榜</li></a>
					<a class="font40 fontwhite company-introitem" href="{{asset('/home/concert')}}"><li>演唱会</li></a>
					<a class="font40 fontwhite company-introitem" href="{{asset('/home/sortss')}}"><li>醉强音</li></a>
					<a class="font40 fontwhite company-introitem" href="{{url('/home/original')}}"><li>原创</li></a>
					<a class="font40 fontwhite company-introitem" href="{{asset('/home/comic')}}"><li>声声漫画</li></a>
					<a class="font40 fontwhite company-introitem" href="#"><li>ˇ</li></a>
				</ul>
				<div class="company-conwrap">
					<div class="company-content">
						<span class="company-conpic">
							<img src="{{asset('images/top.png')}}"/>
						</span>
					</div>
				</div>
			</div>
		</header>
		<section>
			<!-- 十二强 -->
			<div class="news-box">
				<ul class="news-wrap">大学生十二强</ul>
				<div class="hz-box">
				@foreach($result as $value)
					<div class="hz-one">
						<a href="/home/details?uid={{$value['uid']}}"><img class="dxs-img" src="{{asset($value['dimage'])}}"/></a>{{$value['dname']}}
					</div>
				@endforeach
				</div>
			</div>

			<!-- lunbo -->
			<div class="public"></div>
			<div class="news-box">
				<ul class="news-wrap">中国最大大学生歌唱平台</ul>
				<div class="index_banner" id="banner_tabs">
					<ul>
						<li><a href="" target="_blank"><img src="{{asset('lunbo/images/index_banner1.jpg')}}" ></a></li>
						<li><a href="" target="_blank"><img src="{{asset('lunbo/images/index_banner2.jpg')}}" ></a></li>
						<li><a href="" target="_blank"><img src="{{asset('lunbo/images/index_banner3.jpg')}}" ></a></li>
						<li><a href="" target="_blank"><img src="{{asset('lunbo/images/index_banner4.jpg')}}" ></a></li>
						<li><a href="" target="_blank"><img src="{{asset('lunbo/images/index_banner5.jpg')}}" ></a></li>
						<li><a href="" target="_blank"><img src="{{asset('lunbo/images/index_banner6.jpg')}}" ></a></li>
					</ul>
					<!--此处的img是用来占位的，在实际使用中，可以另外制作一张全空的图片-->
					<img style="visibility:hidden;" src="{{asset('lunbo/images/index_banner1.jpg')}}" width="100%">
					<cite>
						<span class="cur">1</span>
						<span>2</span>
						<span>3</span>
						<span>4</span>
						<span>5</span>
						<span>6</span>
					</cite>
					<div class="clear"></div>
				</div>
			</div>

			<!-- 新闻 -->
			<div class="public"></div>
			<div class="news-box">
				<ul class="news-wrap">新闻动态</ul>
				@foreach($result1 as $value)
				<a href="/home/news/index?nid={{$value['nid']}}"><div class="news-newtitwrap">
					<div class="news-titwrap-left">
						<img src="{{asset($value['nimage'])}}" style="width:50%"/>
					</div>
					<div class="news-titwrap-right">
						<ul>
							<li class="news-top">{{$value['nname']}}：{{$value['ntitle']}}</li>
							<li class="news-cont">{{$value['ncontent']}}</li>
							<li class="news-data">{{$value['ntime']}}</li>
						</ul>
					</div>
				</div></a>
				@endforeach
				<div class="news-add">
					展开更多ˇ
				</div>
		</div>
		<div class="public"></div>

		<!-- 演唱会 -->
			<div class="news-box">
				<ul class="news-wrap">演唱会</ul>
				<div class="ych-box">
					<div class="ychbox-left">
						<image class="ych-img" src="{{asset('images/ych.png')}}">
						<ul>
							<li class="ych-one">最火热单曲：王凯杰</li>
							<li class="ych-two">sh48的演唱会</li>
						</ul>
					</div>
					<div class="ychbox-right">
						<image class="ych-img" src="{{asset('images/ych.png')}}">
						<ul>
							<li class="ych-one">最火热单曲：王凯杰</li>
							<li class="ych-two">sh48的演唱会</li>
						</ul>
					</div>
				</div>

				<div class="ych-box">
					<div class="ychbox-left">
						<image class="ych-img" src="{{asset('images/ych.png')}}">
						<ul>
							<li class="ych-one">最火热单曲：王凯杰</li>
							<li class="ych-two">sh48的演唱会</li>
						</ul>
					</div>
					<div class="ychbox-right">
						<image class="ych-img" src="{{asset('images/ych.png')}}">
						<ul>
							<li class="ych-one">最火热单曲：王凯杰</li>
							<li class="ych-two">sh48的演唱会</li>
						</ul>
					</div>
				</div>
		</div>


		<div class="public"></div>

		<!-- 合作机构 -->
			<div class="news-box">
				<ul class="news-wrap">合作机构</ul>
				<div class="hz-box">
				@foreach($result2 as $result)
					<div class="hz-one">
						<a href="{{$result['faddress']}}"><img class="hz-img" src="{{asset($result['fimage'])}}"/></a>{{$result['fname']}}
					</div>
				@endforeach
				</div>
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
<script type="text/javascript" src="{{asset('lunbo/js/scroll.js')}}"></script>
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
    $('#searchForm').submit(function(e){
        console.log(this);
        var searchContent = $(this).find('[name=address]').val();
        if(searchContent == '请输入关键词搜索'){
			alert('您还未输入关键词');
			return false;
        }
    });

</script>
</html>
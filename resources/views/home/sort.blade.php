<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-排行榜</title>
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
					排行榜
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
					<a class="font40 fontwhite company-introitem index-compcur" href="{{asset('/home/index')}}"><li>首页</li></a>
					<a class="font40 fontwhite company-introitem" href="{{asset('/home/dynamic')}}"><li>动态</li></a>
					<a class="font40 fontwhite company-introitem" href="{{asset('/home/sort')}}"><li>排行榜</li></a>
					<a class="font40 fontwhite company-introitem" href="{{asset('/home/concert')}}"><li>演唱会</li></a>
					<a class="font40 fontwhite company-introitem" href="{{asset('/home/sorts')}}"><li>醉强音</li></a>
					<a class="font40 fontwhite company-introitem" href="{{url('/home/original')}}"><li>原创</li></a>
					<a class="font40 fontwhite company-introitem" href="{{asset('/home/comic')}}"><li>声声漫画</li></a>
					<a class="font40 fontwhite company-introitem" href="#"><li><img class="imgone" src="{{asset('images/index-x.png')}}"/></li></a>
				</ul>
				<span class="company-conpic">
					<img src="{{asset('images/top.png')}}"/>
				</span>			
			</div>	
		</header>
		<section>
			<!-- 十二星座-->
			<div class="xz-box">
				<ul class="sort-wrap">十二星座</ul>
				<div class="sort-box">
					<div class="sort-box-xz">
						<a href="/home/sorts?id=1#ss"><img class="xz-img" src="{{asset('images/sort-1.png')}}"/>白羊之声</a>
					</div>
					<div class="sort-box-xz">
						<a href="/home/sorts?id=2#ss"><img class="xz-img" src="{{asset('images/sort-2.png')}}"/>金牛之声</a>
					</div>
					<div class="sort-box-xz">
						<a href="/home/sorts?id=3#ss"><img class="xz-img" src="{{asset('images/sort-8.png')}}"/>双子之声</a>
					</div>
					<div class="sort-box-xz">
						<a href="/home/sorts?id=4#ss"><img class="xz-img" src="{{asset('images/sort-3.png')}}"/>巨蟹之声</a>
					</div>
					<div class="sort-box-xz">
						<a href="/home/sorts?id=5#ss"><img class="xz-img" src="{{asset('images/sort-12.png')}}"/>狮子之声</a>
					</div>
					<div class="sort-box-xz">
						<a href="/home/sorts?id=6#ss"><img class="xz-img" src="{{asset('images/sort-6.png')}}"/>室女之声</a>
					</div>	
				</div>
				<div class="sort-box">
					<div class="sort-box-xz">
						<a href="/home/sorts?id=7#ss"><img class="xz-img" src="{{asset('images/sort-10.png')}}"/>天枰之声</a>
					</div>
					<div class="sort-box-xz">
						<a href="/home/sorts?id=8#ss"><img class="xz-img" src="{{asset('images/sort-11.png')}}"/>天蝎之声</a>
					</div>
					<div class="sort-box-xz">
						<a href="/home/sorts?id=9#ss"><img class="xz-img" src="{{asset('images/sort-4.png')}}"/>摩羯之声</a>
					</div>
					<div class="sort-box-xz">
						<a href="/home/sorts?id=10#ss"><img class="xz-img" src="{{asset('images/sort-5.png')}}"/>人马之声</a>
					</div>
					<div class="sort-box-xz">
						<a href="/home/sorts?id=11#ss"><img class="xz-img" src="{{asset('images/sort-9.png')}}"/>宝瓶之声</a>
					</div>
					<div class="sort-box-xz">
						<a href="/home/sorts?id=12#ss"><img class="xz-img" src="{{asset('images/sort-7.png')}}"/>双鱼之声</a>
					</div>
				</div>
			</div>
			<!-- 排行榜-->
			<div class="bhb-box" id="ss">
			@forelse($result as $value)
			
			    @if($value['dimage'] == "" || $value['dname'] == "" || $value['dxingzuo'] == "")
			        <!-- 请完善个人信息  --> 
			    @else
				<div class="bhb-noe">
					<div class="bhb-noe-left">
						<a href="/home/details?uid={{$value['uid']}}"><img class="bhb-noe-left-img" src="{{asset($value['dimage'])}}"/>
					</div>
					<div class="bhb-noe-center">
						<h2>{{$value['dname']}}<font>{{$value['dxingzuo']}}</font></h2>
						<span>人气指数：{{$value['dzai']}}</span>
					</div>
					<!-- <div class="bhb-noe-right">
						<div class="bhb-noe-right-noe">1</div>
					</div> -->
				</div>	
				@endif
				@empty
				&nbsp;&nbsp;<font style="color:red">暂无数据</font>
			@endforelse
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
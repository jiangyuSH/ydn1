<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-原创</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
	</head>
	<body>
		<header>
			<div class="music-Top">
				<div class="music-Top-left">
				<a href="{{url('home/original')}}">〈</a>
				</div>
				<div class="music-Top-conter">
				给我一首歌的时间
				</div>
				<div class="music-Top-right">
				…
				</div>
			</div>	
		</header>
		<section>
			
			<!-- 歌手资料 -->
			<div class="music-gs">
				<div class="music-gs-left">
					<img src="{{asset('images/xq-4.png')}}"/>
				</div>
				<div class="music-gs-right">
					<span>周继伦</span>
					<p><img class="music-gs-img" src="{{asset('images/music-1.png')}}"/>&nbsp;1200粉丝</p>
					<p><img class="music-gs-img1" src="{{asset('images/music-2.png')}}"/><img class="music-gs-img2" src="{{asset('images/music-3.png')}}"/></p>
				</div>
				<div class="music-gs-left">
					<a href="/home/music"><img src="{{asset('images/music-8.png')}}"/></a>
				</div>
			</div>
			<div class="music-zl">
				<p><font color="#D4D3D3">演唱：</font>周继伦</p>
				<p><font color="#D4D3D3">作词：</font>周继伦</p>
				<p><font color="#D4D3D3">编曲：</font>周继伦</p>
				<p><font color="#D4D3D3">混缩：</font>000</p>
				<p><font color="#D4D3D3">分类：</font>原创</p>
				<p><font color="#D4D3D3">语种：</font>华语</p>
				<p><font color="#D4D3D3">曲风：</font>现代,流行</p>
				<p><font color="#D4D3D3">下载次数：</font>000</p>
				<p><font color="#D4D3D3">上传时间：</font>2017-1-1</p>
			</div>
			<div class="music-tp">
				<div class="music-tp-left">
					<p><img src="{{asset('images/music-4.png')}}"/>&nbsp;分享</p>
					<p><img src="{{asset('images/music-5.png')}}"/>&nbsp;收藏(0)</p>
				</div>
				<div class="music-tp-right">
					<p><img src="{{asset('images/music-6.png')}}"/>&nbsp;<font color="red">(1)</font></p>
					<p><img src="{{asset('images/music-7.png')}}"/>&nbsp;<font color="red">(255)</font></p>
				</div>
			</div>
			
			<!-- 评论 -->
			<div class="concert-tp-box">
				<div class="fst-box-top" >
					<div class="fst-box-top-left">评论</div>
				</div>
				<div class="tc-box">
					<textarea placeholder="我要吐槽"></textarea>
					<span><a><font color="#3CC9F6">发表</font></a>&nbsp;<a>取消</a></span>
				</div>
			</div>	
			
					
	
		</section>	
			
	</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
	
	/*字号rem尺寸变化代码*/
	window.onload=window.onresize=function(){
	    document.documentElement.style.fontSize=100*document.documentElement.clientWidth/750+'px';
	};
   
</script>	
</html>
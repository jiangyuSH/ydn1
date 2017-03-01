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
		<link rel="stylesheet" href="{{asset('src/css/smusic.css')}}"/>
	</head>
	<body>
		<!-- <header>
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
		</header> -->
		<section>
			
			<!-- 歌手资料 -->
	<div class="grid-music-container f-usn">
 <!--    <div class="m-music-play-wrap">
        <div class="u-cover"></div>
        <div class="m-now-info">
            <h1 class="u-music-title"><strong>标题</strong><small>歌手</small></h1>
            <div class="m-now-controls">
                <div class="u-control u-process">
                    <span class="buffer-process"></span>
                    <span class="current-process"></span>
                </div>
                <div class="u-control u-time">00:00/00:00</div>
                <div class="u-control u-volume">
                    <div class="volume-process" data-volume="0.50">
                        <span class="volume-current"></span>
                        <span class="volume-bar"></span>
                        <span class="volume-event"></span>
                    </div>
                    <a class="volume-control"></a>
                </div>
            </div>
            <div class="m-play-controls">
                <a class="u-play-btn prev" title="上一曲"></a>
                <a class="u-play-btn ctrl-play play" title="暂停"></a>
                <a class="u-play-btn next" title="下一曲"></a>
                <a class="u-play-btn mode mode-list current" title="列表循环"></a>
                <a class="u-play-btn mode mode-random" title="随机播放"></a>
                <a class="u-play-btn mode mode-single" title="单曲循环"></a>
            </div>
        </div>http://m.youku.com/video/id_XMTg3NzA4NDg1Mg==.html?spm=a2hww.20020887.m_205946.5~5!2~5~5~5!5~5~5~A
    </div> -->
    <!-- <div class="f-cb">&nbsp;</div>
    <div class="m-music-list-wrap"></div> -->
    
    <embed src="http://www.tudou.com/v/{{$value['zcontent']}}&{{$value['bid']}}&{{$value['rpid']}}&{{$value['resourceId']}}" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="480" height="400"></embed>
</div>
			
			<!-- <div class="music-tp">
				<div class="music-tp-left">
					<p><img src="{{asset('images/music-4.png')}}"/>&nbsp;分享</p>
					<p><img src="{{asset('images/music-5.png')}}"/>&nbsp;收藏(0)</p>
				</div>
				<div class="music-tp-right">
					<p><img src="{{asset('images/music-6.png')}}"/>&nbsp;<font color="red">(1)</font></p>
					<p><img src="{{asset('images/music-7.png')}}"/>&nbsp;<font color="red">(255)</font></p>
				</div>
			</div> -->
			
			<!-- 评论 -->
			<!-- <div class="concert-tp-box">
				<div class="fst-box-top" >
					<div class="fst-box-top-left">评论</div>
				</div>
				<div class="tc-box">
					<textarea placeholder="我要吐槽"></textarea>
					<span><a><font color="#3CC9F6">发表</font></a>&nbsp;<a>取消</a></span>
				</div>
			</div> -->	
			
					
	
		</section>	
			
	</body>
<script src="{{asset('src/js/smusic.min.js')}}"></script>
<script>
var musicList = [
    {
        title : '成都',
        singer : '赵雷',
        cover  : 'images/Maroon5.jpg',
        src    : 'http://www.blessathene.com/images/chengdu.mp3'
    }
];
new SMusic({
    musicList:musicList
});
</script>
<!-- <script src="{{asset('js/jquery.min.js')}}"></script>
<script>
	
	/*字号rem尺寸变化代码*/
	window.onload=window.onresize=function(){
	    document.documentElement.style.fontSize=100*document.documentElement.clientWidth/750+'px';
	};
   
</script> -->	
</html>
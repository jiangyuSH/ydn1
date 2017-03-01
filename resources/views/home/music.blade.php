<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
	<meta name="version" content="1.0.0">
	<meta name="author" content="smohan,http://www.smohan.net/">
    <link rel="stylesheet" type="text/css" href="http://www.52player.com/Demos/Images/common.css">
    <link rel="stylesheet" type="text/css" href="http://www.52player.com/Demos/Images/style.css">
    <link rel="stylesheet" href="{{asset('music/css/smusic.css')}}"/>
    <title>HTML5音乐播放器SMusic</title>
	<style rel="stylesheet">
		.page-title{
			margin:30px;
			text-align:center;
			color:#fff;
			font-size:18px;
		}
		.page-title h1{
			font-size:30px;
			padding:30px 0;
		}
		.page-title a{
			color:#fff;
		}
	</style>
</head>
<body>
<div class="grid-music-container f-usn">
    <div class="m-music-play-wrap">
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
        </div>
    </div>
    <div class="f-cb">&nbsp;</div>
    <div class="m-music-list-wrap"></div>
</div>

<script src="{{asset('music/js/musicList.js')}}"></script>
<script src="{{asset('music/js/smusic.min.js')}}"></script>
<script>
    new SMusic({
        musicList : musicList
    });
</script>
</body>
</html>
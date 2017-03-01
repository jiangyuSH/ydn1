<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" href="{{asset('src/css/smusic.css')}}"/>
<title>作品播放</title>
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
<script src="{{asset('src/js/smusic.min.js')}}"></script>
<script>
var musicList = [
	{
		title : '成都',
		singer : '赵雷',
		cover  : 'images/Maroon5.jpg',
		src    : 'http://www.blessathene.com/images/chengdu.mp3'
	},
	{
		title : '不必在乎我是谁',
		singer : '林忆莲',
		cover  : 'images/yangcong.jpg',
		src    : 'http://www.blessathene.com/images/ss.mp3'
	},	
	{
		title : '绅士',
		singer : '薛治国',
		cover  : 'images/yangcong.jpg',
		src    : 'http://www.blessathene.com/images/shenshi.mp3'
	},
	{
		title : '从此以后',
		singer : '吴亦凡',
		cover  : 'images/yangcong.jpg',
		src    : 'http://www.blessathene.com/images/congci.mp3'
	}
];
new SMusic({
	musicList:musicList
});
</script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<!--<p>适用浏览器：360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. 不支持IE8及以下浏览器。</p>-->
<!--<p>来源：<a href="http://sc.chinaz.com/" target="_blank">站长素材</a></p>-->
</div>
</body>
</html>
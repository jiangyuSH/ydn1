<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-个人资料</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
	</head>
	<body>
		<div class="personal-top">
			<p class="personal-top-left"><a href="{{asset('/home/index')}}">〈我</a></p><p class="personal-top-right">设置</p>
		</div>
		<div class="personal-noe">
			<div class="personal-noe-tx">
				<p class="personal-noe-tx-left">头像</p>
				<a href="{{asset('/home/personal-1')}}"><p class="personal-noe-tx-right"><img src="../images/dxs.png">〉</p></a>
			</div>
		</div>
		<form method="get" action="/home/personal/insert">
		<div class="personal-two">
		    <div class="personal-noe-xm">
				<p class="personal-noe-tx-left">姓名</p>
				<p class="personal-noe-tx-right"><input type="text" name="dname" value="" id="dname"></p>
			</div>
			<div class="personal-noe-tx">
				<p class="personal-noe-tx-left">身高</p>
				<p class="personal-noe-tx-right"><input type="text" name="dheight" value="" id="dheight"></p>
			</div>
			<div class="personal-noe-xm">
				<p class="personal-noe-tx-left">体重</p>
				<p class="personal-noe-tx-right"><input type="text" name="dwheight" value="" id="dwheight"></p>
			</div>
			<div class="personal-noe-xm">
				<p class="personal-noe-tx-left">生日</p>
				<p class="personal-noe-tx-right"><input type="text" name="dtime" value="" id="dtime"></p>
			</div>
			<div class="personal-noe-xm">
				<p class="personal-noe-tx-left">职业</p>
				<p class="personal-noe-tx-right"><input type="text" name="dzhiye" value="" id="dzhiye"></p>
			</div>
		</div>
		<div class="personal-three">
			<div class="personal-noe-tx">
				<p class="personal-noe-tx-left">十二星座</p>
				<p class="personal-noe-tx-right"><input type="text" name="dxingzuo" value="" id="dxingzuo"></p>
			</div>
		</div>
		<div class="personal-four">
			<p class="personal-four-left">简介：</p>
			<p class="personal-four-right"><textarea name="dcontent" id="dcontent"></textarea>></p>
		</div>
		<div class="personal-four">
			<p class="personal-four-left"><input type="submit" value="提交"></p>
		</div>
		</form>	
	</body>
<script src="../js/jquery.min.js"></script>
<script>

	
</script>	
</html>
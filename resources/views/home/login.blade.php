<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-登陆</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
	</head>
	<body>
		<div class="login-box">
			<form action="/home/login/insert" method="get">
				<ul>
					<li>手机号&nbsp;<input type="text" name="uname"/></li>
					<li>密码&nbsp;&nbsp;<input type="password" name="upwd"/></li>
				</ul>
			<p class="login-p1"><button>登&nbsp;陆</button></p>
			</form>
			<p class="login-p2"><a href="{{asset('home/index')}}" class="login-p2-left">返回</a><a href="{{asset('home/forget')}}" class="login-p2-right">忘记密码</a></p>
			<p class="login-p3">你还没有账号？<a href="{{asset('home/registered')}}"><font color="#289EE2">立即注册</font></a></p>
		</div>		
	</body>
<script src="../js/jquery.min.js"></script>
<script>
	
	
	
	
</script>	
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-个人头像</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
	</head>
	<body>
		<div class="personal-xg">
			<p class="personal-xg-left"><a href="personal.html">〈个人信息</a></p>
			<p class="personal-xg-center">个人头像</p>
			<p class="personal-xg-right">…</p>
		</div>
		<div>
		<form action="/home/personal/total" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
				<table>
				    <tr>
		                  <td><input type="file" name="dimage" value=""><input type="text" name="uid" value="{{session('uid')}}" style="display:none"></td>
				    </tr>
				    <tr>
		                  <td><input type="submit" value="上传"></td>
				    </tr>
				</table>
		</form>
		</div>
	</body>	
</html>
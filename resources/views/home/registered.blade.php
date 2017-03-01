<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-注册</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
	</head>
	<body>
		<div class="login-box">
			<form method="get" id="myform">
				<ul>
					<li>手机号&nbsp;&nbsp;<input id="user" placeholder="请输入手机号" type="text" name="uname"/></li>
					<li>密码&nbsp;&nbsp;&nbsp;<input id="password" placeholder="6-16位数字或字母" type="password" name="upwd"/></li>
					<li>确定密码&nbsp;<input id="eqpassword" placeholder="6-16位数字或字母" type="password" name="expwd"/></li>
					<li>验证码&nbsp;&nbsp;<input id="inputCode" placeholder="输入右侧验证码" type="text"/>
					<div id="code" onclick="createCode()" ></div>
					</li>
				</ul>
			<p onclick="validateCode()" class="login-p1"><button>注&nbsp;册</button></p>
			</form>
			<p style="text-align: right;"><a href="{{asset('/home/login')}}">返回</a></p>
		</div>		
	</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>

//验证码
$(function(){	
	createCode();
});
var code;
function createCode() { 
	code="";
	 var codeLength = 4; //验证码的长度
	 var checkCode = document.getElementById("code"); 
     var codeChars = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',       'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); //所有候选组成验证码的字符，当然也可以用中文的
	  for(var i = 0; i < codeLength; i++){
	    var charNum = Math.floor(Math.random() * 52); 
		code += codeChars[charNum]; 
	  }
	  if(checkCode){
		checkCode.className = "code";
		checkCode.innerHTML = code;	  
	  }	 
}
//提交
	
	/*验证手机*/
	$('#user').blur(function(){
		var value = $("#user").val();
		$.ajax({
			url:'/home/forget/select',
			data:'value='+value,
			type:'get',
			dataType:'text',
			success:function(data){
               if(data == 1){
               	    $("#user").val("");
	                 $("#user").attr('placeholder','该用户名已存在');
	               
               }else{
                     if(!/1((3\d)|4[9]|(5\d)|(7[079])|(8\d))\d{8}/.test($("#user").val())){
				   $("#user").val("");
				   $("#user").attr('placeholder','请输入正确的手机号');
				 }
				
               }
			}
		});
	});
	/*验证密码*/
	$('#password').blur(function(){
       if(!/^[0-9a-zA-Z]{6,16}$/.test($("#password").val())){
	  $("#password").val("");
	  $("#password").attr('placeholder','请输入正确的密码'); 
	}
	});
	/*验证密码是不是一样*/
	$('#eqpassword').blur(function(){
       var password=$("#password").val();
	var eqpassword=$("#eqpassword").val();
	if(password!=eqpassword){
	  $("#password").val("");
	  $("#eqpassword").val("");
	  $("#eqpassword").attr('placeholder','两次密码不一致'); 
	}
	});
	/*验证码*/
	function validateCode(){
	 var inputCode=document.getElementById("inputCode").value; 
	 if(inputCode.length <= 0) {
		$("#inputCode").attr('placeholder','请输入验证码');
	 }else if(inputCode.toUpperCase() != code.toUpperCase()){
		$("#inputCode").attr('placeholder','输入验证码有误');
		createCode(); 
	 }else{
	 	 var myform = document.getElementById('myform');
		 var action = document.createAttribute('action');
		 action.value = '/home/registered/insert';
		 myform.attributes.setNamedItem(action);
	 }


} 

	
</script>	
</html>
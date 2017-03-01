<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-忘记密码</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
	</head>
	<body>
		<div class="forget-top">
			<p class="forget-left"><a href="{{asset('home/login')}}">〈</a></p><p class="forget-right">找回密码</p>
		</div>
		<div class="forget-content">
			<form method="get" id="myform">
				<ul>
					<li>手机号&nbsp;&nbsp;<input id="user" placeholder="请输入手机号" type="text" name="uname"/></li>
					<li>密码&nbsp;&nbsp;&nbsp;<input id="password" placeholder="6-16位数字或字母" type="password" name="upwd"/></li>
					<li>验证码&nbsp;&nbsp;<input id="inputCode" placeholder="输入右侧验证码" type="text"/>
					<div id="code1" onclick="createCode()" ></div>
					</li>
				</ul>
			<p onclick="validateCode()" class="login-p1"><button>确&nbsp;定</button></p>
			</form>
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
	 var checkCode = document.getElementById("code1"); 
     var codeChars = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',       'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); //所有候选组成验证码的字符，当然也可以用中文的
	  for(var i = 0; i < codeLength; i++){
	    var charNum = Math.floor(Math.random() * 52); 
		code += codeChars[charNum]; 
	  }
	  if(checkCode){
		checkCode.className = "code1";
		checkCode.innerHTML = code;	  
	  }	 
}
	
	/*验证手机*/
	$('#user').blur(function(){
		var value = $('#user').val();
		//alert(value);
		$.ajax({
			url:'/home/forget/select',
			data:'value='+value,
			type:'get',
			dataType:'text',
			success:function(data){
                if(data == 0){
                    $("#user").val("");
	                $("#user").attr('placeholder','该用户名不存在');
                }
			}
		});
		//alert('ssss');
		
	});
	/*验证密码*/
	$('#password').blur(function(){
       if(!/^[0-9a-zA-Z]{6,16}$/.test($("#password").val())){
	  $("#password").val("");
	  $("#password").attr('placeholder','请输入正确的密码'); 
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
		 action.value = '/home/forget/update';
		 myform.attributes.setNamedItem(action);
	 }

} 

	
</script>	
</html>
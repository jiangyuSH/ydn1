<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-动态详情</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
	</head>
	<body>
		<header>
			<div class="sort-top">
					<div class="sort-top-one">
					<a href="{{asset('home/index')}}">〈</a>
					</div>
					<div class="sort-top-two">
					动态详情
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
			</div>	
		</header>
		<section>
			<div class="news-top">
				<span>{{$result['ntitle']}}</span>
				<p>{{$result['ntime']}}</p>
			</div>
			<div class="news-content">
				<p>{{$result['ncontent']}}</p>
			</div>
			<div class="news-img">
				<img src="{{asset('images/news-1.png')}}"/>
				<p>王源在重庆举行演唱会</p>
			</div>
			<div class="news-img">
				<img src="{{asset('images/news-1.png')}}"/>
				<p>王源在重庆举行演唱会</p>
			</div>
			
			
			<!-- 吐槽-->
			<div class="concert-tp-box">
				<div class="fst-box-top" >
					<div class="fst-box-top-left">吐槽</div>
				</div>
			<form action="/home/comment" method="get">
				<div class="news-tc-box">
					<textarea placeholder="我要吐槽" name="ccontent"></textarea>
					<input type="text" name="nid" value="{{$result['nid']}}" style="display:none"/>
					<span><a><button color="#3CC9F6">发表</button></a>&nbsp;<button>取消</button></span>
				</div>
			</form>
			</div>	
			
			<!-- 评论-->
			<div class="concert-tp-box">
			@foreach($result2 as $result2)
				<div class="xq-bl-box">
					<div class="xq-bl-box-left">
						<img  src="{{asset($result2['dimage'])}}"/>
					</div>
					<div class="xq-bl-box-right">
						<span>{{$result2['dname']}}</span>
						<p>{{$result2['ccontent']}}</p>
						<!-- <p><a href="#">回复</a></p> -->
						<div class="xq-bl-box-right-dz">
							<span style="display:none">{{$result2['cid']}}</span><span class="zai"><img src="{{asset('images/xq-7.png')}}" /></span><span>{{$result2['czai']}}</span>
						</div>
					</div>
				</div>
			@endforeach
				<!-- <div class="xq-bl-button">查看更多</div> -->
			</div>
			<script src="{{asset('js/jquery.min.js')}}"></script>
				<script>
                    $('.zai').click(function(){
                    	var uid = {{$uid}};
                    	 var cid = $(this).prev().html();
                    	if(uid == 0){
                    		location.href = '{{url('/home/login')}}';
                    	}else{
                    		var cid = $(this).prev().html();
                    		var dd;
                    		$.ajax({
                    			url:'/home/comment/select',
                    			data:'cid='+cid,
                    			type:'get',
                    			cache:false,
                    	     	async:false,
                    			dataType:'text',
                    			success:function(data){
                    				dd = data;
                    			}
                    		});
                    		if(dd == 1){
                    			alert('您已操作');
                    		}else{
                    				var czai = $(this).next().html();
                    	 czai++
                    	 var ds = $(this).next().html(czai);
                    	 // var cid = $('.zai').prev().html();
                    	 alert(czai);
                    	 $.ajax({
                    	 	url:'/home/comment/zai',
                    	 	data:{czai:czai,cid:cid},
                    	 	type:'get',
                    	 	dataType:'text',
                    	 	success:function(data){
                                 if(data == 1){
                                 	// alert('点在成功');
                                 }else{
                                 	alert('请稍后重试');
                                 }
                    	 	}
                    	 });
                    		}
                    	}

                    	 
                    });
				</script>
		</section>	
		
		
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
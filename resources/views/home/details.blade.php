<!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-个人详情</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
		<link rel="stylesheet" href="{{asset('dist/css/swiper.min.css')}}">
	</head>
	<body>
		<header>
			<div class="sort-top">
					<div class="sort-top-one">
					<a href="{{asset('/home/index')}}">
						<img src="../images/top-01.png"/>
					</a>
					</div>
					<div class="sort-top-two">
					个人详情
					</div>
					<div class="sort-top-three">
						<img src="../images/top-02.png"/>
					</div>
			</div>
			<nav class="sort-herd">
				<span class="nav-item menu" id="open-icon">
					<img class="sort-img-left" src="../images/sort-sys.png"/>
				</span>
				<span class="nav-item logo">
					<lable id="search-wrap" class="search-wrap">
						<input id="search-input" class="search-input"style="color: #999999;" type="text" name="address"  value="请输入关键词搜索" onfocus="if(this.value=='请输入关键词搜索'){this.value=''};this.style.color='#999999';"
						onblur="if(this.value==''||this.value=='请输入关键词搜索'){this.value='请输入关键词搜索'};this.style.color='#999999';">
						<button id="search-button" class="search-button" type="submit">
							<img src="../images/search.png"/>
						</button>
					</lable>
				</span>
				<span class="nav-item admin" id="open-top">
					<img class="sort-img-right" src="{{asset('images/sort-top1.png')}}"/>
				</span>
				<div class="clearfix"></div>
			</nav>
			<ul class="nav-list" id="nav-list">
				<img src="../images/2.png"/>
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
				<span class="company-conpic">
					<img src="../images/top.png"/>
				</span>			
			</div>	
		</header>
		<section>
			<!-- 详细资料 -->
			<div class="xq-box">
				<div class="xq-box-left">
					<img src="{{asset($result['dimage'])}}"/>
				</div>
				<div class="xq-box-center">
					<span>{{$result['dname']}}<span>
					<img src="{{asset('images/xq-01.png')}}" class="dianji"/>
					<span id="dianzai">{{$result['dzai']}}</span>
					<span id="uid" style="display:none">{{$result['uid']}}</span>
					<span id="sid" style="display:none">{{session('uid')}}</span>
				</div>
				<div class="xq-box-right">
			@if($result['dzai'] == 0)
		      @if($result['dxingzuo'] == '白羊座')
	       <img class="djimg" src="{{asset('images/youke/baiyang.png')}}" />
	         @elseif($result['dxingzuo'] == '金牛座')
			 <img class="djimg" src="{{asset('images/youke/jinniu.png')}}" />
			 @elseif($result['dxingzuo'] == '巨蟹座')
			 <img class="djimg" src="{{asset('images/youke/juxie.png')}}" />
			 @elseif($result['dxingzuo'] == '摩羯座')
			 <img class="djimg" src="{{asset('images/youke/mojie.png')}}" />
			 @elseif($result['dxingzuo'] == '人马座')
			 <img class="djimg" src="{{asset('images/youke/renma.png')}}" />
			 @elseif($result['dxingzuo'] == '狮子座')
			 <img class="djimg" src="{{asset('images/youke/shizi.png')}}" />
			 @elseif($result['dxingzuo'] == '处女座')
			 <img class="djimg" src="{{asset('images/youke/shinv.png')}}" />
			 @elseif($result['dxingzuo'] == '双鱼座')
			 <img class="djimg" src="{{asset('images/youke/shuangyu.png')}}" />
			 @elseif($result['dxingzuo'] == '双子座')
			 <img class="djimg" src="{{asset('images/youke/shuangzi.png')}}" />
			 @elseif($result['dxingzuo'] == '水瓶座')
			 <img class="djimg" src="{{asset('images/youke/shuiping.png')}}" />
			 @elseif($result['dxingzuo'] == '天枰座')
			 <img class="djimg" src="{{asset('images/youke/tianping.png')}}" />
			 @else($result['dxingzuo'] == '天蝎座')
			 <img class="djimg" src="{{asset('images/youke/tianxie.png')}}" />
			 @endif
	    <span><font color="red">等级：</font>游客</span>
	  @elseif($result['dzai']>=1 && $result['dzai']<=100)
		  
			 @if($result['dxingzuo'] == '白羊座')
	       <img class="djimg" src="{{asset('images/qingtong/baiyang.png')}}" />
	         @elseif($result['dxingzuo'] == '金牛座')
			 <img class="djimg" src="{{asset('images/qingtong/jinniu.png')}}" />
			 @elseif($result['dxingzuo'] == '巨蟹座')
			 <img class="djimg" src="{{asset('images/qingtong/juxie.png')}}" />
			 @elseif($result['dxingzuo'] == '摩羯座')
			 <img class="djimg" src="{{asset('images/qingtong/mojie.png')}}" />
			 @elseif($result['dxingzuo'] == '人马座')
			 <img class="djimg" src="{{asset('images/qingtong/renma.png')}}" />
			 @elseif($result['dxingzuo'] == '狮子座')
			 <img class="djimg" src="{{asset('images/qingtong/shizi.png')}}" />
			 @elseif($result['dxingzuo'] == '处女座')
			 <img class="djimg" src="{{asset('images/qingtong/shinv.png')}}" />
			 @elseif($result['dxingzuo'] == '双鱼座')
			 <img class="djimg" src="{{asset('images/qingtong/shuangyu.png')}}" />
			 @elseif($result['dxingzuo'] == '双子座')
			 <img class="djimg" src="{{asset('images/qingtong/shuangzi.png')}}" />
			 @elseif($result['dxingzuo'] == '水瓶座')
			 <img class="djimg" src="{{asset('images/qingtong/shuiping.png')}}" />
			 @elseif($result['dxingzuo'] == '天枰座')
			 <img class="djimg" src="{{asset('images/qingtong/tianping.png')}}" />
			 @else($result['dxingzuo'] == '天蝎座')
			 <img class="djimg" src="{{asset('images/qingtong/tianxie.png')}}" />
			 @endif
	    <span><font color="red">等级：</font>青铜</span>
		 
      @elseif($result['dzai']>100 && $result['dzai']<=200)
		   
		   @if($result['dxingzuo'] == '白羊座')
	       <img class="djimg" src="{{asset('images/qingtong/baiyang.png')}}" />
	         @elseif($result['dxingzuo'] == '金牛座')
			 <img class="djimg" src="{{asset('images/qingtong/jinniu.png')}}" />
			 @elseif($result['dxingzuo'] == '巨蟹座')
			 <img class="djimg" src="{{asset('images/qingtong/juxie.png')}}" />
			 @elseif($result['dxingzuo'] == '摩羯座')
			 <img class="djimg" src="{{asset('images/qingtong/mojie.png')}}" />
			 @elseif($result['dxingzuo'] == '人马座')
			 <img class="djimg" src="{{asset('images/qingtong/renma.png')}}" />
			 @elseif($result['dxingzuo'] == '狮子座')
			 <img class="djimg" src="{{asset('images/qingtong/shizi.png')}}" />
			 @elseif($result['dxingzuo'] == '处女座')
			 <img class="djimg" src="{{asset('images/qingtong/shinv.png')}}" />
			 @elseif($result['dxingzuo'] == '双鱼座')
			 <img class="djimg" src="{{asset('images/qingtong/shuangyu.png')}}" />
			 @elseif($result['dxingzuo'] == '双子座')
			 <img class="djimg" src="{{asset('images/qingtong/shuangzi.png')}}" />
			 @elseif($result['dxingzuo'] == '水瓶座')
			 <img class="djimg" src="{{asset('images/qingtong/shuiping.png')}}" />
			 @elseif($result['dxingzuo'] == '天枰座')
			 <img class="djimg" src="{{asset('images/qingtong/tianping.png')}}" />
			 @else($result['dxingzuo'] == '天蝎座')
			 <img class="djimg" src="{{asset('images/qingtong/tianxie.png')}}" />
			 @endif
		   <span><font color="red">等级：</font>白银</span>
	  @else
		   
	         @if($result['dxingzuo'] == '白羊座')
	       <img class="djimg" src="{{asset('images/jinse/baiyang.png')}}" />
	         @elseif($result['dxingzuo'] == '金牛座')
			 <img class="djimg" src="{{asset('images/jinse/jinniu.png')}}" />
			 @elseif($result['dxingzuo'] == '巨蟹座')
			 <img class="djimg" src="{{asset('images/jinse/juxie.png')}}" />
			 @elseif($result['dxingzuo'] == '摩羯座')
			 <img class="djimg" src="{{asset('images/jinse/mojie.png')}}" />
			 @elseif($result['dxingzuo'] == '人马座')
			 <img class="djimg" src="{{asset('images/jinse/renma.png')}}" />
			 @elseif($result['dxingzuo'] == '狮子座')
			 <img class="djimg" src="{{asset('images/jinse/shizi.png')}}" />
			 @elseif($result['dxingzuo'] == '处女座')
			 <img class="djimg" src="{{asset('images/jinse/shinv.png')}}" />
			 @elseif($result['dxingzuo'] == '双鱼座')
			 <img class="djimg" src="{{asset('images/jinse/shuangyu.png')}}" />
			 @elseif($result['dxingzuo'] == '双子座')
			 <img class="djimg" src="{{asset('images/jinse/shuangzi.png')}}" />
			 @elseif($result['dxingzuo'] == '水瓶座')
			 <img class="djimg" src="{{asset('images/jinse/shuiping.png')}}" />
			 @elseif($result['dxingzuo'] == '天枰座')
			 <img class="djimg" src="{{asset('images/jinse/tianping.png')}}" />
			 @else($result['dxingzuo'] == '天蝎座')
			 <img class="djimg" src="{{asset('images/jinse/tianxie.png')}}" />
			 @endif
	       <span><font color="red">等级：</font>黄金</span>
	   
	  @endif
					<span>臣民：<span id="dianzais">{{$result['dzai']}}</span>></span>			
				</div>
			
			</div>
			<script src="{{asset('js/jquery.min.js')}}"></script>
				<script>
                    $('.dianji').click(function(){
                    	var sid = document.getElementById('sid');
                    	var sids = sid.innerText;
                    	$.ajax({
                    		url:'/home/dianzai/session',
                    		data:'sid='+sids,
                    		type:'get',
                    		dataType:'text',
                    		success:function(data){
                    			if(data == 1){	
                    			var id = document.getElementById('uid');
                    	        var uid = id.innerText;
                    	        $.ajax({
                    	        	url:'/home/dianzai/panduan',
                    	        	data:'uid='+uid,
                    	        	type:'get',
                    	        	dataType:'text',
                    	        	success:function(data){
                    	        		if(data == 1){
                    	        			alert('已经操作');
                    	        		}else{
                    	        			var dianzai = document.getElementById('dianzai');
                    	var value = dianzai.innerText;
                    	value++
                    	dianzai.innerText = value;
                    	var id = document.getElementById('uid');
                    	var uid = id.innerText;

                    	var values = document.getElementById('dianzais');
                    	values.innerText = value;
                    	$.ajax({
                    		url:'/home/dianzai/update',
                    		data:{dzai:value,uid:uid},
                    		type:'get',
                    		dataType:'text',
                    		success:function(data){
                                 if(data == 1){
                                 	//alert('关注成功');
                                 	
                                 }else{
                                 	alert('请重新关注');
                                 }
                    		}
                    	});

                    	        		}
                    	        	}
                    	        });
   

                    			
                    	
                    			}else{
                    				location.href = '/home/login';
                    			}
                    		}
                    	});
                    	
                    });
				</script>	
			<!-- 个人资料 -->
			<div class="concert-tp-box">
				<div class="zp-new-top" >
					<div class="zp-new-top-left">个人资料</div>
					<div class="zp-new-top-right"><img src="../images/top-03.png"/></div>
				</div>
				<div class="zl-box">
					<p>身高：{{$result['dheight']}}cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体重：{{$result['dwheight']}}kg</p>
					<p>生日：{{$result['dtime']}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;职业：{{$result['dzhiye']}}</p>
					<p>十二星座：{{$result['dxingzuo']}}&nbsp;&nbsp;&nbsp;</p>
				    @if($result['dxingzuo'] == '处女座' || $result['dxingzuo'] == '金牛座' || $result['dxingzuo'] == '摩羯座')
				    <p>星座属性：土</p>
				    @elseif($result['dxingzuo'] == '巨蟹座' || $result['dxingzuo'] == '天蝎座' || $result['dxingzuo'] == '双鱼座')
				    <p>星座属性：水</p>
					@elseif($result['dxingzuo'] == '双子座' || $result['dxingzuo'] == '天枰座' || $result['dxingzuo'] == '水瓶座')
					<p>星座属性：风</p>
					@elseif($result['dxingzuo'] == '白羊座' || $result['dxingzuo'] == '射手座' || $result['dxingzuo'] == '狮子座')
					<p>星座属性：火</p>
					@endif
					<p>简介：{{$result['dcontent']}}</p>	
				</div>
			</div>	
	
			<!-- 最新作品 -->
			<div class="swiper-container">
				<div class="zp-new-top" >
					<div class="zp-new-top-left">最新作品</div>
					<div onclick="hdNew()" class="zp-new-top-right"><img src="../images/top-03.png"/></div>
				</div>
				<div class="swiper-wrapper">
				    @foreach($result3 as $result3)
					<div class="swiper-slide">
						<a href="/home/musicDetails?zcontent={{$result3['zcontent']}}"><img src="{{asset($result3['zimage'])}}"/></a>
					</div>
					@endforeach
				</div>
				<!-- <div class="zp-new-box-noe" style="display: none">
					<div class="zp-new">
						<img src="../images/xq-4.png"/>
					</div>
					<div class="zp-new">
						<img src="../images/xq-4.png"/>
					</div>
					<div class="zp-new">
						<img src="../images/xq-4.png"/>
					</div>
				</div> -->
			</div>	
			<script src="{{asset('dist/js/swiper.min.js')}}"></script>
			<script>
			   var swiper = new Swiper('.swiper-container', {
			        pagination: '.swiper-pagination',
			        slidesPerView: 3,
			        paginationClickable: true,
			        spaceBetween: 30,
			        freeMode: true
			    });
		    </script>
			<!-- 最新动态 -->
			<div class="concert-tp-box">
				<div class="fst-box-top-zx" >
					<div class="fst-box-top-left-zx">最新动态</div>
					<div onclick="zxdt()" class="fst-box-top-right-zx"><img src="../images/top-03.png"/></div>
				</div>
				<div class="fst-box">
					<div class="fst-box-left">
						<img src="{{asset($result['dimage'])}}"/>
					</div>
					<div class="fst-box-right">
					@foreach($result1 as $dd)
						<a href="/home/news/index?nid={{$dd['nid']}}"><p>.{{$dd['ntitle']}}</p></a>
						
					@endforeach
					</div>
				</div>
				<div class="fst-box-noe" style="display: none;">
					<div class="fst-box-left">
						<img src="{{asset($result['dimage'])}}"/>
					</div>
					<div class="fst-box-right">
					@foreach($result1 as $dd)
						<a href="/home/news/index?nid={{$dd['nid']}}"><p>.{{$dd['ntitle']}}</p></a>
						
					@endforeach
					</div>
				</div>
			</div>	
			
			<!-- 粉丝团 -->
			<div class="concert-tp-box">
				<div class="fst-box-top-fs" >
					<div class="fst-box-top-left-fs">加入{{$result['dname']}}粉丝团</div>
					<div class="fst-box-top-right-fs"><img src="../images/top-03.png"/></div>
				</div>
				<div class="fst-box">
					<div class="fst-box-left">
						<img src="../images/xq-5.png"/>
					</div>
					<div class="fst-box-right">
						<img src="../images/xq-6.png"/>
					</div>
				</div>
			</div>
			
			<!-- 吐槽-->
			<div class="concert-tp-box">
				<div class="fst-box-top" >
					<div class="fst-box-top-left">吐槽</div>
					<div class="fst-box-top-right"></div>
				</div>
				<div class="tc-box">
				<form action="/home/pinglun/fa" method="get">
					<textarea placeholder="我要吐槽" name="pcontent"></textarea>
					<input type="text" name="uid" value="{{$result['uid']}}" style="display:none">
					<span><button type="submit">发表</button>&nbsp;<button type="reset">取消</button></span>
				</form>
				</div>
			</div>	
			
			<!-- 评论-->
			<div class="concert-pl-box">
			 @foreach($result2 as $result2)
				<div class="xq-bl-box">
					<div class="xq-bl-box-left">
						<img  src="{{asset($result2['dimage'])}}"/>
					</div>
					<div class="xq-bl-box-right">
						<span>{{$result2['dname']}}</span>
						<p>{{$result2['pcontent']}}</p>
						<p><a href="#">回复</a></p>
						<div class="xq-bl-box-right-dz">
							<span style="display:none">{{$result2['pid']}}</span><span class="zai"><img src="../images/xq-7.png"/></span> <span id="shu">{{$result2['dianzai']}}</span>
						</div>
					</div>
				</div>
			 	@endforeach
				<div class="xq-bl-button">查看更多</div>
			</div>	

			<script>
                 $('.zai').click(function(){
                 	    var id = {{$id}};

                 	    if(id == 0){
                 	    	location.href = "/home/login";
                 	    }else{
	                var dd = $(this).next().html();
                 	var pid = $(this).prev().html();
                    var cc;
                 		$.ajax({
                 			url:'/home/details/select',
                 			data:'pid='+pid,
                 			type:'get',
                 			cache:false,
                    	    async:false,
                 			dataType:'text',
                 			success:function(data){
                 				cc = data;
                 			}
                 		});
                 		if(cc == 1){
                 			alert('您已操作');
                 		}else{
                 			 dd++;
                 	 var ds = $(this).next().html(dd);
                 	 $.ajax({
                 	 	url:'/home/details/add',
                 	 	data:{dianzai:dd,pid:pid},
                         type:'get',
                       dataType:'text',
                         success:function(data){
                         	if(data == 1){
                         		 alert('关注成功');
                         	}else{
                         		alert('请再次关注');
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
	    document.documentElement.style.fontSize=100*document.documentElement.clientWidth/750+'px';
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
              $("#top-none").slideToggle();
         });
     });
     /*滑动效果*/
     function hdNew(){ 
     	 $(".zp-new-box-noe").slideToggle();
     }
     /*滑动效果*/
     function zxdt(){ 
     	 $(".fst-box-noe").slideToggle();
     }
</script>	
</html>
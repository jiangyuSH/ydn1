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
	</head>
	<body>
		<header>
			<div class="sort-top">
					<div class="sort-top-one">
					<a href="{{url('home/index')}}">〈</a>
					</div>
					<div class="sort-top-two">
					原创
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
				<span class="company-conpic">
					<img src="{{asset('images/top.png')}}"/>
				</span>			
			</div>	
		</header>
		<section>
					
			<!-- 原创精选 -->
			<div class="concert-tp-box">
				<div class="zp-new-top" >
					<div class="zp-new-top-left">原创精选</div>
					<div class="zp-new-top-right" onclick="openYc()">〉</div>
				</div>
				@foreach($result as $value)
				<div class="yc-box">
					<div class="yc-box-noe">
						<img src="{{asset($value['zimage'])}}"/>
					</div>
					<div class="yc-box-two">
						<span><a href="/home/musicDetails?zcontent={{$value['zcontent']}}">{{$value['zname']}}</a></span>
						<p>音乐人：{{$value['zname']}}</p>
						<p><img src="{{asset('images/yc-1.png')}}"/>&nbsp;{{$value['ting']}}</p>
						<p class="shu">关注:{{$value['guanzhu']}}</p>
					</div>
					<div class="yc-box-three">
						<span><img src="{{asset('images/yc-2.png')}}"/></span>
					</div>
					<div style="display:none">{{$value['zid']}}</div>
				</div>
			    @endforeach
			    <script src="{{asset('js/jquery.min.js')}}"></script>
			    <script>
			    
                    $('.yc-box-three').click(function(){
                    	 //alert('shghdbvfhd');
                    	 var uid = {{$uid}};
                    	 if(uid == 0){
                    	 	location.href = '/home/login';
                    	 }else{
                    	     var zid = $(this).next().html();
                    	      // var guanzhushu = $(this).prev().children().eq(3).html();
				                    	  //  var dd = guanzhushu.substring(3,10);
				                    	   var cc;
				               //var zid = $(this).next().html();
                    	     $.ajax({
                    	     	url:'/home/gzs',
                    	     	data:'zid='+zid,
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
                    	      	  var guanzhushu = $(this).prev().children().eq(3).html();
		                    	   var dd = guanzhushu.substring(3,10);
		                    	   dd++;
		                    	   // alert(dd);
		                    	   var zid = $(this).next().html();
		                    	   var ee = $(this).prev().children().eq(3).html('关注:'+dd);
		                    	      $.ajax({
		                    	   	url:'/home/original/update',
		                    	   	data:{zid:zid,guanzhu:dd},
		                    	   	type:'get',
		                    	   	dataType:'text',
		                    	   	success:function(data){
		                    	   		if(data == 1){
		                    	   			alert('关注成功');
		                    	   		}else{
		                    	   			alert('sssss');
		                    	   		}
		                    	   	}
		                    	   });

                    	      }
                    	 }
                    	
                    	
                    });
			    </script>
				
				
			</div>	
			

		</section>	
		
		<footer>
			<div class="footer-note">
				<p class="font40 note-item">关于我们&nbsp;|&nbsp;帮助中心&nbsp;|&nbsp;友情链接&nbsp;|&nbsp;法律声明&nbsp;|&nbsp;网站地图</p>
				<p class="font40 note-item">公司地址：北京市朝阳区朝阳北路大悦公寓2-1603</p>
				<p class="font40 note-item">版权：北京雅典娜文化传播有限公司所有</p>
			</div>
		</footer>		
	</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
	var cj="作曲";
	
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
             //document.getElementById("top-none").style.display="";
              $("#top-none").slideToggle();
         });
     });
	
	
    /*show原创精选*/
	  function openYc(){
	  	 $("#showYc").slideToggle();
	  }
	   /*滑动效果*/
     function hdNew(){ 
     	 $(".zp-new-box-noe").slideToggle();
     }
     
     
     /*show创作人*/
     function showNoe(){	
     	document.getElementById("yc-cz-noe").style.display="";
     	document.getElementById("yc-cz-two").style.display="none";
     	document.getElementById("yc-cz-three").style.display="none";
     	cj="作曲";
     }
     function showTwo(){	
     	document.getElementById("yc-cz-noe").style.display="none";
     	document.getElementById("yc-cz-two").style.display="";
     	document.getElementById("yc-cz-three").style.display="none";
     	cj="作词";
     }
     function showThree(){	
     	document.getElementById("yc-cz-noe").style.display="none";
     	document.getElementById("yc-cz-two").style.display="none";
     	document.getElementById("yc-cz-three").style.display="";
     	cj="编曲";
     }
     
     /*加载更多音乐*/
   	 var height=7;	 
     function ylAdd(msg){
        var odiv="<div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<a href='#'><img src='../images/yc-1.png'/></a></div></div>";
     	for(var i=0;i<4;i++){	
     		$(".yl-add").before(odiv);		
     	}
     	document.getElementById("yc-cz-noe").style.height=height+'rem';	
     	var heights=1.8;
     	height += heights;
     }
     
     /*换人*/
     function openYcCz(){
     	if(cj=="作曲"){		
	     	var aa="<div class='yc-cz-box'><div class='yc-cz-noe'><img src='../images/xq-4.png'/></div><div class='yc-cz-two'><span>音乐人：周杰伦110</span><p>这是一个大帅哥，你说是不是。这是一个大帅哥，你说是不是。这是一个大帅哥，你说是不是。</p></div><div class='yc-cz-three'><a href='originalDetails.html'><img src='../images/yc-3.png'/></a></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<a href='originalDetails.html'><img src='../images/yc-1.png'/></a></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><p class='yl-add'><a onclick='ylAdd()'>加载更多〉〉</a><p>";	
	     	$("#yc-cz-noe").html(aa);
     	}else if(cj=="作词"){
     		var bb="<div class='yc-cz-box'><div class='yc-cz-noe'><img src='../images/xq-4.png'/></div><div class='yc-cz-two'><span>音乐人：周杰伦120</span><p>这是一个大帅哥，你说是不是。这是一个大帅哥，你说是不是。这是一个大帅哥，你说是不是。</p></div><div class='yc-cz-three'><a href='originalDetails.html'><img src='../images/yc-3.png'/></a></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<a href='originalDetails.html'><img src='../images/yc-1.png'/></a></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><p class='yl-add'><a onclick='ylAdd()'>加载更多〉〉</a><p>";	
	     	$("#yc-cz-two").html(bb);
     	}else if(cj=="编曲"){
     		var cc="<div class='yc-cz-box'><div class='yc-cz-noe'><img src='../images/xq-4.png'/></div><div class='yc-cz-two'><span>音乐人：周杰伦130</span><p>这是一个大帅哥，你说是不是。这是一个大帅哥，你说是不是。这是一个大帅哥，你说是不是。</p></div><div class='yc-cz-three'><a href='originalDetails.html'><img src='../images/yc-3.png'/></a></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<a href='originalDetails.html'><img src='../images/yc-1.png'/></a></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><div class='yinglue-box'><div class='yinglue-box-left'>我是一个大帅哥</div><div class='yinglue-box-right'>北京艺术学院&nbsp;<img src='../images/yc-1.png'/></div></div><p class='yl-add'><a onclick='ylAdd()'>加载更多〉〉</a><p>";	
	     	$("#yc-cz-three").html(cc);
     	}
     }     
</script>	
</html>
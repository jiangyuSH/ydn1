  <!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>雅典娜星座-我的上传</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}"/>
		<link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="sort-top">
					<div class="sort-top-one">
					<a href="/home/index">〈</a>
					</div>
					<div class="sort-top-two">
					我的上传
					</div>
					<div class="sort-top-three">
					
					</div>
				</div>
		</header>

		<section>
			<div class="uploadFile">
			<!-- <div>
                 <form action="/home/ee" method="get" enctype="multipart/form-data" target="iframe">
                    <p><input type="file" name="zcontent"></p>
                    <p><input type="submit" value="提交"></p>
                </form>
			</div> -->
			<form action="/home/UploadFile/add" method="get" enctype="multipart/form-data">
				<div class="uploadFile-left">
               <p data-toggle="modal" data-target="#myModal"><iframe id="iframe" name="iframe" style="height:2rem;width:100%"></iframe></p>
				</div>
				<div class="uploadFile-right">
					<p>选择作品上传</p>
					<p><input type="text" name="zcontent" value=""/></p>
					<p><input type="text" name="zimage" value="" id="image" style="display:none"></p>
					<p>作品名称:</p>
					<p><input type="text" name="zname" value=""></p>
					<p>类型</p>
					<p><select name="zleixing">
                        <option value="音乐">音乐</option>
                        <option value="视频">视频</option>
					</select></p>
				</div>
				<div><input type="submit" value="提交"></div>
				</form>
			</div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form role="form" action="/home/ee" class="form-horizontal" method="post" enctype="multipart/form-data" target="iframe">
	{!! csrf_field() !!}

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					上传头像
				</h4>
			</div>
			<div class="modal-body">
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">作品</label>
					<div class="col-sm-10">
					  <input type="file" class="form-control" id="inputEmail3" name="zcontent" placeholder="">
					</div>
				</div>	
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
				<button type="submit" class="btn btn-primary">
					提交更改
				</button>
			</div>	
		</div><!-- /.modal-content -->
		</form>
		</div>
	</div><!-- /.modal -->
	<script>
				function tan(a){
					var image = document.getElementById('image');
					image.value = a;
				}
		        </script>
			<div class="queryFile-top">查看上传的文件</div>
			<div class="queryFile">
				 	<div class="queryFile-noe">
					 	<select id="select">
						  <option value="1">名字</option>
						  <option value="2">时间</option>
						</select>
					</div>
					<div class="queryFile-two" id="input">
						<input type="text" placeholder="请输入作品名称"/>
					</div>
					<div class="queryFile-three">
						<button>查询</button>
					</div>
			</div>
			<div class="singer-jg">
				<div class="singer-jg-left">
					<p>发布原创歌曲《倔强》</p>
				</div>
				<div class="singer-jg-right">
					<p>2017-2-21</p>
				</div>
			</div>
			<div class="singer-jg">
				<div class="singer-jg-left">
					<p>发布原创歌曲《倔强》</p>
				</div>
				<div class="singer-jg-right">
					<p>2017-2-21</p>
				</div>
			</div><div class="singer-jg">
				<div class="singer-jg-left">
					<p>发布原创歌曲《倔强》</p>
				</div>
				<div class="singer-jg-right">
					<p>2017-2-21</p>
				</div>
			</div><div class="singer-jg">
				<div class="singer-jg-left">
					<p>发布原创歌曲《倔强》</p>
				</div>
				<div class="singer-jg-right">
					<p>2017-2-21</p>
				</div>
			</div>
			<div class="singer-jg">
				<div class="singer-jg-left">
					<p>发布原创歌曲《倔强》</p>
				</div>
				<div class="singer-jg-right">
					<p>2017-2-21</p>
				</div>
			</div><div class="singer-jg">
				<div class="singer-jg-left">
					<p>发布原创歌曲《倔强》</p>
				</div>
				<div class="singer-jg-right">
					<p>2017-2-21</p>
				</div>
			</div><div class="singer-jg">
				<div class="singer-jg-left">
					<p>发布原创歌曲《倔强》</p>
				</div>
				<div class="singer-jg-right">
					<p>2017-2-21</p>
				</div>
			</div>
		</section>	
	
		
	</body>
    <!-- jQuery -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{asset('bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
	/*字号rem尺寸变化代码*/
	window.onload=window.onresize=function(){
	    document.documentElement.style.fontSize=100*document.documentElement.clientWidth/750+'px'
	};
	
	/*选择查询*/
	$("#select").change(function(){
	  var val=$('#select option:selected') .val(); 
		if(val=="1"){
			var input="<input type='text' placeholder='请输入作品名称'/>";
			document.getElementById('input').innerHTML = input;
		}else if(val=="2"){
		    var input="<input type='text' placeholder='请输入开始时间'/>&nbsp;至&nbsp;<input placeholder='请输入结束时间' type='text'/>";
			document.getElementById('input').innerHTML = input;
		}	
	});
   
</script>	
</html>
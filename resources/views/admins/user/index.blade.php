<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>雅典娜</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{asset('dist/css/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('bower_components/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
		 <!-- Navigation -->
		<!--网站顶部区域-->
		@include('admins.top')
		<!--包含左侧区域-->
		@include('admins.left')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>用户ID</th>
                                            <th>用户名</th>
                                            <th>用户邮箱</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($result as $user)
										<tr class="odd gradeX">
                                            <td>{{$user['uid']}}</td>
                                            <td>{{$user['uname']}}</td>
                                            <td>{{$user['upwd']}}</td>
                                            <td>
											    <button data-id="{{$user['uid']}}" class="update " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button>  
												<button data-id="{{$user['uid']}}" class="delete"><span class="glyphicon glyphicon-remove"></span></button>
											</td>
                                            
                                        </tr>
										@endforeach
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form role="form" action="/admins/user/update" class="form-horizontal" method="post">
	{!! csrf_field() !!}

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					用户信息详情
				</h4>
			</div>
			<div class="modal-body">
				
                  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">用户ID</label>
					<div class="col-sm-10">
					  <input  ="text" class="form-control" id="inputEmail3" name="uid" readonly  placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="uname" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">密码</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" name="upwd" placeholder="">
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

    <!-- jQuery -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{asset('bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
     <script>
	     $(function(){
		     //删除用户操作
			 $('.delete').bind('click',function(){
			     //获取删除的用户id
				 var uid = $(this).attr('data-id');
				 
				//确定用户操作
				if(!confirm('您确定要删除id为:'+uid+'用户吗')){
		             return false;		
				}
				
				var $btn = $(this);
				
				//ajax传送到服务器
				$.ajax({
				    url:'/admins/user/delete',
					data:'uid='+uid,
					type:'get',
					dataType:'text',
					success:function(data){
					    //根据返回结果判断您是否删除成功
						if(data==1){
						    //清空当前行
							//找到tr标签进行删除操做
							$btn.parents('tr').remove();
						}else{
						    //失败警告即可
							alert('删除失败');
						}
					}
				});
				
			 });
			 
			 //更新用户操作
			$('.update').bind('click',function(){
				//获取用户信息 写入弹出窗
				var uid = $(this).attr('data-id');
				//到数据库中获取数据 //更新用户界面
				
				//ajax传送到服务器
				$.ajax({
					url:'/admins/user/modify',
					data:'uid='+uid,
					type:'get',
					dataType:'json',
					success:function(data){
						//将用户信息摆放到弹出框中
						$('input[name="uid"]').val(data.uid);
						$('input[name="uname"]').val(data.uname);
						$('input[name="upwd"]').val(data.upwd);
					}
				
				});
				
			});
		 });
	 </script>
</body> 

</html>

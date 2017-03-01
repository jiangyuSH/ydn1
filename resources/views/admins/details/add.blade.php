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
		<!--网站顶部区域-->
		@include('admins.top')
		<!--包含左侧区域-->
		@include('admins.left')
        <div id="page-wrapper">
         
            <!-- /.row -->
			  <div class="row">
				
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
								<div class="col-lg-7">
									<form role="form" action="/admins/details/insert" method="post" enctype="multipart/form-data">
										{!! csrf_field() !!}
										 <div class="form-group">
                                            <label>用户名</label>
                                            <input class="form-control" name="dname">
                                           
                                        </div>
										
										 <div class="form-group">
                                            <label>身高</label>
                                            <input class="form-control" type="text" name="dheight">
                                           
                                        </div>
										 <div class="form-group">
                                            <label>体重</label>
                                            <input class="form-control" type="text" name="dwheight">
                                           
                                        </div>
										 <div class="form-group">
                                            <label>生日</label>
                                            <input class="form-control" type="text" name="dtime">
                                        </div>
                                        <div class="form-group">
                                            <label>职业</label>
                                            <input class="form-control" type="text" name="dzhiye">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>十二星座</label>
                                            <input class="form-control" type="text" name="dxingzuo">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>头像</label>
                                            <input class="form-control" type="file" name="dimage">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>简介</label>
                                            <input class="form-control" type="text" name="dcontent">
                                           
                                        </div>
										<button type="submit" class="btn btn-success">注册用户</button>
										<button type="reset" class="btn btn-warning">重置操作</button>
									</form>
								
								</div>

           <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

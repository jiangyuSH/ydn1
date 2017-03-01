<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
// use App\User_address;
class modelsController extends Controller
{
    function ss(){
         $user = DB::connection('mysql2')->select('SELECT * FROM user');
        dd($user);
    }
	
function dd(){
	return view('home.2058.index');
}

//测试操作
   function ee(Request $request){
      // $zcontent = $request->file('zcontent'); 
         //生成文件夹
	  $dir = date('Y-m-d');
	  
	  //生成文件名
	  $filename = uniqid().'.jpg';
	  
	  //组合上传路径存储到数据库中
	  $path=$dir.'/'.$filename;
	  
	  //移动上传文件
	  $request->file('zcontent')->move($dir,$filename);
       echo "<script>parent.tan('".$path."')</script>";
      // echo '<script>parent.alert(123)</script>';
       // echo $zcontent;
   }
}

<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class forgetController extends Controller
{
     //前台忘记密码页
     public function forget(){
     	return view('home.forget');
     }

     //前台忘记密码操作
     public function  update(Request $request){
     	$uname = $request->input('uname');
       	$upwd = $request->input('upwd');
        $upwd = md5($upwd);

        if(empty($uname) || empty($upwd)){
        	return error('/home/forget','请输入正确内容',1);
        }else{
        	$result = DB::table('user')->where('uname','=',$uname)->update(['upwd'=>$upwd]);

        	if($result){
        		return success('/home/login','修改成功',1);
        	}else{
        		return error('/home/forget','修改失败,请重新填写',1);
        	}
        }

     }

     //前台忘记密码select操作
     public function select(Request $request){
     	$uname = $request->input('value');

     	$result = DB::table('user')->where('uname','=',$uname)->first();

     	if($result){
     		echo 1;
     	}else{
     		echo 0;
     	}
     }
}

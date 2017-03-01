<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class registeredController extends Controller
{
   //前台注册页
   public function registered(){
        return view('home.registered');
   }

   //前台注册页操作
   public function insert(Request $request){
   	     $uname = $request->input('uname');
         $pwd = $request->input('upwd');
         if(empty($pwd) || empty($uname)){
         	return error('/home/registered','输入不能为空',1);
         }else{
         	$pwd = md5($pwd);
            $result = DB::table('user')->insert(['uname'=>$uname,'upwd'=>$pwd]);
            $select = DB::table('user')->where('uname','=',$uname)->first();
            $value = DB::table('details')->insert(['uid'=>$select['uid']]);
         if($result){
         	return success('/home/login','注册成功',1);
         }else{
         	return error('/home/registered','注册错误，请重新注册',1);
         }
         }
   }
}

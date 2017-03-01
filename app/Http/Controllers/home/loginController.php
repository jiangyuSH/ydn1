<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
   //前台登陆页面
   public function login(){
        return view('home.login');
   }

   //前台登录操作
   public function insert(Request $request){
        $uname = $request->input('uname');
        $upwd = md5($request->input('upwd'));

        $result = DB::table('user')->select('uname','uid')->where('uname','=',$uname)->where('upwd','=',$upwd)->first();
        //dd($result);exit;
        if($result){
        	$request->session()->put('isLogin',true);
        	$request->session()->put('uid',$result['uid']);
        	$request->session()->put('uname',$result['uname']);
        	return redirect('/home/index');
        }else{
        	return error('/home/login','登录错误,请重新登录',1);
        }
   }
}

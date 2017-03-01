<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class originalController extends Controller
{
   //前台原创操作
   public function original(Request $request){
   	    $result = DB::table('zuopin')->get();
   	   //dd($result);
   	    $uid = $request->session()->get('uid');
   	        if($uid == ''){
   	        	$aa = 0;
   	        }else{
   	        	$aa = 1;
   	        }
        return view('home.original',['result'=>$result,'uid'=>$aa]);
   }

   //前台作品关注数修改操作
   public function update(Request $request){
        $zid = $request->input('zid');
        $guanzhu = $request->input('guanzhu');
        $uid = $request->session()->get('uid');
        $result1 = DB::table('gzs')->insert(['uid'=>$uid,'zid'=>$zid]);

        $result = DB::table('zuopin')->where('zid','=',$zid)->update(['guanzhu'=>$guanzhu]);

        if($result){
        	echo 1;
        }else{
        	echo 0;
        }
   }

   //前台作品关注查询
   public function gzs(Request $request){
   	    $zid = $request->input('zid');
   	    $uid = $request->session()->get('uid');
   	    $result = DB::table('gzs')->where('uid','=',$uid)->where('zid','=',$zid)->first();

   	    if($result){
   	    	echo 1;
   	    }else{
   	    	echo 0;
   	    }
   }

   //前台作品播放页
   public function musicDetails(Request $request){
   	    $zid = $request->input('zid');
   	    $ting = $request->input('ting');
   	    return view('home.musicDetails');
   }

   //前台音乐播放页
   public function music(){
        return view('home.music');
   }
}

<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class dianzaiController extends Controller
{
   //点赞操作
   public function update(Request $request){
    $sid = $request->session()->get('uid');
       $dzai = $request->input('dzai');
       $uid = $request->input('uid');
       $result = DB::table('details')->where('uid','=',$uid)->update(['dzai'=>$dzai]);
       $result1 = DB::table('panduan')->insert(['uid'=>$uid,'sid'=>$sid]);

       if($result){
            echo 1;
       }else{
            echo 0;
       }
   }

   //点赞session判断操作
   public function session(Request $request){
        $uid = $request->session()->get('uid');
        $sid = $request->input('sid');
        if($uid != ''){
            echo 1;
        }else{
            echo 0;
        }
   }

   //点赞判断操作
   public function panduan(Request $request){
        $sid = $request->session()->get('uid');
        $uid = $request->input('uid');

        $result = DB::table('panduan')->where('uid','=',$uid)->where('sid','=',$sid)->first();

        if($result){
          echo 1;
        }else{
          echo 0;
        }
   }
}

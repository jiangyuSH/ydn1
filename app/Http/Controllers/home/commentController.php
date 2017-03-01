<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class commentController extends Controller
{
   //前台新闻评论操作
   public function comment(Request $request){
       $ccontent = $request->input('ccontent');
       $nid = $request->input('nid');
       if($ccontent == ''){
           return error('/home/news/index?nid='.$nid,'评论内容不能为空',1);
       }
       $uid = $request->session()->get('uid');
       $ctime =date('Y-m-d H:i:s',time());
       $result = DB::table('comment')->insert(['nid'=>$nid,'uid'=>$uid,'ccontent'=>$ccontent,'ctime'=>$ctime]);
      
       if($result){
            return success('/home/news/index?nid='.$nid,'评论成功',1);
       }else{
            return error('/home/news/index?nid='.$nid,'评论失败',1);
       }
   }

   //前台新闻点赞
   public function zai(Request $request){
        $czai = $request->input('czai');
        $cid = $request->input('cid');
        $uid = $request->session()->get('uid');
         $result2 = DB::table('dzs')->insert(['uid'=>$uid,'cid'=>$cid]);
        $result = DB::table('comment')->where('cid','=',$cid)->update(['czai'=>$czai]);
        if($result){
            echo 1;
        }else{
            echo 0;
        }
   }

   //前台新闻评论点在select操作
   public function select(Request $request){
        $cid = $request->input('cid');
        $uid = $request->session()->get('uid');

        $result = DB::table('dzs')->where('uid','=',$uid)->where('cid','=',$cid)->first();

        if($result){
            echo 1;
        }else{
            echo 0;
        }
   }
}

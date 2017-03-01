<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use Cache;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class detailsController extends Controller
{
   //前台个人详情页操作
   public function details(Request $request){
   	    $uid = $request->input('uid');

          //设置键名
          //$details = $request->getRequestUri();

          //判断有没有缓存文件  如果没有将数据存储到缓存中
          //if(!Cache::has($details)){
             $result = DB::table('details')->where('uid','=',$uid)->first();

             //将数据存储到缓存中
            // Cache::put($details,$result,1);
          //}else{
            //从缓存中获取数据
            //$result = Cache::get($details);
          //}
   	    
   	    // $result1 = DB::table('news')->select('ntitle','nid')->where('uid','=',$uid)->get();
        $result1 = DB::select("SELECT ntitle,nid FROM news WHERE uid = '{$uid}' ORDER BY ntime desc LIMIT 6");
 // dd($result1);
   	    $result2 = DB::table('pinglun')->join('details','pinglun.uid','=','details.uid')->where('puid','=',$uid)->get();
        $result3 = DB::select("SELECT zcontent,zimage FROM zuopin WHERE uid = '$uid' LIMIT 8");
        
   	  $id = $request->session()->get('uid');
      if($id == ''){
         $id=0;
      }else{
         $id=1;
      }
        return view('home.details',['result'=>$result,'result1'=>$result1,'result2'=>$result2,'id'=>$id,'result3'=>$result3]);
   }

   //前台个人详情页评论点赞操作
   public function add(Request $request){
   	    $pid = $request->input('pid');

   	    $dianzai = $request->input('dianzai');
        $uid = $request->session()->get('uid');
   	    $result = DB::table('pinglun')->where('pid','=',$pid)->update(['dianzai'=>$dianzai]);
   	    $result1 = DB::table('dianzan')->insert(['pid'=>$pid,'uid'=>$uid]);

   	    if($result){
   	    	echo 1;
   	    }else{
   	    	echo 0;
   	    }
   }

   //前台个人详情页评论查询操作
   public function select(Request $request){
   	    $pid=$request->input('pid');
   	    $uid = $request->session()->get('uid');

   	    $result = DB::table('dianzan')->where('pid','=',$pid)->where('uid','=',$uid)->first();

   	    if($result){
   	    	echo 1;
   	    }else{
   	    	echo 0;
   	    }
   }
}

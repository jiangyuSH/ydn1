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
   	    // $result = DB::table('zuopin')->get();
        $result = DB::select("SELECT zid,uid,zname,zcontent,zimage,ting,guanzhu FROM zuopin");
        $result2 = DB::select("SELECT dimage,uid FROM details ORDER BY dzai desc LIMIT 5");
   	    $uid = $request->session()->get('uid');
   	        if($uid == ''){
   	        	$aa = 0;
   	        }else{
   	        	$aa = 1;
   	        }
        return view('home.original',['result'=>$result,'uid'=>$aa,'result2'=>$result2]);
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
   	    // $zid = $request->input('zid');
   	    // $ting = $request->input('ting');

         $zcontent = $request->input('zcontent');
         $bid = $request->input('bid');
         $rpid = $request->input('rpid');
         $resourceid = $request->input('resourceId');
         $value = $request->only(['zcontent','bid','rpid','resourceId']);
        // dd($value);
   	    return view('home.musicDetails',['value'=>$value]);
   }

   //前台音乐播放页
   public function music(){
        return view('home.music');
   }

   //前台详情页操作
   public function index(Request $request){
        $uid = $request->input('uid');
         $uids = $request->session()->get('uid');
          if($uids == ''){
              $aa = 0;
            }else{
              $aa = 1;
            }
        $result = DB::table('zuopin')->where('uid','=',$uid)->get();
    
        return view('home.zuopin',['result'=>$result,'uid'=>$aa]);
   }
}

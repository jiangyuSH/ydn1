<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use Cache;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class sortController extends Controller
{
   //前台排行榜
   public function sort(Request $request){
      //设置键名
      $sorts = $request->getRequestUri();

      //判断有没有缓存文件   如果没有将数据存储到缓存中
      if(!Cache::has($sorts)){
           $result = DB::select('SELECT uid,dimage,dname,dxingzuo,dzai FROM details ORDER BY dzai desc LIMIT 6');
// dd($result[1]['dzai']);
           //将数据存储到缓存中
           Cache::put($sorts,$result,1);
      }else{
         //从缓存中获取数据
         $result = Cache::get($sorts);
      }
   	
	   return view('home.sort',['result'=>$result]);
   }

   //前台排行榜星座指定选择
   public function sorts(Request $request){
   	     $id = $request->input('id');

   	     if($id == 1){
   	     	$aa = '白羊座';
   	     }else if($id == 2){
   	     	$aa = '金牛座';
   	     }else if($id == 3){
   	     	$aa = '双子座';
   	     }else if($id == 4){
   	     	$aa = '巨蟹座';
   	     }else if($id == 5){
   	     	$aa = '狮子座';
   	     }else if($id == 6){
   	     	$aa = '处女座';
   	     }else if($id == 7){
   	     	$aa = '天枰座';
   	     }else if($id == 8){
   	     	$aa = '天蝎座';
   	     }else if($id == 9){
   	     	$aa = '摩羯座';
   	     }else if($id == 10){
   	     	$aa = '射手座';
   	     }else if($id == 11){
   	     	$aa = '水瓶座';
   	     }else{
   	     	$aa = '双鱼座';
   	     }

   	     $result = DB::select("SELECT uid,dimage,dname,dxingzuo,dzai FROM details WHERE dxingzuo = '{$aa}' ORDER BY dzai desc LIMIT 6");

   	     return view('home.sort',['result'=>$result]);
   }
}

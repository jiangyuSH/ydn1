<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use Cache;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class dynamicController extends Controller
{
   //前台动态页
   public function dynamic(Request $request){

   	//设置建明
   	$keys = $request->getRequestUri();

   	//判断有没有缓存文件   如果没有将数据存储到缓存中
   	if(!Cache::has($keys)){
        $result = DB::select('SELECT * FROM news ORDER BY ntime desc LIMIT 3');

        //将数据存储到缓存中
        Cache::put($keys,$result,1);
   	}else{
   		//从缓存中获取数据
   		$result = Cache::get($keys);
   	}
	   return view('home.dynamic',['result'=>$result]);
   	}
   
}

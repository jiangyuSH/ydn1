<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use Cache;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    //前台首页
	public function index(Request $request){
		//设置建名
		$key = $request->getRequestUri();
		
		//判断有没有缓存  如果没有将数据放入到缓存中
		
		if(!Cache::has($key)){
			$result = DB::select('SELECT * FROM details ORDER BY dzai desc LIMIT 12');
			
			//将数据放入到缓存中
			Cache::put($key,$result,1);
		}else{
			//从缓存中获取数据
			$result = Cache::get($key);
		}
		

		$result1 = DB::select('SELECT * FROM news ORDER BY ntime desc LIMIT 3');
// dd($result1);
		$result2 = DB::select('SELECT * FROM flink WHERE fshow = 1');
		return view('home.index',['result'=>$result,'result1'=>$result1,'result2'=>$result2]);
	}
}

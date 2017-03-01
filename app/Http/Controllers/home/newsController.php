<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class newsController extends Controller
{
    //前台新闻详情页
    public function index(Request $request){
        $nid = $request->input('nid');
        $uid = $request->session()->get('uid');
        if($uid == ''){
            $aa = 0;
        }else{
            $aa = 1;
        }
        // dd($uid);
        $result = DB::table('news')->where('nid','=',$nid)->first();
        //dd($result);
        $result2 = DB::table('comment')->join('details','comment.uid','=','details.uid')->where('nid','=',$nid)->get();
        //dd($result2);

        //还要查一些数据
        /*
                                创建一个表  状态值

         *  */

        return view('home.news',['result'=>$result,'result2'=>$result2,'uid'=>$aa]);
    }
}

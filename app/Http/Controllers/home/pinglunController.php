<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pinglunController extends Controller
{
    //前台评论操作
    public function fa(Request $request){
        $uid = $request->session()->get('uid');

        $puid = $request->input('uid');
        $pcontent = $request->input('pcontent');
        if($pcontent == ""){
            return error('/home/details?uid='.$puid,'请输入评论内容',1);
        }
        $result = DB::table('pinglun')->insert(['uid'=>$uid,'puid'=>$puid,'pcontent'=>$pcontent]);

        if($result){
            return success('/home/details?uid='.$puid,'评论成功',1);
        }else{
            return error('/home/details?uid='.$uid,'评论失败',1);
        }
    }
}

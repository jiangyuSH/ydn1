<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadFileController extends Controller
{
   //前台作品上传操作
   public function add(Request $request){
       $zcontent = $request->input('zcontent');
       $dd= substr($zcontent,35,70);
      
       $zname = $request->input('zname');
       $value = $request->input('zimage');
       $zleixing = $request->input('zleixing');
       $uid = $request->session()->get('uid');
       if($uid == null){
            return redirect('/home/login');
       }
       $result = DB::table('zuopin')->insert(['uid'=>$uid,'zname'=>$zname,'zcontent'=>$dd,'zimage'=>$value,'zleixing'=>$zleixing]);

       if($result){
            return success('/home/UploadFile','添加成功',1);
       }else{
            return error('/home/UploadFile','添加失败',1);
       }
   }
}

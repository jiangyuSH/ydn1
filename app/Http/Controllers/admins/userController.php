<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class userController extends Controller
{
   //后台用户展示页
   public function index(){
        $result = DB::table('user')->get();

        return view('admins.user.index',['result'=>$result]);
   }

   //后台用户修改页面
   public function modify(Request $request){
        $uid = $request->input('uid');

        $result = DB::table('user')->where('uid','=',$uid)->first();

       return response()->json($result);
   }

   //后台用户修改操作
   public function update(Request $request){
        $uname = $request->input('uname');

        $upwd = $request->input('upwd');
        $upwd = md5($upwd);

        //dd($upwd);exit;
        $uid = $request->input('uid');

        $result = DB::table('user')->where('uid','=',$uid)->update(['uname'=>$uname,'upwd'=>$upwd]);

        if($result){
            return success('/admins/user/index','修改成功',1);
        }else{
            return error('/admins/user/index','修改失败',1);
        }
   }

   //后台用户删除操作
   public function delete(Request $request){
        $uid = $request->input('uid');

        $result = DB::table('user')->where('uid','=',$uid)->delete();

        if($result){
            echo 1;
        }else{
            echo 0;
        }
   }
}

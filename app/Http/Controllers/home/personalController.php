<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class personalController extends Controller
{
   //前台个人中心页
   public function personal(){
        return view('home.personal');
   }

   //前台头像上传
   public function personals(){
   	    return view('home.personal-1');
   }

   //前台头像修改操作
   public function total(Request $request){
         //检测文件是否是上传文件
      if(!$request->hasFile('dimage')){
          return error('/admins/details/add','请选择要上传的图片',1);
      }
      
      //生成文件夹
      $dir = date('Y-m-d');
      
      //生成文件名
      $filename = uniqid().'.jpg';
      
      //组合上传路径存储到数据库中
      $path=$dir.'/'.$filename;
      
      //移动上传文件
      $request->file('dimage')->move($dir,$filename);

      $value = $request->only(['dimage','uid']);
      $value['dimage'] = $path;
      $uid = $request->input('uid');
      $result = DB::table('details')->where('uid','=',$uid)->update($value);
      $result1 = DB::table('user')->where('uid','=',$uid)->update(['uimage'=>$path]);
      if($result){
      	return success('/home/personal','上传成功',1);
      }else{
      	return error('/home/personal-1','上传失败',1);
      }
   }

   //前台个人信息注册
   public function insert(Request $request){
   	    $uid = $request->session()->get('uid');
         
         $value = $request->only(['dname','dheight','dwheight','dtime','dzhiye','dxingzuo','dcontent']);

        $result = DB::table('details')->where('uid','=',$uid)->update($value);

        if($result){
        	return success('/home/index','添加成功',1);
        }else{
        	return error('/home/personal','添加失败',1);
        }
   }
}

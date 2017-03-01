<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class yanchangController extends Controller
{
   //后台演唱会添加页
   public function add(){
        return view('admins.yanchang.add');
   }

   //后台演唱会操作
   public function insert(Request $request){
      //   //检测文件是否是上传文件
      // if(!$request->hasFile('yimage')){
      //     return error('/admins/yanchang/add','请选择要上传的图片',1);
      // }
      
      // //生成文件夹
      // $dir = date('Y-m-d');
      
      // //生成文件名
      // $filename = uniqid().'.jpg';
      
      // //组合上传路径存储到数据库中
      // $path=$dir.'/'.$filename;
      
      // //移动上传文件
      // $request->file('yimage')->move($dir,$filename);
      $file = $request->file('yimage');
      
      $dir = date('Y-m-d');

      $filename = uniqid().'.webm';

      $path=$dir.'/'.$filename;

      $request->file('yimage')->move($dir,$filename);



      dd($path);
   }
}

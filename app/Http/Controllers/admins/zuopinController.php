<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class zuopinController extends Controller
{
   //后台作品添加页
   public function add(){
        return view('admins.zuopin.add');
   }

   //后台作品添加操作
   public function insert(Request $request){
        //检测文件是否是上传文件
      if(!$request->hasFile('zimage')){
          return error('/admins/zuopin/add','请选择要上传的图片',1);
      }
      
      //生成文件夹
      $dir = date('Y-m-d');
      
      //生成文件名
      $filename = uniqid().'.jpg';
      
      //组合上传路径存储到数据库中
      $path=$dir.'/'.$filename;
        
      //移动上传文件
      $request->file('zimage')->move($dir,$filename);

      $value = $request->only(['uid','zname','ztitle','zimage']);
      $value['zimage'] = $path;

      $result = DB::table('zuopin')->insert($value);

      if($result){
            return success('/admins/zuopin/index','添加成功',1);
      }else{
            return error('/admins/zuopin/add','添加失败',1);
      }

   }

   //后台作品首页
   public function index(){
        $result = DB::table('zuopin')->get();

        return view('admins.zuopin.index',['result'=>$result]);
   }
}

<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class flinkController extends Controller
{
   //友情链接添加页
   public function add(){
        return view('admins.flink.add');
   }

   //后台友情链接操作
   public function insert(Request $request){
        //检测文件是否是上传文件
      if(!$request->hasFile('fimage')){
          return error('/admins/flink/add','请选择要上传的图片',1);
      }
      
      //生成文件夹
      $dir = date('Y-m-d');
      
      //生成文件名
      $filename = uniqid().'.jpg';
      
      //组合上传路径存储到数据库中
      $path=$dir.'/'.$filename;
      
      //移动上传文件
      $request->file('fimage')->move($dir,$filename);

        $value = $request->only(['fname','faddress','fimage']);
        $value['fimage'] = $path;

        $result = DB::table('flink')->insert($value);

        if($result){
            return success('/admins/flink/index','添加成功',1);
        }else{
            return error('/admins/flink/add','添加失败',1);
        }
   }

   //后台友情链接操作
   public function index(Request $request){
        $result = DB::table('flink')->get();

        return view('admins.flink.index',['result'=>$result]);
   }

   //后台友情链接修改页
   public function modify(Request $request){
        $fid = $request->input('uid');

        $result = DB::table('flink')->where('fid','=',$fid)->first();

        return response()->json($result);
   }

   //后台友情链接修改操作
   public function update(Request $request){
        //检测文件是否是上传文件
      if(!$request->hasFile('fimage')){
          return error('/admins/flink/add','请选择要上传的图片',1);
      }
      
      //生成文件夹
      $dir = date('Y-m-d');
      
      //生成文件名
      $filename = uniqid().'.jpg';
      
      //组合上传路径存储到数据库中
      $path=$dir.'/'.$filename;
      
      //移动上传文件
      $request->file('fimage')->move($dir,$filename);

        $fid = $request->input('fid');

        $value = $request->only(['fname','faddress','fimage']);
        $value['fimage'] = $path;

        $result = DB::table('flink')->where('fid','=',$fid)->update($value);

        if($result){
            return success('/admins/flink/index','修改成功',1);
        }else{
            return error('/admins/flink/index','修改失败',1);
        }
   }
}

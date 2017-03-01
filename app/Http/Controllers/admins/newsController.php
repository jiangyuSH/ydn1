<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class newsController extends Controller
{
   //后台新闻添加页
   public function add(){
        return view('admins.news.add');
   }

   //后台新闻添加操作
   public function insert(Request $request){
       //检测文件是否是上传文件
      if(!$request->hasFile('nimage')){
          return error('/admins/news/add','请选择要上传的图片',1);
      }
      
      //生成文件夹
      $dir = date('Y-m-d');
      
      //生成文件名
      $filename = uniqid().'.jpg';
      
      //组合上传路径存储到数据库中
      $path=$dir.'/'.$filename;
      
      //移动上传文件
      $request->file('nimage')->move($dir,$filename);

        $ntime = date('Y-m-d H:i:s',time());
        $nname = $request->input('nname');
        $ntitle = $request->input('ntitle');
        $uid = $request->input('uid');
        $ncontent = $request->input('ncontent');
      $value = $request->only(['nname','ntitle','uid','ncontent']);

      $result = DB::table('news')->insert(['ntitle'=>$ntitle,'nname'=>$nname,'ncontent'=>$ncontent,'ntime'=>$ntime,'uid'=>$uid,'nimage'=>$path]);

      if($result){
        return success('/admins/news/index','添加成功',1);
      }else{
        return error('/admins/news/add','添加失败',1);
      }
   }

   //后台新闻首页
   public function index(){
        $result = DB::table('news')->get();

        return view('admins.news.index',['result'=>$result]);
   }

   //后台新闻修改页
   public function modify(Request $request){
        $uid = $request->input('uid');

        $result = DB::table('news')->where('uid','=',$uid)->first();

        return response()->json($result);
   }

   //后台新闻删除操作
   public function delete(Request $request){
        $uid = $request->input('uid');

        $result = DB::table('news')->where('uid','=',$uid)->delete();

        if($result){
            echo 1;
        }else{
            echo 0;
        }
   }

   //后台新闻修改操作
   public function update(Request $request){
         //检测文件是否是上传文件
      if(!$request->hasFile('nimage')){
          return error('/admins/details/add','请选择要上传的图片',1);
      }
      
      //生成文件夹
      $dir = date('Y-m-d');
      
      //生成文件名
      $filename = uniqid().'.jpg';
      
      //组合上传路径存储到数据库中
      $path=$dir.'/'.$filename;
      
      //移动上传文件
      $request->file('nimage')->move($dir,$filename);

      $nid = $request->input('nid');

      $value = $request->only(['nname','ntitle','ntime','uid','nimage','ncontent']);

      $value['nimage'] = $path;

      $result = DB::table('news')->where('nid','=',$nid)->update($value);

      if($result){
        return success('/admins/news/index','修改成功',1);
      }else{
        return error('/admins/news/index','修改失败',1);
      }
   }
}

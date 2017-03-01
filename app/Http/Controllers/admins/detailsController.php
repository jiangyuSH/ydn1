<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class detailsController extends Controller
{
    //后台用户详情首页
    public function index(){
        $result = DB::table('details')->get();

        return view('admins.details.index',['result'=>$result]);
    }

    //后台用户详情修改页
    public function modify(Request $request){
        $did = $request->input('did');

        $result = DB::table('details')->where('did','=',$did)->first();

        return response()->json($result);
    }

    //后台用户详情操作
    public function update(Request $request){
        $did = $request->input('did');
        $value = $request->only(['dname','dheight','dwheight','dtime','dzhiye','dxingzuo','dcontent']);
       // dd($value);exit;

        $result = DB::table('details')->where('did','=',$did)->update($value);

        if($result){
            return success('/admins/details/index','修改成功',1);
        }else{
            return error('/admins/details/index','修改失败',1);
        }
    }

    //后台用户详情删除操作
    public function delete(Request $request){
        $did = $request->input('did');

        $result = DB::table('details')->where('did','=',$did)->delete();

        if($result){
            echo 1;
        }else{
            echo 0;
        }
    }

    //后台用户详情添加页
    public function add(Request $request){
        return view('admins.details.add');
    }

    //后台用户详情添加操作
    public function insert(Request $request){
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

      $value = $request->only(['dname','dheight','dwheight','dtime','dzhiye','dxingzuo','dimage','dcontent']);
      $value['dimage'] = $path;
     // dd($value);
     $result = DB::table('details')->where('did','=',1)->update($value);

     if($result){
        return success('/admins/details/index','添加成功',1);
     }else{
        return error('/admins/details/add','添加失败',1);
     }
    }
}

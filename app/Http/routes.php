<?php

use Intervention\Image\Image;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Intervention\Image\ImageManager;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
	$result = DB::select('SELECT * FROM details ORDER BY dzai desc LIMIT 4');
    $result1 = DB::select('SELECT * FROM news ORDER BY ntime desc LIMIT 3');
	$result2 = DB::select('SELECT * FROM flink WHERE fshow = 1');
	return view('home.index',['result'=>$result,'result1'=>$result1,'result2'=>$result2]);
});


 Route::group(
    [
    'middleware'=>'ceshi',
    'prefix'=>'home',
    'namespace'=>'home',
    ],
    function(){
        Route::get('credis','ceshiController@credis');
        Route::get('ydnflush','ceshiController@ydnFlush');
        Route::get('hotten','ceshiController@hotTen');
    });

/* Route::get('/home/ceshi',function(){
    //require '../vendor/autoload.php';
    $manager = new ImageManager();
    dd($manager);
    $path = 'E:\wwww\1ydn'.'/5.jpg';
    $re=$manager->make($path)->resize(300, 200);
    return $re->response('jpg');
}); */

//搜索功能
Route::post('home/search','home\publicController@search');

    //前台新闻点赞

Route::get('home/imgs','home\ceshiController@index');

//后台首页
Route::get('/admins/index','admins\indexController@index');

//后台用户展示页
Route::get('/admins/user/index','admins\userController@index');

//后台用户修改页面
Route::get('/admins/user/modify','admins\userController@modify');

//后台用户修改操作
Route::post('/admins/user/update','admins\userController@update');

//后台用户修改操作
Route::post('/admins/details/update','admins\detailsController@update');

//后台用户删除操作
Route::get('/admins/user/delete','admins\userController@delete');

//后台用户详情首页
Route::get('/admins/details/index','admins\detailsController@index');

//后台用户详情修改页
Route::get('/admins/details/modify','admins\detailsController@modify');

//后台用户删除操作
Route::get('/admins/details/delete','admins\detailsController@delete');

//后台用户详情添加页
Route::get('/admins/details/add','admins\detailsController@add');

//后台用户详情添加操作
Route::post('/admins/details/insert','admins\detailsController@insert');

//后台新闻添加页
Route::get('/admins/news/add','admins\newsController@add');

//后台新闻添加操作
Route::post('/admins/news/insert','admins\newsController@insert');

//后台新闻列表页
Route::get('/admins/news/index','admins\newsController@index');

//后台新闻修改页
Route::get('/admins/news/modify','admins\newsController@modify');

//后台新闻删除操作
Route::get('/admins/news/delete','admins\newsController@delete');

//后台新闻修改操作
Route::post('/admins/news/update','admins\newsController@update');

//友情链接添加页
Route::get('/admins/flink/add','admins\flinkController@add');

//后台友情链接操作
Route::post('/admins/flink/insert','admins\flinkController@insert');

//后台友情链接首页
Route::get('/admins/flink/index','admins\flinkController@index');

//后台友情链接修改页
Route::get('/admins/flink/modify','admins\flinkController@modify');

//后台友情链接修改操作
Route::post('/admins/flink/update','admins\flinkController@update');

//后台作品添加页
Route::get('/admins/zuopin/add','admins\zuopinController@add');

//后台作品添加操作
Route::post('/admins/zuopin/insert','admins\zuopinController@insert');

//后台作品首页
Route::get('/admins/zuopin/index','admins\zuopinController@index');

//后台演唱添加页
Route::get('/admins/yanchang/add','admins\yanchangController@add');

//后台演唱会操作
Route::post('/admins/yanchang/insert','admins\yanchangController@insert');








//前台登陆页面
Route::get('home/login','home\loginController@login');

//前台登录操作
Route::get('home/login/insert','home\loginController@insert');

//前台退出操作
Route::get('home/outLogin','home\outLoginController@outLogin');

//前台注册页
Route::get('home/registered','home\registeredController@registered');

//前台注册页操作
Route::get('/home/registered/insert','home\registeredController@insert');

//前台忘记密码页
Route::get('home/forget','home\forgetController@forget');

//前台忘记密码操作
Route::get('home/forget/update','home\forgetController@update');

//前台忘记密码select操作
Route::get('home/forget/select','home\forgetController@select');

//前台首页
Route::get('home/index','home\indexController@index');

//前台动态页
Route::get('home/dynamic','home\dynamicController@dynamic');

//前台排行榜
Route::get('home/sort','home\sortController@sort');

//前台排行帮指定星座选择
Route::get('home/sorts','home\sortController@sorts');

//前台演唱会
Route::get('home/concert','home\concertController@concert');

//前台声声漫画页
Route::get('home/comic','home\comicController@comic');

//前台个人详情页
Route::get('home/details','home\detailsController@details');

//前台个人详情页评论点赞操作
Route::get('home/details/add','home\detailsController@add');

//前台个人详情页点赞查询
Route::get('home/details/select','home\detailsController@select');

//前台个人中心页
Route::get('home/personal','home\personalController@personal');

//前台
Route::get('home/personal-1','home\personalController@personals');

//前台个人头像添加
Route::post('home/personal/total','home\personalController@total');

//前台个人信息注册
Route::get('home/personal/insert','home\personalController@insert');

//点赞操作
Route::get('home/dianzai/update','home\dianzaiController@update');

//点赞session判断
Route::get('home/dianzai/session','home\dianzaiController@session');

//点在判断操作
Route::get('home/dianzai/panduan','home\dianzaiController@panduan');

// //前台评论操作
// Route::get('home/pinglun/fa','home\pinglunController@fa');

    //前台新闻点赞
Route::get('home/comment/zai','home\commentController@zai');

//前台首页点赞select操作
Route::get('home/comment/select','home\commentController@select');

//前台新闻详情页
Route::get('home/news/index','home\newsController@index');

//前台原创
Route::get('home/original','home\originalController@original');

//前台作品关注操作
Route::get('home/original/update','home\originalController@update');

//前台作品关注判断
Route::get('home/gzs','home\originalController@gzs');

//前台作品播放页
Route::get('home/musicDetails','home\originalController@musicDetails');

//前台音乐播放页
Route::get('home/music','home\originalController@music');

// //前台新闻评论操作
// Route::get('home/comment','home\commentController@comment');

//网站前台
Route::group(['middleware'=>'login'],function(){
	//前台新闻评论操作
Route::get('home/comment','home\commentController@comment');

    //前台评论操作
Route::get('home/pinglun/fa','home\pinglunController@fa');


});


//model层
Route::get('home/ss','home\modelsController@ss');
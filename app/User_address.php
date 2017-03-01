<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class User_address extends Model
{
	 protected $connection = 'mysql2';
	  protected $table = "user";
    //友情链接
    // public function getlist(){
    // 	//链接yadianna数据库中的flink表
    // 	  // protected $connection = 'blessathene';
    // 	//  protected $table = "flink";
    // 	 return DB::table('flink')->get();
    // 	// return DB::connection('blessathene')->select('SELECT * FROM flink');
    // }
}

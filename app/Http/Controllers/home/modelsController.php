<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
// use App\User_address;
class modelsController extends Controller
{
    function ss(){
         $user = DB::connection('mysql2')->select('SELECT * FROM user');
        dd($user);
    }
}

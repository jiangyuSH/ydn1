<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
   //后台首页
   public function index(){
	   return view('admins.index');
   }
}

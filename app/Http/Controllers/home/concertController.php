<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class concertController extends Controller
{
    //前台演唱会
	public function concert(){
		return view('home.concert');
	}
}

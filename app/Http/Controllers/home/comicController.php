<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class comicController extends Controller
{
    //前台声声漫画页
    public function comic(){
        return view('home.comic');
    }
}

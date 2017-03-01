<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class outLoginController extends Controller
{
    //退出操作
    public function outLogin(Request $request){
        //清楚session
        $request->session()->flush();

        return redirect('/home/index');
    }
}

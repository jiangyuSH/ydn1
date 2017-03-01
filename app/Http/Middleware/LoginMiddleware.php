<?php

namespace App\Http\Middleware;

use Closure;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	    //检测是否有是否有登录信息
		if($request->session()->has('isLogin') && $request->session()->has('uname')){
		    return $next($request);
		}else{
		//返回登录界面
		    return redirect('home/login');
		}

    }
}

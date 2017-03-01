<?php
     //进行成功操作的跳转函数
    function success($url,$message,$time){
	    //调用模板
		return view('public.success',['url'=>$url,'message'=>$message,'time'=>$time*1000]);
	}
	
	//进行成功操作的跳转函数
	function error($url,$message,$time){
	    //调用模板
		return view('public.error',['url'=>$url,'message'=>$message,'time'=>$time*1000]);
	}
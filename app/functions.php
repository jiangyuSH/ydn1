<?php
use Illuminate\Support\Facades\Cache;

/*
    公共函数

 */

/**
 * like模式
 * 对字符串%，单引号，双引号 过滤
 */
function YDN_PerCent($str){
  //根据模糊查询，数据库简历索引，优化查询
   if(stripos($str,'%')!==false || stripos($str,'\'')!==false ||stripos($str,'\"')!==false){
            $pattern="/\%+?|\'+?|\"+?/";
            $str=preg_replace_callback(
                $pattern,
                function($match){

                   return '\\'.$match[0];
                },
                $str
                );
        }
  return $str;
}



/**
 * @param 缓存键名 $k
 * @param 缓存值     $v
 * @param 缓存时间 $m 默认10分钟
 *
 * @return boolean
 * 获取缓存值 没值返回false
 * 设置缓存值与删除 返回true
 * 如果缓存存在 就更新，如果不存在就添加
 */
function YDN_cache($k, $v = null, $m = 10, $pre = 'YDN_')
{
    if (is_null($v)) {
        // 获取
        if (Cache::has($pre . $k)) {
            return Cache::get($pre . $k);
        }
    } else
        if ($v === '') {
            // 删除
            $re = Cache::pull($k);
            if (is_null($re)) {
                return true;
            }
        } else {
            $k = $pre . $k;
            if (Cache::has($k)) {
                // 修改
                $re = Cache::pull($k);
                return Cache::add($k, $v, $m);
            }
            return Cache::add($k, $v, $m);
        }
    return false;
}

function YDN_flush(){
    return Cache::flush();
}


/**
 * @param unknown $arr1 原有数组
 * @param unknown $arr2 压入数组
 */
function YDN_memge($arr1,$arr2){
    foreach($arr2 as $k2 => $a2){
        if(!empty($arr1)){
            foreach ($arr1 as $a1){
                //var_dump(in_array($a2['uid'],$a1));
                if(in_array($a2['uid'],$a1)){
                    unset($arr2[$k2]);
                }
            }
        }
    }

    $re=array_merge($arr1,$arr2);
    var_dump($re);
    return $re;
//         var_dump($re);
//         echo 123;
//         var_dump($temp);
}



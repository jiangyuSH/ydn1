<?php

namespace App\Http\Model\home;

use Illuminate\Database\Eloquent\Model;
use DB;
class details extends Model
{
    //
    protected $table='details';
    protected $primaryKey='did';

    public $timestamps = false;

    /**
     * @param string $limit 看情况定是否开启
     * 此方法获取关注度最高的前十名歌手的
     * 全部
     * 作品 并缓存 到ydn_hotTenList中
     *
     * @return boolean
     */
    public function getHotTen($limit = "")
    {
        $limit =3;
        $re=YDN_cache('hotTenList');
        $re=0;
        if(!$re){
        // 生成缓存内容
        $sql = "select count(zid) as zcount,zid
                    from gzs
                    group by zid
                    limit 10";
        // 查询前10的用户
        $result = DB::select($sql);
        // $ids=array();
        $ids = "";
        foreach ($result as $v) {
            // $ids[]=$v['zid'];
            $ids .= $v['zid'] . ',';
        }
        $sql = 'select
                d.did,d.dname,d.dcontent,
                z.uid,z.ztitle,z.zname,z.zimage,z.guanzhu,z.ting,z.zshow
                from details d,zuopin z
                where d.uid=z.uid
                and z.zid in (' . trim($ids, ',') . ')
                ';
        //看情况是否打开这个
        if ($limit !== '') {
            $sql = $sql . ' limit ' . $limit;
        }
        $re = DB::select($sql);
        //YDN_cache('hotTenList',$re);
        }
        return $re;
    }

    /**
     * @param unknown $keyWord 查询的关键字
     * @param string $limit 查询的数量 为分页做准备
     */
    public function search($keyWord,$limit=''){
        $sql = "select
                d.uid,d.did,d.dname,
                z.zid,z.ztitle,z.zname,z.zimage,z.guanzhu,z.ting,z.zshow,d.dcontent
              from details d,zuopin z
              where d.uid=z.uid
              and d.dname like '%" . $keyWord . "%'";
        if($limit!==''){
            $sql=$sql.' limit '.$limit;
        }
        // echo $sql;
        $re = DB::select($sql);
        return $re;
    }
}

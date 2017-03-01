<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use function Intervention\Image\cache;
use App\Http\Model\home;
use App\Http\Model\home\details;
class ceshiController extends Controller
{
    //删除所有缓存
    public function ydnFlush(){
        $re=YDN_flush();
        var_dump($re);
    }

    //获取关注最多作品的用户，前十条 进行缓存
    public function hotTen(){
        $dm=new details();

        $re=$dm->getHotTen();
        //var_dump($re);
        $rs=array();
        foreach($re as $v){
            if(strpos($v['dname'],$str)!==false){
                $rs[]=$v;
            }
        }
        //var_dump($dm);
    }

    //redis 测试
     public function credis(){


            //var_dump($re);
           // $re=DB::table('gzs')->groupBy('zid')->get();

            //var_dump($re);
         //




        $str="今天天气不错<asdsd>asdhere ";
        $str1="http://www.tudou.com/albumplay/N-N2Mw1QWmw/p22TX-Q5Ci0.html?spm=a2h1r.8267915.m127730873276.1~3!3~5~5~A";
        $str2="http://www.tudou.com/albumplay/_7LEgO0wKFY/j3wZjkABL5o.html?spm=a2h1r.8267915.m127730873299.1~3!5~5~5~A";
        $str3='http://www.tudou.com/listplay/WyPm3IlGPTk/zFoQMGxCl8g/?spm=a2h1r.8267915.m1283.5~5!2~5!3~5~5~A';
        $str4='<embed  /www.tudou.com/l/WyPm3IlGPTk/&bid=05&iid=265037001&rpid=455918075&resourceId=455918075_05_05_99/v.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="480" height="400"></embed>';
        $str5='<embed src="http://www.tudou.com/v/F0HP4DVMM_s/&bid=05&rpid=455918075&resourceId=455918075_05_05_99/v.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="480" height="400"></embed>';
        $str6='v/F0HP4DVMM_s/&bid=05&rpid=455918075&resourceId=455918075_05_05_99/v.swf" ';
        $s=base64_encode($str5);
        dd($s);

         echo "<hr>";
         echo '<embed src="http://www.tudou.com/v/kh607rNyVSM/&bid=05&rpid=455918075&resourceId=455918075_05_05_99/v.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="480" height="400"></embed>';
         echo "<hr>";
        echo '<embed src="http://www.tudou.com/v/VHmNrzhWij4/&bid=05&rpid=455918075&resourceId=455918075_05_05_99/v.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="480" height="400"></embed>';
        echo 'credis';
     }




    public function cs(){
       $m=new \Memcache();
       $m->connect('localhost','11211');
       //$re=$m->set('aa','a1');
       echo $m->get('aa');
       exit;
//        /$r=\Illuminate\Support\Facades\Cache::store('memcached')->put('aa','bb');
      // $r=\Illuminate\Support\Facades\Cache::store('memcache')->put('aa','bb');
       //dd($r);


       //$str = '<embedtype="application/x-shockwave-flash"src="http://player.opengg.me/loader.swf?VideoIDS=你的视频ID=&isAutoPlay=false&isShowRelatedVideo=false&embedid=-&showAd=0"id="movie_player"name="movie_player"bgcolor="#FFFFFF"quality="high"wmode="transparent"allowfullscreen="true"flashvars="isShowRelatedVideo=false&showAd=0&show_pre=1&show_next=1&isAutoPlay=false&isDebug=false&UserID=&winType=interior&playMovie=true&MM Control=false&MMout=false&RecordCode=1001,1002,1003,1004,1005,1006,2001,3001,3002,3003,3004,3005,3007,3008,9999"pluginspage="http://www.macromedia.com/go/getflashplayer"width="580"height="435"></embed>'
        //return view('home.cs');
    }
    public function index(){
        $manager = new ImageManager();
        dd($manager);
    }
   //前台新闻评论操作
   public function comment(Request $request){
       $ccontent = $request->input('ccontent');
       $nid = $request->input('nid');
       if($ccontent == ''){
           return error('/home/news/index?nid='.$nid,'评论内容不能为空',1);
       }
       $uid = $request->session()->get('uid');
       $ctime =date('Y-m-d H:i:s',time());
       $result = DB::table('comment')->insert(['nid'=>$nid,'uid'=>$uid,'ccontent'=>$ccontent,'ctime'=>$ctime]);

       if($result){
            return success('/home/news/index?nid='.$nid,'评论成功',1);
       }else{
            return error('/home/news/index?nid='.$nid,'评论失败',1);
       }
   }

   //前台新闻点赞
   public function zai(Request $request){
        $czai = $request->input('czai');
        $cid = $request->input('cid');
        $uid = $request->session()->get('uid');
         $result2 = DB::table('dzs')->insert(['uid'=>$uid,'cid'=>$cid]);
        $result = DB::table('comment')->where('cid','=',$cid)->update(['czai'=>$czai]);
        if($result){
            echo 1;
        }else{
            echo 0;
        }
   }

   //前台新闻评论点在select操作
   public function select(Request $request){
        $cid = $request->input('cid');
        $uid = $request->session()->get('uid');

        $result = DB::table('dzs')->where('uid','=',$uid)->where('cid','=',$cid)->first();

        if($result){
            echo 1;
        }else{
            echo 0;
        }
   }
}

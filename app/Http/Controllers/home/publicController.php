<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Model\home\details;

class publicController extends Controller
{

    public function search(Request $request)
    {
        $input = $request->input();
        $keyWord = YDN_PerCent($input['address']);
        // var_dump($input);
        // 根据情况看这是否需要增加缓存，如果搜索过多就使用memcache 进行加密前缀 存入memcache中
        $dm = new details();

        //这个方法应该放在首页进行执行
        $dm->getHotTen();

        $re1=YDN_cache('hotTenList');
        //dd($re1);
        //如果放在首页就不用这个了
        if(!$re1){
            $re1=$dm->getHotTen();
        }
        //var_dump($re1);
        $re2=$dm->search($keyWord);
        $rs = array();
        //搜索字过滤
        foreach ($re1 as $v1) {
            if (strpos($v1['dname'], $keyWord) !== false) {
                $rs[] = $v1;
            }
        }
        $rs=YDN_memge($rs,$re2);
        //var_dump($rs);

        echo "<hr>";

        dd($rs);
        return view('home.search', [
            'result' => $rs,
            'keyWord' => $input['address']
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2018/10/11
 * Time: 10:41
 */

namespace App\Http\Controllers\Api\Test;


use App\Http\Controllers\Controller;
use App\Jobs\ProcessPodcast;
use App\Models\Test\Md5;
use Illuminate\Support\Facades\DB;

class Md5Controller extends Controller
{

    protected $md5;

    public function __construct(Md5 $md5)
    {
        $this->md5 = $md5;
    }

    /**
     *
     */
    public function index()
    {
        \Illuminate\Pagination\LengthAwarePaginator::class;

        $page = $_GET['page']??1;
        $pageSize = 20;

        $s = microtime(true);
        // 获取分页id
        $condition[] = ['id', '>=', $pageSize*($page-1)];
        $condition[] = ['str', 'like', 'a%'];
        $id = $this->md5->where($condition)->value('id')??0;

        //var_dump($this->md5->where($condition)->toSql());die;
        $condition = [];
        $condition[] = ['id', '>=', $id];
        $condition[] = ['str', 'like', 'a%'];
        $res = $this->md5->where($condition)->limit(20)->get();
        $e = microtime(true);
        //echo '<pre>';

        return [$e-$s, $id, $res];die;
    }

    public function s()
    {
        $data = User::limit(1)->get();
        #ProcessPodcast::dispatch($data)->delay(now()->addMinute(10));
        ProcessPodcast::dispatch($data);
    }
}
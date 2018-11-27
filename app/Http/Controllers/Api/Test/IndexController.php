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
use App\Models\User\User;

class IndexController extends Controller
{

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     *
     */
    public function index()
    {


    }

    public function s()
    {
        $data = User::limit(1)->get();
        #ProcessPodcast::dispatch($data)->delay(now()->addMinute(10));
        ProcessPodcast::dispatch($data);
    }
}
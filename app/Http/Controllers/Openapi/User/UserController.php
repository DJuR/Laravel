<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2018/10/31
 * Time: 16:36
 */

namespace App\Http\Controllers\Openapi\User;


use App\Http\Controllers\Controller;
use App\TransFormers\User\ViewTransformer;
use Dingo\Api\Routing\Helpers;

class UserController extends Controller
{

    use Helpers;
    /**
     * 用户信息
     */
    public function view()
    {
        $user = auth()->user();
        return $this->response()->item($user, new ViewTransformer());
    }
}
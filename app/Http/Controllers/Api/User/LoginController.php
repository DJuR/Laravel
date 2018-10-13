<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2018/10/13
 * Time: 15:28
 */

namespace App\Http\Controllers\Api\User;


use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * 用户注册
     */
    public function register()
    {

    }

    /**
     * 用户登陆
     */
    public function login(User $user)
    {
        var_dump(Auth::login($user));
    }
}
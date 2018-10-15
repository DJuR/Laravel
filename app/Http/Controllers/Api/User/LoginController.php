<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2018/10/13
 * Time: 15:28
 */

namespace App\Http\Controllers\Api\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

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
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        return $token = JWTAuth::attempt($credentials);
    }
}
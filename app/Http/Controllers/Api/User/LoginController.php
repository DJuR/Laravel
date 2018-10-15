<?php
/**
 * Created by PhpStorm.
 * User: dingjuru
 * Date: 2018/10/13
 * Time: 15:28
 */

namespace App\Http\Controllers\Api\User;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Auth\SessionGuard;
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
        $credentials = request(['email', 'password']);

        if (! $token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized', 'status' => 401], 401);
        }

        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        SessionGuard::class;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
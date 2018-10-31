<?php
/**
 * 登录
 * User: dingjuru
 * Date: 2018/10/15
 * Time: 14:34
 */

namespace App\Http\Controllers\Openapi;


use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Dingo\Api\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:openapi', ['except' => ['login', 'register']]);
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $rules = [
            'email'   => [
                'required',
                'exists:admin'
            ],
            'password' => 'required|string|min:6|max:20',
        ];
        $params = $this->validate($request, $rules);

        return ($token = $this->guard()->attempt($params))
            ? $this->respondWithToken($token)
            : response(['error' => '账号或密码错误'], 400);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admin',
            'password' => 'required|string|min:6',
        ]);

        if ($Validator->fails()) {
            return response()->json(['message' => $Validator->errors()->first()]);
        }

        event(new Registered($user = $this->create($request->all())));

        return ($token = JWTAuth::fromUser($user))
            ? $this->respondWithToken($token)
            : response(['error' => '注册错误'], 400);
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function reset(Request $request)
    {

    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('openapi')->factory()->getTTL() * 60
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('openapi');
    }

}
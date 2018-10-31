<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');
Dingo\Api\Routing\Router::class;


$api->version('v1', function ($api) {

    // 登陆可访问
    /*Route::middleware('auth:api')->namespace('api')->group(function(){
        Route::get('index', 'Index\IndexController@index')->name('index');
    });*/

    $api->group([
        'namespace' => 'App\Http\Controllers\Api',
        'middleware' => ['auth:api'],
    ], function($api){
        // 首页
        $api->get('index', ['as' => 'index', 'uses' => 'Index\IndexController@index']);

        // 退出登录
        $api->get('logout', ['as' => 'logout', 'uses' => ' User\LoginController@logout']);
        // 刷新token
        $api->get('refresh', ['as' => 'refresh','uses' => 'User\LoginController@refresh']);
        // me
        $api->get('me', ['as' => 'me','uses' => 'User\LoginController@me']);

    });


    // 未登陆都可访问
    $api->group([
        'namespace' => 'App\Http\Controllers\Api',
    ], function($api){
        /********************
         *      Auth        *
         ********************/
        // 登录
        $api->post('login', ['as' => 'login', 'uses' => 'AuthController@login']);

        // 注册
        $api->post('register', ['as' => 'register', 'uses' => 'AuthController@register']);

        // 测试
        $api->get('/', function(){
            return 'This is API module.';
        });

    });


});



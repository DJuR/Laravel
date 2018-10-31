<?php

use Illuminate\Http\Request;

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

$api->version('v1', ['prefix' => 'openapi'], function ($api) {

    $api->group([
        'namespace' => 'App\Http\Controllers\Openapi',
        'middleware' => ['auth:openapi']
    ], function($api){

        /****************************
         *          User/user       *
         ****************************/
        // 用户信息
        $api->get('user', ['as' => 'user', 'uses' => 'User\UserController@view']);

        // 首页
        $api->get('index', ['as' => 'index', 'uses' => 'Index\IndexController@index']);
    });

    // 未登陆都可访问
    $api->group([
        'namespace' => 'App\Http\Controllers\Openapi',
    ], function($api){
        /****************************
         *          Auth            *
         ****************************/
        // 登录
        $api->post('login', ['as' => 'login', 'uses' => 'AuthController@login']);

        // 注册
        $api->post('register', ['as' => 'register', 'uses' => 'AuthController@register']);

        // 刷新token
        $api->post('refresh', ['as' => 'refresh', 'uses' => 'AuthController@refresh']);

        // 重置密码
        $api->post('reset', ['as' => 'reset', 'uses' => 'AuthController@reset']);



        // 测试
        $api->get('/', function(){
            return 'This is OPENAPI module.';
        });

    });


});

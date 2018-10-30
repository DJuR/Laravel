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
        'middleware' => 'auth:openapi'
    ], function($api){
        $api->get('index', 'Index\IndexController@index');
    });

    // 未登陆都可访问
    $api->group([
        'namespace' => 'App\Http\Controllers\Openapi',
    ], function($api){
        // 登录
        $api->post('login', ['as' => 'login', 'uses' => 'Admin\LoginController@login']);
        $api->get('l', ['as' => 'l', 'uses' => 'Admin\LoginController@login']);

        // 测试
        $api->get('/', function(){
            return 'This is OPENAPI module.';
        });

    });


});

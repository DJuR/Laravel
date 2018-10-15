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

$api->version('v1', function ($api) {

    // 登陆可访问
    /*Route::middleware('auth:api')->namespace('api')->group(function(){
        Route::get('index', 'Index\IndexController@index')->name('index');
    });*/

    $api->group([
        'namespace' => 'App\Http\Controllers\Api',
        'middleware' => 'auth:api',
    ], function($api){
        $api->get('index', ['as' => 'index'], 'Index\IndexController@index');
    });


    // 登陆未登陆都可访问
    $api->group([
        'namespace' => 'App\Http\Controllers\Api',
    ], function($api){
        Illuminate\Routing\UrlGenerator::class;
        // 登录
        $api->post('login', ['as' => 'login'], 'User\LoginController@login')->name('login');
        // 退出登录
        $api->get('logout', ['as' => 'logout'],' User\LoginController@logout')->name('logout');
        // 刷新token
        $api->get('refresh', ['as' => 'refresh'], 'User\LoginController@refresh')->name('refresh');
        // me
        $api->get('me', ['as' => 'me'], 'User\LoginController@me');

        // test
        $api->get('test', function(){
            url()->route('me');
        });


    });


});



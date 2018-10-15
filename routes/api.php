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


Illuminate\Auth\AuthManager::class;
Illuminate\Contracts\Auth\UserProvider::class;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

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
        $api->get('index', 'Index\IndexController@index');
    });

    Illuminate\Container\Container::class;

    // 登陆未登陆都可访问
    $api->group([
        'namespace' => 'App\Http\Controllers\Api',
    ], function($api){
        $api->post('login', 'User\LoginController@login')->name('login');

        $api->post('reset', 'Api\ResetPasswordController@reset')->name('reset');

        $api->get('test', function(){

        });
    });


});



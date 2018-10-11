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

    $api->group(['namespace' => 'App\Http\Controllers\Openapi',], function($api){
        $api->get('index', 'Index\IndexController@index');
    });


});

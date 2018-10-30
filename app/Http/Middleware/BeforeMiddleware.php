<?php
/**
 * 前置中间件.
 * User: dingjuru
 * Date: 2018/10/11
 * Time: 18:19
 */

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {


        return $next($request);
    }
}
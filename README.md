# Laravel

### 多应用 

在`public/index.php`添加:
```$xslt
<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

// 设置 API_PREFIX
$prefix = 'api';
if(isset($_SERVER['PATH_INFO'])){
    $pathInfo = explode('/', $_SERVER['PATH_INFO']);
    $prefix = isset($pathInfo[1])
        ? $pathInfo[1] : '';

}
putenv("API_PREFIX={$prefix}");
```
### api

> api 接口项目

### openapi

> openapi 接口项目

### web 

> pc 用户项目

### backend

> 后台管理项目
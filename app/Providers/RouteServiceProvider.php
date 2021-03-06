<?php

namespace App\Providers;

use Illuminate\Config\Repository;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $prefix = $this->app['config']->get('api')['prefix'];
        switch ($prefix){
            case 'api':
                $this->mapApiRoutes();
                break;
            case 'openapi':
                $this->mapOpenapiRoutes();
                break;
            case 'web':
                $this->mapWebRoutes();
            case 'm':
                $this->mapMRoutes();
                break;
            case 'backend':
                $this->mapBackendRoutes();
                break;
        }
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::prefix('web')
            ->middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware(['api'])
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "m" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapMRoutes()
    {
        Route::prefix('m')
            ->middleware(['web'])
            ->namespace($this->namespace)
            ->group(base_path('routes/m.php'));
    }

    /**
     *
     * Define the "openapi" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapOpenapiRoutes()
    {
        Route::prefix('openapi')
            ->middleware('openapi')
            ->namespace($this->namespace)
            ->group(base_path('routes/openapi.php'));
    }

    /**
     *
     * Define the "backend" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapBackendRoutes()
    {
        Route::prefix('backend')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/backend.php'));
    }
}

<?php

namespace Shudanti\Admin\Provider;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Shudanti\Admin\Controllers\AdminController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'shudanti');
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/shudanti/admin'),
        ], 'test');
        $this->publishes([
            __DIR__.'/../config/test_admin.php' => config_path('test_admin.php'),
        ], 'test');
    }
}

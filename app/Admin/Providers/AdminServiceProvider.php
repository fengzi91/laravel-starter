<?php

namespace App\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AdminServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->registerViews();

        Inertia::setRootView('admin::admin');
        $this->registerRoutes();
    }

    protected function registerRoutes()
    {
        $routes = app_path('/admin/routes.php');
        $this->loadRoutesFrom($routes, 'admin');
    }
    protected function registerViews()
    {
        $this->loadViewsFrom(resource_path('admin/views'), 'admin');
    }
}

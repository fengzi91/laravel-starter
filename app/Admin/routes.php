<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
Route::group([
    'prefix'     => 'admin',
    'namespace'  => 'App\Admin\Http\Controllers',
    'middleware' => [
        'web',
        \App\Admin\Http\Middleware\HandleInertiaRequests::class
    ],
], function (Router $router) {

    $router->get('/', function () {
        return Inertia::render('Welcome', [
            'content' => 'Laravel 后台',
        ]);
    });

});

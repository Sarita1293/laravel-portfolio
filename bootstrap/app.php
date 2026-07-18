<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\AdminMiddleware;
use App\Models\User;
use App\Http\Middleware\TrackVisitor;



return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {


        $middleware->alias([
            'admin' => AdminMiddleware::class,
        ]);
        
        RedirectIfAuthenticated::redirectUsing(function (Request $request) {

        $user = auth()->user();

            if ($user && $user->isAdmin()) {
                return route('admin.dashboard');
            }

            return '/';

        });

        $middleware->web([
            \App\Http\Middleware\TrackVisitor::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

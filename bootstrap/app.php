<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
           $middleware->alias([
    'admin.guest' => \App\Http\Middleware\AdminRedirect::class,
    'admin.auth' => \App\Http\Middleware\AdminAuthenticate::class,
]);

    $middleware->redirectTo(fn ($request) =>
        $request->is('auth/*') ? '/account/login' : null
    );

       // 👇 Sanctum ka middleware API group me add karo
    $middleware->api(prepend: [
        EnsureFrontendRequestsAreStateful::class,
    ]);
    
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

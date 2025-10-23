<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\IsAdmin;
use Illuminate\Auth\AuthenticationException; 
use Illuminate\Http\Request; 

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        
        $middleware->alias([
            'is.admin' => IsAdmin::class, 
        ]);
        
        $middleware->validateCsrfTokens(except: [
            'debug-api/*', 
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
 
        $exceptions->renderable(function (AuthenticationException $e, Request $request) {

            if ($request->expectsJson()) {
                
                return response()->json([
                    'status' => 'error',
                    'message' => 'Unauthenticated. Token otentikasi tidak valid atau hilang.'
                ], 401);
            }
        });
        
    })->create();
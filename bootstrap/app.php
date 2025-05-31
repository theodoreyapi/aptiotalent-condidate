<?php

use App\Http\Middleware\LanguageMiddleware;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            LanguageMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // $exceptions->handler(AuthenticationException::class, function () {
        //     return response()->json([
        //         'message' => 'Non authentifié.',
        //         'status' => false
        //     ], 401);
        // });

        $exceptions->renderable(function (NotFoundHttpException $e) {
            return response()->json([
                'message' => 'Non authentifié.',
                'status' => false
            ], 401);
        });
    })->create();

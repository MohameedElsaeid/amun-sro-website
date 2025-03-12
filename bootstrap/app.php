<?php

use App\Http\Middleware\CaptureFbTracking;
use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\{Exceptions, Middleware};
use Illuminate\Foundation\Http\Middleware\{ConvertEmptyStringsToNull,
    InvokeDeferredCallbacks,
    PreventRequestsDuringMaintenance,
    TrimStrings};
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Http\Middleware\TrustHosts;
use Illuminate\Http\Middleware\TrustProxies;
use Illuminate\Http\Middleware\ValidatePostSize;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [
            __DIR__ . '/../routes/website/website_routes.php',
            __DIR__ . '/../routes/dashboard/dashboard_routes.php',
        ],
        api: [
            __DIR__ . '/../routes/api.php',
        ],
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->use([
            InvokeDeferredCallbacks::class,
            TrustHosts::class,
            TrustProxies::class,
            HandleCors::class,
            PreventRequestsDuringMaintenance::class,
            ValidatePostSize::class,
            TrimStrings::class,
            ConvertEmptyStringsToNull::class,
//            CacheResponse::class,
//            ThrottleRequests::class,
            CaptureFbTracking::class,
            HandleInertiaRequests::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $exception, Request $request) {
            return response()->view('website.errors.404', [], status: 404);
        });
        $exceptions->render(function (NotFoundHttpException $exception, Request $request) {
            return response()->view('website.errors.500', [], 500);
        });
    })->create();

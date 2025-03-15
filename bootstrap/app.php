<?php

use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CaptureFbTracking;
use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Auth\AuthenticationException;
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
use Spatie\ResponseCache\Middlewares\CacheResponse;

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
        $middleware->alias([
            'auth' => Authenticate::class,
        ]);
        $middleware->use([
            InvokeDeferredCallbacks::class,
            TrustHosts::class,
            TrustProxies::class,
            HandleCors::class,
            PreventRequestsDuringMaintenance::class,
            ValidatePostSize::class,
            TrimStrings::class,
            ConvertEmptyStringsToNull::class,
//             CacheResponse::class,
            // ThrottleRequests::class,
            CaptureFbTracking::class,
            HandleInertiaRequests::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {


        $exceptions->renderable(function (AuthenticationException $exception, Request $request) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Unauthenticated.'], 401);
            }
            return redirect()->route('website.login');
        });


//        if (app()->environment('local')) {
        $exceptions->renderable(function (Throwable $exception, Request $request) {
            dd($exception);
        });
//        }
//        $exceptions->renderable(function (NotFoundHttpException $exception, Request $request) {
//            return response()->view('website.errors.404', [], 404);
//        });
//        $exceptions->renderable(function (ValidationException $exception, Request $request) {
//            if ($request->expectsJson()) {
//                return response()->json(['errors' => $exception->errors()], 422);
//            }
//            return redirect()->back()->withErrors($exception->errors())->withInput();
//        });
//        $exceptions->renderable(function (AuthenticationException $exception, Request $request) {
//            if ($request->expectsJson()) {
//                return response()->json(['errors' => []], 422);
//            }
//            return redirect()->route('website.login');
//        });
//        $exceptions->renderable(function (Throwable $exception, Request $request) {
//            $status = ($exception instanceof HttpExceptionInterface)
//                ? $exception->getStatusCode()
//                : 500;
//            Log::critical($exception);
//            if (view()->exists("website.errors.{$status}")) {
//                return response()->view("website.errors.{$status}", [], $status);
//            }
//            return response()->view('website.errors.500', [], 500);
//        });
    })
    ->create();

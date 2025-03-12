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
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
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
            // CacheResponse::class,
            // ThrottleRequests::class,
            CaptureFbTracking::class,
            HandleInertiaRequests::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        if (app()->environment('local')) {
            $exceptions->renderable(function (Throwable $exception, Request $request) {
                dd($exception);
            });
        }

        // Handle 404 errors
        $exceptions->renderable(function (NotFoundHttpException $exception, Request $request) {
            return response()->view('website.errors.404', [], 404);
        });

        // Handle validation errors
        $exceptions->renderable(function (ValidationException $exception, Request $request) {
            if ($request->expectsJson()) {
                return response()->json(['errors' => $exception->errors()], 422);
            }
            return redirect()->back()->withErrors($exception->errors())->withInput();
        });

        // Handle all other exceptions
        $exceptions->renderable(function (Throwable $exception, Request $request) {
            // Use exception status if available; otherwise default to 500
            $status = ($exception instanceof HttpExceptionInterface)
                ? $exception->getStatusCode()
                : 500;

            // Check if a custom view exists for the status code
            if (view()->exists("website.errors.{$status}")) {
                return response()->view("website.errors.{$status}", [], $status);
            }
            return response()->view('website.errors.500', [], 500);
        });
    })
    ->create();

<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\ErrorHelperController;
use Illuminate\Auth\AuthenticationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //$middleware->append(AuthAPI::class);
        //$middleware->use([\App\Http\Middleware\AuthAPI::class]);
        $middleware->priority([
            \App\Http\Middleware\ForceJson::class,
            \Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests::class,
            \Illuminate\Cookie\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
            \Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests::class,
            \Illuminate\Routing\Middleware\ThrottleRequests::class,
            \Illuminate\Routing\Middleware\ThrottleRequestsWithRedis::class,
            \Illuminate\Session\Middleware\AuthenticateSession::class,
            \App\Http\Middleware\SetDefaultLocaleForUrls::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \Illuminate\Auth\Middleware\Authorize::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $currRoute = url()->current();
        if (str_contains($currRoute, '/api/')) {
            $errorHelper = new ErrorHelperController();
            $exceptions->render(function (
                NotFoundHttpException $e,
                Request $request,
            ) use ($errorHelper) {
                return $errorHelper->generateApiError('PAGE_NOT_FOUND');
            });

            $exceptions->render(function (
                MethodNotAllowedHttpException $e,
                Request $request,
            ) use ($errorHelper) {
                return $errorHelper->generateApiError('PAGE_NOT_FOUND');
            });

            // $exceptions->render(function (
            //     AuthenticationException $e,
            //     Request $request,
            // ) use ($errorHelper) {
            //     return $errorHelper->generateApiError('UNAUTHORIZED');
            // });
        }
    })
    ->create();

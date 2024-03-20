<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\ErrorHelperController;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
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
        }
    })
    ->create();

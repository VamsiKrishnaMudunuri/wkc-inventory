<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Traits\CustomException;
use App\Traits\MiddlewareData;
use Illuminate\Http\Request;

class AuthAPI
{
    use CustomException;
    use MiddlewareData;

    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (!$request->middleware) {
            $request->middleware = $this->createMiddlewareData();
        }

        $token = $request->bearerToken();
        if (!$token) {
            return $this->generateApiError('UNAUTHENTICATED');
        }
        $sanctum = Auth::guard('sanctum');
        $check = $sanctum->check();
        if (!$check) {
            // Revoke all tokens...
            //$user->tokens()->delete();
            // Revoke the token that was used to authenticate the current request...
            //$request->user()->currentAccessToken()->delete();
            return $this->generateApiError('UNAUTHENTICATED');
        }

        $request->middleware->userId = $sanctum->id();

        return $next($request);
    }
}

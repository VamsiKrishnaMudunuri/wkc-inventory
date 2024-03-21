<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Traits\CustomException;
use Illuminate\Http\Request;

class CheckAbilities
{
    use CustomException;

    public function handle(Request $request, Closure $next, ...$abilities)
    {
        if (!$request->middleware) {
            $request->middleware = $this->createMiddlewareData();
        }
        if (!$request->middleware->user) {
            $request->middleware->user = auth('sanctum')->user();
        }

        $user = $request->middleware->user;
        if (!$user) {
            return $this->generateApiError('UNAUTHENTICATED');
        }

        $isPass = true;

        foreach ($abilities as $ability) {
            if (!$user->tokenCan($ability)) {
                $isPass = false;
                break;
            }
        }

        if (!$isPass) {
            return $this->generateApiError('UNAUTHORIZED');
        }

        return $next($request);
    }
}

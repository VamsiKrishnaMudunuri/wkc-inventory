<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Traits\CustomException;
use Illuminate\Http\Request;

class AuthAPI
{
    use CustomException;

    public function handle(Request $request, Closure $next, $guard = null)
    {
        $token = $request->bearerToken();
        if (!$token) {
            return $this->generateApiError('UNAUTHENTICATED');
        }
        $check = Auth::guard('sanctum')->check();
        if (!$check) {
            // Revoke all tokens...
            //$user->tokens()->delete();
            // Revoke the token that was used to authenticate the current request...
            //$request->user()->currentAccessToken()->delete();
            return $this->generateApiError('UNAUTHENTICATED');
        }
        return $next($request);
    }
}

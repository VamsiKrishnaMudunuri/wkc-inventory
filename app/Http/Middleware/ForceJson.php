<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use App\Traits\CustomException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class ForceJson
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Str::contains($request->header('accept'), ['/json', '+json'])) {
            $request->headers->set(
                'Accept',
                'application/json,' . $request->header('accept'),
            );
        }

        return $next($request);
    }
}

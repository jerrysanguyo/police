<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role === "user") {
            return $next($request);
        }

        return redirect()->route('unauthorized');
    }
}

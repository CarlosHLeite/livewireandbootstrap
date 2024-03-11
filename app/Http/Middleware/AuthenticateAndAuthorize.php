<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateAndAuthorize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Perform your logic here to check if the user is authenticated or has the necessary permissions

        if (auth()->check()) {
        // User is authenticated, allow the request to proceed
            return $next($request);
        }

        // User is not authenticated, redirect or return an error response
        return redirect()->route('login');
    }
}

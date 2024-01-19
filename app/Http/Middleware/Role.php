<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->role !== $role) {
            // Redirect if the user does not have the required role
            return Redirect::route('dashboard'); // Change 'dashboard' to the desired redirect route
        }

        // If the user has the required role, proceed with the request
        return $next($request);
    }
}

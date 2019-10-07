<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roleName)
    {
        $user = Auth::user();

        if ($user) {
            if ($user->hasRole($roleName)) {
                return $next($request);
            }
        }

        abort(404);
    }
}

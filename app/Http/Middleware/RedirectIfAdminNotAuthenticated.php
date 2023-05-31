<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdminNotAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admins')->check()) {
            return $next($request);
        }

        return redirect('/login');
    }
}

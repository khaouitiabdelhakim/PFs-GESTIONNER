<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfGroupNotAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('groups')->check()) {
            return $next($request);
        }

        return redirect('/group/login');
    }
}

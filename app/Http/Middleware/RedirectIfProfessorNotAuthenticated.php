<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfProfessorNotAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('professors')->check()) {
            return $next($request);
        }

        return redirect('/login');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfStudentNotAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('students')->check()) {
            return $next($request);
        }

        return redirect('/login');
    }
}

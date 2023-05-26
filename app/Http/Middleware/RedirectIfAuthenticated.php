<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = ["students","admins","professors"];

        if (Auth::guard($guards[0])->check()) {
            return redirect("student-dashbord");
        }

        if (Auth::guard($guards[1])->check()) {
            return redirect("student-dashbord");
        }

        if (Auth::guard($guards[2])->check()) {
            return redirect("student-dashbord");
        }

        return $next($request);
    }
}

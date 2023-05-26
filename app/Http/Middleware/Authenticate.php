<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if ($request->is('students/*')) {
                // Redirect non-authenticated students to the student login route
                return redirect()-back();
            } elseif ($request->is('admin/*')) {
                // Redirect non-authenticated admins to the admin login route
                return redirect()-back();
            } else {
                // Redirect non-authenticated users to the default login route
                return route('/');
            }
        }
    }
}

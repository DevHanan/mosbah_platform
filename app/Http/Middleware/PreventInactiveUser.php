<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class PreventInactiveUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->active == '0') {
            Auth::logout();
            return redirect('/')->with('error', 'Your account is currently inactive. Please contact the administrator for further assistance.');
        }
        if (Auth::guard('web')->check() &&!Auth::guard('web')->user()->active == '1') {
            Auth::guard('web')->logout();
            return redirect('/')->with('error', 'Your account is currently inactive. Please contact the administrator for further assistance.');
        }

        if (Auth::guard('students-login')->check() &&!Auth::guard('students-login')->user()->active == '1') {
            Auth::guard('students-login')->logout();
            return redirect('/')->with('error', 'Your account is currently inactive. Please contact the administrator for further assistance.');
        }

        if (Auth::guard('instructorss-login')->check() &&!Auth::guard('instructors-login')->user()->active == '1') {
            Auth::guard('instructors-login')->logout();
            return redirect('/')->with('error', 'Your account is currently inactive. Please contact the administrator for further assistance.');
        }

        return $next($request);

    }
}

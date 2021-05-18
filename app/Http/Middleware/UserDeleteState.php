<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserDeleteState
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->deleted_flag == 1) {

            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            Session::flash('error', 'Your account was deleted. Kindly re-signup to continue');

            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}

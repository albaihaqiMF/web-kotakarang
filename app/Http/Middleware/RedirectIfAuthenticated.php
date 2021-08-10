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
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user_role = Auth::user()->role;
                switch ($user_role) {
                    case '1':
                        return redirect(RouteServiceProvider::USER);
                        break;
                    case '2':
                        return redirect(RouteServiceProvider::HOME);
                        break;
                    default:
                        return redirect('/');
                }
            }
        }

        return $next($request);
    }
}

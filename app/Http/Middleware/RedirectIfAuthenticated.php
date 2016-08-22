<?php

namespace MyTailor\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            $user = Auth::user();

            if($user->hasRole(['owner', 'administrator'])) {
                return redirect(route('admin.dashboard'));
            }else{
                return redirect('/shots');
            }

            //return redirect(route('member.login_form'));
            //If user is admin they need to go to admin.dashboard
            //if user is
            dd($user);

        }

        return $next($request);
    }
}

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

        if(Auth::guard('admin')->check()){
            return redirect()->route('admins.welcome');
        }

        if(Auth::guard('web')->check()){
            return redirect()->route('customers.welcome');
        }

        if(Auth::guard('company')->check()){
            return redirect()->route('companies.welcome');
        }

        return $next($request);
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class OrderConfirmationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return Auth::user()->orders && Auth::user()->orders->whereNull('status')->first() ? $next($request) : redirect(route('checkout'));
    }
}

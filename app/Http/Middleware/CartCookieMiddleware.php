<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use App\Services\DatabaseCartService;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CartCookieMiddleware
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

        if(Auth::check() && Cookie::get('products')){

            collect(unserialize(Cookie::get('products')))->each(fn($product) => (new DatabaseCartService())->store((object)$product));
            $cookies = Cookie::forget('products');
            return redirect(RouteServiceProvider::HOME)->withCookie($cookies);

        }

        return $next($request);
    }
}

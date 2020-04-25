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

            $cart = Auth::user()->cart ?? Auth::user()->cart()->create();

            collect(unserialize(Cookie::get('products')))->each(function($product) use ($cart){
                $cart->products->contains('product_id', $product['product_id'])
                    ? $cart->products->where('product_id', $product['product_id'])->first()->update(['quantity' => $product['quantity']])
                    : $cart->products()->create(collect($product)->all());
                });

                $cookies = Cookie::forget('products');
                return redirect(RouteServiceProvider::HOME)->withCookie($cookies);

        }

        return $next($request);
    }
}

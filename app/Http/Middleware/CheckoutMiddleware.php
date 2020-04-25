<?php

namespace App\Http\Middleware;

use App\Services\Contracts\CartServiceContract;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckoutMiddleware
{
    protected object $cart;

    public function __construct(CartServiceContract $cart){
        $this->cart = $cart;
    }

    public function handle($request, Closure $next){

        return (Auth::check() && Auth::user()->orders()->whereNull('status')->first()) ?
             redirect(route('confirmation'))->with('message', __('You have unconfirmed order. Please, confirm this order first!'))
                : ($this->cart->isEmpty() ? redirect(route('cart')) : $next($request));

    }
}

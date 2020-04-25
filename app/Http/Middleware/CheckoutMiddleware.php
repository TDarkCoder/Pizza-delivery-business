<?php

namespace App\Http\Middleware;

use App\Services\Contracts\CartServiceContract;
use Closure;

class CheckoutMiddleware
{
    protected object $cart;

    public function __construct(CartServiceContract $cart){
        $this->cart = $cart;
    }

    public function handle($request, Closure $next){
        return $this->cart->isEmpty() ? redirect(route('cart')) : $next($request);
    }
}

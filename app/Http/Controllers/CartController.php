<?php

namespace App\Http\Controllers;

use App\CartProduct;
use App\Http\Requests\CartStoreRequest;
use App\Services\Contracts\CartServiceContract;
use App\Services\CookieCartService;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        return view('cart.index');
    }

    public function checkout(){
        return view('cart.checkout');
    }

    public function confirmation(){
        return view('cart.confirmation');
    }

    public function history(){
        return view('cart.history');
    }

    public function store(CartServiceContract $cart, CartStoreRequest $request){
        return $cart->store($request);
    }

    public function show(CartServiceContract $cart){
        return $cart->open();
    }

    public function destroy(CartServiceContract $cart, $product_id){
        return $cart->delete($product_id);
    }

}

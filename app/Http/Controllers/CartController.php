<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartStoreRequest;
use App\Services\Contracts\CartServiceContract;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        return view('cart.index');
    }

    public function checkout(CartServiceContract $cart){
        return view('cart.checkout', ['products' => $products = $cart->open()]);
    }

    public function confirmation(){
        $order = Auth::user()->orders->whereNull('status')->first()->load('products.product');
        return view('cart.confirmation', compact('order'));
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

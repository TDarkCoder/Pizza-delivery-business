<?php

namespace App\Services;

use App\Services\Contracts\CartServiceContract;
use Illuminate\Support\Facades\Auth;

class DatabaseCartService implements CartServiceContract
{

    public function store($request){

        $cart = Auth::user()->cart ?? Auth::user()->cart()->create();
        return ($cart->products->contains('product_id', $request->product_id)) ? $cart->products->where('product_id', $request->product_id)->first()->update(['quantity' => $request->quantity]) : $cart->products()->create(collect($request)->all());

    }

    public function open(){
        return Auth::user()->cart->products->load('product');
    }

    public function delete($product_id){
        return Auth::user()->cart->products->where('product_id', $product_id)->first()->delete();
    }

}

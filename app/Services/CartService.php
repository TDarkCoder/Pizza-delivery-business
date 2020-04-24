<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class CartService
{

    public static function storeInDB($request){

        $cart = Auth::user()->cart ?? Auth::user()->cart()->create();
        return $cart->products()->updateOrCreate($request->all());

    }

    public static function storeInCookies($request){

        $products = request()->cookie('products') ? collect(unserialize(request()->cookie('products'))) : collect();

        if($products->contains('product_id', $request->product_id)){
            $index = $products->contains('product_id', $request->product_id)->first();
            $products[$index]->quantity = $request->quantity;
        }else{
            $products->push($request->only('product_id', 'quantity'));
        }

        return response()->json(['message' => 'Cookies updated'])->withCookie(cookie()->forever('products', serialize($products)));

    }
}

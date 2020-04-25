<?php

namespace App\Services;

use App\Product;
use App\Services\Contracts\CartServiceContract;
use Illuminate\Support\Facades\DB;

class CookieCartService implements CartServiceContract
{

    public function store($request){

        $products = $this->fetchCookies();

        if($products->contains('product_id', $request->product_id)){
            $product = $products->where('product_id', $request->product_id)->first();
            $products[$products->search($product)] = $request->only('quantity', 'product_id');
        }else{
            $products->push($request->only('product_id', 'quantity'));
        }
        return $this->cookieSaved($products);

    }

    public function open(){

        $cart = $this->fetchCookies();
        $products = Product::whereIn('id', $cart->pluck('product_id'))
            ->orderByRaw(DB::raw("FIELD(id, ".implode(',', $cart->pluck('product_id')->toArray()).")"))
            ->get();

        return  $cart->map(fn($product) => collect($product)->merge(['product' => $products->where('id', $product['product_id'])->first()]));

    }

    public function delete($product_id){

        $products = ($this->fetchCookies()->reject(fn($product) => $product['product_id'] === intval($product_id)))->values();
        return $this->cookieSaved($products);

    }

    protected function fetchCookies(){
        return request()->cookie('products') ? collect(unserialize(request()->cookie('products'))) : collect();
    }

    protected function cookieSaved($products){
        return response()->json(['message' => 'Cookies update', 'status' => 200])->withCookie(cookie()->forever('products', serialize($products)));
    }

}

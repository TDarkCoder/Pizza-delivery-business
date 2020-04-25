<?php

namespace App\Services;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OrderController;
use App\Product;
use App\Services\Contracts\CartServiceContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class CookieCartService implements CartServiceContract
{

    public function store($request){

        $products = $this->getCookies();

        if($products->contains('product_id', $request->product_id)){
            $product = $products->where('product_id', $request->product_id)->first();
            $products[$products->search($product)] = $request->only('quantity', 'product_id');
        }else{
            $products->push($request->only('product_id', 'quantity'));
        }
        return $this->cookieSaved($products);

    }

    public function open(){

        $cart = $this->getCookies();
        $products = Product::whereIn('id', $cart->pluck('product_id'))
            ->orderByRaw(DB::raw("FIELD(id, ".implode(',', $cart->pluck('product_id')->toArray()).")"))
            ->get();

        return  $cart->map(fn($product) => collect($product)->merge(['product' => $products->where('id', $product['product_id'])->first()]));

    }

    public function isEmpty(){
        return $this->getCookies()->count() < 1;
    }

    public function delete($product_id){

        $products = ($this->getCookies()->reject(fn($product) => $product['product_id'] === intval($product_id)))->values();
        return $this->cookieSaved($products);

    }

    public function purchase($request){

        if((new RegisterController())->register($request)){

            if(Auth::attempt($request->only('email', 'password'))){

                $order = Auth::user()->orders()->create($request->only('address', 'price', 'message', 'delivery'));
                $order->products()->createMany($this->getCookies()->toArray());

            }

        }

        $cookie = Cookie::forget('products');
        return redirect(route('confirmation'))->withCookie($cookie);

    }

    protected function getCookies(){
        return request()->cookie('products') ? collect(unserialize(request()->cookie('products'))) : collect();
    }

    protected function cookieSaved($products){
        return response()->json(['message' => 'Cookies update', 'status' => 200])->withCookie(cookie()->forever('products', serialize($products)));
    }

}

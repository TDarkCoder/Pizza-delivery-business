<?php

namespace App\Services;

use App\Services\Contracts\CartServiceContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DatabaseCartService implements CartServiceContract
{

    public function store($request){

        $cart = Auth::user()->cart ?? Auth::user()->cart()->create();
        return ($cart->products->contains('product_id', $request->product_id)) ? $cart->products->where('product_id', $request->product_id)->first()->update($request->only('quantity')) : $cart->products()->create($request->all());

    }

    public function open(){
        return $this->getCart()->load('product');
    }

    public function isEmpty(){
        return $this->getCart()->count() < 1;
    }

    public function delete($product_id){
        return $this->getCart()->where('product_id', $product_id)->first()->delete();
    }

    public function purchase($request){

        $order = Auth::user()->orders()->create($request->only('address', 'price', 'message', 'delivery'));
        $products = $this->getCart()->map(fn($item) => $item->only(['product_id', 'quantity']));
        $order->products()->createMany($products->toArray());

        Auth::user()->cart->products()->delete();
        return redirect(route('confirmation'));

    }

    protected function getCart(){
        return Auth::user()->cart ? Auth::user()->cart->products : collect();
    }

}

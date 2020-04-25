<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Order;
use App\Services\Contracts\CartServiceContract;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(CartServiceContract $cart, OrderStoreRequest $request){
        return $cart->purchase($request);
    }

    public function update(Order $order, Request $request){
        $order->update($request->validate(['status' => 'required|integer']));
        return redirect(route('history'));
    }
}

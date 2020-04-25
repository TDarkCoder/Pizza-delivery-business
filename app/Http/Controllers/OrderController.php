<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Order;
use App\Services\Contracts\CartServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $orders = Auth::user()->orders()->whereNotNull('status')->with('products.product')->paginate(10);
        return view('order.history', compact('orders'));
    }

    public function store(CartServiceContract $cart, OrderStoreRequest $request){
        return $cart->purchase($request);
    }

    public function update(Order $order, Request $request){
        $order->update($request->validate(['status' => 'required|integer']));
        return redirect(route('history'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartStoreRequest;
use App\Services\CartService;
use Illuminate\Http\Request;
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

    public function store(CartStoreRequest $request){
        return Auth::check() ? CartService::storeInDB($request) : CartService::storeInCookies($request);
    }

}

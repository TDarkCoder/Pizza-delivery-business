<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request){
        return Product::offset($request->offset)->take(12)->get()->map(fn($product) => Auth::check() ? $product->format() : $product->formatFromCookies());
    }

    public function all(){
        return Product::count();
    }
}

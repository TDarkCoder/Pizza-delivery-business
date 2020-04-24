<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        return Product::offset($request->offset)->take(12)->get();
    }

    public function all(){
        return Product::count();
    }
}

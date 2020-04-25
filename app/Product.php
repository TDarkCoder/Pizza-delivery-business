<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    protected $guarded = [];

    public function format(){
        return collect($this)->put('saved', Auth::user()->cart ? $this->carts->contains('cart_id', Auth::user()->cart->id) : false);
    }

    public function formatFromCookies(){
        return collect($this)->put('saved', collect(unserialize(request()->cookie('products')))->contains('product_id', $this->id));
    }

    public function carts(){
        return $this->hasMany(CartProduct::class);
    }
}

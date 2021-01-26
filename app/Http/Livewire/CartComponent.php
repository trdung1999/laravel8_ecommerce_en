<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;
class CartComponent extends Component
{
    public function increaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }

    public function render()
    {
        $products = Product::inRandomOrder()->limit(8)->get();
        return view('livewire.cart-component',['products'=>$products])->layout('layouts.base');
    }
}

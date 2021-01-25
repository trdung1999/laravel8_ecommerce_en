<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CartComponent extends Component
{
    public function render()
    {
        $products = Product::inRandomOrder()->limit(8)->get();
        return view('livewire.cart-component',['products'=>$products])->layout('layouts.base');
    }
}

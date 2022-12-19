<?php

namespace App\Http\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\Cart_detail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public function render()
    {

       $cart= ModelsCart::where('user_id',Auth::user()->id)->first();
        return view('livewire.cart', [
            'cart_details' => Cart_detail::where('cart_id',$cart->id),
            'cart' => $cart,

        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\Cart_Detail;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public function decrementQuantity($cartId)
{
    $cartData = Cart_Detail::where('id',$cartId)->first();
    if($cartData)
    {
        if($cartData->total_items > 1){

            $cartData->decrement('total_items');
            $harga= $cartData->product->product_price;
            $cartData->decrementdetail($harga);
            $this->dispatchBrowserEvent('message', [
                'text' => 'Quantity Updated',
                'type' => 'success',
                'status' => 200
            ]);
        }else{
            $this->dispatchBrowserEvent('message', [
                'text' => 'Quantity cannot be less than 1',
                'type' => 'success',
                'status' => 200
            ]);
        }
    }else{

        $this->dispatchBrowserEvent('message', [
            'text' => 'Something Went Wrong!',
            'type' => 'error',
            'status' => 404
        ]);
    }
}

public function incrementQuantity($cartId)
{
    $cartData = Cart_Detail::where('id',$cartId)->first();
    if($cartData)
    {
        if($cartData->total_items < $cartData->product->product_stock){
            $cartData->increment('total_items');
            $harga= $cartData->product->product_price;
            $cartData->incrementdetail($harga);
            $this->dispatchBrowserEvent('message', [
                'text' => 'Quantity Updated',
                'type' => 'success',
                'status' => 200
            ]);
        }else{
            $this->dispatchBrowserEvent('message', [
                'text' => 'Quantity cannot be less than 1',
                'type' => 'success',
                'status' => 200
            ]);
        }
    }else{

        $this->dispatchBrowserEvent('message', [
            'text' => 'Something Went Wrong!',
            'type' => 'error',
            'status' => 404
        ]);
    }
}

public function deletecartitem($cartId)
{
   $cartdetail= Cart_Detail::find($cartId);
//    $cart= ModelsCart::where('user_id',Auth::user()->id)::mintotal($cartdetail->total_price);
   $cartdetail->cart->mintotal($cartdetail->total_price);
   $cartdetail->delete();
     
        
}
 
   
    public function render()
    {

        $products= Product::all();
       $cart= ModelsCart::where('user_id',Auth::user()->id)->first();
       $cartdetail = Cart_Detail::where('cart_id',$cart->id)->get();
        return view('livewire.cart', [
            'cart_details' => $cartdetail,
            'cart' => $cart,
            'products' => $products

        ]);
    }
}

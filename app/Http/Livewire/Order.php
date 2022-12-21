<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        return view('livewire.order', [
             'orders' => Transaction::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->get()
            
 
         ]);
    }
}

<?php

namespace App\Models;

use App\Models\Cart_detail as ModelsCart_detail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Cart_detail extends Model
{
    use HasFactory;

    protected $fillable = [
    
    "cart_id",
    "price",
    "total_items",
    "total_price",
    "product_size_id"
    ];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function productsize(): BelongsTo
    {
        return 
        $this->belongsTo(Product_Size::class);
    }

    // public function updatedetail($itemdetail, $qty, $price) {
    //     $this->attributes['total_items'] = $itemdetail->qty + $qty;
    //     $this->attributes['total_price'] = $itemdetail->subtotal + ($qty * ($price));
    //     self::save();
    // }
}


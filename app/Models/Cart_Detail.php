<?php

namespace App\Models;

use App\Models\Cart_detail as ModelsCart_detail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Cart_Detail extends Model
{
    use HasFactory;

    protected $fillable = [

    "cart_id",
    "price",
    "total_items",
    "total_price",
    "product_id"
    ];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function product(): BelongsTo
    {
        return
        $this->belongsTo(Product::class);
    }

    public function updatedetail($itemdetail, $qty, $price) {
        $this->attributes['total_items'] = $this->attributes['total_items'] + $qty;
        $this->attributes['total_price'] = $this->attributes['total_price'] + ($qty * ($price));
        self::save();
    }

    public function decrementdetail($price) {
        $this->attributes['total_price'] = $this->attributes['total_price'] - ($price);
        self::save();
        $this->cart->mintotal($price);
    }

    public function incrementdetail($price) {
        $this->attributes['total_price'] = $this->attributes['total_price'] + ($price);
        self::save();
        $this->cart->updatetotal($price);
    }
}


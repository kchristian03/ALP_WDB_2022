<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
      
        "user_id",
        "total_price"
    ];

    public function cart():BelongsTo
    {
        return $this->belongsTo(User::class);
                 

    }

    public function cartdetails(): HasMany
    {
        return $this->hasMany(Cart_detail::class);

    }

    public function updatetotal($subtotal) {
        $this->attributes['total_price'] += $subtotal;
        // $this->attributes['total_items'] = $itemcart->total_items + $qty;
        self::save();
    }

    public function mintotal($subtotal) {
        $this->attributes['total_price'] -= $subtotal;
        // $this->attributes['total_items'] = $itemcart->total_items + $qty;
        self::save();
    }
}

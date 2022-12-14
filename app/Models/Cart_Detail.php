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
        "cart_detail_id",
    "cart_id",
    "price",
    "total_items",
    "total_price",
    "product_size_id"
    ];

    public function cartdetail(): BelongsTo
    {
        return $this->belongsTo(ModelsCart_detail::class);
    }
   
}

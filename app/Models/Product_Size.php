<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Product_Size extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_id",
        "size_id",
        "product_size_description",
        "product_size_price",
        "product_size_stock"
    ];

    public function productsize(): BelongsTo
    {
        return $this->belongsTo(Product_Size::class);
    }
   
}

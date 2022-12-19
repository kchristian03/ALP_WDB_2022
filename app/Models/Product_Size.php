<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    // public function product(): BelongsTo
    // {
    //     return $this->belongsTo(Product::class);
    // }

    // public function size(): BelongsTo
    // {
    //     return 
    //             $this->belongsTo(Size::class);
    // }

    // public function sizes(): HasMany
    // {
    //     return 
    //             $this->hasMany(Cart_detail::class);
               
    // }

 
   
}

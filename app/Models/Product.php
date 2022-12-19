<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        
        "product_name",
        "product_image",
        "product_description",
        "product_price",
        "product_stock"
    ];

    public function categoryproduct(): HasMany
    {
        return $this->hasMany(Category_Product::class);
    }

    public function cartdetail(): HasMany
    {
        return 
                $this->hasMany(Cart_detail::class);
               
    }

    public function transactiondetail(): HasMany
    {
        return 
                $this->hasMany(Transaction_detail::class);
               
    }
}

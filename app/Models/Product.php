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
        "product_price"
    ];

    public function categoryproduct(): HasMany
    {
        return $this->hasMany(Category_Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
        "product_stock",
        "category_id"

    ];

    public function category(): HasMany
    {
        return $this->hasMany(Category::class);
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


    public function  minstock($number)
    {
        $this->attributes['product_stock'] = $this->attributes['product_stock']-  $number;
        self::save();
               
    }
  
}

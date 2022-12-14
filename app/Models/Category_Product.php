<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Category_Product extends Model
{
    use HasFactory;

    protected $fillable = [
       "category_product_id",
       "category_id",
       "product_id"
    ];

    public function categoryproduct(): BelongsTo
    {
        return $this->belongsTo(Category_Product::class);
    }
}

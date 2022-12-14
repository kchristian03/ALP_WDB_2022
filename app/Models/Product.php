<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_id",
        "product_name",
        "product_image",
        "product_description"
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

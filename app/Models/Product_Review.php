<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
   use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Product_Review extends Model
{
    use HasFactory;
    protected $fillable = [
        "productreview_id",
        "user_id",
        "product_id",
        "rating",
        "review",
        "review_status"
    ];

    public function productreview(): BelongsTo
    {
        return $this->belongsTo(Product_Review::class);
    }
 
}

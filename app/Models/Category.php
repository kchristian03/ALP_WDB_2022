<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Category extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        "category_id",
        "category_name",
        "category_description",
        "category_image"
        
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}

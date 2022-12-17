<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
    
        "category_name",
        "category_description",
        "category_image"
        
    ];

    public function categoryproducts(): HasMany
    {
        return $this->hasMany(Category_Product::class);
    }

}

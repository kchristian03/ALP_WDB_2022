<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
   use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Size extends Model
{
    use HasFactory;
    protected $fillable = [
  
        "size"
    ];

    // public function productsize(): HasMany
    // {
    //     return $this->hasMany(Product_Size::class);
    // }
 
}

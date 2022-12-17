<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
      
        "user,id",
        "total_price"
    ];

    public function cart():BelongsTo
    {
        return $this->belongsTo(User::class);
                 

    }

    public function cartdetails(): HasMany
    {
        return $this->hasMany(Cart_detail::class);

    }
}

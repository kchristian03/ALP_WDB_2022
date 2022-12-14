<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
   use Illuminate\Database\Eloquent\Relations\BelongsTo;
   
class Size extends Model
{
    use HasFactory;
    protected $fillable = [
        "size_id",
        "size"
    ];

    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }
 
}

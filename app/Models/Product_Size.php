<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Product_Size extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "synopsis",
        "coverphoto",
        "writer_id"
    ];

    public function productsize(): BelongsTo
    {
        return $this->belongsTo(Product_Size::class);
    }
   
}

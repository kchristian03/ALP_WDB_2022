<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Store_Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "synopsis",
        "coverphoto",
        "writer_id"
    ];

    public function storefeedback(): BelongsTo
    {
        return $this->belongsTo(Store_Feedback::class);
    }

}

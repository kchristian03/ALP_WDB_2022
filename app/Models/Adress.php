<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adress extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "postal_code",
        "city",
        "state",
        "description",
        "full_street_adress"
    ];

    public function adress(): BelongsTo
    {
        return $this->belongsTo(Adress::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Store_Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
       
        "user_id",
        "subject",
        "feedback_status",
        "feedback"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}

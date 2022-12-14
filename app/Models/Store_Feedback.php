<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Store_Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        "feedback_id",
        "user_id",
        "feedback_date",
        "feedback_status",
        "feedback"
    ];

    public function storefeedback(): BelongsTo
    {
        return $this->belongsTo(Store_Feedback::class);
    }

}

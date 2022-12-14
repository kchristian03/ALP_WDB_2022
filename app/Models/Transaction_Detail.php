<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction_Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        "transaction_id",
        "price",
        "total_items",
        "total_harga"
    ];

    public function transactiondetail(): BelongsTo
    {
        return $this->belongsTo(Transaction_Detail::class);
    }

}

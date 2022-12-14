<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        "transaction_id",
        "user_id",
        "transaction_date",
        "transaction_status",
        "alamat_id",
        "no_resi",
        "bukti_pembayaran",
        "pembayaran_id"
    ];

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
    
}

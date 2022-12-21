<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
       
        "user_id",
        "transaction_status",
        "adress_id",
        "no_resi",
        "bukti_pembayaran",
        "payment_id",
        "total_price",
        "adress_name",
        "postal_code",
        "city",
        "state",
        "description",
        "full_street_adress"
    ];

    public function transactiondetails(): HasMany
    {
        return $this->hasMany(Transaction_Detail::class);
    }
    
}

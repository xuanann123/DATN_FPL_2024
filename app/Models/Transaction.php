<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    const  PENDING = "Pending";
    const  PROCESSING = "Processing";
    const  COMPLETED = "Completed";
    const  FAILED = "Failed";
    const  CANCELLED = "Cancelled";

    protected $fillable = [
        'wallet_id',
        'transactions_type',
        'amount',
        'coin_amount',
        'transactions_status'
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}

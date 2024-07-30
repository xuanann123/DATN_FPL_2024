<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'wallet_coin',
    ];
    public function user() {
        return $this->hasOne(User::class);
    }
}

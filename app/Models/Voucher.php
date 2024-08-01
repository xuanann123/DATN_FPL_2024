<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    const TYPE_PERCENT = 'percent';
    const TYPE_PERMANENT = 'permanent';

    protected $fillable = [
        'voucher_name',
        'voucher_discount',
        'start_date',
        'end_date',
        'quantity',
        'type',
        'is_active',
    ];

    public function percent()
    {
        return $this->type == self::TYPE_PERCENT;
    }

    public function permanent()
    {
        return $this->type == self::TYPE_PERMANENT;
    }
}

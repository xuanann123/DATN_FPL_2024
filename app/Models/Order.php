<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'course_id',
        'voucher_id',
        'price',
        'total_amount',
        'discount_amount',
        'final_amount',
        'note',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function voucher(){
        return $this->belongsTo(Voucher::class);
    }
}

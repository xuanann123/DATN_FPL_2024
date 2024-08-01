<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'rate',
        'ratingable_id',
        'ratingable_type',
    ];

    public function ratingable()
    {
        return $this->morphTo();
    }
}

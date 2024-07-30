<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'phone',
        'user_avatar',
        'following',
        'education',
        'experience',
        'bio',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}

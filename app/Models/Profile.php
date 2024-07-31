<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "image",
        "phone",
        "address",
        "follower",
        "education",
        "experience",
        "bio",
    ];
    //Một profile có thuộc về một user
    function user() {
        return $this->belongsTo(User::class);
    }
}

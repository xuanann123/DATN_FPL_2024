<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "slug",
        "description",
    ];
    //Một permission thì nằm trong nhiều vai trò
    function roles() {
        return $this->belongsToMany(Role::class, "role_permissions");
    }
    
}

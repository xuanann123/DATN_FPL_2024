<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
    ];
    //Một vai trò có nhiều users
    function users(){
        return $this->belongsToMany(User::class, "user_roles");
    }
    //Một vai trò phụ thuộc nhiều vào permissions
    function permisstion() {
        return $this->belongsToMany(Permission::class, "role_permissions");
    }
}

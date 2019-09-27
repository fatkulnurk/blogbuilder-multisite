<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as User;
use App\UserRole as UserRole;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'role_name',
        'description'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'user_roles', 'user_id', 'role_id');
    }


    public function getUserObject()
    {
        return $this->belongsToMany(User::class)
            ->using(UserRole::class);
    }
}

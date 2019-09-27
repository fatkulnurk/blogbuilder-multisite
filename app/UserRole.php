<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as User;
use App\Role as Role;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserRole extends Pivot
{
    protected $table = 'user_roles';

    public function getUserObject()
    {
        return $this->belongsToMany(User::class)
            ->using(UserRole::class);
    }
}

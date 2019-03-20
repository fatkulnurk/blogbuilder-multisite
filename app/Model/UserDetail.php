<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserDetail extends Authenticatable
{
    protected $table    = 'user_detail';
    protected $fillable = [
        'user_id',
        'profile',
        'first_name',
        'middle_name',
        'last_name',
        'bio',
        'birthday',
        'address',
        'phone_number',
        'security_question',
        'security_answer'
    ];

    protected $appends  = [
        'full_name'
    ];

    // accessor
    public function getFullNameAttribute(){
        return $this->attributes['first_name'].' '.$this->attributes['middle_name'].' '.$this->attributes['last_name'];
    }

    // relation
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

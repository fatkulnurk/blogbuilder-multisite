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
        'first_name',
        'middle_name',
        'last_name',
        'birthday',
        'address',
        'phone_number',
        'security_question',
        'security_answer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
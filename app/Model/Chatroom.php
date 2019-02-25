<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    protected $table        = 'chatroom';

    protected $fillable     = [
        'chat',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table        = 'message';
    protected $fillable     = [
        'chat',
        'from_user_id',
        'to_user_id'
    ];

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id', 'id');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id', 'id');
    }
}

<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $table        = 'post_comment';

    protected $fillable     = [
        'body',
        'post_id',
        'user_id'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
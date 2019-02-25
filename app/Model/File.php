<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table        = 'file';

    protected $fillable     = [
        'name',
        'hash',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

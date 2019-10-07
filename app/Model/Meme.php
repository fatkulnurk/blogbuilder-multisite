<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Meme extends Model
{
    protected $table = 'meme';

    protected $fillable = [
        'user_id', 'title', 'source'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function files()
    {
        return $this->hasMany(MemeFile::class, 'meme_id', 'id');
    }

    public function tags()
    {
        return $this->hasMany(MemeTag::class, 'meme_id', 'id');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MemeTags extends Model
{
    protected $table = 'meme_tags';

    protected $fillable = [
        'name', 'slug'
    ];

    public function tag()
    {
        return $this->hasMany(MemeTag::class, 'meme_tags_id', 'id');
    }
}

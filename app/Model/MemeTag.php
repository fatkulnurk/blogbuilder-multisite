<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MemeTag extends Model
{
    protected $table = 'meme_tag';
    protected $fillable = [
        'meme_id', 'meme_tags_id'
    ];

    public function meme()
    {
        return $this->belongsToMany(Meme::class, 'meme_id', 'id');
    }

    public function tag()
    {
        return $this->belongsTo(MemeTags::class, 'meme_tags_id', 'id');
    }
}

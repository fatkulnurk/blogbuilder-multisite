<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MemeFile extends Model
{
    protected $table = 'meme_files';

    protected $fillable = [
        'meme_id', 'location'
    ];

    public function meme()
    {
        return $this->belongsTo(Meme::class, 'meme_id', 'id');
    }
}

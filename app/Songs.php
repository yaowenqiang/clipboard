<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
   /**
    * Fillable fields for a song.
    */
    protected $fillable = [
        'title',
        'lyrics'
    ];
}


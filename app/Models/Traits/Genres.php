<?php

namespace App\Models\Traits;
use App\Models\Genre;

trait Genres
{
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}

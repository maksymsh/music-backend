<?php

namespace App\Models\Traits;

trait Tags
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

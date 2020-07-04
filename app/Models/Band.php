<?php

namespace App\Models;

use App\Models\Traits\Genres;
use App\Models\Traits\Tags;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use Tags, Genres;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'image',
        'founded_at',
    ];

    protected $dates = ['founded_at'];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}

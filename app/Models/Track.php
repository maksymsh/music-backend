<?php

namespace App\Models;

use App\Models\Traits\Genres;
use App\Models\Traits\Tags;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use Tags, Genres;

    public $timestamps = false;

    protected $fillable = [
        'band_id',
        'album_id',
        'name',
        'description',
        'image',
        'duration',
        'founded_at',
    ];

    protected $dates = ['founded_at'];

    public function band()
    {
        return $this->belongsTo(Band::class);
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function country()
    {
        return $this->hasOneThrough(Country::class, Band::class);
    }
}

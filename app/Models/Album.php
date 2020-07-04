<?php

namespace App\Models;

use App\Models\Traits\Genres;
use App\Models\Traits\Tags;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use Tags, Genres;

    public $timestamps = false;

    protected $fillable = [
        'band_id',
        'name',
        'description',
        'image',
        'founded_at',
    ];

    protected $dates = ['founded_at'];

    public function band()
    {
        return $this->belongsTo(Band::class);
    }

    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}

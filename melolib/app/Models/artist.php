<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    use HasFactory;
    public function songs()
    {
        return $this->belongsToMany(artist::class, 'song_artists');
    }
}

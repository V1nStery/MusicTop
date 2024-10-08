<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TrackController;

class Track extends Model
{
    use HasFactory;

    protected  $fillable = ['artist', 'name', 'genre',  'file_path','file_name'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getFullFilePathAttribute()
    {
        return public_path('storage/' . $this->path . '/' . $this->file_name);
    }
}


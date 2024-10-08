<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['track_id', 'body','username'];

    // Связь с моделью Track
    public function track()
    {
        return $this->belongsTo(Track::class);
    }
}

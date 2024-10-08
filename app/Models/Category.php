<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = false;
    use HasFactory;
    public function category()
{
    return $this->belongsTo(Category::class);
}

// Category.php
public function songs()
{
    return $this->hasMany(Song::class);
}
}

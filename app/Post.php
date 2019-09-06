<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'image',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

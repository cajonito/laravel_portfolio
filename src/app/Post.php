<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'image_url'];
    protected $table = 'posts';
    public static $rules = [
        'title' => 'required',
    ];
}

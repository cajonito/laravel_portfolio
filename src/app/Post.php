<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];
    protected $table = 'posts';
    public static $rules = [
        'title' => 'required',
    ];
}

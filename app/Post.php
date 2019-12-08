<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $filllable = [
        'tilte',
        'body',
    ];

    public function comments() {
        return $this->hasMany('App\Comment');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite_article extends Model
{
    protected $fillable = [
        'user_id','article_id'
    ];
}

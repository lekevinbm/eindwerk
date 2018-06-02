<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit_charge extends Model
{
    protected $fillable = [
        'amount','method','user_id'
    ];
}

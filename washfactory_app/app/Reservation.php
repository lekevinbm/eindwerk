<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'status','price','device_started_on','device_id','user_id','washing_program_id'
    ];
}
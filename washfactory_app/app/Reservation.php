<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'status','price','device_started_on','device_ended_on','device_id','reservation_before_dry_id','user_id','washing_program_id'
    ];

    public function device(){
        return $this->BelongsTo('App\Device','device_id');
    }

    public function reservation_before_dry(){
        return $this->BelongsTo('App\Reservation','reservation_before_dry_id');
    }

    public function user(){
        return $this->BelongsTo('App\User','user_id');
    }
}
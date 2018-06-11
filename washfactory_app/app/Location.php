<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name','street_name','street_number','postcode','city','description','location_code'
    ];

    public function devices(){
        return $this->hasMany('App\Device','location_id');
    }
    
    public function washing_machines(){
        return $this->hasMany('App\Device','location_id')->where('type','wash');
    }

    public function dryers(){
        return $this->hasMany('App\Device','location_id')->where('type','dry');
    }
}

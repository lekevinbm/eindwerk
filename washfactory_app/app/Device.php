<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'type','code_name','brand','manufacturer_code','description','activation_status','task_status','location_id','qr_code'
    ];

    public function location(){
        return $this->BelongsTo('App\Location','location_id');
    }
    
}

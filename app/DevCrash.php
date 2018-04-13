<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevCrash extends Model
{

    protected $table = 'devcrashes';
    
    protected $fillable = [

        'dev_id' ,'status' , 'progress' 
    
    ];

    public function developer()
    {
        return $this->hasMany('App\Developer','id','dev_id');
    }
}

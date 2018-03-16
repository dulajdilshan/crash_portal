<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crash extends Model
{
    protected $table = 'crashes';

    protected $fillable = [

        'crash_name' , 'description' , 'uploaded_by'
        
    ];

    public function developerInfo()
    {
        return $this->hasOne('App\DevCrash','id');
    }
}

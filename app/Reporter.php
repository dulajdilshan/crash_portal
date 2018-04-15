<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporter extends Model
{
    protected $table = 'reporters';


    public function crash_info()
    {
        return $this->hasMany('App\Crash_info');
    }
}

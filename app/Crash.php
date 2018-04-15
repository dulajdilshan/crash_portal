<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crash extends Model
{
    protected $table = 'crashes';

    protected $fillable = [

        'crash_name' , 'description' , 'uploaded_by'
        
    ];

    public function developer()
    {
        return $this->belongsTo('App\Developer');
    }

    public function crash_info()
    {
        return $this->hasOne('App\Crash_info');
    }

    public function solved_crash()
    {
        return $this->hasOne('App\Solved_crash');
    }

}

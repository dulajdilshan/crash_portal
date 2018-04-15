<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solved_crash extends Model
{
    protected $table = 'solved_crashes';

    public function crash()
    {
        return $this->belongsTo('App\Crash');
    }

    public function developer()
    {
        return $this->belongsTo('App\Developer');
    }
}

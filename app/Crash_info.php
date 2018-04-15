<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crash_info extends Model
{
    protected $table = 'crash_infos';

    public function crash()
    {
        return $this->belongsTo('App\Crash');
    }

    public function reporter()
    {
        return $this->belongsTo('App\Reporter');
    }
}

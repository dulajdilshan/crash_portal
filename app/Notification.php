<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';

    public function developer()
    {
        return $this->belongsTo('App\Developer');
    }
}

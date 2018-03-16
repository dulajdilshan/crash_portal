<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $table = 'developers';

    public function details()
    {
        return $this->hasOne('App\DevDetail','developer_id');
    }
}

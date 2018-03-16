<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Developer extends Model
{
    protected $table = 'developers';

    protected $fillable =[

        'name', 'email' , 'password'

    ];

    public function details()
    {
        return $this->hasOne('App\DevDetail','developer_id');
    }

    public function crashesInfo()
    {
        return $this->hasMany('App\DevCrash','dev_id');
    }
}

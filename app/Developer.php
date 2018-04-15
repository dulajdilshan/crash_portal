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

    public function crash()
    {
        return $this->hasMany('App\Crash');
    }

    public function solved_crash()
    {
        return $this->hasMany('App\Solved_crash');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function notification()
    {
        return $this->hasMany('App\Notification');
    }
}

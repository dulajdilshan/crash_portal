<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevDetail extends Model
{
    protected $table = 'devdetails';

    protected $fillable = [

        'developer_id'
    ];
}

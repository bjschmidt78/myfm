<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    //
    protected $fillable = [
    	'estimated_time',
    	'actual_time'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //
    protected $fillable = [
    	'workorders_id',
    	'users_id',
    	'description',
    	'est_time',
        'actual_time',
        'status'
    ];


    public function task(){
        return $this->belongsTo('App\Workorder');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}

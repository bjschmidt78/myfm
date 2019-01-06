<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
    //
    protected $fillable = [
        'title', 
        'description',
        'priority_id',
        'category_id',
        'status_id',
        'photo_id',
        'asset_id',
        'users_id',
        'due',
        'est_time',
        'act_time',
        'completed'

    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'due'
    ];

    public function category(){
        return $this->belongsTo('App\Categories');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function priority(){
        return $this->belongsTo('App\Priority');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
 

    public function task(){
        return $this->hasMany('App\Tasks');
    }
}

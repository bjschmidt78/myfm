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
        'photo_id',
        'asset_id',
        'user_id',
        'due',
        'est_time',
        'act_time'

    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'due'
    ];

    public function category(){
    	return $this->belongsTo('App\Categories');
    }

    public function priority(){
        return $this->belongsTo('App\Priority');
    }

        public function user(){
        return $this->hasOne('App\User');
    }

    public function task(){
        return $this->hasMany('App\Tasks');
    }
}

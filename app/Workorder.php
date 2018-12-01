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
        'due'

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
        return $this->belongsTo('App\User');
    }

    public function time(){
        return $this->belongsTo('App\Time');
    }

    public function est_time(){
        return $this->belongsTo('App\Est_time');
    }
}

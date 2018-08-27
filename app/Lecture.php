<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    //
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function topics()
    {
    	return $this->belongsToMany('App\Tissue');
    }
}

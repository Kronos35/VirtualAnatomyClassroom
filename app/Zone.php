<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    //
    public function tissues()
    {
    	$this->hasMany('App\Tissue');
    }
}

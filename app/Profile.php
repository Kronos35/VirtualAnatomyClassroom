<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	
    ];

    // Get owner of profile
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}

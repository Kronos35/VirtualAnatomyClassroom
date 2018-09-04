<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	'about_me','notes', 'user_id', 'location',
    ];

    // Get owner of profile
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}

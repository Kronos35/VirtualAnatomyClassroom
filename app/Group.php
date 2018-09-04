<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    // Fillable attributes
	protected $fillable = ['name', 'description', 'account_id'];

	// Get creator
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	// Get all users assigned to 
	public function students()
	{
		return $this->belongsToMany('App\User', 'user_group');
	}

	public function tests()
	{
		return $this->belongsToMany('App\Test');
	}
}

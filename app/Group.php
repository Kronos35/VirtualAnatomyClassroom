<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //Fillable attributes
	protected $fillable = ['name', 'description', 'account_id'];

	// Get all users assigned to 
	public function users()
	{
		return $this->hasMany('App\User');
	}

}

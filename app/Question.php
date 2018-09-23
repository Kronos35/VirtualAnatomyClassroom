<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	// Mass assignment protection
    protected $fillable = ['name', 'description', 'instructions', 'group_id', 'image'];
    
    //
    public function tests()
    {
    	return $this->belongsToMany('App\Test');
    }

 }

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	// Mass assignment protection
    protected $fillable = ['body', 'image', 'score'];

    const VALIDATION_RULES = [
    	'body'=>'required|max:500',
        'score'=>'max:10',
    ];
    
    //
    public function tests()
    {
    	return $this->belongsToMany('App\Test');
    }

    public function options()
    {
    	return $this->hasMany('App\Option');
    }

 }

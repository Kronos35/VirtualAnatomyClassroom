<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // Fillable attributes
	protected $fillable = ['body', 'test_id'];

    public function test()
    {
    	return $this->belongsTo('App\Test');
    }

    public function options()
    {
    	return $this->hasMany('App\Option');
    }
}

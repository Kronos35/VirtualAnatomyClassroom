<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
	// Mass assignment protection
	protected $fillable = ['body','is_answer', 'question_id'];

    // Obtain Question this option belongs to
    public function question()
    {
    	return $this->belongsTo('App\Question');
    }
}
